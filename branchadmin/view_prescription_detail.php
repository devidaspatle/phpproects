<?php 

error_reporting(0);

include("includes/db_config.php");

require_once('includes/check_session.php');

error_reporting(0);

$user_id = $_SESSION['rsoftId'];

$patientid = $_GET['patientid'];

$reciptid = $_GET['reciptid'];





 $resultPatients = mysqli_query($con, "SELECT * FROM patients  where patient_id = '".$patientid."'");

 $rowpatientes = mysqli_fetch_array($resultPatients);



$center_id = $rowpatientes['centre_id'];



$resultCentres = mysqli_query($con, "SELECT * FROM centres where id = '".$center_id."'");

$rowCentres =mysqli_fetch_array($resultCentres);

?>

<!doctype html>



<html class="fixed">



	<head>



		<!-- Basic -->



		<meta charset="utf-8">







		     <title>Zero diabeties | Centre</title>



		



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



  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Raleway'>

<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>



<link rel="stylesheet" href="css/style.css">



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



						<h2>Prescription Details</h2>



					



						<div class="right-wrapper pull-right">



							<ol class="breadcrumbs">



								<li>



									<a href="dashboard.php">



										<i class="fa fa-home"></i>



									</a>



								</li>



								



								<li><span>Prescription Details&nbsp;&nbsp;</span></li>



							</ol>



						</div>



					</header>









          <!-- start: page -->

					<!-- start: page -->



					<div class="row">



						<div class="col-md-12">



						



								<section class="panel">





									<div class="panel-body">



										<div class="form-group">

                      <input type="button" onClick="printDiv('printableArea')" value="Print" />

          <!-- start: page -->

        <div id="printableArea"  style="border:dotted">

        	<tr>

									   <td colspan="6">  <div style="background-color:#FFFFFF;">

<div style="text-align:center"><img src="logo.png" style="width:100px"></div>



<div style="text-align:center; font-size:14px; color:#000066"><h5><b>Address: <?php echo $rowCentres['address'];?>, <?php echo $rowCentres['city'];?>-<?php echo $rowCentres['pincode'];?></b></h5></div>

<div style="text-align:center; font-size:14px;color:#000066"><h5><b>Email:zerodiabetes@gmail.com&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Phone. No. <?php echo $rowCentres['mobile_number'];?></b></h5></div>



										<div style="text-align:center"><h2 class="panel-title"><b>Prescription Details</b></h2></div></td>

									</tr>

<table class="table">

    <thead>

      <tr>

        <th scope="col">Patient Name: <th>

        <th scope="col" colspan="4"><?php echo ucwords($rowpatientes['patient_name']); ?></th>

        <th scope="col">ID No. : </th>

        <th scope="col"><?php echo ucwords($rowpatientes['patient_id']); ?> </th>

        <th scope="col">Date : </th>

        <th scope="col"><?php echo ucwords($rowpatientes['created_at']); ?></th>

      </tr>

        <tr>

        <th scope="col">Gender : <th>

        <th scope="col"><?php echo ucwords($rowpatientes['gender']); ?></th>

        <th scope="col">DOB : </th>

        <th scope="col"><?php echo ucwords($rowpatientes['date_of_birth']); ?> </th>

        <th scope="col">Height : </th>

        <th scope="col"><?php echo ucwords($rowpatientes['height']); ?></th>

        <th scope="col">Weight : </th>

        <th scope="col"><?php echo ucwords($rowpatientes['weight']); ?></th>

        <th scope="col">BMI : </th>

        <th scope="col"><?php echo ucwords($rowpatientes['bmi']); ?></th>

        <th scope="col">Mobile No. : </th>

        <th scope="col"><?php echo ucwords($rowpatientes['mobile_number']); ?></th>

      </tr>

    </thead>

  </table>

