<?php

namespace app\home\controller;

//导入Controller

use app\home\validate\Trans;
use think\Db;
use think\Exception;
use think\Session;
use app\home\model\Transaction;
use app\home\model\Customer;
use app\home\model\Bank;

class Transactions extends Allow
{

    public function getIndex()
    {
        //加载模板
        $trans = new Transaction();
        $data = $trans->select();
        return $this->fetch("transactions/index", ['data' => $data]);
    }

    public function getNew()
    {
        //加载模板

        $idTypes = Db::table('id_types')->select();
        $pageAttr = [
            'idTypes' => $idTypes,
            'action' => '/transactions/insert',
            'pageMode' => 'new',
            'pageTitle' => 'Add transaction',
            'data' => new Transaction(),
        ];

        return $this->fetch("transactions/edit_trans", $pageAttr);
    }

    public function getView()
    {
        //加载模板
        $id = request()->param('id');

        $transaction = Transaction::where('trans_id','=',$id)->select()[0];

        $pageAttr = [
            'pageTitle' => 'View transaction',
            'data' => $transaction,
        ];

        return $this->fetch("transactions/view_trans", $pageAttr);
    }

    public function getSearchcustomer()
    {
        $key = request()->param('term');
        if ($key != null && $key !== "") {
            $condition['cust_no|first_name|last_name'] = array('like', "%$key%");
//            $condition['first_name'] = array('like',"%$key%");
//            $condition['last_name'] = array('like',"%$key%");
//            $condition['_logic'] = 'OR';
            $customers = Customer::where($condition)->select();
            foreach ($customers as $cust) {
                $result[] = array(
                    'label' => $cust['cust_no'] . " " . $cust['formatted_cust_name'],
                    'value' => $cust['cust_id'],
                    'desc' => $cust['formatted_cust_name'] . " live in " . $cust['city'] . "," . $cust['country'] . ". Phone: " . $cust['phone1']
                );
            }
            echo json_encode($result);
        }
    }

    public function postInsert()
    {
        $se = Session::get('islogin');
        $userName = $se['name'];

        Db::startTrans();

        try {
            //请求对象
            $request = request();
            if (empty($_POST['settlement_date']))
                unset($_POST['settlement_date']);
            $transaction = new Transaction($_POST);
            $transaction['created_by'] = $userName;

            // Save sender or beneficiary
            $custRole = $request->param("cust_role");
            $custId = $request->param('cust_id');

            if ($custRole === "B") {
                // If customer is beneficiary, need to save sender info and set customer id into ben_id
                $transaction['ben_id'] = $custId;
                $this->savePartyByOption($userName, $transaction, $request,"senderOptions","sen_","sender_id",$custId);
            } else {
                // Otherwise, customer is sender, need to save beneficiary info and set customer id into sender_id
                $transaction['sender_id'] = $custId;
                $this->savePartyByOption($userName, $transaction, $request,"benOptions","ben_","ben_id",$custId);
            }

            // Save sender third party
            $sender3rd = $request->param("senderThirdParty");
            if ($sender3rd === "Y") {
                $this->savePartyByOption($userName, $transaction, $request,"sender3rdOptions","sen_3rd_","sender_third_id",$custId);
            }else{
                unset($transaction['sender_third_id']);
            }

            // Save beneficiary third party
            $ben3rd = $request->param("benThirdParty");
            if ($ben3rd === "Y"){
                $this->savePartyByOption($userName,$transaction,$request,"ben3rdOptions","ben_3rd_","ben_third_id",$custId);
            }else{
                unset($transaction['ben_third_id']);
            }

            // Save financial institution
            $bankOption = $request->param("finOptions");
            if ($bankOption === "new"){
                $bankData = $this->getArrayByPre($request->param(), "bank_");
                $bank = new Bank();
                $bank->data($bankData);
                $result = $bank->allowField(true)->save();
                if ($result){
                    $transaction['insti_id'] = $bank['id'];
                }else{
                    throw new Exception("Save banking info failed");
                }
            }

            $result = $transaction->allowField(true)->save();
            if ($result){
                Db::commit();
                $this->redirect('/transactions/index');
            }


        } catch (Exception $e) {
            Db::rollback();
            throw $e;
//            $this->error("Add failure",'/transactions/new');
        }
    }

