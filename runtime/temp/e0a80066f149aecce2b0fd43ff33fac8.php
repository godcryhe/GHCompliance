<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:73:"/Users/yhe/Projects/GHComp/public/../application/home/view/bank/edit.html";i:1533009162;s:66:"/Users/yhe/Projects/GHComp/application/home/view/public/index.html";i:1531025367;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Financial Institutions</title>
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
			<li><a href="/home/index">Customers</a></li>
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
        .aa a {
            color: blue;
        }

        .zz {
            width: 450px;
            height: 25px;
            border: 1px solid #DCDCDC;
        }

        .zz:focus {
            outline: none;
            border: 1px solid #9BD6EB;
        }

        .bb {
            margin: 10px 0px
        }

        .cc {
            color: red;
        }

        .dd a {
            color: blue;
        }

        .select {
            width: 450px;
            height: 25px;
        }

        .inp {
            width: 100px;
            height: 30px;
            background-color: #17427A;
            color: white;
            border: 0px;
        }

    </style>
</head>
<body>
<p class="aa"><a href="/bank/index">Financial Institutions
</a>><a href="/bank/update">Edit Financial Institution</a></p>
<p><a href="/bank/delete/id/<?php echo $data['id']; ?>" style="color:red">delete</a></p>
<h4><b>Add Financial Institution</b></h4>
<form class="form form-horizontal" id="form-admin-add" action="/bank/update" method="post"
      enctype="multipart/form-data">
    <p><input type="hidden" name="id" class="zz" value="<?php echo $data['id']; ?>"></p>
    <p class="bb"><b>Name of the bank <span class="cc">*</span></b></p>
    <p><input type="text" name="name" class="zz" value="<?php echo $data['name']; ?>" required></p>
    <p class="bb"><b>Street address <span class="cc">*</span></b></p>
    <p><input type="text" name="street" class="zz" value="<?php echo $data['street']; ?>" required></p>
    <p class="bb"><b>City <span class="cc">*</span></b></p>
    <p><input type="text" name="city" class="zz" value="<?php echo $data['city']; ?>" required></p>
    <p class="bb"><b>Province or state <span class="cc">*</span></b></p>
    <p><input type="text" name="state" class="zz" value="<?php echo $data['province']; ?>" required></p>
    <p class="bb"><b>Country <span class="cc">*</span></b></p>
    <p><input type="text" name="country" class="zz" value="<?php echo $data['country']; ?>" required></p>
    <p class="bb"><b>Postal or zip code <span class="cc">*</span></b></p>
    <p><input type="text" name="code" class="zz" value="<?php echo $data['postal_code']; ?>" required></p>
    <p><input type="submit" value="submit" class="inp"></p>
    <p class="dd"><a href="/bank/index">Back to Financial Institutions</a></p>
</form>
</body>
</html>
    
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



