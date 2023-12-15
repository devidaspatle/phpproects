<?php
error_reporting(0);
include "includes/check_session.php";

include_once("includes/db_config.php");

$rsoftid = $_SESSION['rsoftId'];

$resultPatient = mysqli_query($con, "SELECT * FROM patients  where centre_id ='".$rsoftid."'");

$totalPatient =mysqli_num_rows($resultPatient);



$resultContacts = mysqli_query($con, "SELECT * FROM appointments  where centre_id ='".$rsoftid."'");

$totalContacts =mysqli_num_rows($resultContacts);


$resultPrescriptions = mysqli_query($con, "SELECT * FROM prescriptions  where centre_id ='".$rsoftid."' group by reciptid");

$totalPrescriptions =mysqli_num_rows($resultPrescriptions);


$resultCentre = mysqli_query($con, "SELECT * FROM centres   order by id desc");

$totalCentres =mysqli_num_rows($resultCentre);

?>

<!doctype html>

<html class="fixed">

    <head>

        <!-- Head Libs -->

        <script src="assets/vendor/modernizr/modernizr.js"></script>

<!-- Basic -->

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <title>Zero Diabetic Diet | Consultancy </title> 

        

        <!-- Web Fonts  -->

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">



        <!-- Vendor CSS -->

        <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />



        <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />

        <link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />

        <link rel="stylesheet" href="assets/vendor//bootstrap-datepicker/css/bootstrap-datepicker3.css" />



        <!-- Specific Page Vendor CSS -->

        <link rel="stylesheet" href="assets/vendor/jquery-ui/jquery-ui.css" />

        <link rel="stylesheet" href="assets/vendor/jquery-ui/jquery-ui.theme.css" />

        <link rel="stylesheet" href="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />

        <link rel="stylesheet" href="assets/vendor/morris.js/morris.css" />



        <!-- Theme CSS -->

        <link rel="stylesheet" href="assets/stylesheets/theme.css" />



        <!-- Skin CSS -->

        <link rel="stylesheet" href="assets/stylesheets/skins/default.css" />



        <!-- Theme Custom CSS -->

        <link rel="stylesheet" href="assets/stylesheets/theme-custom.css">



        <!-- Head Libs -->

        <script src="assets/vendor/modernizr/modernizr.js"></script>



        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"/>

 

 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css"/>

   

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>

  

<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>



<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>



 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>

 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

 <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>

 

<style>

    

    .whit

    {

        color: white;

    }



    .widget-summary .summary .amount {

    margin-right: .2em;

    font-size: 14px;

    /* font-size: 15px; */

    font-weight: 600;

    color: #333;

    vertical-align: middle;

    text-align: -webkit-center;



}





.widget-summary .widget-summary-col {

    display: table-cell;

    vertical-align: center;

    width: 100%;

   

}



.bg-primary {

    background: #0088cc;

    display: inline-block;

}



.bg-secondary {

    background: #E36159;

    color: #FFF;

   

    display: inline-block;

}



.bg-tertiary {

    background: #2BAAB1;

    color: #FFF;

   display: inline-block;

}

.bg-quaternary {

    background: #734BA9;

    color: #FFF;

   display: inline-block;

}





.widget-summary {

    /* display: table; */

    width: 100%;

}



.widget-summary .summary-icon {

    margin-right: 0px;

    font-size: 4.2rem;

    width: 90px;

    height: 90px;

    line-height: 90px;

    text-align: center;

    color: #fff;

    -webkit-border-radius: 55px;

    border-radius: 55px;

}



.widget-summary .widget-summary-col {

    display: initial;

    vertical-align: top;

    width: 100%;

}



.panel-body {

    padding: 0px;

}



.panel-heading

{

background-color:#03486B

}

.table.mb-none {

    margin-bottom: 0 !important;

    background-color: white;

}



.panel-title {

    color: #33353F;

    font-size: 20px;

    font-weight: 400;

    line-height: 20px;

    padding: 0;

    text-transform: none;

    color: #FFFFFF;

    text-align: center;

}

.panel-body.block1 .widget-summary {

    text-align: center;

}

td {

    max-width: 200px;

    white-space: nowrap;

    overflow: hidden;

}



.block

    {

        padding:20px 10px;

    }

    strong.amount {

    padding-left:10px;

    position:absolute; 

    top:20px; 

    text-align:left !important; 

    color:white !important;

}

.widget-summary h4.amount {

    padding-top: 10px;

}

@media(max-width:1140px) {

.table-responsive td, .table-responsive th {

font-size: 10px;

}

}

