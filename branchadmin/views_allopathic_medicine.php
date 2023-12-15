<?php 

error_reporting(0);

include("includes/db_config.php");

require_once('includes/check_session.php');

error_reporting(0);

$center_id = $_SESSION['rsoftId'];

$patient_id = $_GET['patient_id'];
$reciptid = $_GET['reciptid'];

$resuAllopathics = mysqli_query($con, "SELECT * FROM allopathics where patient_id = '".$patient_id."' and reciptid = '".$reciptid."'");



$resultQgl = mysqli_query($con, "SELECT * FROM patients where patient_id = '".$patient_id."'");
$rowpatientes = mysqli_fetch_array($resultQgl);

$resultCentres = mysqli_query($con, "SELECT * FROM centres where id = '".$center_id."'");
$rowCentres =mysqli_fetch_array($resultCentres);
?>

    <!doctype html>

    <html class="fixed">

    <head>

        <!-- Basic -->

        <meta charset="utf-8">

        <title>Zero Diabetic Diet | Consultancy </title>

        <!-- Web Fonts  -->

        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->

        <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />

        <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />

        <link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />

        <link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

        <!-- Theme CSS -->

        <link rel="stylesheet" href="assets/stylesheets/theme.css" />

        <!-- Skin CSS -->

        <link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

        <!-- Theme Custom CSS -->

        <link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

        <script src="assets/vendor/modernizr/modernizr.js"></script>

        <!-- Head Libs -->
        <script>
            function printDiv(divName) {

                var printContents = document.getElementById(divName).innerHTML;

                var originalContents = document.body.innerHTML;

                document.body.innerHTML = printContents;

                window.print();

                document.body.innerHTML = originalContents;

            }
        </script>

    </head>

    <body>

        <section class="body">

            <!-- start: header -->

            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <style>
                .notifications > li .notification-icon {
                    /* background: #FFF; */
                    border-radius: 50%;
                    /* box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.3); */
                    /* display: inline-block; */
                    /* height: 30px; */
                    /* position: relative; */
                    /* width: 30px; */
                    text-align: center;
                    font-size: 12px;
                    margin-left: 8px;
                }
                
                @media only screen and (min-width: 768px) {
                    .top_head {
                        display: block;
                    }
                }
                
                @media only screen and (min-width: 768px) and (max-width:1100px) {
                    .logo h4 {
                        font-size: 14px;
                    }
                    .top_head a {
                        font-size: 12px;
                        padding: 5px;
                    }
                    .header .separator {
                        margin: 0 5px 0 !important;
                    }
                    .userbox .name {
                        font-size: 10px;
                    }
                }
                
                @media only screen and (max-width: 767px) {
                    .top_head {
                        display: none;
                    }
                }
            </style>

            <?php include "header.php"; ?>

                <div class="inner-wrapper">

                    <!-- start: sidebar -->

                    <style>
                        /*span.help_btn a {

    color: #abb4be;

    text-decoration: none;

    font-size: 1.3rem;

        padding: 12px 25px;

}

span.help_btn div {

    margin: 30px 0;

}*/
                        
                        .help_btn {
                            margin-top: 50px;
                            padding: 10px 25px;
                        }
                        
                        .faq_btn {
                            padding: 10px 25px;
                        }
                        
                        ul.nav-main li i {
                            margin-right: 1.1em;
                        }
                        
                        .help_btn i.fa.fa-question-circle {
                            font-size: 2.0rem;
                        }
                        
                        .faq_btn i.fa.fa-info-circle {
                            font-size: 2.0rem;
                        }
                        
                        .help_btn a,
                        .faq_btn a {
                            text-decoration: none;
                        }
                        
                        ul.nav-main > li > a:hover,
                        ul.nav-main > li > a:focus {
                            background-color: #03486B;
                        }
                        
                        ul.nav-main li .nav-children li a:hover,
                        ul.nav-main li .nav-children li a:focus {
                            background: #03486B;
                        }
                        
                        @media only screen and (min-width: 768px) {
                            .menu_not {
                                display: none;
                            }
                        }
                        
                        @media only screen and (max-width: 767px) {
                            .menu_not {
                                float: right;
                                margin: 16px 0;
                                display: block;
                            }
                        }
                    </style>

                    <?php include "left.php"; ?>

                        <!-- end: sidebar -->

                        <section role="main" class="content-body">

                            <header class="page-header">

                                <h2>Patient Allopathic Medicine Details</h2>

                                <div class="right-wrapper pull-right">

                                    <ol class="breadcrumbs">

                                        <li>

                                            <a href="dashboard.php">

                                                <i class="fa fa-home"></i>

                                            </a>

                                        </li>

                                        <li><span>Patient Investigation Details&nbsp;&nbsp;</span></li>

                                    </ol>

                                </div>

                            </header>

                            <!-- start: page -->

                            <div class="row">

                                <div class="col-md-12">

                                    <section class="panel">

                                        <input type="button" onClick="printDiv('printableArea')" value="Print" />
                                        <!-- start: page -->

                                        <div id="printableArea" style="border:dotted">

                                            <div class="panel-body">

                                                <div class="form-group">

                                                    <table class="table">

                                                        <thead>
                                                            <tr>
                                                                <td colspan="12">
                                                                    <table class="table">
                                                                        <tr>
                                                                            <td style="text-align: center"><img src="images/logo.png" style="width:100px;"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div style="text-align:center; font-size:14px; color:#000066">
                                                                                    <h5><b>Address: <?php echo $rowCentres['address'];?>, <?php echo $rowCentres['city'];?>-<?php echo $rowCentres['pincode'];?></b></h5></div>
                                                                                <div style="text-align:center; font-size:14px;color:#000066">
                                                                                    <h5><b>Email:zerodiabetes@gmail.com&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Phone. No. <?php echo $rowCentres['mobile_number'];?></b></h5></div>

                                                                                <div style="text-align:center">
                                                                                    <h2 class="panel-title"><b> Allopathic Medicine Details</b></h2></div>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr>

                                                                <th scope="col">Patient Name:</th>

                                                                <th scope="col" colspan="4">
                                                                    <?php echo ucwords($rowpatientes['patient_name']); ?>
                                                                </th>

                                                                <th scope="col">ID No. : </th>

                                                                <th scope="col">
                                                                    <?php echo $rowpatientes['patient_id']; ?>
                                                                </th>

                                                                <th scope="col">Date : </th>

                                                                <th scope="col">
                                                                    <?php  echo date('d-m-Y');

                        ?>
                                                                </th>

                                                                <th scope="col">Mobile No. : </th>

                                                                <th scope="col">
                                                                    <?php echo $rowpatientes['mobile_number']; ?>
                                                                </th>

                                                            </tr>

                                                        </thead>

                                                    </table>

                                                    <div class="table-responsive">

                                                        <table class="table" width="100%">

                                                            <tbody>

                                                                <tr>

                                                                    <th>Brand Name</th>

                                                                    <th>Generic Value</th>

                                                                    <th>Doses </th>
                                                                </tr>
                                                                <?php
                              while ($rowAllopathics = mysqli_fetch_array($resuAllopathics)) {
                                if(!empty($rowAllopathics['brand_name'])){
                            ?>
                                                                    <tr>
                                                                        <td>
                                                                            <?php echo $rowAllopathics['brand_name'];?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $rowAllopathics['generic_name']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $rowAllopathics['doses']; ?>
                                                                        </td>
                                                                    </tr>
                                                                    <?php } }  ?>
                                                            </tbody>

                                                        </table>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </section>

                                </div>

                            </div>

                            <!-- end: page -->

                        </section>

                </div>

        </section>

        <!-- Vendor -->

        <script src="assets/vendor/jquery/jquery.js"></script>

        <script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>

        <script src="assets/vendor/bootstrap/js/bootstrap.js"></script>

        <script src="assets/vendor/nanoscroller/nanoscroller.js"></script>

        <script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

        <script src="assets/vendor/magnific-popup/magnific-popup.js"></script>

        <script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

        <!-- Specific Page Vendor -->

        <script src="assets/vendor/jquery-validation/jquery.validate.js"></script>

        <!-- Theme Base, Components and Settings -->

        <script src="assets/javascripts/theme.js"></script>

        <!-- Theme Custom -->

        <script src="assets/javascripts/theme.custom.js"></script>

        <!-- Theme Initialization Files -->

        <script src="assets/javascripts/theme.init.js"></script>

        <!-- Examples -->

        <script src="assets/javascripts/forms/examples.validation.js"></script>

        <script src="assets/javascripts/custom.js"></script>

        <script src="assets/javascripts/ajaxupload.3.5.js"></script>

    </body>

    </html>