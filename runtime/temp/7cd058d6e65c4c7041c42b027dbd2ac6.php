<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:74:"/Users/yhe/Projects/GHComp/public/../application/home/view/tran/index.html";i:1522214420;s:66:"/Users/yhe/Projects/GHComp/application/home/view/public/index.html";i:1533184531;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Transactions</title>
</head>
<link rel="stylesheet" type="text/css" href="/index/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/index/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/index/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/index/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/index/static/h-ui.admin/skin/green/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/index/static/h-ui.admin/css/style.css" />
<script type="text/javascript" src="/index/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/index/lib/layer/2.4/layer.js"></script>
<!-- <script type="text/javascript" src="/index/static/h-ui/js/H-ui.min.js"></script> -->
<!-- <script type="text/javascript" src="/index/static/h-ui.admin/js/H-ui.admin.js"></script> 
 --><script type="text/javascript" src="/index/lib/jquery.contextmenu/jquery.contextmenu.r2.js"></script>

<style>
	*{margin:0 auto;}
	.a{width:100%;height:120px;background-color:black;}
	.b{padding-top:50px;margin-left:30px;}
	.b a{color:#A2A2A2;}
	.c{width:1200px;height:30px;margin:auto;margin-top:10px;}
	.c ul li{list-style:none;border-radius:5px;background-color:#17427A;display: inline-block;margin-right: 10px;padding:5px 10px;font-size: 16px;}
	.c ul li:hover{background-color:#dedede;}
	.c ul li a{text-decoration: none;color:white;}
	.d{position:fixed;background-color:black; height:30px;width:100%;bottom:0px;}
	.r{height:25px;margin-top:10px;background-color:#EBEBEB;width:100%;}
	.q{font-size:14px;float:right;}
	.q a{color:blue;}
	.ff{height:30px;width:100%;}
	.none{display: none;}
</style>
<body>
	<input type="text" class='ipstatus' style='display: none' value="<?php echo \think\Session::get('islogin.status'); ?>">
	<div class="a">
		<p class="b"><a href="/index/index">MSBprofessional</a></p>
	</div>
	<div style="width:1200px;margin:auto">
	<div class="c">
		<ul>
			<li><a href="/customers/index">Customers</a></li>
			<li><a href="/tran/index">Transactions</a></li>
			<li><a href="/bank/index">Financial Institutions</a></li>
			<li class="ipstat"><a href="/audit/index">Audit</a></li>
			<li class="ipstat"><a href="/business/index">Business Relationships</a></li>
			<li class="ipstat"><a href="/report/index">Transactions Report</a></li>
			<li class="ipstat"><a href="/customers/index">Customers Report</a></li>
			<li class="ipstat"><a href="/user/index">User list</a></li>
		</ul>
	</div>
		<div class="r">
			<div class="q"> Logged in as <b><?php echo \think\Session::get('islogin.username'); ?></b>-<a href="/account/index/id/<?php echo \think\Session::get('islogin.id'); ?>">  Account Settings </a>- <a href="/login/logout">Log Out</a></div>
	</div>	
	

	

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>

<style>
		.p{display: inline-block;border-radius:5px;background-color:#EBEBEB;margin-top:30px;height:25px;}
		.p a{text-decoration: none;color:#07467C;}
    .h a{color:#0746A6;}
</style>
</head>
<body>
	
  <span class="p"><a href="/tran/add">Add Incoming EFT</a></span>
  <span class="p"><a href="/tran/ad">Add Outgoing EFT</a></span>
  <span class="p"><a href="/tran/dd">Add Currency Exchange</a></span>
  <span class="p"><a href="/tran/ss">Generate Invoice</a></span>
  <div style="margin-top:20px">
  <table class="table table-border table-bordered table-bg table-hover table-sort table-responsive" text-align="center">
  <thead class="panel panel-primary ">
  <tr class="text-c">
         <th width="40">Trans.Date</th> 
         <th width="60">Settlement Date</th>
         <th width="80">OSFI Match? (Teller)</th>
         <th width="60">Trans. Number</th>
         <th width="30">Type</th>
         <th width="30">Location</th>
         <th width="60">Customer</th>
         <th width="40">Amount IN</th>
         <th width="30">Rate</th>
         <th width="50">Amount OUT</th>
         <th width="30">Details</th>
         <th width="30">Action</th>
        </tr>
  </thead>
  <tbody>
      <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): if( count($data)==0 ) : echo "" ;else: foreach($data as $key=>$row): ?>
    <tr class="text-c">
      <td><?php echo $row['start']; ?></td>
      <td><?php echo $row['end']; ?></td>
      <td><?php echo $row['typeo']; ?></td>
      <td><?php echo $row['number']; ?></td>
      <td><?php echo $row['typ']; ?></td>
      <td><?php echo $row['place']; ?></td>
      <td><?php echo \think\Session::get('islogin.username'); ?></td>
      <td><?php echo $row['received']; ?></td>
      <td><?php echo $row['rate']; ?></td>
      <td><?php echo $row['moneys']; ?></td>
      <td class="h"><a href="/tran/in/id/<?php echo $row['id']; ?>">view</a></td>
      <td class="h"><a href="/tran/edit/id/<?php echo $row['id']; ?>">edit</a></td>
    </tr>
    <?php endforeach; endif; else: echo "" ;endif; ?>
    </tbody>
  </table>
</div>
</body>
</html>
 <!--_footer 作为公共模版分离出去--> 
  <script type="text/javascript" src="/index/lib/jquery/1.9.1/jquery.min.js"></script> 
  <!--请在下方写此页面业务相关的脚本--> 
  <script type="text/javascript" src="/index/lib/My97DatePicker/4.8/WdatePicker.js"></script> 
  <script type="text/javascript" src="/index/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
  <!-- <script type="text/javascript" src="/index/lib/laypage/1.2/laypage.js"></script>  -->
  <script type="text/javascript">
$('.table-sort').dataTable({
	"aaSorting": [[ 1, "asc" ]],//默认第几个排序
	"bStateSave": true,//状态保存
	"pading":false,
	"aLengthMenu":[1,2,3,4,5,6,7,8,9,10],
	"sPaginationType":"full_numbers",
	"aoColumnDefs": [
	  // {"bVisible": false, "aTargets": [ 0 ]} //控制列的隐藏显示
	  {"orderable":false}// 不参与排序的列
	]
});
</script> 

	</div>
	<div class="ff"></div>
	<div class="d"></div>

</body>
</html>


<script>
var ipstatus=$('.ipstatus').val();
if(ipstatus == 1){
	$('.ipstat').css('display','none');
}
</script>



