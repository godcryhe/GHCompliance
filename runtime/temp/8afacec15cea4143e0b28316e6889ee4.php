<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"/Users/yhe/Projects/GHComp/public/../application/home/view/login/add.html";i:1532925176;}*/ ?>
<!DOCTYPE html>
<!-- saved from url=(0039)http://www.zhulang.com/login/index.html -->
<html class="" lang="zh-cn"><!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Register</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <style>
        .div {
            margin-top: 10px;
        }

        .div a {
            text-decoration: none;
            color: red;
        }
    </style>
    <script>
        var appUrl = "<?php echo $_SERVER['HTTP_HOST']; ?>";
        //alert("<?php echo $_SERVER['HTTP_HOST']; ?>");
        //alert(appUrl);
    </script>
    <script type="text/javascript" src="/index/lib/jquery/1.9.1/jquery.min.js"></script>
    <script>
        jQuery(document).ready(function() {

            $('#msg').hide();

            var postUrl="/login/insert";

            //通过前面定义的变量获取地址

            $('#btnRegister').click(function(){

                // $.post('d1',{json:数据},{回调函数});

                //post可以传递json数据，如下：
                alert("Do post:" + postUrl);

                $.post(postUrl,{

                    'name':$("#name").val(),
                    'username':$("#username").val(),
                    'password':$("#password").val()

                },function(data){

                    /*data是返回的值*/
                    alert("in return");
                    alert("data.msg:" + data.msg);

                    if(data.msg != null){
                        //返回的是json数据，详细看php代码
                        $('#msg').html(data.msg);
                        $('#msg').fadeIn();

                    }else{
                        $('#msg').value("test");

                    }
                });
            });

            // $( "#loginForm" ).submit(function( event ) {
            //
            //     // Stop form from submitting normally
            //     event.preventDefault();
            //
            //     // Get some values from elements on the page:
            //     var $form = $( this ),
            //         url = $form.attr( "action" );
            //     // Send the data using post
            //     var posting = $.post( url, {
            //                 'name':$("#name").val(),
            //                 'username':$("#username").val(),
            //                 'password':$("#password").val() } );
            //     // Put the results in a div
            //      posting.done(function( data ) {
            //          alert("in after call: " + data.msg);
            //
            //     //     var content = $( data ).find( "#content" );
            //     //     $( "#result" ).empty().append( content );
            //     });
            // });
        });

    </script>
<body class="id">
<div>
    <div class="main">
        <h1 style="font-size:35px;margin-top:150px;color:skyblue;margin-left:200px ">register</h1>
    </div>
</div>
<div class="main">
    <div class="reg-main" style="margin-left:200px">
        <form action="/login/insert" method="post" id="loginForm">

            <input id="username" type="text" name="username" class="name" placeholder="numer" style="width:250px;height:25px;">
            <br/>
            <input id="name" type="email" name="name" class="name" placeholder="Please enter the account number"
                   style="width:250px;height:25px;margin-top:10px">
            <br/>
            <input id="password" type="password" name="password" class="password" placeholder="Please input a password"
                   style="width:250px;height:25px;margin-top:10px">
            <br/>
            <button type="button" id="btnRegister" style="width:100px;height:25px;margin-top:10px;background-color:red;border:0px">
                Register
            </button>
        </form>
        <hr>
        <h1 id="msg">Something.</h1>
        <div class="div"><a href="/login/login">Sign in</a></div>
    </div>
</div>
</body>
</html> 