    public function postUpdate()
    {
        $se = Session::get('islogin');
        $userName = $se['name'];
        $request = request();

        $trans_id = $request->param('trans_id');

        $transaction = Transaction::get($trans_id);
        $transaction->data($_POST);
        $transaction['created_by'] = $userName;
        $transaction['last_modified_by']=$se['name'];
        if (empty($_POST['settlement_date']))
            unset($_POST['settlement_date']);

        Db::startTrans();

        try {
            $custRole = $transaction['cust_role'];
            if ($custRole === "B") {
                // If customer is beneficiary, need to save sender info
                $custId = $transaction['ben_id'];
                $this->savePartyByOption($userName, $transaction, $request,"senderOptions","sen_","sender_id",$custId);
            } else {
                // Otherwise, customer is sender, need to save beneficiary info
                $custId = $transaction['sender_id'];
                $this->savePartyByOption($userName, $transaction, $request,"benOptions","ben_","ben_id",$custId);
            }

            // Save sender third party
            $sender3rd = $request->param("senderThirdParty");
            if ($sender3rd === "Y") {
                $this->savePartyByOption($userName, $transaction, $request,"sender3rdOptions","sen_3rd_","sender_third_id",$custId);
            }else{
                $transaction['sender_third_id'] = null;
                $transaction['sender_third_relation'] = null;
            }

            // Save beneficiary third party
            $ben3rd = $request->param("benThirdParty");
            if ($ben3rd === "Y"){
                $this->savePartyByOption($userName,$transaction,$request,"ben3rdOptions","ben_3rd_","ben_third_id",$custId);
            }else{
                $transaction['ben_third_id'] = null;
                $transaction['ben_third_relation'] = null;
            }

            // Save financial institution
            $bankOption = $request->param("finOptions");
            if ($bankOption === "new"){
                $bankData = $this->getArrayByPre($request->param(), "bank_");
                $bank = new Bank();
                $bank->data($bankData);
                $result = $bank->allowField(true)->save();
                if ($result){
                    $transaction['insti_id'] = $bank['id'];
                }else{
                    throw new Exception("Save banking info failed");
                }
            }

            $result = $transaction->allowField(true)->save();
            if ($result){
                Db::commit();
                $this->redirect('/transactions/index');
            }
        } catch (Exception $e) {
            Db::rollback();
            throw $e;
//            $this->error("Add failure",'/transactions/new');
        }
    }

    /**
     * Helper method to save party into Customer table if the value of option (get by optionName) is "new"
     * @param $userName
     * @param $transaction
     * @param $request
     * @param $optionName
     * @param $prefix
     * @param $idName ID column name in transaction table
     * @param $custId
     * @throws Exception
     */
    public function savePartyByOption($userName, $transaction, $request,$optionName,$prefix,$idName,$custId)
    {
        $option = $request->param($optionName);
        // Only need to save party when option is "New"
        if ($option === "new") {
            $id = $this->saveOtherCustomer($request, $prefix, $userName,$custId);
            $transaction[$idName] = $id;
        }
    }

    /**
     * Helper method to save sender/sender 3rd/beneficiary/beneficiary 3rd
     * @param $request
     * @param $prefix
     * @param $userName
     * @param $custId
     * @return customer id
     * @throws Exception Throw exception when save failed
     */
    private function saveOtherCustomer($request, $prefix, $userName,$custId)
    {
        $custData = $this->getArrayByPre($request->param(), $prefix);
        $customer = new Customer();
        $customer->data($custData);
        $customer['created_by'] = $userName;
        $customer['related_cust_id'] = $custId;
        $customer['cust_type'] = Customer::CUST_TYPE_OTHER;
        $result = $customer->allowField(true)->save();
        if ($result) {
            return $customer['cust_id'];
        } else {
            throw new Exception("Save customer:" . $prefix . " failed.");
        }
    }

