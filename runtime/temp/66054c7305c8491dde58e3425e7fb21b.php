<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:87:"/Users/yhe/Projects/GHComp/public/../application/home/view/transactions/view_trans.html";i:1539061995;s:66:"/Users/yhe/Projects/GHComp/application/home/view/public/index.html";i:1539065316;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php echo $pageTitle; ?></title>

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
    

<script>
    $(function () {
        $("#tabs").tabs();
    });
</script>

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


    
<p class="aa"><a href="/transactions/index">Transactions</a>><a href="#"><?php echo $pageTitle; ?></a></p>
<h4><b><?php echo $pageTitle; ?></b></h4>

<div id="customerBlock">
    <h5 class="bg-info">Customer account</h5>
    <div class="container">
        <div class="row">
            <div class="col-2 shadow-sm mb-1 bg-light rounded font-weight-bold">
                Customer ID
            </div>
            <div class="col mb-1">
                <?php echo $data->customer->cust_no; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Customer role
            </div>
            <div class="col mb-1">
                <?php echo $data->cust_role_str; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Date of birth
            </div>
            <div class="col mb-1">
                <?php echo $data->customer->date_of_birth; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-2 shadow-sm mb-1 bg-light rounded font-weight-bold">
                Last name
            </div>
            <div class="col mb-1">
                <?php echo $data->customer->last_name; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                First name
            </div>
            <div class="col mb-1">
                <?php echo $data->customer->first_name; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Initials
            </div>
            <div class="col mb-1">
                <?php echo $data->customer->initials; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-2 shadow-sm mb-1 bg-light rounded font-weight-bold">
                Address
            </div>
            <div class="col-6 mb-1">
                <?php echo $data->customer->address; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Postal code
            </div>
            <div class="col mb-1">
                <?php echo $data->customer->postal_code; ?>
            </div>
        </div>
        <div class="row">
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                City
            </div>
            <div class="col mb-1">
                <?php echo $data->customer->city; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Province
            </div>
            <div class="col mb-1">
                <?php echo $data->customer->province; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Country
            </div>
            <div class="col mb-1">
                <?php echo $data->customer->country; ?>
            </div>
        </div>
        <div class="row">
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Phone 1
            </div>
            <div class="col mb-1">
                <?php echo $data->customer->phone1; ?>(<?php echo $data->customer->phone1_type; ?>)
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Phone 2
            </div>
            <div class="col mb-1">
                <?php if($data->customer->phone2 != null){?>
                <?php echo $data->customer->phone2; ?>(<?php echo $data->customer->phone2_type; ?>)
                <?php }?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Email
            </div>
            <div class="col mb-1">
                <?php echo $data->customer->email; ?>
            </div>
        </div>
        <div class="row">
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Document type
            </div>
            <div class="col mb-1">
                <?php echo $data->customer->docType->name; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Document number
            </div>
            <div class="col mb-1">
                <?php echo $data->customer->doc_no; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Expiration date
            </div>
            <div class="col mb-1">
                <?php echo $data->customer->expire_date; ?>
            </div>
        </div>
        <div class="row">
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Place of issue
            </div>
            <div class="col mb-1">
                <?php echo $data->customer->issue_place; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Frequency
            </div>
            <div class="col mb-1">
                <?php echo $data->customer->frequency; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Average amount
            </div>
            <div class="col mb-1">
                <?php echo $data->customer->ave_amt; ?>
            </div>
        </div>
        <div class="row">
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Occupation
            </div>
            <div class="col mb-1">
                <?php echo $data->customer->occupation; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Purpose
            </div>
            <div class="col-6 mb-1">
                <?php echo $data->customer->purpose; ?>
            </div>
        </div>
    </div>

</div>

