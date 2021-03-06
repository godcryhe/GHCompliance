<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:75:"/Users/yhe/Projects/GHComp/public/../application/home/view/audit/index.html";i:1522216598;s:66:"/Users/yhe/Projects/GHComp/application/home/view/public/index.html";i:1536121480;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Audit</title>
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
			<li><a href="/transactions/index">Transactions</a></li>
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
    .c3{background-color: #c3daa4!important;}
    .db{background-color: #bdebc1!important;}
    .f5{background-color:#f5dbdb!important;}
    .c2{background-color:#bd3bc1!important;}
</style>
</head>
<body>
	<h4><b>Review Dashboard</b></h4>
	<table class="table table-border table-bordered table-bg table-hover table-sort table-responsive" text-align="center">
	<thead class="panel panel-primary ">
	<tr class="text-c">
         <th width="40">Date</th> 
         <th width="30">Customer</th>
         <th width="30"># of trx</th>
         <th width="50">Amount IN</th>
         <th width="50">Method IN</th>
         <th width="50">Amount Out</th>
         <th width="60">FINTRAC</th>
         <th width="50">Status</th>
         <th width="60">OSFI match? (Compliance)</th>
         <th width="50">Report</th>
         <th width="50">Notes</th>
         </tr>
	  </thead>
	  <tbody>
	      <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): if( count($data)==0 ) : echo "" ;else: foreach($data as $key=>$row): ?>
	    <tr class="text-c">
	      <td><?php echo $row['times']; ?></td>
	      <td><?php echo \think\Session::get('islogin.username'); ?></td>
	      <td><?php echo $row['typek']; ?></td>
	      <td><?php echo $row['received']; ?></td>
	      <td class="static"><?php echo $row['typex']; ?></td>
	      <td><?php echo $row['charge']; ?></td>
	      <td><a href="/tran/in/id/<?php echo $row['id']; ?>">Report</a></td>
	      <td class="static2"><?php echo $row['status']; ?></td>
	      <td><?php echo $row['typeo']; ?></td>
	      <td><?php echo $row['descibex']; ?></td>
	      <td><?php echo $row['descibec']; ?></td>
	    </tr>
	    <?php endforeach; endif; else: echo "" ;endif; ?>
	    </tbody>
	  </table>
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
$("tbody tr").each(function(){
  var html=$(this).find('.static').html();
  var html2=$(this).find('.static2').html();
  if(html=='Cash'){
    $(this).find('.static').addClass('c3')     
  }
   if(html=='whire'){
    $(this).find('.static').addClass('c2')     
  }
  if(html2=='Filed'){
    $(this).find('.static2').addClass('db');
  }
  if(html2=='New'){
    $(this).find('.static2').addClass('f5');
  }
})
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

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/index/lib/jquery/1.9.1/jquery.min.js"></script>
<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/index/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/index/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/index/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
    $('.table-sort').dataTable({
        "aaSorting": [[ 20, "asc" ]],//默认第几个排序
        "bStateSave": true,//状态保存
        "pading":false,
        "aLengthMenu":[20,50,100,1000],
        "sPaginationType":"full_numbers",
        "aoColumnDefs": [
            // {"bVisible": false, "aTargets": [ 0 ]} //控制列的隐藏显示
            {"orderable":false}// 不参与排序的列
        ]
    });

</script>