    /**
     * Helper method to filter the data from array by prefix
     * @param $array
     * @param $prefix
     * @return array
     */
    private function getArrayByPre($array, $prefix)
    {
        $ret = array();
        foreach ($array as $key => $value) {
            if (substr($key, 0, strlen($prefix)) === $prefix) {
                $ret[substr($key, strlen($prefix))] = $value;
            }
        }
        unset($value, $key);
        return $ret;
    }

    public function getEdit(){
        $id = request()->param('id');

        $transaction = Transaction::where('trans_id','=',$id)->select()[0];

        $idTypes = Db::table('id_types')->select();

        $pageAttr = [
            'idTypes' => $idTypes,
            'action' => '/transactions/update',
            'pageMode' => 'edit',
            'pageTitle' => 'Edit transaction',
            'data' => $transaction,
        ];
        return $this->fetch("transactions/edit_trans",$pageAttr);

    }


//
//    public function getAd()
//    {
//        //加载模板
//        $a = Db::table('finance')->select();
//        $b = Db::table('types')->select();
//        $c = Db::table('typex')->select();
//        $d = Db::table('typea')->select();
//        $e = Db::table('typez')->select();
//        $f = Db::table('typek')->select();
//        $typz = Db::table('user')->select();
//        $tya = Db::table('stac')->select();
//        return $this->fetch("tran/add", ['a' => $a, 'b' => $b, 'c' => $c, 'd' => $d, 'e' => $e, 'f' => $f, 'typz' => $typz, 'tya' => $tya]);
//    }
//
//    public function getDd()
//    {
//        //加载模板
//        $a = Db::table('finance')->select();
//        $b = Db::table('types')->select();
//        $c = Db::table('typex')->select();
//        $d = Db::table('typea')->select();
//        $e = Db::table('typez')->select();
//        $f = Db::table('typek')->select();
//        $typz = Db::table('user')->select();
//        $tya = Db::table('stac')->select();
//        return $this->fetch("tran/add", ['a' => $a, 'b' => $b, 'c' => $c, 'd' => $d, 'e' => $e, 'f' => $f, 'typz' => $typz, 'tya' => $tya]);
//    }
//
//    public function postTypes()
//    {
//        //请求对象
//        $request = request();
//        //获取参数
//        $data = $request->only(['name2']);
//        $s = Db::table("types")->insert($data);
//        if ($s) {
//            $this->reditrct('/tran/index');
//        } else {
//            $this->error("Add failure", '/tran/add');
//        }
//
//    }
//
//    public function postTypex()
//    {
//        //请求对象
//        $request = request();
//        //获取参数
//        $data = $request->only(['name']);
//        $s = Db::table("typex")->insert($data);
//        if ($s) {
//            $this->reditrct('/tran/index');
//        } else {
//            $this->error("Add failure", '/tran/add');
//        }
//
//    }
//
//    public function postTypea()
//    {
//        //请求对象
//        $request = request();
//        //获取参数
//        $data = $request->only(['name']);
//        $s = Db::table("typea")->insert($data);
//        if ($s) {
//            $this->reditrct('/tran/index');
//        } else {
//            $this->error("Add failure", '/tran/add');
//        }
//
//    }
//
//    public function postTypek()
//    {
//        //请求对象
//        $request = request();
//        //获取参数
//        $data = $request->only(['name']);
//        $s = Db::table("typek")->insert($data);
//        if ($s) {
//            $this->reditrct('/tran/index');
//        } else {
//            $this->error("Add failure", '/tran/add');
//        }
//
//    }
//

//
//    public function getSs()
//    {
//        //请求对象
//        $request = request();
//
//        $data = Db::table('saction')->select();
//        return $this->fetch("tran/ss", ['data' => $data]);
//    }
//
//    //详情
//    public function getFf()
//    {
//        //请求对象
//        $request = request();
//        $id = $request->param('id');
//        $data = Db::table('saction')->where('id', $id)->find();
//        //dump($data);exit;
//        return $this->fetch("tran/ff", ['data' => $data]);
//    }
//
//    //详情
//    public function getIn()
//    {
//        //请求对象
//        // //加载模板
//        $a = Db::table('origin')->select();
//        $b = Db::table('types')->select();
//        $c = Db::table('typex')->select();
//        $d = Db::table('typea')->select();
//        $e = Db::table('typez')->select();
//        $f = Db::table('typek')->select();
//        $request = request();
//        $id = $request->param('id');
//        //dump($id);exit;
//        $data = Db::table('saction')->where('id', $id)->find();
//        //dump($data);exit;
//        return $this->fetch("tran/in", ['data' => $data, 'a' => $a, 'b' => $b, 'c' => $c, 'd' => $d, 'e' => $e, 'f' => $f]);
//    }
//
//    //详情修改
//    public function getEdit()
//    {
//        //请求对象
//        // //加载模板
//        $a = Db::table('origin')->select();
//        $b = Db::table('types')->select();
//        $c = Db::table('typex')->select();
//        $d = Db::table('typea')->select();
//        $e = Db::table('typez')->select();
//        $f = Db::table('typek')->select();
//        $request = request();
//        $id = $request->param('id');
//        $data = Db::table('saction')->where('id', $id)->find();
//        //dump($data);exit;
//        return $this->fetch("tran/edit", ['data' => $data, 'a' => $a, 'b' => $b, 'c' => $c, 'd' => $d, 'e' => $e, 'f' => $f]);
//    }
//
//    public function postUpdate()
//    {
//        //请求对象
//        $request = request();
//        $id = $request->param('id');
//        //数据插入
//        $data = $request->only(['start', 'end', 'type', 'code', 'place', 'typ', 'number', 'origin', 'account', 'types', 'descibe', 'typea', 'rate', 'money', 'typez', 'descibes', 'charge', 'typex', 'typek', 'descibea', 'moneys', 'typeo', 'descibee', 'descibex', 'descibec', 'received', 'status', 'typz', 'tyx', 'tyz', 'tya', 'star']);
//        $data['time'] = date("Y-m-d H:i:s", time());
//        //dump($data);exit;
//        if (Db::table("saction")->where('id', $id)->update($data)) {
//            $this->redirect("/tran/index");
//        } else {
//            $this->error("Failure to modify", "/tran/index");
//        }
//    }
//
//    //执行删除
//    public function getDelete()
//    {
//        //获取id
//        $request = request();
//        $id = $request->param('id');
//        if (Db::table('saction')->where('id', $id)->delete()) {
//            $this->redirect("/tran/index");
//        } else {
//            $this->error("/tran/index");
//        }
//    }
//
//    //添加
//    public function getAa()
//    {
//        //加载模板
//        return $this->fetch("tran/aa");
//    }
//
//    public function getBb()
//    {
//        //加载模板
//        return $this->fetch("tran/bb");
//    }
//
//    public function getCc()
//    {
//        //加载模板
//        return $this->fetch("tran/cc");
//    }
//
//    public function getEe()
//    {
//        //加载模板
//        return $this->fetch("tran/ee");
//    }
//
//    public function postIns()
//    {
//        //请求对象
//        $request = request();
//        //获取参数
//        $data = $request->only(['aname', 'name', 'street', 'city', 'state', 'code', 'country', 'phone', 'birth', 'type', 'typea']);
//        // //验证操作
//        // $result=$this->validate($request->param(),'Trans');
//        // if(true!==$result){
//        //         // echo $result;
//        //         $this->error($result,'/tran/index');
//        // }
//
//        $s = Db::table("sender")->insert($data);
//        if ($s) {
//            $this->redirect('/tran/index');
//        } else {
//            $this->error("Add failure", '/tran/index');
//        }
//
//    }
}