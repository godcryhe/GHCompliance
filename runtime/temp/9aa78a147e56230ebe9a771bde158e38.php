<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:73:"/Users/yhe/Projects/GHComp/public/../application/home/view/index/add.html";i:1531027474;s:66:"/Users/yhe/Projects/GHComp/application/home/view/public/index.html";i:1531025367;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add customers</title>
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
    <link rel="stylesheet" href="/index/bs/css/bootstrap.min.css">
    <script stc="/index/bs/js/jquery.min.js"></script>
    <script stc="/index/bs/js/bootstrap.min.js"></script>
    <script stc="/index/bs/js/holder.min.js"></script>
    <link rel="stylesheet"
          href="https://cdn1.cloud-database.co/renderer/css/v2/renderer_75135483540aaccb2eaa7a5faba92739f3cb510d.v2.min.css">
    <script src="/index/jquery-1.8.3.min.js"></script>
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

        .in {
            width: 100px;
            height: 30px;
            background-color: #17427A;
            color: white;
            border: 0px;
            margin-top: 20px;
        }

        .kn-modal-bg {
            display: block;
        }

        .none {
            display: none !important;
        }

        .fllow {
            position: absolute;
            width: 50%;
            right: 0;
            top: -93px;

        }

        .none {
            display: none;
        }

        .ui-state-highlight, .ui-widget-content .ui-state-highlight, .ui-widget-header .ui-state-highlight {
            border: 1px solid #f1d632;
            background: #f9e67b url(images/ui-bg_inset-hard_100_f9e67b_1x100.png) 50% bottom repeat-x;
            color: #363636;
            margin-top: 0;
            height: 100%;
        }

        .clear {
            clear: both
        }
    </style>

