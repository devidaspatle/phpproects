<?php 

error_reporting(0);

include("includes/db_config.php");

require_once('includes/check_session.php');

$center_id = $_SESSION['rsoftId'];

$resultPatient = mysqli_query($con, "SELECT * FROM patients  where centre_id = '".$center_id."'");

$totalPatient =mysqli_num_rows($resultPatient);

if(!empty($_POST['patient_id']))

{

  $resultPatients = mysqli_query($con, "SELECT * FROM patients  where patient_id = '".$_POST['patient_id']."'");

  $rowpatientes = mysqli_fetch_array($resultPatients);

}

$resultFormulas = mysqli_query($con, "SELECT * FROM formulas order by formula_name desc");

$totalFormulas =mysqli_num_rows($resultFormulas);

?>

<!doctype html>

<html class="fixed">

    <head>

        <!-- Basic -->

        <meta charset="utf-8">



             <title>Zerodiabeties | Hospital</title>
        

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

                                <h2>Investigation Details</h2>

                                <div class="right-wrapper pull-right">

                                    <ol class="breadcrumbs">

                                        <li>

                                            <a href="dashboard.php">

                                                <i class="fa fa-home"></i>

                                            </a>

                                        </li>

                                        <li><span>Investigation Details&nbsp;&nbsp;</span></li>

                                    </ol>

                                </div>

                            </header>

                            <!-- start: page -->

                            <div class="row">

                                <div class="col-md-12">

                                    <section class="panel">

                                        <form id="form" method="POST" action="" class="form-horizontal" onSubmit="disable();">

                                            <header class="panel-heading">

                                                <div class="panel-body">

                                                    <div class="form-group col-sm-6">

                                                        <label class="col-sm-5 control-label">Patient Name<span class="required">*</span></label>

                                                        <div class="col-sm-7">

                                                            <select class="form-control p-0" id="input3" name="patient_id">

                                                                <option>Select Patient Name</option>

                                                                <?php while($patient = mysqli_fetch_array($resultPatient)) {  ?>

                                                                    <option value="<?php echo $patient['patient_id']; ?>">
                                                                        <?php echo ucwords($patient['patient_name']); ?>
                                                                    </option>

                                                                    <?php } ?>

                                                            </select>

                                                        </div>

                                                    </div>

                                                    <div class="form-group col-sm-4">

                                                        <div class="col-sm-8">

                                                            <button type="submit" name="submit" class="btn btn-warning">Search</button> &nbsp;&nbsp;
                                                            <button type="reset" class="btn btn-default">Reset</button>

                                                            <span class="red" id="err_city"></span>

                                                        </div>

                                                    </div>

                                                </div>

                                            </header>

                                        </form>


                                        <!-- start: page -->

                                        <div id="printableArea" style="border:dotted">

                                            <div class="panel-body">

                                                <div class="form-group">

                                                    <table class="table">

                                                        <thead>

                                                            <tr>

                                                                <th scope="col">Patient Name:
                                                                    <th>

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
                        <form id="form" method="POST" action="investigations_code.php" class="form-horizontal">
                                                        <table class="table" width="100%">
                        <input type="hidden" name="patient_id" value="<?php echo $rowpatientes['patient_id']; ?>">

                                                            <tbody>

                                                                <tr>

                                                                    <th scope="row">SN</th>

                                                                
                                                                    <th>Investigations</th>
																	<th>Unit</th>

                                                                    <th>Value</th>

                                                                </tr>

                                   <?php

                                		$resultInvestigations = mysqli_query($con, "SELECT * FROM investigations");

                                		$i=1;

                                		while($investigations = mysqli_fetch_array($resultInvestigations))

                                		{
                                      
                                	?>

                                <tr>

                                    <th scope="row">
                                        <input type="checkbox"  name="diabetes[]" value="<?php echo $investigations['id'];?>" checked="checked">
                                       
                                    </th>

                                    

                                    <td>
                                        <?php echo $investigations['investigations_name'];?>
                                    </td>
                                     <td>
                                        <?php echo $investigations['investigations_unit'];?>
                                    </td>
                                    <td>
                                        <input type="text" name="diabetes_value[]" maxlength="10" class="form-control" style="width: 150px;" />
                                    </td>

                                </tr>

                                                                    <?php } ?>

                                                            </tbody>

                                                        </table>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <footer class="panel-footer">

                                            <div class="row">

                                                <div class="col-sm-12 col-sm-offset-5">

                                                    <button type="submit" name="submit" id="save" class="btn btn-warning">Save</button>

                                                    <input type="button" onClick="printDiv('printableArea')" value="Print" />

                                                </div>

                                            </div>

                                        </footer>

                                    </section>

                                </div>

                            </div>
</form>
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