<div class="table-responsive">

  <table class="table">

    <thead>

      <tr>

        <th scope="col">Sr. No.</th>

        <th scope="col">Supplements </th>

        <th scope="col">Doses</th>

        <th scope="col">Instruction </th>

        <th scope="col">No of B </th>

        <th scope="col">Price</th>

         <th scope="col">Total Price</th>

    </thead>

    <tbody>

       <?php

       $i=1;

       $resultPrescriptions = mysqli_query($con, "SELECT * FROM prescriptions where patient_id = '".$patientid."' and reciptid = '".$reciptid."'");

		   while($rowPrescriptions =	mysqli_fetch_array($resultPrescriptions))

        {

       $supplementsids = $rowPrescriptions['supplements_id'];



		   $rowFormulas = mysqli_query($con, "SELECT * FROM formulas where id = '".$supplementsids."'");



       $rowFormulas =mysqli_fetch_array($rowFormulas);

        if(!empty($rowPrescriptions['noofb'])){

         ?>

      <tr>

        <th scope="row"><?php echo $i++;?></th>

        <td><?php echo $supplementsids = $rowFormulas['formulas_name'];?>	</td>

        <td><?php  $doses = $rowPrescriptions['doses'];

              

              	if($doses==1)

              	{

              		echo "0-1-1";

              	}

              	if($doses==2)

              	{

              	echo "1-1-1";	

              	}

	             if($doses==3)

              	{

              		echo "1-0-1";

              	}

              	if($doses==4)

              	{

              	echo "0-1-0";	

              	}

              	if($doses==5)

              	{

              		echo "0-0-1";

              	}

              	if($doses==6)

              	{

              	echo "1-0-0";	

              	}

              	if($doses==7)

              	{

              		echo "2-0-2";

              	}

              	if($doses==8)

              	{

              	echo "2-0-1";	

              	}

              	if($doses==9)

              	{

              	echo "2-2-2";	

              	}

        ?></td>

        <td><?php 

			            $instruction =  $rowPrescriptions['instruction'];

             

              	if($instruction==1)

              	{

              		echo "1/2 hour before Meal";

              	}

              	if($instruction==2)

              	{

              	echo "1/2 hour after Meal";	

              	}

         ?></td>

        <td><?php echo  $explodedno =  $rowPrescriptions['noofb']; ?>



        </td>

        <td><?php  echo $exploded = $rowPrescriptions['price']; ?></td>

         <td><?php  echo $gtotal = $exploded * $explodedno; ?></td>



      </tr>

   <?php  } } ?>

    

       <tr>

        <th scope="row">Total</th>

        <td>&nbsp;</td>

        <td>&nbsp;</td>

        <td>&nbsp;</td>

        <td>&nbsp;</td>

        <td align="right">RS.</td>

         <td><b>

          <?php 

           $explodedno =0;

           $exploded = 0;

           $gtotald = 0;

           $gtotal = 0;



       $resultPres = mysqli_query($con, "SELECT * FROM prescriptions where patient_id = '".$patientid."' and reciptid = '".$reciptid."'");

       while($rowPrescriptions =  mysqli_fetch_array($resultPres))

        {

          $explodedno =  $rowPrescriptions['noofb'];

          $exploded = $rowPrescriptions['price'];

          $gtotal = $exploded * $explodedno;

         $gtotald += $gtotal;

      }

      echo $gtotald;

       ?>/</b></td>

      </tr>

    </tbody>

  </table>



  <table class="table">

  	<thead>

       <tr>

        <td colspan="9">
          <table> <tr>
        <td><b>1.&nbsp;Alpha Cardio D Oil&nbsp;&nbsp;&nbsp;&nbsp;</b></td><td><b>2.&nbsp;Alfa Nirogi Salt &nbsp;&nbsp;&nbsp;&nbsp;</b></td><td><b>3.&nbsp; Antiox GT&nbsp;&nbsp;&nbsp;&nbsp;</b></td><td><b>4.&nbsp;Stevia SF&nbsp;&nbsp;&nbsp;&nbsp;</b></td><td><b>5.&nbsp;F-54&nbsp;&nbsp;&nbsp;&nbsp;</b></td><td><b>6.&nbsp;Alkaline Rod&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
      </tr></table>
</td></tr>

        <tr>

        <th colspan="9">Next Review Date: 

          <?php 

            $resultpestiions = mysqli_query($con, "SELECT * FROM  adviceinvests where patient_id = '".$patientid."' and reciptid = '".$reciptid."'");

          $rowinvests = mysqli_fetch_array($resultpestiions);



        echo  $rowinvests['descriptions']; ?></th>

      </tr>

        <tr>

        <th colspan="7">Investigations </th>

      </tr>

    </thead>

    <thead>

     
  <tr>
      <td colspan="7"><table>
          <?php 

			      

            

            $resultpInvestigations = mysqli_query($con, "SELECT * FROM  adviceinvests where patient_id = '".$patientid."'");

            ?>
    <?php
      $i=0;
      while($rowinvestigations = mysqli_fetch_array($resultpInvestigations)) { 

            $investigations_id = $rowinvestigations['investigations_id'];

            $resultInvestigations = mysqli_query($con, "SELECT * FROM  investigations where id = $investigations_id");

            $investigations = mysqli_fetch_array($resultInvestigations);

            if(!empty($investigations_id))
            {
      ?>
      <?php  if($i>6) { ?>
              <tr>
             <?php
          $i=0;
        }
          ?>
      <td><input type="checkbox" name="investigations_id[]"  value="<?php echo $investigations['id']; ?>" /> <?php echo ucwords($investigations['investigations_name']); ?> &nbsp; &nbsp;</td>
    <?php  } $i++; }  ?>
      </tr>


    </table>  

    </thead>

    <tr style="height: 100px;">

        <th colspan="7"></th>

        

      </tr>



       <tr>

        <th></th>

        <td>Helpline Number</td>

        <td>&nbsp;</td>

        <td>&nbsp;</td>

        <td>Customer care number</td>

        <td>&nbsp;</td>

        <td>&nbsp;</td>

       

        <td>Toll free number</td>

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

<

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



		

<script  src="js/index.js"></script>

	</body>



</html>