<div id="transactionBlock">
    <h5 class="bg-info">Transaction details</h5>
    <div class="container">

        <div class="row">
            <div class="col-2 shadow-sm mb-1 bg-light rounded font-weight-bold">
                Trans number
            </div>
            <div class="col mb-1">
                <?php echo $data->trans_num; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Trans date
            </div>
            <div class="col mb-1">
                <?php echo $data->trans_date; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Trans time
            </div>
            <div class="col mb-1">
                <?php echo $data->trans_time; ?>
            </div>
        </div>
        <div class="row">
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Settlement date
            </div>
            <div class="col mb-1">
                <?php echo $data->settlement_date; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Location
            </div>
            <div class="col mb-1">
                <?php echo $data->location; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Tran type
            </div>
            <div class="col mb-1">
                <?php echo $data->trans_type; ?>
            </div>
        </div>
        <div class="row">
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Amount in
            </div>
            <div class="col mb-1">
                <?php echo $data->amount_in_str; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Currency in
            </div>
            <div class="col mb-1">
                <?php echo $data->curr_in; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Method in
            </div>
            <div class="col mb-1">
                <?php echo $data->method_in; ?>
            </div>
        </div>
        <div class="row">
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Amount out
            </div>
            <div class="col mb-1">
                <?php echo $data->amount_out; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Currency out
            </div>
            <div class="col mb-1">
                <?php echo $data->curr_out; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Method out
            </div>
            <div class="col mb-1">
                <?php echo $data->method_out; ?>
            </div>
        </div>
        <div class="row">
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                CAD amount
            </div>
            <div class="col mb-1">
                <?php echo $data->cad_amount; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Rate
            </div>
            <div class="col-6 mb-1">
                <?php echo $data->rate; ?>
            </div>
        </div>
        <div class="row">
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Fees
            </div>
            <div class="col mb-1">
                <?php echo $data->fee; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Fees method
            </div>
            <div class="col mb-1">
                <?php echo $data->fee_method; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Fee notes
            </div>
            <div class="col mb-1">
                <?php echo $data->fee_notes; ?>
            </div>
        </div>
        <div class="row">
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Purpose
            </div>
            <div class="col mb-1">
                <?php echo $data->purpose; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Source
            </div>
            <div class="col-6 mb-1">
                <?php echo $data->source; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-2 shadow-sm mb-1 bg-light rounded font-weight-bold">
                Notes
            </div>
            <div class="col mb-1">
                <?php echo $data->notes; ?>
            </div>
        </div>
    </div>
</div>

