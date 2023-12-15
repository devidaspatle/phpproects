<?php 

error_reporting(0);

include("includes/db_config.php");
require_once('includes/check_session.php');
 $centre_id = $_SESSION['rsoftId'];

if(!empty($_POST['patient_id']))

{

  $resultPatients = mysqli_query($con, "SELECT * FROM patients  where patient_id = '".$_POST['patient_id']."'");

  $rowpatientes = mysqli_fetch_array($resultPatients);

}

$resultFormulas = mysqli_query($con, "SELECT * FROM formulas  order by formulas_name desc");

$totalFormulas =mysqli_num_rows($resultFormulas);



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

       <script type="text/javascript">
        function calc() {
          var h = document.getElementById("height").value;
          var w = document.getElementById("weight").value;
          
          var h2 = h * h;
          var amt = (w/h2);
          document.getElementById("total_rs").value = amt;
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





<script type="text/javascript">



	function isNumber(evt,id) {



	    evt = (evt) ? evt : window.event;



      	var charCode = (evt.which) ? evt.which : evt.keyCode;



      	if (charCode > 31 && (charCode < 43 || charCode > 57)) {



          document.getElementById(id).style.border = "1px solid red";



          return false;



      	}



      	else



      	{



      	  document.getElementById(id).style.border = "";



          return true;



      	}



	}



	 



	function checkEmail_div(id1,id2)



	{



	    if (document.getElementById(id1).value === '')



	    {



	    	document.getElementById(id1).style.borderColor = "";



		    document.getElementById(id2).innerHTML='';



	    }



	    else



	    {



		    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;







		    if (!filter.test(document.getElementById(id1).value))



		    {



		       document.getElementById(id1).value='';



		       document.getElementById(id1).style.border = "1px solid red";



		       document.getElementById(id2).innerHTML='<font color="#FF0000">Please provide a valid Email Address.</font>';



		       document.getElementById(id1).focus();



		    }



		    else



		    {



		       document.getElementById(id1).style.borderColor = "";



		       document.getElementById(id2).innerHTML='';



		    }



		}



	}  	



</script>			<!-- end: header -->



  <script language="javascript" type="text/javascript">





function getXMLHTTP() { //fuction to return the xml http object

		var xmlhttp=false;	

		try{

			xmlhttp=new XMLHttpRequest();

		}

		catch(e)	{		

			try{			

				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");

			}

			catch(e){

				try{

				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");

				}

				catch(e1){

					xmlhttp=false;

				}

			}

		}

		 	

		return xmlhttp;

    }

	

	

	function getDiagnosis(id) {		

		var strURL="findPlan.php?plan_type="+id; 

		var req = getXMLHTTP();

		

		if (req) {

			

			req.onreadystatechange = function() {

				if (req.readyState == 4) {

					// only if "OK"

					if (req.status == 200) {						

						document.getElementById('subjiv').innerHTML=req.responseText;						

					} else {

						alert("There was a problem while using XMLHTTP:\n" + req.statusText);

					}

				}				

			}			

			req.open("GET", strURL, true);

			req.send(null);

		}

				

	}

</script>



<script>

	function printDiv(divName) {

     var printContents = document.getElementById(divName).innerHTML;

     var originalContents = document.body.innerHTML;



     document.body.innerHTML = printContents;



     window.print();



     document.body.innerHTML = originalContents;

}

</script>	<div class="inner-wrapper">



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



						<h2> Allopathic Medicine Details</h2>



					



						<div class="right-wrapper pull-right">



							<ol class="breadcrumbs">



								<li>



									<a href="dashboard.php">



										<i class="fa fa-home"></i>



									</a>



								</li>



								



								<li><span> Allopathic Medicine Details&nbsp;&nbsp;</span></li>



							</ol>



						</div>



					</header>







					<!-- start: page -->



					<div class="row">



						<div class="col-md-12">



						



								<section class="panel">

				<form id="form"  method="POST" action="" class="form-horizontal" onSubmit="disable();">				



						<header class="panel-heading">

						<div class="panel-body">

                        	

										

							<div class="form-group col-sm-6">



											<label class="col-sm-5 control-label">Patient Name<span class="required">*</span></label>



											<div class="col-sm-7">

										 <select class="form-control p-0" id="input3" name="patient_id">

					                        <option>Select Patient Name</option>

					                        <?php 
											$resultPatient = mysqli_query($con, "SELECT * FROM patients  where centre_id = '".$centre_id."' order by patient_name desc");

					                        while($patient = mysqli_fetch_array($resultPatient)) {  ?>

					                          <option value="<?php echo $patient['patient_id']; ?>"><?php echo ucwords($patient['patient_name']); ?></option>

					                        <?php } ?>

					                      </select>



											</div>



										</div>



											<div class="form-group col-sm-4">



											<div class="col-sm-8">

											<button type="submit" name="submit" class="btn btn-warning">Search</button>	 &nbsp;&nbsp;<button type="reset" class="btn btn-default">Reset</button>

												<span class="red" id="err_city"></span>



											</div>



										</div>

										</div>

									

						</header>

					</form>

				
					<!-- start: page -->

				<div id="printableArea"  style="border:dotted">



									<div class="panel-body">



										<div class="form-group">

<table class="table">

    <thead>

      <tr>

        <th scope="col">Patient Name: <th>

        <th scope="col" colspan="4"><?php echo ucwords($rowpatientes['patient_name']); ?></th>

        <th scope="col">ID No. : </th>

        <th scope="col"><?php echo ucwords($rowpatientes['patient_id']); ?> </th>

        <th scope="col">Date : </th>

        <th scope="col"><?php  echo date('d-m-Y');

						?></th>

        <th scope="col">Mobile No. : </th>

        <th scope="col"><?php echo ucwords($rowpatientes['mobile_number']); ?></th>

      </tr>

       

    </thead>

  </table>
  
<form id="form" method="POST" action="allopathic_medicine_code.php" class="form-horizontal" onSubmit="disable();">
<div class="table-responsive">

  <table class="table" width="100%">
 <input type="hidden" name="patient_id" value="<?php echo $rowpatientes['patient_id']; ?>">

    <tbody>

    	<tr>

        <th scope="row">SN</th>

        <th>Brand Name</th>

        <th>Generic Name</th>

        <th>Doses</th>

     </tr>

	

       <tr>

        <th scope="row">1</th>

        <td><input type="text" name="brand_name[]"  class="form-control"  style="width: 240px"/></td>

        <td><input type="text" name="generic_name[]"  class="form-control"/></td>

        <td><input type="text" name="doses[]" class="form-control" style="width: 100px" /></td>

     </tr>





       <tr>

        <th scope="row">2</th>

          <td><input type="text" name="brand_name[]"  class="form-control"  style="width: 240px"/></td>

        <td><input type="text" name="generic_name[]"  class="form-control"/></td>

        <td><input type="text" name="doses[]" class="form-control" style="width: 100px" /></td>

     </tr>



       <tr>

        <th scope="row">3</th>

          <td><input type="text" name="brand_name[]" class="form-control"  style="width: 240px"/></td>

        <td><input type="text" name="generic_name[]" class="form-control"/></td>

        <td><input type="text" name="doses[]" class="form-control" style="width: 100px" /></td>
     </tr>



       <tr>

        <th scope="row">4</th>

         <td><input type="text" name="brand_name[]" class="form-control"  style="width: 240px"/></td>

        <td><input type="text" name="generic_name[]" class="form-control"/></td>

        <td><input type="text" name="doses[]" class="form-control" style="width: 100px" /></td>

     </tr>





       <tr>

        <th scope="row">5</th>

          <td><input type="text" name="brand_name[]" class="form-control"  style="width: 240px"/></td>

        <td><input type="text" name="generic_name[]" class="form-control"/></td>

        <td><input type="text" name="doses[]" class="form-control" style="width: 100px" /></td>

     </tr>



       <tr>

        <th scope="row">6</th>

         <td><input type="text" name="brand_name[]" class="form-control"  style="width: 240px"/></td>

        <td><input type="text" name="generic_name[]" class="form-control"/></td>

        <td><input type="text" name="doses[]" class="form-control" style="width: 100px" /></td>

     </tr>



       <tr>

        <th scope="row">7</th>

           <td><input type="text" name="brand_name[]" class="form-control"  style="width: 240px"/></td>

        <td><input type="text" name="generic_name[]" class="form-control"/></td>

        <td><input type="text" name="doses[]" class="form-control" style="width: 100px" /></td>

     </tr>

       <tr>

        <th scope="row">8</th>

         <td><input type="text" name="brand_name[]" class="form-control"  style="width: 240px"/></td>

        <td><input type="text" name="generic_name[]" class="form-control"/></td>

        <td><input type="text" name="doses[]" class="form-control" style="width: 100px" /></td>

     </tr>



       <tr>

        <th scope="row">9</th>

           <td><input type="text" name="brand_name[]" class="form-control"  style="width: 240px"/></td>

        <td><input type="text" name="generic_name[]" class="form-control"/></td>

        <td><input type="text" name="doses[]" class="form-control" style="width: 100px" /></td>

     </tr>



       <tr>

        <th scope="row">10</th>

          <td><input type="text" name="brand_name[]" class="form-control"  style="width: 240px"/></td>

        <td><input type="text" name="generic_name[]" class="form-control"/></td>

        <td><input type="text" name="doses[]" class="form-control" style="width: 100px" /></td>

     </tr>



       <tr>

        <th scope="row">11</th>

         <td><input type="text" name="brand_name[]" class="form-control"  style="width: 240px"/></td>

        <td><input type="text" name="generic_name[]" class="form-control"/></td>

        <td><input type="text" name="doses[]" class="form-control" style="width: 100px" /></td>

     </tr>

	<tr>
        <th scope="row">&nbsp;</th>

        <td>&nbsp; </td>

       

        <td>
		<button type="submit" name="submit" id="save" class="btn btn-warning">Save</button>
		</td>
 <td>&nbsp;</td>
     </tr>

    </tbody>

  </table>


								</div>
								</form>
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


		<script src="assets/javascripts/forms/examples.validation.js"></script>



		<script src="assets/javascripts/custom.js"></script>


		<script src="assets/javascripts/ajaxupload.3.5.js"></script>

    
<script  src="js/index.js"></script>

	</body>



</html>