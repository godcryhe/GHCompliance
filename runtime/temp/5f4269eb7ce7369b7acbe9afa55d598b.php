<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:83:"/Users/yhe/Projects/GHComp/public/../application/home/view/customers/view_cust.html";i:1538900719;s:66:"/Users/yhe/Projects/GHComp/application/home/view/public/index.html";i:1538982352;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Add customer</title>

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
    <script stc="/index/bs/js/holder.min.js"></script>
    <link rel="stylesheet"
          href="https://cdn1.cloud-database.co/renderer/css/v1/renderer_416ed32e41febe1c1896fde18abdf6afab597bef.v1.min.css">
    <script src="/index/jquery-1.8.3.min.js"></script>
    <link rel="stylesheet"
          href="http://cdn2.editmysite.com/css/sites.css?buildTime=1529011779">

</head>
<body>
<p class="aa"><a href="/customers/index">Customers</a>><a href="#">View Customer</a></p>
<h4><b>View Customer</b></h4>


<div id="knack-dist_2" class="kn-content">

    <div class="kn-scene kn-container" id="kn-scene_52" style="display: block;">
        <div class="kn-details kn-view view_97" id="view_97">
            <div class="kn-details-column first" style="width: 50%; float: left;">
                <div class="kn-details-group column-2">
                    <div class="kn-details-group-column" style="width: 231px;">
                        <table class="kn-label-left">
                            <tbody>
                            <tr class="kn-details-link">
                                <td class="kn-value" colspan="2"
                                    style="padding-left: 0px;"><span
                                        style="padding-left: 0px;"><a
                                        class="kn-link-page"
                                        href="/customers/edit/id/<?php echo $customer->cust_id; ?>">edit</a></span>
                                </td>
                            </tr>

                            <tr class="field_1">
                                <th class="kn-label kn-detail-label"
                                    style="width: 102px;">
                                    <span>Customer ID</span>
                                </th>
                                <td class="kn-value"><span><?php echo $customer->cust_no; ?></span>
                                </td>
                            </tr>
                            <?php if($customer->cust_type === "IND"){?>
                            <tr class="field_20">
                                <th class="kn-label kn-detail-label"
                                    style="width: 102px;"><span>Last name</span>
                                </th>
                                <td class="kn-value"><span><?php echo $customer->last_name; ?></span></td>
                            </tr>

                            <tr class="field_21">
                                <th class="kn-label kn-detail-label"
                                    style="width: 102px;">
                                    <span>First name</span>
                                </th>
                                <td class="kn-value"><span><?php echo $customer->first_name; ?></span></td>
                            </tr>

                            <tr class="field_30">
                                <th class="kn-label kn-detail-label"
                                    style="width: 102px;"><span>Initials</span>
                                </th>
                                <td class="kn-value"><span><?php echo $customer->initials; ?></span></td>
                            </tr>
                            <?php } else {?>

                            <tr class="field_21 ">
                                <th class="kn-label kn-detail-label"
                                    style="width: 102px;">
                                    <span>Business name</span>
                                </th>
                                <td class="kn-value"><span><?php echo $customer->bus_name; ?></span></td>
                            </tr>

                            <tr class="field_296 ">
                                <th class="kn-label kn-detail-label"
                                    style="width: 102px;">
                                    <span>Business documents</span></th>
                                <td class="kn-value"><span></span></td>
                            </tr>
                            <?php }?>

                            </tbody>
                        </table>
                    </div>

                    <div class="kn-details-group-column" style="width: 84px;">
                        <table class="kn-label-left">

                            <tbody>
                            <tr class="kn-details-link">
                                <td class="kn-value" colspan="2"
                                    style="padding-left: 0px;"><span
                                        style="padding-left: 0px;"><a
                                        href="/customers/delete/id/<?php echo $customer->cust_id; ?>"
                                        class="delete kn-link-delete">delete</a></span>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                </div>


                <div class="kn-details-group column-1">

                    <div class="kn-details-group-column" >
                        <table class="kn-label-left">

                            <tbody>
                            <tr>
                                <td class="title" colspan="2"><span>Identification document</span>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                </div>


                <div class="kn-details-group column-2">

                    <div class="kn-details-group-column" style="width: 262px;">
                        <table class="kn-label-left">

                            <tbody>
                            <tr class="field_41">
                                <th class="kn-label kn-detail-label"
                                    style="width: 120px;">
                                    <span>Document type</span>
                                </th>
                                <td class="kn-value">
                                    <span><?php echo $customer->docType->name; ?></span>
                                </td>
                            </tr>

                            <tr class="field_39">
                                <th class="kn-label kn-detail-label"
                                    style="width: 120px;">
                                    <span>Date of birth</span>
                                </th>
                                <td class="kn-value"><span><?php echo $customer->date_of_birth; ?></span>
                                </td>
                            </tr>

                            <tr class="field_44">
                                <th class="kn-label kn-detail-label"
                                    style="width: 120px;">
                                    <span>Expiration date</span></th>
                                <td class="kn-value"><span><?php echo $customer->expire_date; ?></span>
                                </td>
                            </tr>

                            <tr class="field_316">
                                <th class="kn-label kn-detail-label"
                                    style="width: 120px;">
                                    <span><strong>ID Status</strong></span></th>
                                <td class="kn-value">
                                    <span><strong><?php echo $customer->status; ?></strong></span></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                    <div class="kn-details-group-column" style="width: 296px;">
                        <table class="kn-label-left">

                            <tbody>
                            <tr class="field_43">
                                <th class="kn-label kn-detail-label"
                                    style="width: 142px;">
                                    <span>Document number</span></th>
                                <td class="kn-value"><span><?php echo $customer->doc_no; ?></span>
                                </td>
                            </tr>

                            <tr class="field_42">
                                <th class="kn-label kn-detail-label"
                                    style="width: 142px;">
                                    <span>Place of issue</span></th>
                                <td class="kn-value"><span><?php echo $customer->issue_place; ?></span></td>
                            </tr>

                            <tr class="field_158">
                                <th class="kn-label kn-detail-label"
                                    style="width: 142px;">
                                    <span>ID Image 1/2</span>
                                </th>
                                <td class="kn-value"><span><a
                                        class="kn-view-asset"
                                        data-field-key="field_158"
                                        data-asset-id="58f7a7060bcde50ddb3db407"
                                        data-file-name="fr.jpg"
                                        href=""></a></span>
                                </td>
                            </tr>

                            <tr class="field_259">
                                <th class="kn-label kn-detail-label"
                                    style="width: 142px;">
                                    <span>ID Image 2/2</span>
                                </th>
                                <td class="kn-value"><span><a
                                        class="kn-view-asset"
                                        data-field-key="field_259"
                                        data-asset-id="58110f26f338058b28d1bc24"
                                        data-file-name="guohongback.jpg"
                                        href=""></a></span>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                </div>


                <div class="kn-details-group column-1">

                    <div class="kn-details-group-column" >
                        <table class="kn-label-left">

                            <tbody>
                            <tr>
                                <td class="title" colspan="2">
                                    <span>Due diligence</span></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                </div>


                <div class="kn-details-group column-1">

                    <div class="kn-details-group-column">
                        <table class="kn-label-left">

                            <tbody>
                            <tr class="field_40">
                                <th class="kn-label kn-detail-label"
                                    style="width: 262px;"><span>Occupation or principal business</span>
                                </th>
                                <td class="kn-value"><span style="white-space: pre-wrap;"><?php echo $customer->occupation; ?></span></td>
                            </tr>

                            <tr class="field_122">
                                <th class="kn-label kn-detail-label"
                                    style="width: 262px;">
                                    <span>Purpose and intended nature of the business relationship</span>
                                </th>
                                <td class="kn-value"><span style="white-space: pre-wrap;"><?php echo $customer->purpose; ?></span>
                                </td>
                            </tr>

                            <tr class="field_129">
                                <th class="kn-label kn-detail-label"
                                    style="width: 262px;"><span>Expected transaction frequency</span>
                                </th>
                                <td class="kn-value"><span><?php echo $customer->frequency; ?></span>
                                </td>
                            </tr>

                            <tr class="field_130">
                                <th class="kn-label kn-detail-label"
                                    style="width: 262px;"><span>Average transaction amount</span>
                                </th>
                                <td class="kn-value"><span><?php echo $customer->ave_amt; ?></span></td>
                            </tr>

                            <tr class="field_131">
                                <th class="kn-label kn-detail-label"
                                    style="width: 262px;">
                                    <span>Does the customer exhibit suspicious behavior?</span>
                                </th>
                                <td class="kn-value"><span><?php echo $customer->sus_str; ?></span></td>
                            </tr>

                            <tr class="field_132">
                                <th class="kn-label kn-detail-label"
                                    style="width: 262px;"><span>Describe the suspicious behavior</span>
                                </th>
                                <td class="kn-value"><span style="white-space: pre-wrap;"><?php echo $customer->sus_behavior; ?></span></td>
                            </tr>

                            <tr class="field_305">
                                <th class="kn-label kn-detail-label"
                                    style="width: 262px;"><span>Is the customer PEP/HIO?</span>
                                </th>
                                <td class="kn-value"><span><?php echo $customer->pep_str; ?></span></td>
                            </tr>

                            <tr class="field_314">
                                <th class="kn-label kn-detail-label"
                                    style="width: 262px;"><span>Business Relationship?</span>
                                </th>
                                <td class="kn-value"><span></span></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                </div>


            </div>

            <div class="kn-details-column" style="width: 50%; float: left;">


                <div class="kn-details-group column-1">

                    <div class="kn-details-group-column" >
                        <table class="kn-label-left">

                            <tbody>
                            <tr>
                                <td class="title" colspan="2">
                                    <span>Address</span>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                </div>


                <div class="kn-details-group column-2">

                    <div class="kn-details-group-column" style="width: 264px;">
                        <table class="kn-label-left">

                            <tbody>
                            <tr class="field_31">
                                <th class="kn-label kn-detail-label"
                                    style="width: 137px;">
                                    <span>Street address</span></th>
                                <td class="kn-value"><span><?php echo $customer->address; ?></span>
                                </td>
                            </tr>

                            <tr class="field_34">
                                <th class="kn-label kn-detail-label"
                                    style="width: 137px;">
                                    <span>Province or state</span></th>
                                <td class="kn-value"><span><?php echo $customer->province; ?></span></td>
                            </tr>

                            <tr class="field_35">
                                <th class="kn-label kn-detail-label"
                                    style="width: 137px;">
                                    <span>Postal or zip code</span></th>
                                <td class="kn-value"><span><?php echo $customer->postal_code; ?></span></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                    <div class="kn-details-group-column" style="width: 171px;">
                        <table class="kn-label-left">

                            <tbody>
                            <tr class="field_32">
                                <th class="kn-label kn-detail-label"
                                    style="width: 70px;"><span>City</span></th>
                                <td class="kn-value"><span><?php echo $customer->city; ?></span></td>
                            </tr>

                            <tr class="field_33">
                                <th class="kn-label kn-detail-label"
                                    style="width: 70px;"><span>Country</span>
                                </th>
                                <td class="kn-value"><span><?php echo $customer->country; ?></span></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                </div>


                <div class="kn-details-group column-1">

                    <div class="kn-details-group-column" >
                        <table class="kn-label-left">

                            <tbody>
                            <tr>
                                <td class="title" colspan="2">
                                    <span>Phone and email</span></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                </div>


                <div class="kn-details-group column-2">

                    <div class="kn-details-group-column" style="width: 219px;">
                        <table class="kn-label-left">

                            <tbody>
                            <tr class="field_36">
                                <th class="kn-label kn-detail-label"
                                    style="width: 82px;"><span>Phone #1</span>
                                </th>
                                <td class="kn-value"><span><a
                                        href="tel:778-886-3309"><?php echo $customer->phone1; ?></a></span>
                                </td>
                            </tr>

                            <tr class="field_37">
                                <th class="kn-label kn-detail-label"
                                    style="width: 82px;"><span>Phone #2</span>
                                </th>
                                <td class="kn-value"><span><?php echo $customer->phone2; ?></span></td>
                            </tr>

                            <tr class="field_163">
                                <th class="kn-label kn-detail-label"
                                    style="width: 82px;"><span>Email</span></th>
                                <td class="kn-value"><span><?php echo $customer->email; ?></span></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                    <div class="kn-details-group-column" style="width: 188px;">
                        <table class="kn-label-left">

                            <tbody>
                            <tr class="field_160">
                                <th class="kn-label kn-detail-label"
                                    style="width: 116px;">
                                    <span>Phone #1 type</span>
                                </th>
                                <td class="kn-value"><span><?php echo $customer->phone1_type; ?></span></td>
                            </tr>

                            <tr class="field_161">
                                <th class="kn-label kn-detail-label"
                                    style="width: 116px;">
                                    <span>Phone #2 type</span>
                                </th>
                                <td class="kn-value"><span><?php echo $customer->phone2_type; ?></span></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                </div>


                <div class="kn-details-group column-1">

                    <div class="kn-details-group-column">
                        <table class="kn-label-left">

                            <tbody>
                            <tr>
                                <td class="title" colspan="2">
                                    <span>Additional notes</span></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                </div>


                <div class="kn-details-group column-1">

                    <div class="kn-details-group-column" style="width: 554px;">
                        <table class="kn-label-left">

                            <tbody>
                            <tr class="field_164">
                                <td class="kn-value" colspan="2"
                                    style="padding-left: 0px;"><span
                                        style="padding-left: 0px;white-space: pre-wrap;"><?php echo $customer->comments; ?></span>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                </div>


            </div>

            <div class="clear"></div>
        </div>


        <div class="kn-view kn-back-link"><a href="/customers/index" class="ang-link"
                                             address="true">Back to
            Customers</a>
        </div>
    </div>

</div>


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







