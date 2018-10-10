<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:82:"/Users/yhe/Projects/GHComp/public/../application/home/view/transactions/index.html";i:1539064599;s:66:"/Users/yhe/Projects/GHComp/application/home/view/public/index.html";i:1539065316;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Transactions</title>

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

        body {
            font-size: 12px;
        }
    </style>
    
<style>
    .p {
        display: inline-block;
        border-radius: 5px;
        background-color: #EBEBEB;
        margin-top: 30px;
        height: 25px;
    }

    .p a {
        text-decoration: none;
        color: #07467C;
    }

    .h a {
        color: #0746A6;
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


    
<span class="p"><a href="/transactions/new">Add transaction</a></span>
<div style="margin-top:20px">
    <table class="table table-border table-bordered table-bg table-hover table-sort"
           text-align="center" id="idTblTrans">
        <thead class="panel panel-primary ">
        <tr class="text-c">
            <th >Trans.Date</th>
            <th >Settlement Date</th>
            <th >OSFI Match? (Teller)</th>
            <th >Trans. Number</th>
            <th >Type</th>
            <th >Location</th>
            <th >Customer</th>
            <th >Amount IN</th>
            <th >Rate</th>
            <th >Amount OUT</th>
            <th >Details</th>
            <th >Action</th>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): if( count($data)==0 ) : echo "" ;else: foreach($data as $key=>$row): ?>
        <tr class="text-c">
            <td><?php echo $row['trans_date']; ?></td>
            <td><?php echo $row['settlement_date']; ?></td>
            <td><?php echo $row['osfi_match_str']; ?></td>
            <td><?php echo $row['trans_num']; ?></td>
            <td><?php echo $row['trans_type']; ?></td>
            <td><?php echo $row['location']; ?></td>
            <td><?php echo $row['customer']->cust_no.' '.$row['customer']->formatted_cust_name; ?></td>
            <td><?php echo $row['amount_in']; ?></td>
            <td><?php echo $row['rate']; ?></td>
            <td><?php echo $row['amount_out']; ?></td>
            <td class="h"><a href="/transactions/view/id/<?php echo $row['trans_id']; ?>">view</a></td>
            <td class="h"><a href="/transactions/edit/id/<?php echo $row['trans_id']; ?>">edit</a></td>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
</div>


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
            "aaSorting": [[0, "desc"]],//默认第几个排序
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







