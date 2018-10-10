<?php
namespace app\home\controller;
//导入Controller
use think\Db;
use think\Session;
use app\home\model\Customer;

class Customers extends Allow{

	public function getIndex(){
        //加载模板
        $cust=new Customer();
        $data=$cust->where('cust_type','<>','OTH')->select();
//        $data=Db::table('Customer')->select();
        //dump($data);exit;
        return $this->fetch("customers/index",['data'=>$data]);
	}

    public function getAdd(){
        $request=request();
        //加载模板
        $info=Db::table('id_types')->select();
        $pageAttr=[
            'info'=>$info,
            'action'=>'/customers/insert',
            'pageMode'=>'new',
            'pageTitle'=>'Add customer',
            'customer'=>new Customer()
            ];

        return $this->fetch("customers/edit_cust",$pageAttr);

    }

    public function getEdit(){
        $id = request()->param('id');

        $customer = Customer::where('cust_id','=',$id)->select()[0];

        //加载模板
        $info=Db::table('id_types')->select();

        $pageAttr=[
            'info'=>$info,
            'action'=>'/customers/update',
            'pageMode'=>'edit',
            'pageTitle'=>'Edit customer',
            'customer'=>$customer
        ];
        return $this->fetch("customers/edit_cust",$pageAttr);

    }

    public function getView(){
        $id = request()->param('id');

        $customer = Customer::where('cust_id','=',$id)->select()[0];

        //加载模板
        $info=Db::table('id_types')->select();

        $pageAttr=[
            'info'=>$info,
            'action'=>'/customers/update',
            'pageMode'=>'edit',
            'pageTitle'=>'Edit customer',
            'customer'=>$customer
        ];
        return $this->fetch("customers/view_cust",$pageAttr);

    }

    public function getDelete(){
        $id = request()->param('id');

        $customer = Customer::where('cust_id','=',$id)->select()[0];

        $customer->delete();
        return redirect("/customers/index");
    }



    //执行添加
    public function postInsert(){
        $se=Session::get('islogin');

        $customer = new Customer($_POST);
        $customer['created_by']=$se['name'];
        $s = $customer->allowField(true)->save();

        if($s){
            $this->redirect('/customers/index');
        }else{
            $this->error("Add failure",'/customers/add');
        }
    }

    public function postUpdate(){
        $se=Session::get('islogin');
        $cust_id = request()->param('cust_id');

        $customer = Customer::get($cust_id);

        $customer->data($_POST);
        $customer['last_modified_by']=$se['name'];
        $s = $customer->allowField(true)->save();

        if($s){
            $this->redirect('/customers/index');
        }else{
            $this->error("Add failure",'/customers/edit');
        }
    }

    //执行添加
    public function postInsertDocType(){
        //请求对象
        $request=request();
        //数据插入
        $data=$request->only(['name']);

        $s=Db::table('stype')->insert($data);
        if($s){
            $this->redirect('/customers/add');
        }
    }
   
}