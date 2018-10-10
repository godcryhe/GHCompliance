<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:83:"/Users/yhe/Projects/GHComp/public/../application/home/view/customers/edit_cust.html";i:1534395697;s:66:"/Users/yhe/Projects/GHComp/application/home/view/public/index.html";i:1538982352;}*/ ?>
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
<p class="aa"><a href="/customers/index">Customers</a>><a href="#"><?php echo $pageTitle; ?></a></p>
<h4><b><?php echo $pageTitle; ?></b></h4>
<form class="form form-horizontal" id="form-admin-add" action="<?php echo $action; ?>" method="post"
      enctype="multipart/form-data">
    <div class="kn-message is-error" style="display: none;"><a class="close delete"></a>
    </div>
    <?php if ($pageMode == "edit"){?>
    <p><input type="hidden" name="cust_id" class="zz" value="<?php echo $customer->cust_id; ?>"></p>

    <?php }?>
    <p class="bb"><b>Customer ID <span class="cc">*</span></b></p>
    <p class="all" data='Customer ID'><input type="text" name="cust_no" class="zz" value="<?php echo $customer->cust_no; ?>"
                                             required></p>
    <p class="bb"><b>Customer type <span class="cc">*</span></b></p>
    <div style="position: relative;">
        <select class="select" name="cust_type" size="1" id="idCustType" required>
            <option value="IND">Individual</option>
            <option value="BUS">Business</option>
        </select>
        <div class="fllow none" id="divBusDoc">
            <label for="field_296" class="label kn-label"><span>Business documents</span></label>
            <div class="control">
                <input id="field_296" class="file" name="field_296" type="hidden" value="5ac9c285e22ae01fa47a5f50">
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
    <div id="divBusName" class="none">
        <p class="bb goaw2 "><b>Business name <span class="cc">*</span></b></p>
        <p class=" goaw2 " data='Business name'><input type="text" name="bus_name" class="zz" id="idBusName" value="<?php echo $customer->bus_name; ?>"></p>
        <p class="bb goaw2 "><b>Name in native alphabet </b></p>
        <p class="goaw2 "><input type="text" name="native_name" class="zz" value="<?php echo $customer->native_name; ?>"></p>
    </div>
    <div id="divIndName">
        <p class="bb goaw"><b>Last name <span class="cc">*</span></b></p>
        <p class="all goaw" data='Last name'><input type="text" name="last_name" class="zz"
                                                    value="<?php echo $customer->last_name; ?>" required>
        </p>
        <p class="bb goaw"><b>First name <span class="cc">*</span></b></p>
        <p class="all goaw" data='First name'><input type="text" name="first_name" class="zz"
                                                     value="<?php echo $customer->first_name; ?>" required></p>
    </div>


    <h3>Address</h3>
    <div style="float:left">
        <p class="bb"><b>Street address <span class="cc">*</span></b></p>
        <p class="all" data='Street address '><input type="text" name="address" class="zz" value="<?php echo $customer->address; ?>"
                                                     required>
        </p>
        <p class="bb"><b>Postal or zip code <span class="cc">*</span></b></p>
        <p class="all" data='Postal or zip code '><input type="text" name="postal_code" class="zz"
                                                         value="<?php echo $customer->postal_code; ?>" required></p></div>
    <div style="float:right">
        <p class="bb"><b>City<span class="cc">*</span></b></p>
        <p class="all" data='City'><input type="text" name="city" class="zz" value="<?php echo $customer->city; ?>" required></p>
        <p class="bb"><b>Country<span class="cc">*</span></b></p>
        <p class="all" data='Country'><input type="text" name="country" class="zz" value="<?php echo $customer->country; ?>"
                                             required></p>
        <p class="bb"><b>Province or state<span class="cc">*</span></b></p>
        <p class="all" data='Province or state'><input type="text" name="province" class="zz"
                                                       value="<?php echo $customer->province; ?>" required></p></div>
    <div class="clear"></div>

    <h3>Phone and email</h3>
    <div style="float:left">
        <p class="bb"><b>Phone #1 <span class="cc">*</span></b></p>
        <p class="all" data='Phone #1'><input type="text" name="phone1" class="zz" value="<?php echo $customer->phone1; ?>" required>
        </p>
        <p class="bb"><b>Phone #1 type<span class="cc">*</span></b></p>
        <p><select class="select" name="phone1_type" size="1" id="idPhone1Type" required>
            <option value="CELL">Cell</option>
            <option value="WORK">Work</option>
            <option value="HOME">Home</option>
        </select></p>
        <p class="bb"><b>Email </b></p>
        <p><input type="email" name="email" class="zz" value="<?php echo $customer->email; ?>" required></p>
    </div>
    <div style="float:right">
        <p class="bb"><b>Phone #2 </b></p>
        <p><input type="text" name="phone2" class="zz" value="<?php echo $customer->phone2; ?>"></p>
        <p class="bb"><b>Phone #2 type</b></p>
        <p><select class="select" name="phone2_type" size="1" id="idPhone2Type">
            <option value="CELL">Cell</option>
            <option value="WORK">Work</option>
            <option value="HOME">Home</option>
        </select></p>
    </div>
    <div class="clear"></div>

    <h3>Identification document</h3>
    <div style="float:left">
        <p class="bb"><b>Document number <span class="cc">*</span></b></p>
        <p class="all" data='Document number'><input type="text" name="doc_no" class="zz" value="<?php echo $customer->doc_no; ?>"
                                                     required>
        </p>
        <p class="bb"><b>Document type <span class="cc">*</span></b></p>
        <p><select data-placeholder="Select" name="doc_type" style="vertical-align: bottom;"
                   id="idDocType"
                   class="select" required>
            <?php if(is_array($info) || $info instanceof \think\Collection || $info instanceof \think\Paginator): if( count($info)==0 ) : echo "" ;else: foreach($info as $key=>$row): ?>
            <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
        <p>

        <p><a id="linkAddIdType" style="color:blue">Add a new option</a></p>

        <p class="bb"><b>Place of issue <span class="cc">*</span></b></p>
        <p class="all" data='Place of issue '><input type="text" name="issue_place" class="zz"
                                                     value="<?php echo $customer->issue_place; ?>" required></p>
    </div>
    <div style="float:right">
        <p class="bb"><b>Date of birth <span class="cc">*</span></b></p>
        <p class="all" data='Date of birth'><input type="text" name="date_of_birth" id="dateOfBirth" class="zz"
                                                   value="<?php echo $customer->date_of_birth; ?>" required></p>
        <p class="bb"><b>Expiration date <span class="cc">*</span></b></p>
        <p class="all" data='Expiration date'><input type="text" name="expire_date" id="expireDate" class="zz"
                                                     value="<?php echo $customer->expire_date; ?>" required></p>
    </div>
    <div class="clear"></div>

    <p class="bb">IMPORTANT: Place of issue for passports MUST be entered as documented on the passport. "Canada" is not
        adequate.</p>
    <!--<p class="bb"><b> ID Image 1/2</b></p>-->
    <!--<p><input type="file" name="pic1"></p>-->
    <!--<p class="bb"><b> ID Image 2/2</b></p>-->
    <!--<p><input type="file" name="pic2"></p>-->
    <!--<p class="bb"><b>Risk Rating</b></p>-->
    <!--<p><select class="select" name="rating" size="1">-->
    <!--<option value="1">Low</option>-->
    <!--<option value="2">Moderate</option>-->
    <!--<option value="3">High</option>-->
    <!--</select></p>-->

    <h3>AML questions</h3>
    <p><b>Occupation or principal business <span class="cc">*</span></b></p>
    <p>i.e. high school teacher, airline pilot, construction worker</p>
    <p><textarea rows="7" cols="100" name="occupation" required><?php echo $customer->occupation; ?></textarea></p>
    <p><b>Purpose and intended nature of the business relationship <span class="cc">*</span></b></p>
    <p>i.e. supporting family in China</p>
    <p><textarea rows="7" cols="100" name="purpose" required><?php echo $customer->purpose; ?></textarea></p>
    <p><b>Expected transaction frequency <span class="cc">*</span></b></p>
    <p class="all" data='Expected transaction frequency'><input type="text" name="frequency" class="zz"
                                                                value="<?php echo $customer->frequency; ?>" required></p>
    <p>i.e. monthly</p>
    <p><b>Expected average transaction amount <span class="cc">*</span></b></p>
    <p class="all" data="Expected average transaction amount"><input type="text" name="ave_amt" class="zz"
                                                                     value="<?php echo $customer->ave_amt; ?>" required></p>
    <p class="bb"><b>Does the customer have a 3rd party?</b></p>
    <p><select class="select" name="third_party" size="1" id="idThirdParty" required>
        <option value="0">No</option>
        <option value="1">Yes</option>
    </select></p>
    <p class="bb"><b>Is the customer PEP/HIO?</b></p>
    <p><select class="select" name="pep" size="1" id="idPep" required>
        <option value="0">No</optio>
        <option value="1">Yes</option>
    </select></p>
    <p class="bb"><b>Does the customer exhibit suspicious behavior?</b></p>
    <p><select class="select" name="suspicious" size="1" id="idSus" required>
        <option value="0">No</option>
        <option value="1">Yes</option>
    </select></p>

    <div id="divSus" class="none">
        <p class="bb goa "><b>Describe the suspicious behavior <span class="cc">*</span></b></p>
        <p><textarea rows="7" cols="100" name="sus_behavior" class="goa " id="idSusBehavior"><?php echo $customer->sus_behavior; ?></textarea>
        </p>
    </div>

    <p><b>Additional notes</b></p>
    <p><textarea rows="7" cols="100" name="comments"><?php echo $customer->comments; ?></textarea></p>
    <p>
        <button class="inp" type="submit">Submit</button>
    </p>