</head>
<body>
<p class="aa"><a href="/home/index">Customers</a>><a href="/home/add">Add Customer</a></p>
<h4><b>Add Customer</b></h4>
<form class="form form-horizontal" id="form-admin-add" action="/home/insert" method="post"
      enctype="multipart/form-data">
    <div class="kn-message is-error" style="display: none;"><a class="close delete"></a>
    </div>
    <p class="bb"><b>Customer ID <span class="cc">*</span></b></p>
    <p class="all" data='Customer ID'><input type="text" name="names" class="zz"></p>
    <p class="bb"><b>Customer type <span class="cc">*</span></b></p>
    <div style="position: relative;">
        <select class="select" name="type" size="1">
            <option value="1" onclick="option()">Individual</option>
            <option value="2" onclick="option2()">Business</option>
        </select>
        <div class="fllow none">
            <label for="field_296" class="label kn-label"><span>Business documents</span></label>
            <div class="control">
                <input class="file" name="field_296" type="hidden" value="5ac9c285e22ae01fa47a5f50">
                <div class="kn-asset-current" style="background-color: rgba(255, 204, 153, 0);"></div>
                <div class="kn-file-upload" style="">
                    <input class="input is-file" id="field_296_upload" value="" type="file" name="files" data-url="">
                    <div class="kn-spinner" style="display: none;"></div>
                </div>
            </div>
            <p class="kn-instructions">We have to confirm the existence of any corporation or other entity within 30
                days of creating this customer record. Documents should include one of the following: - the
                corporation's certificate of corporate status, -a record that has to be filed annually under provincial
                securities legislation, -any other record that confirms the corporation's existence. We also have to
                determine the names of the corporation's directors. To do this, we may need to see the list submitted at
                the time of customer's application for incorporation. In addition, we have to obtain and confirm the
                entity's beneficial ownership information. To do this, we can obtain one of the following documents:
                articles of incorporation, annual returns, shareholder agreements, articles of constitution, partnership
                agreements, or records of decisions. </p>
        </div>

    </div>
    </p>
    <p class="bb goaw"><b>Last name <span class="cc">*</span></b></p>
    <p class="all goaw" data='Last name'><input type="text" name="namex" class="zz"></p>
    <p class="bb goaw"><b>First name <span class="cc">*</span></b></p>
    <p class="all goaw" data='First name'><input type="text" name="nam" class="zz"></p>
    <p class="bb goaw2 none"><b>Business name <span class="cc">*</span></b></p>
    <p class=" goaw2 none" data='Business name'><input type="text" name="namep" class="zz"></p>
    <p class="bb goaw2 none"><b>Name in native alphabet </b></p>
    <p class="goaw2 none"><input type="text" name="namel" class="zz"></p>

    <h3>Address</h3>
    <div style="float:left">
        <p class="bb"><b>Street address <span class="cc">*</span></b></p>
        <p class="all" data='Street address '><input type="text" name="street" class="zz"></p>
        <p class="bb"><b>Postal or zip code <span class="cc">*</span></b></p>
        <p class="all" data='Postal or zip code '><input type="text" name="code" class="zz"></p></div>
    <div style="float:right">
        <p class="bb"><b>City<span class="cc">*</span></b></p>
        <p class="all" data='City'><input type="text" name="city" class="zz"></p>
        <p class="bb"><b>Country<span class="cc">*</span></b></p>
        <p class="all" data='Country'><input type="text" name="country" class="zz"></p>
        <p class="bb"><b>Province or state<span class="cc">*</span></b></p>
        <p class="all" data='Province or state'><input type="text" name="state" class="zz"></p></div>
    <div class="clear"></div>

    <h3>Phone and email</h3>
    <div style="float:left">
        <p class="bb"><b>Phone #1 <span class="cc">*</span></b></p>
        <p class="all" data='Phone #1'><input type="text" name="phonea" class="zz"></p>
        <p class="bb"><b>Phone #1 type<span class="cc">*</span></b></p>
        <p><select class="select" name="typea" size="1">
            <option value="0"></option>
            <option value="0">Cell</option>
            <option value="1">Work</option>
            <option value="2">Home</option>
        </select></p>
        <p class="bb"><b>Email </b></p>
        <p><input type="email" name="email" class="zz"></p>
    </div>
    <div style="float:right">
        <p class="bb"><b>Phone #2 </b></p>
        <p><input type="text" name="phoneb" class="zz"></p>
        <p class="bb"><b>Phone #2 type</b></p>
        <p><select class="select" name="typeb" size="1">
            <option value="0"></option>
            <option value="0">Cell</option>
            <option value="1">Work</option>
            <option value="2">Home</option>
        </select></p>

        <p class="bb"><b>ID Status</b></p>
        <p><select class="select" name="status" size="1">
            <option value="1">Valid</option>
            <option value="2">EXPIRED!!!</option>
        </select></p>
    </div>
    <div class="clear"></div>

    <h3>Identification document</h3>
    <div style="float:left">
        <p class="bb"><b>Document number <span class="cc">*</span></b></p>
        <p class="all" data='Document number'><input type="text" name="number" class="zz"></p>
        <p class="bb"><b>Document type <span class="cc">*</span></b></p>
        <p><select data-placeholder="Select" id="view_95-field_41" name="stype" style="vertical-align: bottom;"
                   class="select">
            <?php if(is_array($info) || $info instanceof \think\Collection || $info instanceof \think\Paginator): if( count($info)==0 ) : echo "" ;else: foreach($info as $key=>$row): ?>
            <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
        <p>

        <p><a id="bth" style="color:blue">Add a new option</a></p>

        <p class="bb"><b>Place of issue <span class="cc">*</span></b></p>
        <p class="all" data='Place of issue '><input type="text" name="place" class="zz"></p>
    </div>
    <div style="float:right">
        <p class="bb"><b>Date of birth <span class="cc">*</span></b></p>
        <p class="all" data='Date of birth'><input type="text" name="birth" id="datepicker" class="zz"></p>
        <p class="bb"><b>Expiration date <span class="cc">*</span></b></p>
        <p class="all" data='Expiration date'><input type="text" name="end" id="datepicker2" class="zz"></p>
    </div>
    <div class="clear"></div>

    <p class="bb">IMPORTANT: Place of issue for passports MUST be entered as documented on the passport. "Canada" is not
        adequate.</p>
    <p class="bb"><b> ID Image 1/2</b></p>
    <p><input type="file" name="pic1"></p>
    <p class="bb"><b> ID Image 2/2</b></p>
    <p><input type="file" name="pic2"></p>
    <p class="bb"><b>Risk Rating</b></p>
    <p><select class="select" name="rating" size="1">
        <option value="1">Low</option>
        <option value="2">Moderate</option>
        <option value="3">High</option>
    </select></p>

    <h3>AML questions</h3>
    <p><b>Occupation or principal business <span class="cc">*</span></b></p>
    <p>i.e. high school teacher, airline pilot, construction worker</p>
    <p><textarea rows="7" cols="100" name="typeq"></textarea></p>
    <p><b>Purpose and intended nature of the business relationship <span class="cc">*</span></b></p>
    <p>i.e. supporting family in China</p>
    <p><textarea rows="7" cols="100" name="typew"></textarea></p>
    <p><b>Expected transaction frequency <span class="cc">*</span></b></p>
    <p class="all" data='Expected transaction frequency'><input type="text" name="typee" class="zz"></p>
    <p>i.e. monthly</p>
    <p><b>Expected average transaction amount <span class="cc">*</span></b></p>
    <p class="all" data="Expected average transaction amount"><input type="text" name="money" class="zz"></p>
    <p class="bb"><b>Does the customer have a 3rd party?</b></p>
    <p><select class="select" name="typem" size="1">
        <option value="1">No</option>
        <option value="2">Yes</option>
    </select></p>
    <p class="bb"><b>Is the customer PEP/HIO?</b></p>
    <p><select class="select" name="typeu" size="1">
        <option value="1">No</optio>
        <option value="2">Yes</option>
    </select></p>
    <p class="bb"><b>Does the customer exhibit suspicious behavior?</b></p>
    <p><select class="select" name="typer" size="1">
        <option value="3" onclick="onc()">No</option>
        <option value="4" onclick="onc2()">Yes</option>
    </select></p>

    <p class="bb goa none"><b>Describe the suspicious behavior </b></p>
    <p><textarea rows="7" cols="100" name="typep" class="goa none"></textarea></p>

    <p><b>Additional notes</b></p>
    <p><textarea rows="7" cols="100" name="aname"></textarea></p>
    <p>
        <button class="inp">submit</button>
    </p>
