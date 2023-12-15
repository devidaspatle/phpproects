<?php
error_reporting(0);
include_once("includes/check_session.php");

include_once("includes/db_config.php");

$center_id = $_SESSION['rsoftId'];


$startdate = $_POST['startdate'];
$enddate = $_POST['enddate'];

if(empty($startdate))
{
$resultPrescription = mysqli_query($con, "SELECT * FROM prescriptions where centre_id = '".$center_id."'");
}
else
{
$resultPrescription = mysqli_query($con, "SELECT * FROM prescriptions  where centre_id = '".$center_id."' and description  BETWEEN '".$startdate."' AND '".$enddate."' group by reciptid");
}



?>

    <!doctype html>
    <html class="fixed">

    <head>
        <!-- Basic -->
        <meta charset="utf-8">

        <title>Zero Diabetic Diet | Consultancy </title>

        <!-- Web Fonts  -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">
        <!-- Vendor CSS -->

        <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />

        <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />

        <link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />

        <link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

        <!-- Specific Page Vendor CSS -->

        <link rel="stylesheet" href="assets/vendor/select2/css/select2.css" />

        <link rel="stylesheet" href="assets/vendor/select2-bootstrap-theme/select2-bootstrap.min.css" />

        <link rel="stylesheet" href="assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />

        <!-- Theme CSS -->

        <link rel="stylesheet" href="assets/stylesheets/theme.css" />

        <!-- Skin CSS -->

        <link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

        <!-- Theme Custom CSS -->

        <link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

        <!-- Head Libs -->

        <script src="assets/vendor/modernizr/modernizr.js"></script>

        <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">

        <link rel="stylesheet" type="text/css" href="/media/css/site-examples.css?_=8ffc0b31bc8d9ff82fbb94689dd1d7ff">

        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">

        <style type="text/css" class="init">

        </style>

        <script type="text/javascript" src="/media/js/site.js?_=df7cd4213eec7fc146048acf402cae00"></script>

        <script type="text/javascript" src="/media/js/dynamic.php?comments-page=examples%2Fstyling%2Fbootstrap.html" async></script>

        <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>

        <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

        <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>

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

                                <h2>Manage Review Patient</h2>

                                <div class="right-wrapper pull-right">

                                    <ol class="breadcrumbs">

                                        <li>

                                            <a href="dashboard.php">

                                                <i class="fa fa-home"></i>

                                            </a>

                                        </li>

                                        <li><span>Manage Review Patient &nbsp;&nbsp;</span></li>

                                    </ol>

                                </div>

                            </header>

                            <!-- start: page -->

                            <section class="panel">

                                <header class="panel-heading">
	 <form id="form" method="POST" action="" class="form-horizontal">
                                    <div class="panel-body">

                                        <div class="form-group col-sm-4">

                                            <label class="col-sm-5 control-label">Start Date<span class="required">*</span></label>

                                            <div class="col-sm-7">

                                                <input type="date" name="startdate" id="startdate" maxlength="30" class="form-control" value="<?php echo $startdate?>">

                                                <span class="red" id="err_gymname"></span>

                                            </div>

                                        </div>

                                        <div class="form-group col-sm-4">

                                            <label class="col-sm-5 control-label">End Date <span class="required">*</span></label>

                                            <div class="col-sm-7">

                                                <input type="date" name="enddate" id="enddate" maxlength="30" class="form-control" value="<?php echo $enddate?>">

                                                <span class="red" id="err_city"></span>

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
					</form>
                                </header>

                                <div class="panel-body">

                                    <table id="example" class="table table-striped table-bordered" style="width:100%">

                                        <thead>

                                            <tr>

                                                <th>Sr. No.</th>
                                                <th>Prescription No.</th>
                                                <th>Patient name</th>
                                                <th>Mobile Number</th>
                                                <th>Email ID</th>
                                                <th>Review Date</th>
                                                <th>Action</th>
                                            </tr>

                                        </thead>

                                        <tbody>

                                            <?php

									 $i = 1;

									  while($rowPrescription = mysqli_fetch_array($resultPrescription)) 

									  { 

									   $patientid = $rowPrescription['patient_id'];

									  $resultPatient = mysqli_query($con, "SELECT * FROM patients where patient_id = '".$patientid."'");

									  $rowPatient =mysqli_fetch_array($resultPatient);

									?>
                                                <tr>
                                                    <td align="center"><?php echo $i++; ?></td>
                                                    <td> <?php echo $rowPrescription['reciptid'];?> </td>
                                                    <td><?php echo $rowPatient['patient_name']; ?></td>
                                                    <td><?php echo $rowPatient['mobile_number']; ?></td>
                                                    <td><?php echo $rowPatient['email']; ?></td>
                                                    <td><?php echo $rowPrescription['description']; ?></td>
                                                    <td><?php echo $rowPrescription['created_at']; ?></td>                                                  
                                                </tr>

                                                <?php } ?>

                                        </tbody>

                                    </table>

                                </div>

                            </section>

                            <!-- end: page -->

                        </section>

                </div>

        </section>

        <script type="text/javascript" class="init">
            $(document).ready(function() {

                $('#example').DataTable();

            });
        </script>

        <!-- Theme Base, Components and Settings -->

        <script src="assets/javascripts/theme.js"></script>

    </body>

    </html>