</form>
<p class="dd"><a href="/customers/index">Back to Customers</a></p>

<div id="divAddNewIdType" class="kn-modal-bg none" style="top: 0px; z-index: 2000; ">
    <div class="kn-modal small" style="display: block;">
        <header class="modal-card-head">
            <h1 class="modal-card-title">Add a new option</h1>
            <div class="delete close-modal"></div>
        </header>
        <section class="modal-card-body">
            <div id="kn-add-option" class="kn-modal-wrapper kn-view kn-form">
                <div class="kn-input kn-view">
                    <input type="text" class="input" name="name" id="idType"></div>
                <div class="in" id="btnAddIdType" style="text-align: center;line-height:32px">submit</div>

            </div>
        </section>
    </div>
</div>
<script>
    $(function () {
        $('#linkAddIdType').click(function () {
            $('#divAddNewIdType').toggleClass('none');

        })
        $('.close-modal').click(function () {
            $('#divAddNewIdType').toggleClass('none');
        })
    })


    $('#idCustType').change(function () {
        if ($(this).val() == 'BUS') {
            $('#divBusDoc').removeClass('none');
            $('#divBusName').removeClass('none');
            $('#divIndName').addClass('none');
            $('.fllow').css('top', '-93px');
            $('#idBusName').attr('required','required');

        } else {
            $('#divBusDoc').addClass('none');
            $('#divBusName').addClass('none');
            $('#divIndName').removeClass('none');
            $('#idBusName').removeAttr('required');
        }
    })
    $('#idSus').change(function () {

        if ($(this).val() == '1') {
            $('#divSus').removeClass('none');
            $('#idSusBehavior').attr('required','required');
        } else {
            $('#divSus').addClass('none');
            $('#idSusBehavior').removeAttr('required');
        }
    })

    $('#btnAddIdType').click(function () {
        var name = $('#idType').val();
        var num = $('#idDocType option').length - 1;
        var num2 = parseInt($('#idDocType option').eq(num).attr('value')) + 1;

        $.ajax({
            url: '/customers/insertDocType',
            dataType: 'json',
            type: 'post',
            data: {
                name: name
            },
            success: function () {
                $('#divAddNewIdType').addClass('none');
                $('#idDocType').append("<option value=" + num2 + ">" + name + "</option>")
            }
        })
    })
</script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script>
    $(function () {
        $("#dateOfBirth").datepicker({
            dateFormat: "yy-mm-dd"
        });

        $("#expireDate").datepicker({
            dateFormat: "yy-mm-dd"
        });
    });

    $(function () {
        if ("<?php echo $pageMode; ?>" == "edit") {
            $("#idCustType").val('<?php echo $customer->cust_type; ?>');
            $("#idPhone1Type").val('<?php echo $customer->phone1_type; ?>');
            $("#idPhone2Type").val('<?php echo $customer->phone2_type; ?>');
            $("#idDocType").val('<?php echo $customer->doc_type; ?>');
            $("#idThirdParty").val('<?php echo $customer->third_party; ?>');
            $("#idPep").val('<?php echo $customer->pep; ?>');
            $("#idSus").val('<?php echo $customer->suspicious; ?>');

            $('#idCustType').change();
            $('#idSus').change();
        }
    });
</script>
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