@media(min-width:991px) {

.table-responsive {

    overflow-x: unset;

}

}

</style>

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

    font-size:12px;

    margin-left:8px;

}

@media  only screen and (min-width: 768px) {

.top_head {

 display:block;

}

}

@media  only screen and (min-width: 768px) and (max-width:1100px) {

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



@media  only screen and (max-width: 767px) {

.top_head {

     display:none;

}

}

</style>  

    </head>

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

.help_btn a, .faq_btn a{

	text-decoration:none;

	}



	ul.nav-main > li > a:hover, ul.nav-main > li > a:focus {

    background-color:#03486B;

}





ul.nav-main li .nav-children li a:hover, ul.nav-main li .nav-children li a:focus {

    background:#03486B;

}





@media  only screen and (min-width: 768px) {

.menu_not {

 display:none;

}

}



@media  only screen and (max-width: 767px) {

.menu_not {

    float: right;

    margin: 16px 0;

	 display:block;

}

}





</style>

       

<?php include "left.php"; ?>		

	               <!-- end: sidebar -->

        <section role="main" class="content-body">

    <header class="page-header">

        <h2>Dashboard</h2>



        <div class="right-wrapper pull-right">

            <ol class="breadcrumbs">

                <li>

                    <a href="assets/home">

                        <i class="fa fa-home"></i>

                    </a>

                </li>

                <li><span style="margin-right:20%">Dashboard&nbsp;&nbsp;&nbsp;&nbsp;</span></li>

            </ol>

        </div>

    </header>



    <!-- start: page -->



    <div class="row">

        <div class="col-md-12">

            <section class="panel" align="center">
            <a href="patient_report.php">
                 <div class="col-md-3 col-lg-3 col-xl-3">

                    <section class="panel">

                        <div class="panel-body block1">

                            <div class="widget-summary">

                                <div class="widget-summary-col widget-summary-col-icon">

                                    <div class="summary-icon bg-tertiary">

                                        <?php echo $totalPatient; ?>

                                    </div>

                                    <div class="widget-summary-col">



                                        <!--    <h4 class="title">&nbsp;</h4>-->

                                        <div class="info">

                                            <strong><h4 class="amount"><b>Total Patient</b></h4>

                                                            </strong>

                                        </div>



                                    </div>

                                </div>



                            </div>

                        </div>

                    </section>
                    </a>
                </div>
<div class="col-md-3 col-lg-3 col-xl-3">
  <a href="review_patient_report.php">
                    <section class="panel">

                        <div class="panel-body block1">

                            <div class="widget-summary">

                                <div class="widget-summary-col widget-summary-col-icon">

                                    <div class="summary-icon bg-secondary">

                                     <?php echo $totalPrescriptions; ?>

                                </div>

                                    <div class="widget-summary-col">



                                        <!--<h4 class="title">&nbsp;</h4>-->

                                        <div class="info">

                                            <strong><h4 class ="amount"><b>Review Patient</b></h4></strong>

                                        </div>



                                    </div>

                                </div>



                            </div>

                        </div>

                    </section>
</a>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3">
            <a href="centres_report.php">
                    <section class="panel">

                        <div class="panel-body block1">



                            <div class="widget-summary">

                                <div class="widget-summary-col widget-summary-col-icon">



                                    <div class="summary-icon bg-primary">

                                        <?php echo $totalCentres; ?>

                                    </div>

                                    <div class="widget-summary-col">



                                        <!--<h4 class="title">&nbsp;</h4>-->

                                        <div class="info" align="center">

                                            <strong><h4 class="amount"><b>Total Centres </b></h4>

                                                            </strong>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </section>
  </a>
                </div>

                <div class="col-md-3 col-lg-3 col-xl-3">
          <a href="call_back_register_report.php">
                    <section class="panel">

                        <div class="panel-body block1">

                            <div class="widget-summary">

                                <div class="widget-summary-col widget-summary-col-icon">

                                    <div class="summary-icon bg-quaternary">

                                        <?php echo $totalContacts; ?>



                                         </div>

                                    <div class="widget-summary-col">



                                        <!--     <h4 class="title">&nbsp;</h4>-->

                                        <div class="info">

                                            <strong><h4 class="amount"><b> Call Back Register </b></h4></strong>

                                        </div>



                                    </div>

                                </div>



                            </div>



                        </div>

                    </section>
</a>
                </div>

        </div>

        <div class="row">

            <div class="col-md-12">

                <section class="panel">



                    <div class="col-sm-12">

                        <header class="panel-heading" style="background-color:black">

                            <h2 class="panel-title" style="color:#FFFFFF" align="center">Quick Links</h2>

                        </header>

                    </div>



                    <div class="col-md-12">&nbsp;</div>

                   



                    <a href="create_patient_registration.php">

                        <div class="col-md-12 col-lg-3 col-xl-3">

                            <section class="panel panel-featured-left panel-featured-secondary">

                                <div class="panel-body block" style="background-color:#0088CC;">

                                    <div class="widget-summary">



                                        <div class="widget-summary-col">

                                            <div class="summary">

                                                <!-- <h4 class="title">&nbsp;</h4>-->

                                                <div class="info">

                                                    <div class=col-xs-4>

                                                        <div class="row">

                                                            <img height="70" width="70" src="assets/images/member.png" alt="member">

                                                        </div>

                                                    </div>

                                                    <div class=col-xs-8>

                                                        <div class="row">

                                                            <strong class="amount"> Registration

                                                                </strong>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </section>

                        </div>

                    </a>

                    <a href="create_investigation_detail.php">

                        <div class="col-md-12 col-lg-3 col-xl-3">

                            <section class="panel panel-featured-left panel-featured-tertiary">

                                <div class="panel-body block" style="background-color:#03486B;">

                                    <div class="widget-summary">



                                        <div class="widget-summary-col">

                                            <div class="summary">

                                                <!--<h4 class="title">&nbsp;</h4>-->

                                                <div class="info">

                                                    <div class="info">

                                                        <div class=col-xs-4>

                                                            <div class="row">

                                                                <img height="70" width="70" src="assets/images/employee.png" alt="employee">

                                                            </div>

                                                        </div>

                                                        <div class=col-xs-8>

                                                            <div class="row">

                                                                <strong class="amount">

															Investigation </strong>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </section>

                        </div>

                    </a>

                    <a href="create_allopathic_medicine.php">

                        <div class="col-md-12 col-lg-3 col-xl-3">

                            <section class="panel panel-featured-left panel-featured-quaternary" style="border-color: #03486b;">

                                <div class="panel-body block" style="background-color:#e36159;">

                                    <div class="widget-summary">



                                        <div class="widget-summary-col">

                                            <div class="summary">

                                                <!--         <h4 class="title">&nbsp;</h4>-->

                                                <div class="info">

                                                    <div class="info">

                                                        <div class=col-xs-4>

                                                            <div class="row">

                                                                <img height="70" width="70" src="assets/images/member12.png" alt="payment">

                                                            </div>

                                                        </div>



                                                        <div class=col-xs-8>

                                                            <div class="row">

                                                                <strong class="amount">

                                                                   Medicine</strong>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </section>

                        </div>

                    </a>
 <a href="create_prescription_detail.php">

                        <div class="col-md-12 col-lg-3 col-xl-3">

                            <section class="panel panel-featured-left panel-featured-quaternary" style="border-color: #03486b;">

                                <div class="panel-body block" style="background-color:#734BA9;">

                                    <div class="widget-summary">



                                        <div class="widget-summary-col">

                                            <div class="summary">

                                                <!--         <h4 class="title">&nbsp;</h4>-->

                                                <div class="info">

                                                    <div class="info">

                                                        <div class=col-xs-4>

                                                            <div class="row">

                                                                <img height="70" width="70" src="assets/images/member12.png" alt="payment">

                                                            </div>

                                                        </div>



                                                        <div class=col-xs-8>

                                                            <div class="row">

                                                                <strong class="amount">

                                                                    Prescription</strong>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </section>

                        </div>

                    </a>

                </section>

            </div>

        </div>



        <div class="row">

            <div class="col-md-6 col-lg-6 col-xl-6">

                <section class="panel">

                    <div class="panel-body" style="border:1px solid #999999;height:max-content;">

                        <div class="row">

                            <div class="col-lg-12">

                                <header class="panel-heading">

                                    <h2 class="panel-title">Call Back Register </h2>

                                </header>

                                <div class="table-responsive">

                                    <table class="table table-bordered table-striped mb-none">



                                        <tbody>

                                            <thead>

                                            <tr>

                                                <th> Patient Name</th>

                                                <th>Email </th>

                                                <th>Mobile No.</th>

                                                <th>Date</th>

                                            </tr>

                                        </thead>

                                        <tbody>
                                     <?php 
                                            $resultAppointments = mysqli_query($con, "SELECT * FROM appointments  order by id desc limit 0, 3");
                                             while($appointments = mysqli_fetch_array($resultAppointments)) {  ?>

                                        <tr>            



                                        <td><?php echo ucwords($appointments['name']); ?></td>

                                        <td><?php echo $appointments['emailid']; ?></td>                                    

                                        <td><?php echo $appointments['mobile_number']; ?></td>

                                        <td><?php $originalDate = $appointments['created_at']; 
                                        if(!empty($originalDate))
                                        {
                                        echo  date("d-m-Y", strtotime($originalDate));
                                        }

                                        ?></td>                

                                      

                                        </tr>

                                           <?php } ?>

                                             <tr>

                                                <td align="center" colspan="5">

                                                    <a class="btn btn-primary" href="manage_appointments.php">View More</a>

                                                </td>

                                            </tr>

                                        </tbody>

                                    </table>

                                </div>

                            </div>



                        </div>

                    </div>

                </section>

            </div>



           



            <div class="col-md-6 col-lg-6 col-xl-6">

                <section class="panel">

                    <div class="panel-body" style="border:1px solid #999999">

                        <div class="row">

                            <div class="col-lg-12">

                                <header class="panel-heading">

                                    <h2 class="panel-title">New Patient Register </h2>

                                </header>

                               

                                <div class="table-responsive">

                                    <table class="table table-bordered table-striped mb-none">

                                        <thead>

                                              <tbody>

                                            <thead>

                                            <tr>

                                                <th> Patient Name</th>

                                               
                                                <th>Mobile No.</th>
                                                <th>City </th>

                                                <th>Date</th>

                                            </tr>

                                        </thead>

                                        <tbody>

                                            

                                             <?php 
 $resultPatientes = mysqli_query($con, "SELECT * FROM patients  order by id desc limit 0, 3");
                                             while($patient = mysqli_fetch_array($resultPatientes)) {  ?>

                                        <tr>            

                                        <td><?php echo ucwords($patient['patient_name']); ?></td>

                                        <td><?php echo $patient['mobile_number']; ?></td>

                                        <td><?php echo $patient['city']; ?></td>                

                                      
                                        <td><?php $originalDate = $patient['created_at']; 
                                        if(!empty($originalDate))
                                        {
                                        echo  date("d-m-Y", strtotime($originalDate));
                                        }

                                        ?></td>                


                                        </tr>

                                           <?php } ?>

                                             <tr>

                                                <td align="center" colspan="5">

                                                    <a class="btn btn-primary" href="manage_patient.php">View More</a>

                                                </td>

                                            </tr>

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

		<script src="assets/vendor/magnific-popup/jquery.magnific-popup.js"></script>

		<script src="assets/vendor/jquery-placeholder/jquery-placeholder.js"></script>

		

		<!-- Specific Page Vendor -->

		<script src="assets/vendor/jquery-ui/jquery-ui.js"></script>

		<script src="assets/vendor/jqueryui-touch-punch/jqueryui-touch-punch.js"></script>

		<script src="assets/vendor/jquery-appear/jquery-appear.js"></script>

		<script src="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>

		<script src="assets/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js"></script>

		<script src="assets/vendor/flot/jquery.flot.js"></script>

		<script src="assets/vendor/flot.tooltip/flot.tooltip.js"></script>

		<script src="assets/vendor/flot/jquery.flot.pie.js"></script>

		<script src="assets/vendor/flot/jquery.flot.categories.js"></script>

		<script src="assets/vendor/flot/jquery.flot.resize.js"></script>

		<script src="assets/vendor/jquery-sparkline/jquery-sparkline.js"></script>

		<script src="assets/vendor/raphael/raphael.js"></script>

		<script src="assets/vendor/morris.js/morris.js"></script>

		<script src="assets/vendor/gauge/gauge.js"></script>

		<script src="assets/vendor/snap.svg/snap.svg.js"></script>

		<script src="assets/vendor/liquid-meter/liquid.meter.js"></script>

		<script src="assets/vendor/jqvmap/jquery.vmap.js"></script>

		<script src="assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>

		<script src="assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>

		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>

		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>

		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>

		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>

		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>

		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>

		

		<script src="assets/vendor/jquery-validation/jquery.validate.js"></script>



		<!-- Theme Base, Components and Settings -->



		<script src="assets/javascripts/theme.js"></script>

		<!-- Theme Custom -->



		<script src="assets/javascripts/theme.custom.js"></script>

		<!-- Theme Initialization Files -->



		<script src="assets/javascripts/theme.init.js"></script>



		<!-- Examples -->



		<script src="assets/javascripts/forms/examples.validation.js"></script>

	

		<script src="assets/javascripts/ajaxupload.3.5.js"></script>

		<script src="assets/javascripts/custom.js"></script>



	

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>

  

<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>



<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>



 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>

 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

 <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>

    </body>

</html>