</form>
<p class="dd"><a href="/home/index">Back to Customers</a></p>

<div id="kn-modal-bg-0" class="kn-modal-bg none" style="top: 0px; z-index: 2000; ">
    <div class="kn-modal small" style="display: block;">
        <header class="modal-card-head">
            <h1 class="modal-card-title">Add a new option</h1>
            <div class="delete close-modal"></div>
        </header>
        <section class="modal-card-body">
            <div id="kn-add-option" class="kn-modal-wrapper kn-view kn-form">
                <div class="kn-input kn-view">
                    <input type="text" class="input" name="name" id="post"></div>
                <div class="in" id="sub" style="text-align: center;line-height:32px">submit</div>

            </div>
        </section>
    </div>
</div>
<script>
    $(function () {
        $('#bth').click(function () {
            $('#kn-modal-bg-0').toggleClass('none');

        })
        $('.close-modal').click(function () {
            $('#kn-modal-bg-0').toggleClass('none');
        })
    })
    $('.inp').click(function () {
        var html = '';
        $('.all').each(function () {
            if ($(this).find('input').val() == '') {
                var index = $(this).index();
                index = index - 1;
                var html2 = $(this).attr('data');
                $('.kn-message').css('display', 'block');
                html += html2 + " is required.</br>";

                $('.form').attr('data', '1');
                $(this).find('input').css('border', 'solid 1px red')
            } else {
                $(this).find('input').css('border', 'solid 1px #DCDCDC')
            }
            $('.kn-message').html(html);
        })

        if ($('.form').attr('data') == '1' && $('.kn-message br').length != 0) {

            return false;
        }
    })

    $('.select').click(function () {
        console.log($(this).attr('selected'))
        if ($(this).val() == '2') {
            $('.fllow').removeClass('none');
            $('.goaw').addClass('none');
            $('.goaw').eq(1).removeClass('all');
            $('.goaw2').removeClass('none');
            $('.goaw2').eq(1).addClass('all');
            var height = $('.kn-message').height();
            $('.fllow').css('top', '-93px');
        } else {
            $('.fllow').addClass('none');
            $('.goaw2').addClass('none');
            $('.goaw2').eq(1).removeClass('all');
            $('.goaw').removeClass('none');
            $('.goaw').eq(1).addClass('all');
        }
    })
    $('.select').click(function () {
        console.log($(this).attr('selected'))
        if ($(this).val() == '4') {
            $('.goa').removeClass('none');
        } else {
            $('.goa').addClass('none');
        }
    })
    $('#sub').click(function () {
        var name = $('#post').val();
        var num = $('#view_95-field_41 option').length - 1;
        var num2 = parseInt($('#view_95-field_41 option').eq(num).attr('value')) + 1;

        $.ajax({
            url: '/home/inse',
            dataType: 'json',
            type: 'post',
            data: {
                name: name
            },
            success: function () {
                $('#kn-modal-bg-0').addClass('none');
                $('#view_95-field_41').append("<option value=" + num2 + ">" + name + "</option>")
            }
        })
    })
</script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script>
    $(function () {
        $("#datepicker").datepicker();
        $("#datepicker2").datepicker();
    });
</script>
</body>


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



