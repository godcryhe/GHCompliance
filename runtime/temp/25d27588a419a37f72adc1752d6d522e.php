<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:78:"/Users/yhe/Projects/GHComp/public/../application/home/view/business/index.html";i:1523484160;s:66:"/Users/yhe/Projects/GHComp/application/home/view/public/index.html";i:1536121480;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Business</title>
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
	.aa a{color:blue;}
	.zz{width:450px;height:25px;border:1px solid #DCDCDC;}
	.zz:focus{outline:none; border: 1px solid #9BD6EB;}
	.bb{margin:10px 0px}
	.cc{color:red;}
	.dd a{color:blue;}
	.select{width:450px;height:25px;}
	.inp{width:100px;height:30px;background-color:#17427A;color:white;border:0px;}
	.red{background-color: red!important}
    .yellow{background-color: #d3b100!important;}
    .lv{background-color: #17b82c!important;}
    .h a{color:blue;}
</style>
</head>
<body>
	<h4><b>Customers</b></h4>
    <div style="margin-top:20px">
	<table class="table table-border table-bordered table-bg table-hover table-sort table-responsive" text-align="center">
	<thead class="panel panel-primary ">
	<tr class="text-c">
         <th width="50">Customer ID</th> 
         <th width="50">Risk Rating</th>
         <th width="60">Last Assessment</th>
         <th width="50">Type</th>
         <th width="50">Name</th>
         <th width="60">Details</th>
         </tr>
	  </thead>
	  <tbody>
	      <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): if( count($data)==0 ) : echo "" ;else: foreach($data as $key=>$row): ?>
	    <tr class="text-c">
	      <td><?php echo $row['names']; ?></td>
	      <td class="static"><?php echo $row['rating']; ?></td>
	      <td><?php echo $row['times']; ?></td>
	      <td><?php echo $row['type']; ?></td>
	      <td><?php echo $row['namex']; ?>&nbsp;&nbsp;<?php echo $row['nam']; ?></td>
	      <td class="h"><a href="/business/in/id/<?php echo $row['id']; ?>">view</a></td>
	    </tr>
	    <?php endforeach; endif; else: echo "" ;endif; ?>
	    </tbody>
	  </table>
	 </div>
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
function getstatus(){
	$("tbody tr").each(function(){
  var html=$(this).find('.static').html();
  if(html=='Low'){
    $(this).find('.static').addClass('lv')     
  }
  if(html=='Moderate'){
    $(this).find('.static').addClass('yellow');
  }
  if(html=='High'){
    $(this).find('.static').addClass('red');
  }
  
})
}
getstatus();
setInterval("getstatus()",1000);
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



