<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:72:"/Users/yhe/Projects/GHComp/public/../application/home/view/bank/add.html";i:1532927603;s:66:"/Users/yhe/Projects/GHComp/application/home/view/public/index.html";i:1538172075;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Financial Institutions</title>

    <link rel="stylesheet" type="text/css" href="/index/static/h-ui/css/H-ui.min.css"/>
    <link rel="stylesheet" type="text/css" href="/index/static/h-ui.admin/css/H-ui.admin.css"/>
    <link rel="stylesheet" type="text/css" href="/index/lib/Hui-iconfont/1.0.8/iconfont.css"/>
    <link rel="stylesheet" type="text/css" href="/index/static/h-ui.admin/skin/green/skin.css" id="skin"/>
    <link rel="stylesheet" type="text/css" href="/index/static/h-ui.admin/css/style.css"/>
    <script type="text/javascript" src="/index/lib/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="/index/lib/layer/2.4/layer.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8"
            src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <link rel="stylesheet"
          href="https://cdn1.cloud-database.co/renderer/css/v2/renderer_75135483540aaccb2eaa7a5faba92739f3cb510d.v2.min.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="/index/lib/jquery.timepicker/jquery.timepicker.min.css"/>
    <script src="/index/lib/jquery.timepicker/jquery.timepicker.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>

    <style>
        * {
            margin: 0 auto;
        }

        .a {
            width: 100%;
            height: 60px;
            background-color: #ca4140;
        }

        .b {
            padding-top: 20px;
            margin-left: 30px;
        }

        .b a {
            color: white;
        }

        .c {
            width: 1200px;
            height: 30px;
            margin: auto;
            margin-top: 10px;
        }

        .c ul li {
            list-style: none;
            border-radius: 5px;
            background-color: #17427A;
            display: inline-block;
            margin-right: 10px;
            padding: 5px 10px;
            font-size: 16px;
        }

        .c ul li:hover {
            background-color: #dedede;
        }

        .c ul li a {
            text-decoration: none;
            color: white;
        }

        .d {
            position: fixed;
            background-color: black;
            height: 30px;
            width: 100%;
            bottom: 0px;
        }

        .r {
            height: 25px;
            margin-top: 10px;
            background-color: #EBEBEB;
            width: 100%;
        }

        .q {
            font-size: 14px;
            float: right;
        }

        .q a {
            color: blue;
        }

        .ff {
            height: 30px;
            width: 100%;
        }

        .none {
            display: none;
        }
    </style>
    
</head>
<body>
<input type="text" class='ipstatus' style='display: none' value="<?php echo \think\Session::get('islogin.status'); ?>">
<div class="a">
    <p class="b"><a href="/index/index">GUANGHUI FINANCIAL</a></p>
</div>
<div style="width:1200px;margin:auto">
    <div class="c">
        <ul>
            <li><a href="/customers/index">Customers</a></li>
            <li><a href="/transactions/index">Transactions</a></li>
            <li><a href="/bank/index">Financial Institutions</a></li>
            <!--<li class="ipstat"><a href="/audit/index">Audit</a></li>-->
            <!--<li class="ipstat"><a href="/business/index">Business Relationships</a></li>-->
            <!--<li class="ipstat"><a href="/report/index">Transactions Report</a></li>-->
            <!--<li class="ipstat"><a href="/customers/index">Customers Report</a></li>-->
            <!--<li class="ipstat"><a href="/user/index">User list</a></li>-->
        </ul>
    </div>
    <div class="r">
        <div class="q"> Logged in as <b><?php echo \think\Session::get('islogin.username'); ?></b>-<a
                href="/account/index/id/<?php echo \think\Session::get('islogin.id'); ?>"> Account Settings </a>- <a href="/login/logout">Log
            Out</a></div>
    </div>


    
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
    <link rel="stylesheet" href="/index/bs/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="https://cdn1.cloud-database.co/renderer/css/v2/renderer_75135483540aaccb2eaa7a5faba92739f3cb510d.v2.min.css">
</head>
<body>
<p class="aa"><a href="/bank/index">Customers</a>><a href="/bank/add">Add Financial Institution</a></p>
<h4><b>Add Financial Institution</b></h4>
<form class="form form-horizontal" id="form-admin-add" action="/bank/insert" method="post"
      enctype="multipart/form-data">
    <div class="kn-message is-error" style="display: none;"><a class="close delete"></a>
    </div>
    <p class="bb"><b>Name of the bank <span class="cc">*</span></b></p>
    <p class="all" data="Name of the bank"><input type="text" name="name" class="zz" required></p>
    <p class="bb"><b>Street address <span class="cc">*</span></b></p>
    <p class="all" data="Street address"><input type="text" name="street" class="zz" required></p>
    <p class="bb"><b>City <span class="cc">*</span></b></p>
    <p class="all" data="City"><input type="text" name="city" class="zz" required></p>
    <p class="bb"><b>Province or state <span class="cc">*</span></b></p>
    <p class="all" data="Province or state"><input type="text" name="province" class="zz" required></p>
    <p class="bb"><b>Country <span class="cc">*</span></b></p>
    <p class="all" data="Country"><input type="text" name="country" class="zz" required></p>
    <p class="bb"><b>Postal or zip code <span class="cc">*</span></b></p>
    <p class="all" data="Postal or zip code"><input type="text" name="postal_code" class="zz" required></p>
    <p>
        <button class="inp" type="submit">submit</button>
    </p>
    <p class="dd"><a href="/bank/index">Back to Financial Institutions</a></p>
    <script>
        // $('.inp').click(function () {
        //     var html = '';
        //     $('.all').each(function () {
        //         if ($(this).find('input').val() == '') {
        //             var index = $(this).index();
        //             index = index - 1;
        //             var html2 = $(this).attr('data');
        //             $('.kn-message').css('display', 'block');
        //             html += html2 + " is required.</br>";
        //
        //             $('.form').attr('data', '1');
        //             $(this).find('input').css('border', 'solid 1px red')
        //         } else {
        //             $(this).find('input').css('border', 'solid 1px #DCDCDC')
        //         }
        //         $('.kn-message').html(html);
        //     })
        //
        //     if ($('.form').attr('data') == '1' && $('.kn-message br').length != 0) {
        //
        //         return false;
        //     }
        // })
    </script>
</form>
</body>


</div>
<div class="ff"></div>
<div class="d"></div>

</body>
<script>
    var ipstatus = $('.ipstatus').val();
    if (ipstatus == 1) {
        $('.ipstat').css('display', 'none');
    }
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.table-sort').DataTable({
            "aaSorting": [[1, "asc"]],//默认第几个排序
            "bStateSave": true,//状态保存
            "pading": true,
            "aLengthMenu": [20, 40, 80],
            "sPaginationType": "full_numbers",
            "aoColumnDefs": [
                {"orderable": false}// 不参与排序的列
            ]
        });
    });
</script>



</html>







