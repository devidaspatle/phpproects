<?php 
include_once("includes/db_config.php");
require_once('includes/check_session.php');
$user_id = $_SESSION['rsoftId'];

$resultCentres = mysqli_query($con, "SELECT * FROM centres where id = '".$user_id."'");
$totalCentres =mysqli_num_rows($resultCentres);

$resultState = mysqli_query($con, "SELECT * FROM states order by sta_name asc");
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

	



		<!-- Theme CSS -->

		<link rel="stylesheet" href="assets/stylesheets/theme.css" />



		<!-- Skin CSS -->

		<link rel="stylesheet" href="assets/stylesheets/skins/default.css" />



		<!-- Theme Custom CSS -->

		<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

		<script src="assets/vendor/modernizr/modernizr.js"></script>

		<!-- Head Libs -->		

<link rel="stylesheet" type="text/css" media="screen" href="calender/jquery-ui.css" />
    <script src="calender/jquery.js"></script>
    <script src="calender/jquery-ui.js"></script>
    <script type = "text/javascript">
        $(document).ready(function () {
            var age = "";
            $('#dob').datepicker({
                onSelect: function (value, ui) {
                    var today = new Date();
                    age = today.getFullYear() - ui.selectedYear;
                    $('#age').val(age);
                },
                changeMonth: true,
                changeYear: true
            })
        })
    </script>
 <script language="JavaScript">
        <!--
        function calculateBmi() {
        var weight = document.bmiForm.weight.value
        var height = document.bmiForm.height.value
        if(weight > 0 && height > 0){   
        var finalBmi = weight/(height/100*height/100)
        document.bmiForm.bmi.value = finalBmi
        if(finalBmi < 18.5){
        document.bmiForm.meaning.value = "That you are too thin."
        }
        if(finalBmi > 18.5 && finalBmi < 25){
        document.bmiForm.meaning.value = "That you are healthy."
        }
        if(finalBmi > 25){
        document.bmiForm.meaning.value = "That you have overweight."
        }
        }
        else{
        alert("Please Fill in everything correctly")
        }
        }
        //-->
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
			<!-- end: header -->

 

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

						<h2>Create Patient Registration</h2>

					

						<div class="right-wrapper pull-right">

							<ol class="breadcrumbs">

								<li>

									<a href="dashboard.php">

										<i class="fa fa-home"></i>

									</a>

								</li>

								

								<li><span>Create Patient Registration&nbsp;&nbsp;</span></li>

							</ol>

						</div>

					</header>



					<!-- start: page -->

					<div class="row">

						<div class="col-md-12">

					<form  name="bmiForm" method="POST" action="patient_code.php" class="form-horizontal">
				
								<section class="panel">

									<header class="panel-heading">

										<h2 class="panel-title" style="text-align: center">Patient Registration & Declaration Form</h2>

									</header>

									<div class="panel-body">

										<div class="form-group col-sm-6">

										<label class="col-sm-4 control-label">Patient Name <span class="required">*</span></label>

											<div class="col-sm-8">

												<input type="text" name="patient_name" id="patientname" maxlength="100" class="form-control" required />

												<span class="red" id="err_gymname"></span>

											</div>

										</div>


											<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Surname <span class="required">*</span></label>

											<div class="col-sm-8">

												<input type="text" name="surname" id="surname" maxlength="100" class="form-control" required />

												<span class="red" id="err_gymname"></span>

											</div>

										</div>


										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Marital Status </label>

											<div class="col-sm-8">

										<input type="radio" id="marital_status" name="marital_status" value="Single"> Single  &nbsp;&nbsp;<input type="radio" id="marital_status" name="marital_status" value="Married"> Married &nbsp;&nbsp;<input type="radio" id="marital_status" name="marital_status" value="Other"> &nbsp;Other
												
												<span class="red" id="err_emptype"></span>

											</div>

										</div>

										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Gender </label>

											<div class="col-sm-8">

											<input type="radio"  name="gender" value="Male"> Male  &nbsp;&nbsp;<input type="radio" name="gender" value="Female"> Female
												
												<span class="red" id="err_emptype"></span>

											</div>

										</div>
										

										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Date of Birth </label>

											<div class="col-sm-8">

												<div class="input-group">

													<span class="input-group-addon">

														<i class="fa fa-calendar"></i>

													</span>
 								<input type="date" name="date_of_birth" id = "dob"  maxlength="30"  class="form-control"><!--required-->

												</div>

												<span class="red" id="err_dob"></span>

											</div>

										</div>

										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Age </label>

											<div class="col-sm-8">

												<input type="text" name="age" id="age"   maxlength="10" class="form-control" readonly /><!--required-->

												<span class="red" id="err_empsalary"></span>

											</div>

										</div>


										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Email </label>

											<div class="col-sm-8">

												<div class="input-group">

													<span class="input-group-addon">

														<i class="fa fa-envelope"></i>

													</span>

													<input type="email"  name="email" id="emailid" onChange="check_mail_id()" maxlength="100" class="form-control"  /><!--required-->

												</div>



											</div>

										</div>

										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Phone <span class="required">*</span></label>

											<div class="col-sm-8">

												<div class="input-group">

													<span class="input-group-addon">

														<i class="fa fa-phone"></i>

													</span>

													<input type="text" name="mobile_number" id="mobile_number"  maxlength="10" class="form-control" />

												</div>

												<span class="red" id="err_phone"></span>

                                                <span id="response" style="color:red;"></span>

											</div>

										</div>	
                                       <div class="form-group col-sm-6">

										<label class="col-sm-4 control-label">Password <span class="required">*</span></label>

											<div class="col-sm-8">

												<input type="password" name="password" id="patientname" maxlength="100" class="form-control" required />

												<span class="red" id="err_gymname"></span>

											</div>

										</div>
										<div class="form-group col-sm-12"><h4>Present Address</h4></div>

										 <div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Country </label>

											<div class="col-sm-8">

												<select id="country" name="country" class="form-control" required >

												<option value="">Select Country</option>
												<option value="India">India</option>

                                               
											</select>


												<span class="red" id="err_city"></span>

											</div>

										</div>

										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">State </label>

											<div class="col-sm-8">

											<select id="state" name="state" class="form-control" required >

												<option value="">Select State</option>
                                                 <?php 
												while($rowState = mysqli_fetch_array($resultState))
												{
												?>
												<option value="<?php echo $rowState['sta_name'];?>"<?php if($rowState['sta_id'] == 26) { echo "selected='selected'";}?>>
													<?php echo $rowState['sta_name'];?></option>	
												<?php }?>
											</select>

											</div>

										</div>	
											<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">City/Town </label>

											<div class="col-sm-8">

												<input type="text" required name="city" id="city" maxlength="100" class="form-control" />


												<span class="red" id="err_address"></span>

											</div>

										</div>
 

										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">District <span class="required">*</span></label>

											<div class="col-sm-8">

												<input type="text" required name="district" id="district" maxlength="100" class="form-control" />

												<span class="red" id="err_city"></span>

											</div>

										</div>
 											
                                        
										 <div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Pincode </label>

											<div class="col-sm-8">

											<input type="text" required name="pincode" id="pincode" maxlength="100" class="form-control" />


												<span class="red" id="err_city"></span>

											</div>

										</div>

										<div class="form-group col-sm-12">

											<b>How did you come to know Appropriate Diet Therapy Centre </b>
										
										</div>
							
										<div class="form-group col-sm-6">

											<label class="col-sm-6 control-label">Appropriate Diet Therapy Centre  </label>

											<div class="col-sm-6">
								<select id="appropriate" name="appropriate" class="form-control">
									          <option value="">Select Appropriate</option>
									          <option value="1">Advertisement</option>
									          <option value="2"> Privious Patient</option>
									          <option value="3">Doctor</option>
									          <option value="4">Website</option>
									          <option value="5">Video</option>
									          <option value="6">Friend</option>
									          <option value="7">Relative</option>
									          </select>

											</div>

										</div>

											<div class="form-group col-sm-6">

											<label class="col-sm-6 control-label">Blood Group </label>

											<div class="col-sm-6">
								<select id="name="blood_group" id="blood_group"  class="form-control">

                                         <option value="">Select Blood Group</option>
								          <option value="1">A+</option>
								          <option value="2">O+</option>
								          <option value="3">B+</option>
								          <option value="4">AB+</option>
								          <option value="5">A-</option>
								          <option value="6">O-</option>
								          <option value="7">B-</option>
								          <option value="8">AB+</option>
								      </select>

											</div>

										</div>	
										<div class="form-group col-sm-6">

											<label class="col-sm-6 control-label">Known Allergy If Any </label>

											<div class="col-sm-6">

												<input type="text" required name="allergy" id="allergy" maxlength="100" class="form-control" />
										</div>
									</div>
									<div class="form-group col-sm-6">

											<label class="col-sm-6 control-label">Height/Weight </label>

											<div class="col-sm-3">

												<input type="text" required name="height" id="height" maxlength="10" class="form-control" placeholder="Height(cm)"  />

											</div>
											<div class="col-sm-3">

												<input type="text" required name="weight" id="weight" maxlength="10" class="form-control"   placeholder="Weight(kg)" />

											</div>
										</div>	
										<div class="form-group col-sm-6">

											<label class="col-sm-6 control-label">BMI </label>

											<div class="col-sm-6">

												<input type="text" required name="bmi"  maxlength="100" class="form-control"  onClick="calculateBmi()" />

										</div>
									</div>
									<div class="form-group col-sm-6">

											<label class="col-sm-6 control-label">This Means </label>

											<div class="col-sm-6">

												<input type="text" required name="bmi" id="bmi" maxlength="100" class="form-control" />

										</div>
									</div>
										<div class="form-group col-sm-4">

											<label class="col-sm-8 control-label">Registration Amount </label>

											<div class="col-sm-4">

												<input type="text" required name="amount" id="amount" maxlength="100" class="form-control" value="1000" readonly="readonly" />

												<span class="red" id="err_city"></span>

											</div>

										</div>		
										<div class="form-group col-sm-4">

											<label class="col-sm-8 control-label">Consaltancy Charges</label>

											<div class="col-sm-4">

												<input type="text" required name="consaltancy" id="consaltancy" maxlength="100" class="form-control" />

											</div>

										</div>		
										<div class="form-group col-sm-4">

											<label class="col-sm-6 control-label"> 	Mode of Payment </label>

											<div class="col-sm-6">

												<input type="text" required name="mode_payment" id="mode_payment" maxlength="100" class="form-control" />

												<span class="red" id="err_city"></span>

											</div>

										</div>								

</div>
											<footer class="panel-footer">

										<div class="row">

											<div class="col-sm-12 col-sm-offset-5">

												<button type="submit" name="submit" id="save" class="btn btn-warning">Save</button>

												<button type="reset" class="btn btn-default">Reset</button>

												<input type="hidden" name="act" id="act" value="yes">

												<button type="button" onClick="window.location.href='manage_customer.php'" name="" class="btn btn-default">Back</button>

											</div>

										</div>

									</footer>

								</section>

							</form>

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