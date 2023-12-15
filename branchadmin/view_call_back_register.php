<?php 
include_once("includes/db_config.php");
require_once('includes/check_session.php');
error_reporting(0);
$user_id = $_SESSION['rsoftId'];
$callid = $_GET['callid'];

$sqlg = "SELECT * FROM appointments where id = '".$callid."' and centre_id='".$user_id."'";
$resultQgl = mysqli_query($con, $sqlg); 
$rownum = mysqli_fetch_array($resultQgl);
$stateid = $rownum['state'];
$center_id = $rownum['centre_id'];

$resultState = mysqli_query($con, "SELECT * FROM states where sta_id ='".$stateid."'");
$rowState = mysqli_fetch_array($resultState);

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

    font-size:12px;

    margin-left:8px;

}

@media only screen and (min-width: 768px) {

.top_head {

 display:block;

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

	 display:none;

}

}

</style>

<?php include "header.php"; ?>

		<!-- end: header -->

 
<script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
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





@media only screen and (min-width: 768px) {

.menu_not {

 display:none;

}

}



@media only screen and (max-width: 767px) {

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

						<h2> Patient Registration</h2>

					

						<div class="right-wrapper pull-right">

							<ol class="breadcrumbs">

								<li>

									<a href="dashboard.php">

										<i class="fa fa-home"></i>

									</a>

								</li>

								

								<li><span> Patient Details&nbsp;&nbsp;</span></li>

							</ol>

						</div>

					</header>



					<!-- start: page -->

<input type="button" onClick="printDiv('printableArea')" value="Print" />
					<!-- start: page -->
				<div id="printableArea"  style="border:dotted">
					<div class="row">

						<div class="col-md-12">

						
								<section class="panel">


									<div class="panel-body">
							<table class="table">
								<thead>
									<tr>
									   <td colspan="6">  
										<div style="text-align:center"><h2 class="panel-title"><b>View Call Back Register</b></h2></div></td>
									</tr>
                                    <tr>
									   <td>Name</td>
										<td><?php echo ucwords($rownum['name']);?></td>
										<td>Gender</td>
										<td><?php echo ucwords($rownum['gender']);?></td>
									</tr>
                                   
                                     <tr>
									   <td>Email ID</td>
										<td><?php echo $rownum['emailid'];?></td>
										<td> Mobile No. </td>
										<td><?php echo $rownum['mobile_number'];?></td>
									</tr>
                                     <tr>
									   <td colspan="4"><h5><b>Comments</b></h5></td>	
									</tr>
                                     <tr>
									   <td>comments</td>
										<td colspan="3"> <?php echo $rownum['comments'];?></td>
									</tr>
                                   
								</thead>
                                </table>

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