<?php if ($data->cust_role === "B"){?>
<div id="senderBlock">
    <h5 class="bg-info">Sender info</h5>
    <div class="container">
        <div class="row">
            <div class="col-2 shadow-sm mb-1 bg-light rounded font-weight-bold">
                Relationship with beneficiary
            </div>
            <div class="col mb-1">
                <?php echo $data->sender_relation; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-2 shadow-sm mb-1 bg-light rounded font-weight-bold">
                Last name
            </div>
            <div class="col mb-1">
                <?php echo $data->sender->last_name; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                First name
            </div>
            <div class="col mb-1">
                <?php echo $data->sender->first_name; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Initials
            </div>
            <div class="col mb-1">
                <?php echo $data->sender->initials; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-2 shadow-sm mb-1 bg-light rounded font-weight-bold">
                Address
            </div>
            <div class="col-6 mb-1">
                <?php echo $data->sender->address; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Postal code
            </div>
            <div class="col mb-1">
                <?php echo $data->sender->postal_code; ?>
            </div>
        </div>
        <div class="row">
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                City
            </div>
            <div class="col mb-1">
                <?php echo $data->sender->city; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Province
            </div>
            <div class="col mb-1">
                <?php echo $data->sender->province; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Country
            </div>
            <div class="col mb-1">
                <?php echo $data->sender->country; ?>
            </div>
        </div>
        <div class="row">
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Phone
            </div>
            <div class="col mb-1">
                <?php echo $data->sender->phone1; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Occupation
            </div>
            <div class="col mb-1">
                <?php echo $data->sender->occupation; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Date of birth
            </div>
            <div class="col mb-1">
                <?php echo $data->sender->date_of_birth; ?>
            </div>
        </div>
        <div class="row">
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Document type
            </div>
            <div class="col mb-1">
                <?php echo $data->sender->docType->name; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Document number
            </div>
            <div class="col-6 mb-1">
                <?php echo $data->sender->doc_no; ?>
            </div>
        </div>
    </div>
</div>
<?php }if ($data->has_sender_third === "true") {?>
<div id="senderThirdBlock">
    <h5 class="bg-info">Sender's third party info</h5>
    <div class="container">
        <div class="row">
            <div class="col-2 shadow-sm mb-1 bg-light rounded font-weight-bold">
                Relationship with sender
            </div>
            <div class="col mb-1">
            </div>
        </div>
        <div class="row">
            <div class="col-2 shadow-sm mb-1 bg-light rounded font-weight-bold">
                Last name
            </div>
            <div class="col mb-1">
                <?php echo $data->sender_third->last_name; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                First name
            </div>
            <div class="col mb-1">
                <?php echo $data->sender_third->first_name; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Initials
            </div>
            <div class="col mb-1">
                <?php echo $data->sender_third->initials; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-2 shadow-sm mb-1 bg-light rounded font-weight-bold">
                Address
            </div>
            <div class="col-6 mb-1">
                <?php echo $data->sender_third->address; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Postal code
            </div>
            <div class="col mb-1">
                <?php echo $data->sender_third->postal_code; ?>
            </div>
        </div>
        <div class="row">
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                City
            </div>
            <div class="col mb-1">
                <?php echo $data->sender_third->city; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Province
            </div>
            <div class="col mb-1">
                <?php echo $data->sender_third->province; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Country
            </div>
            <div class="col mb-1">
                <?php echo $data->sender_third->country; ?>
            </div>
        </div>
        <div class="row">
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Phone
            </div>
            <div class="col mb-1">
                <?php echo $data->sender_third->phone1; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Occupation
            </div>
            <div class="col mb-1">
                <?php echo $data->sender_third->occupation; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Date of birth
            </div>
            <div class="col mb-1">
                <?php echo $data->sender_third->date_of_birth; ?>
            </div>
        </div>
        <div class="row">
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Document type
            </div>
            <div class="col mb-1">
                <?php echo $data->sender_third->docType->name; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Document number
            </div>
            <div class="col-6 mb-1">
                <?php echo $data->sender_third->doc_no; ?>
            </div>
        </div>
    </div>
</div>
<?php }if ($data->cust_role === "S"){?>
<div id="benBlock">
    <h5 class="bg-info">Beneficiary info</h5>
    <div class="container">
        <div class="row">
            <div class="col-2 shadow-sm mb-1 bg-light rounded font-weight-bold">
                Relationship with sender
            </div>
            <div class="col mb-1">
                <?php echo $data->ben_relation; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-2 shadow-sm mb-1 bg-light rounded font-weight-bold">
                Last name
            </div>
            <div class="col mb-1">
                <?php echo $data->ben->last_name; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                First name
            </div>
            <div class="col mb-1">
                <?php echo $data->ben->first_name; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Initials
            </div>
            <div class="col mb-1">
                <?php echo $data->ben->initials; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-2 shadow-sm mb-1 bg-light rounded font-weight-bold">
                Address
            </div>
            <div class="col-6 mb-1">
                <?php echo $data->ben->address; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Postal code
            </div>
            <div class="col mb-1">
                <?php echo $data->ben->postal_code; ?>
            </div>
        </div>
        <div class="row">
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                City
            </div>
            <div class="col mb-1">
                <?php echo $data->ben->city; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Province
            </div>
            <div class="col mb-1">
                <?php echo $data->ben->province; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Country
            </div>
            <div class="col mb-1">
                <?php echo $data->ben->country; ?>
            </div>
        </div>
        <div class="row">
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Phone
            </div>
            <div class="col mb-1">
                <?php echo $data->ben->phone1; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Occupation
            </div>
            <div class="col mb-1">
                <?php echo $data->ben->occupation; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Date of birth
            </div>
            <div class="col mb-1">
                <?php echo $data->ben->date_of_birth; ?>
            </div>
        </div>
        <div class="row">
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Document type
            </div>
            <div class="col mb-1">
                <?php echo $data->ben->docType->name; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Document number
            </div>
            <div class="col-6 mb-1">
                <?php echo $data->ben->doc_no; ?>
            </div>
        </div>
    </div>
</div>
<?php }if ($data->has_ben_third === "true") {?>
<div id="benThirdBlock">
    <h5 class="bg-info">Beneficiary's third party info</h5>
    <div class="container">
        <div class="row">
            <div class="col-2 shadow-sm mb-1 bg-light rounded font-weight-bold">
                Relationship with beneficiary
            </div>
            <div class="col mb-1">
                <?php echo $data->ben_third_relation; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-2 shadow-sm mb-1 bg-light rounded font-weight-bold">
                Last name
            </div>
            <div class="col mb-1">
                <?php echo $data->ben_third->last_name; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                First name
            </div>
            <div class="col mb-1">
                <?php echo $data->ben_third->first_name; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Initials
            </div>
            <div class="col mb-1">
                <?php echo $data->ben_third->initials; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-2 shadow-sm mb-1 bg-light rounded font-weight-bold">
                Address
            </div>
            <div class="col-6 mb-1">
                <?php echo $data->ben_third->address; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Postal code
            </div>
            <div class="col mb-1">
                <?php echo $data->ben_third->postal_code; ?>
            </div>
        </div>
        <div class="row">
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                City
            </div>
            <div class="col mb-1">
                <?php echo $data->ben_third->city; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Province
            </div>
            <div class="col mb-1">
                <?php echo $data->ben_third->province; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Country
            </div>
            <div class="col mb-1">
                <?php echo $data->ben_third->country; ?>
            </div>
        </div>
        <div class="row">
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Phone
            </div>
            <div class="col mb-1">
                <?php echo $data->ben_third->phone1; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Occupation
            </div>
            <div class="col mb-1">
                <?php echo $data->ben_third->occupation; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Date of birth
            </div>
            <div class="col mb-1">
                <?php echo $data->ben_third->date_of_birth; ?>
            </div>
        </div>
        <div class="row">
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Document type
            </div>
            <div class="col mb-1">
                <?php echo $data->ben_third->docType->name; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Document number
            </div>
            <div class="col-6 mb-1">
                <?php echo $data->ben_third->doc_no; ?>
            </div>
        </div>
    </div>
</div>
<?php }if ($data->has_bank === "true") {?>
<div id="bankBlock">
    <h5 class="bg-info">Financial institution</h5>
    <div class="container">
        <div class="row">
            <div class="col-2 shadow-sm mb-1 bg-light rounded font-weight-bold">
                Bank account number
            </div>
            <div class="col mb-1">
                <?php echo $data->account_no; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-2 shadow-sm mb-1 bg-light rounded font-weight-bold">
                Bank name
            </div>
            <div class="col mb-1">
                <?php echo $data->bank->name; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-2 shadow-sm mb-1 bg-light rounded font-weight-bold">
                Address
            </div>
            <div class="col-6 mb-1">
                <?php echo $data->bank->street; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Postal code
            </div>
            <div class="col mb-1">
                <?php echo $data->bank->postal_code; ?>
            </div>
        </div>
        <div class="row">
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                City
            </div>
            <div class="col mb-1">
                <?php echo $data->bank->city; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Province
            </div>
            <div class="col mb-1">
                <?php echo $data->bank->province; ?>
            </div>
            <div class="col shadow-sm mb-1 bg-light rounded font-weight-bold">
                Country
            </div>
            <div class="col mb-1">
                <?php echo $data->bank->country; ?>
            </div>
        </div>
    </div>
</div>
<?php }?>
<!--TODO AML quesiton-->

<div class="kn-section-break"></div>
<p class="text-center">
    <a class="btn btn-primary">Edit</a>
</p>


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


<script>


</script>



</html>







