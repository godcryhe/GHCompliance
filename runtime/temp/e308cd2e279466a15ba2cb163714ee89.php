<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:87:"/Users/yhe/Projects/GHComp/public/../application/home/view/transactions/edit_trans.html";i:1539064245;s:66:"/Users/yhe/Projects/GHComp/application/home/view/public/index.html";i:1539065316;}*/ ?>
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
    
<style>

</style>
<script>
    $(function () {
        $("#tabs").tabs();
    });

    $(function () {
        if ("<?php echo $pageMode; ?>" == "new") {
            $("#custKey").autocomplete({
                minLength: 0,
                source: "/transactions/searchcustomer",
                focus: function (event, ui) {
                    $("#custKey").val(ui.item.label);
                    return false;
                },
                select: function (event, ui) {
                    $("#custKey").val(ui.item.label);
                    $("#customer-description").html(ui.item.desc);
                    $("#cust_id").val(ui.item.value);
                    return false;
                }
            })
                .autocomplete("instance")._renderItem = function (ul, item) {
                return $("<li>")
                    .append("<div>" + item.label + "<br>" + item.desc + "</div>")
                    .appendTo(ul);
            };
        }

    });

    $(function () {
        $("#transDate").datepicker({
            dateFormat: "yy-mm-dd"
        });
        if ("<?php echo $pageMode; ?>" == "new") {
            $("#transDate").datepicker("setDate", new Date());
        };

        $("#settleDate").datepicker({
            dateFormat: "yy-mm-dd"
        });

        $('#transTime').timepicker({
            'timeFormat': 'H:i:s'
        });
        if ("<?php echo $pageMode; ?>" == "new") {
            $('#transTime').timepicker("setTime", new Date());
        };

        $("#sen_dob").datepicker({
            dateFormat: "yy-mm-dd"
        });
        $("#sen_3rd_dob").datepicker({
            dateFormat: "yy-mm-dd"
        });
        $("#ben_dob").datepicker({
            dateFormat: "yy-mm-dd"
        });
        $("#ben_3rd_dob").datepicker({
            dateFormat: "yy-mm-dd"
        });
    });

    $(function () {
        if ("<?php echo $data->cust_role; ?>" == "S") {
            $("#senderBlock").addClass("none");
        } else {
            $("#benBlock").addClass("none");
        }
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


    
<p class="aa"><a href="/transactions/index">Transactions</a>><span><?php echo $pageTitle; ?></span></p>
<h4><b><?php echo $pageTitle; ?></b></h4>
<form id="form-admin-add" action="<?php echo $action; ?>" method="post"
      enctype="multipart/form-data">
    <!--Primary key-->
    <?php if ($pageMode === "edit"){?>
    <input id="trans_id" type="hidden" name="trans_id" value="<?php echo $data->trans_id; ?>">
    <?php }?>

    <h4>Customer account</h4>
    <?php if ($pageMode === "new"){?>
    <ul class="kn-form-group columns kn-form-group-1">
        <li class="kn-form-col column is-constrained">
            <div class="kn-input kn-input-short_text control">
                <label for="custKey" class="kn-label"><span>Select</span></label>
                <div class="control">
                    <input class="input" id="custKey" name="" type="text" value="" required>
                    <input id="cust_id" name="cust_id" type="hidden">
                    <p id="customer-description">You can enter customer's number or name to search</p>
                </div>
            </div>
            <div class="kn-input kn-input-multiple_choice control">

                <label for="custRole" class="kn-label"><span>Customer role:</span></label>

                <div class="kn-select">
                    <div class="kn-select">
                        <select data-placeholder="Select" id="custRole" name="cust_role"
                                style="vertical-align: bottom;" class="select">
                            <option value="S">Sender</option>
                            <option value="B">Beneficiary</option>
                        </select>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <?php }?>
    <!--Customer account information-->
    <?php if ($pageMode === "edit") {?>
    <input type="hidden" name="cust_role" value="<?php echo $data->cust_role; ?>">
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
    <?php }?>

    &nbsp;

    <div id="tabs">
        <ul>
            <li><a href="#tabs-basic">Basic</a></li>
            <li><a href="#tabs-amount">Amount</a></li>
            <li><a href="#tabs-sender">Sender</a></li>
            <li><a href="#tabs-beneficiary">Beneficiary</a></li>
            <li><a href="#tabs-financial">Financial institution</a></li>
            <li><a href="#tabs-amlQuestion">AML Question</a></li>
        </ul>
        <div id="tabs-basic">
            <div class="container">
                <div class="row align-items-end">
                    <!--Transaction date-->
                    <div class="col-3">
                        <label for="transDate" class="kn-label">
                            Trans. Date<span class="kn-required">*</span>
                        </label>
                        <!--TODO Apply input mask by RobinHerbots-->
                        <input id="transDate" name="trans_date" type="text" class="input" value="<?php echo $data->trans_date; ?>">
                    </div>
                    <!--Transaction time-->
                    <div class="col-3">
                        <label for="transTime" class="kn-label"></label>
                        <input id="transTime" name="trans_time" type="text" class="input" value="<?php echo $data->trans_time; ?>">
                    </div>
                    <!--Transaction NO-->
                    <div class="col-6">
                        <label for="transNo" class="kn-label">
                            Trans. Number<span class="kn-required">*</span>
                        </label>
                        <input class="input" id="transNo" name="trans_num" type="text" value="<?php echo $data->trans_num; ?>">
                    </div>
                </div>
                <div class="row">
                    <!--Settlement date-->
                    <div class="col">
                        <label for="settleDate" class="kn-label">Settlement Date</label>
                        <input id="settleDate" name="settlement_date" type="text" class="knack-date input control"
                               value="<?php echo $data->settlement_date; ?>">
                    </div>
                    <!--Location-->
                    <div class="col">
                        <label for="location" class="kn-label">Location<span class="kn-required">*</span></label>
                        <div class="kn-select">
                            <select data-placeholder="Select" id="location" name="location"
                                    style="vertical-align: bottom;" class="select">
                                <option value="" selected="">Select...</option>
                                <option value=""></option>
                                <option value="North York">North York</option>
                                <option value="Markham">Markham</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!--Transaction type-->
                    <div class="col">
                        <label for="transType" class="kn-label"><span>Transaction type</span> <span
                                class="kn-required">*</span></label>
                        <div class="kn-select">
                            <select data-placeholder="Select" id="transType" name="trans_type"
                                    style="vertical-align: bottom;"
                                    class="select">
                                <option value="" selected=""></option>
                                <option value="EFTI">Incoming EFT</option>
                                <option value="EFTO">Outgoing EFT</option>
                                <option value="FX">Currency exchange</option>
                            </select>
                        </div>
                    </div>
                    <!--IB code-->
                    <div class="col">
                        <label for="IBCode" class="kn-label"><span>IB Code</span></label>
                        <input class="input" id="IBCode" name="ib_code" type="text" value="<?php echo $data->ib_code; ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="kn-section-break"></div>
                    </div>
                </div>

            </div>
        </div>
        <div id="tabs-amount">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h5>We received</h5>
                    </div>
                    <div class="col">
                        <h5>We disbursed</h5>
                    </div>
                </div>
                <div class="row">
                    <!--Received Currency-->
                    <div class="col">
                        <label for="recCurrency" class="kn-label"><span>Currency</span> <span
                                class="kn-required">*</span></label>
                        <div class="kn-select">
                            <select data-placeholder="Select" id="recCurrency" name="curr_in"
                                    style="vertical-align: bottom;" class="select">
                                <option value="" selected=""></option>
                                <option value="CAD">CAD</option>
                                <option value="CNY">CNY</option>
                                <option value="USD">USD</option>
                                <option value="NZD">NZD</option>
                                <option value="HKD">HKD</option>
                                <option value="SGP">SGP</option>
                                <option value="AUD">AUD</option>
                                <option value="EUR">EUR</option>
                                <option value="GBP">GBP</option>
                                <option value="GBP">GBP</option>
                                <option value="GPD">GPD</option>
                                <option value="MMM">MMM</option>
                            </select>
                        </div>
                        <!--TODO-->
                        <!--<a href="#" class="kn-add-option" title="Add a new option">-->
                        <!--<i class="fa fa-plus-circle"></i> Add a new option-->
                        <!--</a>                        -->
                    </div>
                    <!--Disbursed currency-->
                    <div class="col">
                        <label for="disbCurrency" class="kn-label">Currency<span class="kn-required">*</span></label>
                        <div class="kn-select">
                            <select data-placeholder="Select" id="disbCurrency" name="curr_out"
                                    style="vertical-align: bottom;" class="select">
                                <option value="" selected=""></option>
                                <option value="CAD">CAD</option>
                                <option value="CNY">CNY</option>
                                <option value="USD">USD</option>
                                <option value="NZD">NZD</option>
                                <option value="HKD">HKD</option>
                                <option value="SGP">SGP</option>
                                <option value="AUD">AUD</option>
                                <option value="EUR">EUR</option>
                                <option value="GBP">GBP</option>
                                <option value="GBP">GBP</option>
                                <option value="GPD">GPD</option>
                                <option value="MMM">MMM</option>
                            </select>
                        </div>
                        <!--TODO-->
                        <!--<a href="#" class="kn-add-option" title="Add a new option">-->
                        <!--<i class="fa fa-plus-circle"></i> Add a new option-->
                        <!--</a>                        -->
                    </div>
                </div>
                <div class="row">
                    <!--Received amount-->
                    <div class="col">
                        <label for="rec_amount" class="kn-label"><span>Amount</span> <span class="kn-required">*</span></label>
                        <div class="control">
                            <input class="input" id="rec_amount" name="amount_in" type="text"
                                   value="<?php echo $data->amount_in; ?>">
                        </div>
                    </div>
                    <!--Disbursed amount-->
                    <div class="col">
                        <label for="disb_amount" class="kn-label"><span>Amount</span> <span class="kn-required">*</span></label>
                        <div class="control">
                            <input class="input" id="disb_amount" name="amount_out" type="text"
                                   value="<?php echo $data->amount_out; ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!--Received method-->
                    <div class="col">
                        <label for="recMethod" class="kn-label"><span>Received as</span> <span
                                class="kn-required">*</span></label>
                        <div class="kn-select">
                            <select data-placeholder="Select" id="recMethod" name="method_in"
                                    style="vertical-align: bottom;"
                                    class="select">
                                <option value="" selected=""></option>
                                <option value="Cash">Cash</option>
                                <option value="Bank Transfer">Bank Transfer</option>
                                <option value="Bank Draft">Bank Draft</option>
                                <option value="Bank Card">Bank Card</option>
                                <option value="Email Transfer">Email Transfer</option>
                                <option value="Cheque">Cheque</option>
                                <option value="Wire">Wire</option>
                                <option value="WECHAT">WECHAT</option>
                            </select>
                        </div>
                        <!--TODO-->
                        <!--<a href="#" class="kn-add-option" title="Add a new option">-->
                        <!--<i class="fa fa-plus-circle"></i> Add a new option-->
                        <!--</a>-->
                    </div>
                    <!--Disbursed method-->
                    <div class="col">
                        <label for="disbMethod" class="kn-label"><span>Disbursed as</span> <span
                                class="kn-required">*</span></label>
                        <div class="kn-select">
                            <select data-placeholder="Select" id="disbMethod" name="method_out"
                                    style="vertical-align: bottom;"
                                    class="select">
                                <option value="" selected=""></option>
                                <option value="Cash">Cash</option>
                                <option value="Bank Transfer">Bank Transfer</option>
                                <option value="Bank Draft">Bank Draft</option>
                                <option value="Bank Card">Bank Card</option>
                                <option value="Email Transfer">Email Transfer</option>
                                <option value="Cheque">Cheque</option>
                                <option value="Wire">Wire</option>
                                <option value="WECHAT">WECHAT</option>
                            </select>
                        </div>
                        <!--TODO-->
                        <!--<a href="#" class="kn-add-option" title="Add a new option">-->
                        <!--<i class="fa fa-plus-circle"></i> Add a new option-->
                        <!--</a>-->
                    </div>
                </div>
                <div class="row">
                    <!--Description for received-->
                    <div class="col">
                        <label for="rec_desc" class="kn-label"><span>Description</span></label>
                        <textarea class="kn-textarea" id="rec_desc"
                                  name="method_in_notes"><?php echo $data->method_in_notes; ?></textarea>
                    </div>
                    <!--Description for disbursed-->
                    <div class="col">
                        <label for="disb_desc" class="kn-label"><span>Description</span></label>
                        <textarea class="kn-textarea" id="disb_desc"
                                  name="method_out_notes"><?php echo $data->method_out_notes; ?></textarea>
                    </div>
                </div>
                <div class="row">
                    <!--Exchange rate-->
                    <div class="col">
                        <label for="rate" class="kn-label"><span>Exchange rate</span> <span class="kn-required">*</span></label>
                        <input class="input" id="rate" name="rate" type="text" value="<?php echo $data->rate; ?>">
                    </div>
                    <!--CAD amount-->
                    <div class="col">
                        <label for="cad_amount" class="kn-label"><span>CAD amount</span> <span
                                class="kn-required">*</span></label>
                        <input class="input" id="cad_amount" name="cad_amount" type="text" value="<?php echo $data->cad_amount; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h5>Fees charged</h5>
                    </div>
                </div>
                <div class="row">
                    <!--Fee amount-->
                    <div class="col">
                        <label for="fee_amount" class="kn-label"><span>Fee amount</span> <span
                                class="kn-required">*</span></label>
                        <div class="control">
                            <input class="input" id="fee_amount" name="fee" type="text" value="<?php echo $data->fee; ?>">
                        </div>
                    </div>
                    <!--Fee paid as-->
                    <div class="col">
                        <label for="feeMethod" class="kn-label"><span>Paid as</span> <span
                                class="kn-required">*</span></label>
                        <div class="kn-select">
                            <select data-placeholder="Select" id="feeMethod" name="fee_method"
                                    style="vertical-align: bottom;"
                                    class="select">
                                <option value="" selected=""></option>
                                <option value="Cash">Cash</option>
                                <option value="Bank Transfer">Bank Transfer</option>
                                <option value="Bank Draft">Bank Draft</option>
                                <option value="Bank Card">Bank Card</option>
                                <option value="Email Transfer">Email Transfer</option>
                                <option value="Cheque">Cheque</option>
                                <option value="Wire">Wire</option>
                                <option value="WECHAT">WECHAT</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!--Description for fee-->
                    <div class="col">
                        <label for="fee_desc" class="kn-label"><span>Description</span></label>
                        <textarea class="kn-textarea" id="fee_desc" name="fee_notes"><?php echo $data->fee_notes; ?></textarea>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </div>
        <div id="tabs-sender">
            <div id="senderBlock">
                <h4>Sender</h4>
                <input type="hidden" name="sender_id" value="<?php echo $data->sender_id; ?>">
                <div class="container">
                    <div class="row">
                        <!--Sender relationship-->
                        <div class="col">
                            <label for="sen_relation" class="kn-label"><span>Relationship with beneficiary</span><span
                                    class="kn-required"> *</span></label>
                            <input class="input" id="sen_relation" name="sender_relation" type="text"
                                   value="<?php echo $data->sender_relation; ?>">
                        </div>
                        <div class="col">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col"></div>
                    </div>
                </div>
                <div class="kn-section-break"></div>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary active">
                        <input type="radio" name="senderOptions" value="exist" autocomplete="off" checked> Existing
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="senderOptions" value="new" autocomplete="off"> New
                    </label>
                </div>
                <div class="container" id="existSenderBlock">
                    <!--Exist sender for new-->
                    <?php if ($pageMode === "new") {?>
                    <div class="row">
                        <!--Sender-->
                        <div class="col">
                            <label for="sender" class="kn-label"><span>Sender</span></label>
                            <input class="input" id="sender" name="" type="text" value="">
                            <input id="sender_id" name="sender_id" type="hidden">
                            <p id="sender-description">You can enter sender's name to search</p>
                        </div>
                        <div class="col">

                        </div>
                    </div>
                    <?php }?>
                    <div class="kn-section-break"></div>
                    <!--Exist sender for edit-->
                    <?php if ($pageMode === "edit") {?>
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

                    <?php }?>
                </div>
                <div class="container none" id="newSenderBlock">
                    <div class="row">
                        <!--Sender first name-->
                        <div class="col">
                            <label for="sen_firstName" class="kn-label"><span>First name</span><span
                                    class="kn-required"> *</span></label>
                            <input class="input" id="sen_firstName" name="sen_first_name" type="text" value="">
                        </div>
                        <!--Sender last name-->
                        <div class="col">
                            <label for="sen_lastName" class="kn-label"><span>Last name</span><span
                                    class="kn-required"> *</span></label>
                            <input class="input" id="sen_lastName" name="sen_last_name" type="text" value="">
                        </div>
                        <!--Sender initials-->
                        <div class="col">
                            <label for="sen_init" class="kn-label"><span>Initials</span></label>
                            <input class="input" id="sen_init" name="sen_initials" type="text" value="">
                        </div>
                    </div>
                    <div class="row">
                        <!--Sender address-->
                        <div class="col">
                            <label for="sen_address" class="kn-label"><span>Address</span></label>
                            <input class="input" id="sen_address" name="sen_address" type="text" value="">
                        </div>
                    </div>
                    <div class="row">
                        <!--Sender city-->
                        <div class="col">
                            <label for="sen_city" class="kn-label"><span>City</span></label>
                            <input class="input" id="sen_city" name="sen_city" type="text" value="">
                        </div>
                        <!--Sender province-->
                        <div class="col">
                            <label for="sen_province" class="kn-label"><span>Province</span></label>
                            <input class="input" id="sen_province" name="sen_province" type="text" value="">
                        </div>
                        <!--Sender country-->
                        <div class="col">
                            <label for="sen_country" class="kn-label"><span>Country</span></label>
                            <input class="input" id="sen_country" name="sen_country" type="text" value="">
                        </div>
                        <!--Sender postal code-->
                        <div class="col">
                            <label for="sen_postal" class="kn-label"><span>Postal code</span></label>
                            <input class="input" id="sen_postal" name="sen_postal_code" type="text" value="">
                        </div>
                    </div>
                    <div class="row">
                        <!--Sender phone-->
                        <div class="col">
                            <label for="sen_phone" class="kn-label"><span>Phone number</span></label>
                            <input class="input" id="sen_phone" name="sen_phone1" type="text" value="">
                        </div>
                        <!--Sender occupation-->
                        <div class="col">
                            <label for="sen_occupation" class="kn-label"><span>Occupation</span></label>
                            <input class="input" id="sen_occupation" name="sen_occupation" type="text" value="">
                        </div>
                        <!--Sender date of birth-->
                        <div class="col">
                            <label for="sen_dob" class="kn-label"><span>Date of birth</span></label>
                            <input class="input" id="sen_dob" name="sen_date_of_birth" type="text" value="">
                        </div>
                    </div>
                    <div class="row">
                        <!--Sender ID type-->
                        <div class="col">
                            <label for="sen_idType" class="kn-label"><span>ID type</span></label>
                            <div class="kn-select">
                                <select name="sen_doc_type" style="vertical-align: bottom;"
                                        id="sen_idType"
                                        class="select">
                                    <option value=""></option>
                                    <?php if(is_array($idTypes) || $idTypes instanceof \think\Collection || $idTypes instanceof \think\Paginator): if( count($idTypes)==0 ) : echo "" ;else: foreach($idTypes as $key=>$row): ?>
                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                        </div>
                        <!--Sender ID number-->
                        <div class="col">
                            <label for="sen_idNum" class="kn-label"><span>ID Number</span></label>
                            <input class="input" id="sen_idNum" name="sen_doc_no" type="text" value="">
                        </div>
                    </div>
                </div>
            </div>
            <h4>Does sender has third party?</h4>

            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-secondary active">
                    <input type="radio" name="senderThirdParty" value="N" autocomplete="off" checked id="senderThirdNo">
                    No
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="senderThirdParty" value="Y" autocomplete="off" id="senderThirdYes"> Yes
                </label>
            </div>
            <div id="senThirdPartyBlock" class="none">
                <div class="kn-section-break"></div>

                <div class="container">
                    <div class="row">
                        <!--Sender 3rd relationship-->
                        <div class="col">
                            <label for="sen_3rd_relation" class="kn-label"><span>Relationship with sender</span><span
                                    class="kn-required"> *</span></label>
                            <input class="input" id="sen_3rd_relation" name="sender_third_relation" type="text"
                                   value="<?php echo $data->sender_third_relation; ?>">
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="kn-section-break"></div>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary active">
                        <input type="radio" name="sender3rdOptions" value="exist" autocomplete="off" checked> Existing
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="sender3rdOptions" value="new" autocomplete="off"> New
                    </label>
                </div>
                <div class="kn-section-break"></div>
                <div class="container" id="existSender3rdBlock">
                    <?php if($pageMode === "new" ){?>
                    <div class="row">
                        <!--Sender third party-->
                        <div class="col">
                            <label for="sender3rd" class="kn-label"><span>Sender's third party</span></label>
                            <input class="input" id="sender3rd" name="" type="text" value="">
                            <input id="sender3rd_id" name="sender_third_id" type="hidden">
                            <p id="sender-3rd-description">You can enter sender's third party's name to search</p>
                        </div>
                        <div class="col">

                        </div>
                    </div>
                    <?php }if($pageMode === "edit" and ($data->has_sender_third === "true")){?>
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
                    <?php }?>
                </div>
                <div class="container none" id="newSender3rdBlock">

                    <div class="row">
                        <!--Sender 3rd first name-->
                        <div class="col">
                            <label for="sen_3rd_firstName" class="kn-label"><span>First name</span><span
                                    class="kn-required"> *</span></label>
                            <input class="input" id="sen_3rd_firstName" name="sen_3rd_first_name" type="text" value="">
                        </div>
                        <!--Sender 3rd last name-->
                        <div class="col">
                            <label for="sen_3rd_lastName" class="kn-label"><span>Last name</span><span
                                    class="kn-required"> *</span></label>
                            <input class="input" id="sen_3rd_lastName" name="sen_3rd_last_name" type="text" value="">
                        </div>
                        <!--Sender 3rd initials-->
                        <div class="col">
                            <label for="sen_3rd_init" class="kn-label"><span>Initials</span></label>
                            <input class="input" id="sen_3rd_init" name="sen_3rd_initials" type="text" value="">
                        </div>
                    </div>
                    <div class="row">
                        <!--Sender 3rd address-->
                        <div class="col">
                            <label for="sen_3rd_address" class="kn-label"><span>Address</span></label>
                            <input class="input" id="sen_3rd_address" name="sen_3rd_address" type="text" value="">
                        </div>
                    </div>
                    <div class="row">
                        <!--Sender 3rd city-->
                        <div class="col">
                            <label for="sen_3rd_city" class="kn-label"><span>City</span></label>
                            <input class="input" id="sen_3rd_city" name="sen_3rd_city" type="text" value="">
                        </div>
                        <!--Sender 3rd province-->
                        <div class="col">
                            <label for="sen_3rd_province" class="kn-label"><span>Province</span></label>
                            <input class="input" id="sen_3rd_province" name="sen_3rd_province" type="text" value="">
                        </div>
                        <!--Sender 3rd country-->
                        <div class="col">
                            <label for="sen_3rd_country" class="kn-label"><span>Country</span></label>
                            <input class="input" id="sen_3rd_country" name="sen_3rd_country" type="text" value="">
                        </div>
                        <!--Sender 3rd postal code-->
                        <div class="col">
                            <label for="sen_3rd_postal" class="kn-label"><span>Postal code</span></label>
                            <input class="input" id="sen_3rd_postal" name="sen_3rd_postal_code" type="text" value="">
                        </div>
                    </div>
                    <div class="row">
                        <!--Sender 3rd phone-->
                        <div class="col">
                            <label for="sen_3rd_phone" class="kn-label"><span>Phone number</span></label>
                            <input class="input" id="sen_3rd_phone" name="sen_3rd_phone1" type="text" value="">
                        </div>
                        <!--Sender 3rd occupation-->
                        <div class="col">
                            <label for="sen_3rd_occupation" class="kn-label"><span>Occupation</span></label>
                            <input class="input" id="sen_3rd_occupation" name="sen_3rd_occupation" type="text" value="">
                        </div>
                        <!--Sender 3rd date of birth-->
                        <div class="col">
                            <label for="sen_3rd_dob" class="kn-label"><span>Date of birth</span></label>
                            <input class="input" id="sen_3rd_dob" name="sen_3rd_date_of_birth" type="text" value="">
                        </div>
                    </div>
                    <div class="row">
                        <!--Sender 3rd ID type-->
                        <div class="col">
                            <label for="sen_3rd_idType" class="kn-label"><span>ID type</span></label>
                            <div class="kn-select">
                                <select name="sen_3rd_doc_type" style="vertical-align: bottom;"
                                        id="sen_3rd_idType"
                                        class="select">
                                    <option value=""></option>
                                    <?php if(is_array($idTypes) || $idTypes instanceof \think\Collection || $idTypes instanceof \think\Paginator): if( count($idTypes)==0 ) : echo "" ;else: foreach($idTypes as $key=>$row): ?>
                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                        </div>
                        <!--Sender 3rd ID number-->
                        <div class="col">
                            <label for="sen_idNum" class="kn-label"><span>ID Number</span></label>
                            <input class="input" id="sen_3rd_idNum" name="sen_3rd_doc_no" type="text" value="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tabs-beneficiary">
            <div id="benBlock">
                <h4>Beneficiary</h4>
                <input type="hidden" name="ben_id" value="<?php echo $data->ben_id; ?>">
                <div class="container">
                    <div class="row">
                        <!--Beneficiary relationship-->
                        <div class="col">
                            <label for="ben_relation" class="kn-label"><span>Relationship with sender</span><span
                                    class="kn-required"> *</span></label>
                            <input class="input" id="ben_relation" name="ben_relation" type="text" value="<?php echo $data->ben_relation; ?>">
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="kn-section-break"></div>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary active">
                        <input type="radio" name="benOptions" value="exist" autocomplete="off" checked> Existing
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="benOptions" value="new" autocomplete="off"> New
                    </label>
                </div>

                <div class="container" id="existBenBlock">
                    <?php if ($pageMode === "new") {?>
                    <div class="row">
                        <!--Beneficiary-->
                        <div class="col">
                            <label for="beneficiary" class="kn-label"><span>Beneficiary</span></label>
                            <input class="input" id="beneficiary" name="" type="text" value="">
                            <input id="ben_id" name="ben_id" type="hidden">
                            <p id="ben-description">You can enter beneficiary's name to search</p>
                        </div>
                        <div class="col">

                        </div>
                    </div>
                    <?php }?>
                    <div class="kn-section-break"></div>
                    <?php if ($pageMode === "edit") {?>
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

                    <?php }?>
                </div>
                <div class="container none" id="newBenBlock">
                    <div class="row">
                        <!--Beneficiary first name-->
                        <div class="col">
                            <label for="ben_firstName" class="kn-label"><span>First name</span><span
                                    class="kn-required"> *</span></label>
                            <input class="input" id="ben_firstName" name="ben_first_name" type="text" value="">
                        </div>
                        <!--Beneficiary last name-->
                        <div class="col">
                            <label for="ben_lastName" class="kn-label"><span>Last name</span><span
                                    class="kn-required"> *</span></label>
                            <input class="input" id="ben_lastName" name="ben_last_name" type="text" value="">
                        </div>
                        <!--Beneficiary initials-->
                        <div class="col">
                            <label for="ben_init" class="kn-label"><span>Initials</span></label>
                            <input class="input" id="ben_init" name="ben_initials" type="text" value="">
                        </div>
                    </div>
                    <div class="row">
                        <!--Beneficiary address-->
                        <div class="col">
                            <label for="ben_address" class="kn-label"><span>Address</span></label>
                            <input class="input" id="ben_address" name="ben_address" type="text" value="">
                        </div>
                    </div>
                    <div class="row">
                        <!--Beneficiary city-->
                        <div class="col">
                            <label for="ben_city" class="kn-label"><span>City</span></label>
                            <input class="input" id="ben_city" name="ben_city" type="text" value="">
                        </div>
                        <!--Beneficiary province-->
                        <div class="col">
                            <label for="ben_province" class="kn-label"><span>Province</span></label>
                            <input class="input" id="ben_province" name="ben_province" type="text" value="">
                        </div>
                        <!--Beneficiary country-->
                        <div class="col">
                            <label for="ben_country" class="kn-label"><span>Country</span></label>
                            <input class="input" id="ben_country" name="ben_country" type="text" value="">
                        </div>
                        <!--Beneficiary postal code-->
                        <div class="col">
                            <label for="ben_postal" class="kn-label"><span>Postal code</span></label>
                            <input class="input" id="ben_postal" name="ben_postal_code" type="text" value="">
                        </div>
                    </div>
                    <div class="row">
                        <!--Beneficiary phone-->
                        <div class="col">
                            <label for="ben_phone" class="kn-label"><span>Phone number</span></label>
                            <input class="input" id="ben_phone" name="ben_phone1" type="text" value="">
                        </div>
                        <!--Beneficiary occupation-->
                        <div class="col">
                            <label for="ben_occupation" class="kn-label"><span>Occupation</span></label>
                            <input class="input" id="ben_occupation" name="ben_occupation" type="text" value="">
                        </div>
                        <!--Beneficiary date of birth-->
                        <div class="col">
                            <label for="ben_dob" class="kn-label"><span>Date of birth</span></label>
                            <input class="input" id="ben_dob" name="ben_date_of_birth" type="text" value="">
                        </div>
                    </div>
                    <div class="row">
                        <!--Beneficiary ID type-->
                        <div class="col">
                            <label for="ben_idType" class="kn-label"><span>ID type</span></label>
                            <div class="kn-select">
                                <select name="ben_doc_type" style="vertical-align: bottom;"
                                        id="ben_idType"
                                        class="select">
                                    <option value=""></option>
                                    <?php if(is_array($idTypes) || $idTypes instanceof \think\Collection || $idTypes instanceof \think\Paginator): if( count($idTypes)==0 ) : echo "" ;else: foreach($idTypes as $key=>$row): ?>
                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                        </div>
                        <!--Beneficiary ID number-->
                        <div class="col">
                            <label for="ben_idNum" class="kn-label"><span>ID Number</span></label>
                            <input class="input" id="ben_idNum" name="ben_doc_no" type="text" value="">
                        </div>
                    </div>
                </div>
            </div>
            <h4>Does beneficiary has third party?</h4>
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-secondary active">
                    <input type="radio" name="benThirdParty" value="N" autocomplete="off" checked> No
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="benThirdParty" value="Y" autocomplete="off"> Yes
                </label>
            </div>
            <div id="benThirdPartyBlock" class="none">
                <div class="kn-section-break"></div>
                <div class="container">
                    <div class="row">
                        <!--Beneficiary 3rd relationship-->
                        <div class="col">
                            <label for="ben_3rd_relation"
                                   class="kn-label"><span>Relationship with beneficiary</span><span
                                    class="kn-required"> *</span></label>
                            <input class="input" id="ben_3rd_relation" name="ben_third_relation" type="text" value="<?php echo $data->ben_third_relation; ?>">
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="kn-section-break"></div>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary active">
                        <input type="radio" name="ben3rdOptions" value="exist" autocomplete="off" checked> Existing
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="ben3rdOptions" value="new" autocomplete="off"> New
                    </label>
                </div>
                <div class="kn-section-break"></div>
                <div class="container" id="existBen3rdBlock">
                    <?php if ($pageMode === "new") {?>
                    <div class="row">
                        <!--Beneficiary third party-->
                        <div class="col">
                            <label for="ben3rd" class="kn-label"><span>Beneficiary's third party</span></label>
                            <input class="input" id="ben3rd" name="" type="text" value="">
                            <input id="ben_3rd_id" name="ben_third_id" type="hidden">
                            <p id="ben-3rd-description">You can enter beneficiary's third party's name to search</p>
                        </div>
                        <div class="col">

                        </div>
                    </div>
                    <?php }if($pageMode === "edit" and ($data->has_ben_third === "true")){?>
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
                    <?php }?>
                </div>
                <div class="container none" id="newBen3rdBlock">

                    <div class="row">
                        <!--Beneficiary 3rd first name-->
                        <div class="col">
                            <label for="ben_3rd_firstName" class="kn-label"><span>First name</span><span
                                    class="kn-required"> *</span></label>
                            <input class="input" id="ben_3rd_firstName" name="ben_3rd_first_name" type="text" value="">
                        </div>
                        <!--Beneficiary 3rd last name-->
                        <div class="col">
                            <label for="ben_3rd_lastName" class="kn-label"><span>Last name</span><span
                                    class="kn-required"> *</span></label>
                            <input class="input" id="ben_3rd_lastName" name="ben_3rd_last_name" type="text" value="">
                        </div>
                        <!--Beneficiary 3rd initials-->
                        <div class="col">
                            <label for="ben_3rd_init" class="kn-label"><span>Initials</span></label>
                            <input class="input" id="ben_3rd_init" name="ben_3rd_initials" type="text" value="">
                        </div>
                    </div>
                    <div class="row">
                        <!--Beneficiary 3rd address-->
                        <div class="col">
                            <label for="ben_3rd_address" class="kn-label"><span>Address</span></label>
                            <input class="input" id="ben_3rd_address" name="ben_3rd_address" type="text" value="">
                        </div>
                    </div>
                    <div class="row">
                        <!--Beneficiary 3rd city-->
                        <div class="col">
                            <label for="ben_3rd_city" class="kn-label"><span>City</span></label>
                            <input class="input" id="ben_3rd_city" name="ben_3rd_city" type="text" value="">
                        </div>
                        <!--Beneficiary 3rd province-->
                        <div class="col">
                            <label for="ben_3rd_province" class="kn-label"><span>Province</span></label>
                            <input class="input" id="ben_3rd_province" name="ben_3rd_province" type="text" value="">
                        </div>
                        <!--Beneficiary 3rd country-->
                        <div class="col">
                            <label for="ben_3rd_country" class="kn-label"><span>Country</span></label>
                            <input class="input" id="ben_3rd_country" name="ben_3rd_country" type="text" value="">
                        </div>
                        <!--Beneficiary 3rd postal code-->
                        <div class="col">
                            <label for="ben_3rd_postal" class="kn-label"><span>Postal code</span></label>
                            <input class="input" id="ben_3rd_postal" name="ben_3rd_postal_code" type="text" value="">
                        </div>
                    </div>
                    <div class="row">
                        <!--Beneficiary 3rd phone-->
                        <div class="col">
                            <label for="ben_3rd_phone" class="kn-label"><span>Phone number</span></label>
                            <input class="input" id="ben_3rd_phone" name="ben_3rd_phone1" type="text" value="">
                        </div>
                        <!--Beneficiary 3rd occupation-->
                        <div class="col">
                            <label for="ben_3rd_occupation" class="kn-label"><span>Occupation</span></label>
                            <input class="input" id="ben_3rd_occupation" name="ben_3rd_occupation" type="text" value="">
                        </div>
                        <!--Beneficiary 3rd date of birth-->
                        <div class="col">
                            <label for="ben_3rd_dob" class="kn-label"><span>Date of birth</span></label>
                            <input class="input" id="ben_3rd_dob" name="ben_3rd_date_of_birth" type="text" value="">
                        </div>
                    </div>
                    <div class="row">
                        <!--Beneficiary 3rd ID type-->
                        <div class="col">
                            <label for="ben_3rd_idType" class="kn-label"><span>ID type</span></label>
                            <div class="kn-select">
                                <select name="ben_3rd_doc_type" style="vertical-align: bottom;"
                                        id="ben_3rd_idType"
                                        class="select">
                                    <option value=""></option>
                                    <?php if(is_array($idTypes) || $idTypes instanceof \think\Collection || $idTypes instanceof \think\Paginator): if( count($idTypes)==0 ) : echo "" ;else: foreach($idTypes as $key=>$row): ?>
                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                        </div>
                        <!--Beneficiary 3rd ID number-->
                        <div class="col">
                            <label for="ben_idNum" class="kn-label"><span>ID Number</span></label>
                            <input class="input" id="ben_3rd_idNum" name="ben_3rd_doc_no" type="text" value="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tabs-financial">
            <h4>Financial institution</h4>
            <div class="kn-section-break"></div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <label for="account_no" class="kn-label">Bank account number</label>
                        <input class="input" id="account_no" name="account_no" type="text" value="<?php echo $data->account_no; ?>">
                    </div>
                    <div class="col"></div>
                </div>
            </div>
            <div class="kn-section-break"></div>
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-secondary active">
                    <input type="radio" name="finOptions" value="exist" autocomplete="off" checked> Existing
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="finOptions" value="new" autocomplete="off"> New
                </label>
            </div>
            <div class="kn-section-break"></div>
            <div class="container" id="existFinBlock">
                <?php if($pageMode === "new" ){?>
                <div class="row">
                    <!--Financial institution-->
                    <div class="col">
                        <label for="financial_ins" class="kn-label"><span>Financial institution</span></label>
                        <input class="input" id="financial_ins" name="" type="text" value="">
                        <input id="insti_id" name="insti_id" type="hidden">
                        <p id="fin-description">You can enter financial's bank name or address to search</p>
                    </div>
                    <div class="col">

                    </div>
                </div>
                <?php }if($pageMode === "edit"){?>
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
                <?php }?>
            </div>
            <div class="container none" id="newFinBlock">
                <div class="row">
                    <!--Bank name-->
                    <div class="col">
                        <label for="fin_name" class="kn-label"><span>Bank name</span><span
                                class="kn-required"> *</span></label>
                        <input class="input" id="fin_name" name="bank_name" type="text" value="">
                    </div>
                    <div class="col">
                    </div>
                </div>

                <div class="row">
                    <!--Financial institution address-->
                    <div class="col">
                        <label for="fin_address" class="kn-label"><span>Address</span><span
                                class="kn-required"> *</span></label>
                        <input class="input" id="fin_address" name="bank_street" type="text" value="">
                    </div>
                </div>
                <div class="row">
                    <!--Financial institution city-->
                    <div class="col">
                        <label for="fin_city" class="kn-label"><span>City</span><span
                                class="kn-required"> *</span></label>
                        <input class="input" id="fin_city" name="bank_city" type="text" value="">
                    </div>
                    <!--Financial institution province-->
                    <div class="col">
                        <label for="fin_province" class="kn-label"><span>Province</span><span
                                class="kn-required"> *</span></label>
                        <input class="input" id="fin_province" name="bank_province" type="text" value="">
                    </div>
                    <!--Financial institution country-->
                    <div class="col">
                        <label for="fin_country" class="kn-label"><span>Country</span><span
                                class="kn-required"> *</span></label>
                        <input class="input" id="fin_country" name="bank_country" type="text" value="">
                    </div>
                    <!--Financial institution postal code-->
                    <div class="col">
                        <label for="fin_postal" class="kn-label"><span>Postal code</span><span
                                class="kn-required"> *</span></label>
                        <input class="input" id="fin_postal" name="bank_postal_code" type="text" value="">
                    </div>
                </div>

            </div>
        </div>
        <div id="tabs-amlQuestion">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <label for="osfi_match" class="kn-label"><span>OSFI match</span> <span
                                class="kn-required">*</span></label>
                        <div class="kn-select">
                            <select data-placeholder="Select" id="osfi_match" name="osfi_match"
                                    style="vertical-align: bottom;"
                                    class="select">
                                <option value="">Not reviewed</option>
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>
                    </div>
                    <div class="col"></div>
                </div>
                <div class="row">
                    <!--Source of funds-->
                    <div class="col">
                        <label for="source" class="kn-label"><span>Source of funds</span></label>
                        <p class="kn-instructions">i.e. regular income, proceeds of lottery winnings, proceeds of a
                            house sale</p>
                        <textarea class="kn-textarea" id="source" name="source"><?php echo $data->source; ?></textarea>
                    </div>
                    <!--Purpose of transaction-->
                    <div class="col">
                        <label for="purpose" class="kn-label"><span>Purpose of transaction</span></label>
                        <p class="kn-instructions">i.e. purchase of a house, supporting family</p>
                        <textarea class="kn-textarea" id="purpose" name="purpose"><?php echo $data->purpose; ?></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="trans_desc" class="kn-label"><span>Description</span></label>

                        <textarea class="kn-textarea" id="trans_desc" name="notes"><?php echo $data->notes; ?></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="kn-section-break"></div>
    <p class="text-center">
        <button class="btn btn-primary" type="submit" id="submit">Submit</button>
        <!--<button class="btn btn-primary" type="submit">Cancel</button>-->
    </p>
</form>


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

    $("[name='senderOptions']").change(function () {
        var value = $(this).val();
        if (value == "exist") {
            $("#newSenderBlock").addClass("none");
            $("#existSenderBlock").removeClass("none");
        } else {
            $("#existSenderBlock").addClass("none");
            $("#newSenderBlock").removeClass("none");
        }
    });

    $("[name='senderThirdParty']").change(function () {
        var value = $(this).val();
        if (value == "Y") {
            $("#senThirdPartyBlock").removeClass("none");
        } else {
            $("#senThirdPartyBlock").addClass("none");
        }
    });

    $("[name='sender3rdOptions']").change(function () {
        var value = $(this).val();
        if (value == "exist") {
            $("#newSender3rdBlock").addClass("none");
            $("#existSender3rdBlock").removeClass("none");
        } else {
            $("#existSender3rdBlock").addClass("none");
            $("#newSender3rdBlock").removeClass("none");
        }
    });

    $("[name='benOptions']").change(function () {
        var value = $(this).val();
        if (value == "exist") {
            $("#newBenBlock").addClass("none");
            $("#existBenBlock").removeClass("none");
        } else {
            $("#existBenBlock").addClass("none");
            $("#newBenBlock").removeClass("none");
        }
    });

    $("[name='benThirdParty']").change(function () {
        var value = $(this).val();
        if (value == "Y") {
            $("#benThirdPartyBlock").removeClass("none");
        } else {
            $("#benThirdPartyBlock").addClass("none");
        }
    });

    $("[name='ben3rdOptions']").change(function () {
        var value = $(this).val();
        if (value == "exist") {
            $("#newBen3rdBlock").addClass("none");
            $("#existBen3rdBlock").removeClass("none");
        } else {
            $("#existBen3rdBlock").addClass("none");
            $("#newBen3rdBlock").removeClass("none");
        }
    });

    $("[name='finOptions']").change(function () {
        var value = $(this).val();
        if (value == "exist") {
            $("#newFinBlock").addClass("none");
            $("#existFinBlock").removeClass("none");
        } else {
            $("#existFinBlock").addClass("none");
            $("#newFinBlock").removeClass("none");
        }
    });

    $("#custRole").change(function () {
        var value = $(this).val();
        if (value == "S") {
            $("#senderBlock").addClass("none");
            $("#benBlock").removeClass("none");
        } else {
            $("#benBlock").addClass("none");
            $("#senderBlock").removeClass("none");
        }
    });

    $(function () {
        if ("<?php echo $pageMode; ?>" == "edit") {
            $("#location").val('<?php echo $data->location; ?>');
            $("#transType").val('<?php echo $data->trans_type; ?>');
            $("#recCurrency").val('<?php echo $data->curr_in; ?>');
            $("#disbCurrency").val('<?php echo $data->curr_out; ?>');
            $("#recMethod").val('<?php echo $data->method_in; ?>');
            $("#disbMethod").val('<?php echo $data->method_out; ?>');
            $("#feeMethod").val('<?php echo $data->fee_method; ?>');
            $("#osfi_match").val('<?php echo $data->osfi_match; ?>');

            if (<?php echo $data->has_sender_third; ?>)
            {
                $("[name='senderThirdParty']").filter('[value="Y"]').trigger("click");
            }

            if (<?php echo $data->has_ben_third; ?>)
            {
                $("[name='benThirdParty']").filter('[value="Y"]').trigger("click");
            }
        }
    });

</script>



</html>







