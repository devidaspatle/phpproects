<?php 

error_reporting(0);

include("includes/db_config.php");


include_once("includes/check_session.php");

$center_id = $_SESSION['rsoftId'];

$resultPatient = mysqli_query($con, "SELECT * FROM patients where centre_id = '".$center_id."'");

$totalPatient =mysqli_num_rows($resultPatient);



if(!empty($_POST['patient_id']))

{

  $resultPatients = mysqli_query($con, "SELECT * FROM patients  where patient_id = '".$_POST['patient_id']."'");

  $rowpatientes = mysqli_fetch_array($resultPatients);

}

$resultFormulas = mysqli_query($con, "SELECT * FROM formulas  order by formulas_name asc");

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
	
	
	function getFormula(id) {		
		var strURL="findFormula.php?formulaid="+id; 
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
<script language="JavaScript">
        <!--
        function calculatePrice() {
        var weight = document.bmiForm.weight.value
        var height = document.bmiForm.height.value
        if(weight > 0 && height > 0){   
        var finalBmi = weight/(height/100*height/100)
        document.bmiForm.bmi.value = finalBmi
       
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

						<h2>Create Prescription Detail</h2>

					

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



						



								<section class="panel">


	<form id="form"  method="POST"  class="form-horizontal" onSubmit="disable();">
				
						<header class="panel-heading">

						<div class="panel-body">

                        	

										

							<div class="form-group col-sm-6">



											<label class="col-sm-5 control-label">Patient Name<span class="required">*</span></label>



											<div class="col-sm-7">

										 <select class="form-control p-0" id="input3" name="patient_id" required="required" >

				                        <option>Select Patient Name</option>

				                        <?php while($patient = mysqli_fetch_array($resultPatient)) {  ?>

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

        <th>Patient Name: <th>

        <th scope="col" colspan="4"><?php echo ucwords($rowpatientes['patient_name']); ?></th>

        <th>ID No. : </th>

        <th style="text-align: left; width: 60px;"><?php echo ucwords($rowpatientes['patient_id']); ?> </th>

        <th>Date : </th>

        <th style="text-align: left;"><?php 

								$dateofbirth = $rowpatientes['created_at'];

							if(!empty($dateofbirth))

							{

							echo  date("d-m-Y", strtotime($dateofbirth));

							}

						?></th>

         <th>Mobile No. : </th>

        <th><?php echo ucwords($rowpatientes['mobile_number']); ?></th>

      </tr>

        <tr>

        <th scope="col">Gender : <th>

        <th scope="col"><?php echo ucwords($rowpatientes['gender']); ?></th>

        <th scope="col">Age : </th>

        <th scope="col"><?php echo $rowpatientes['age']; ?> </th>

        <th scope="col">Height(cm) : </th>

        <th scope="col"><input type="text" name="height" maxlength="4" class="form-control" style="width: 100px" value="<?php echo $rowpatientes['height']; ?>" /></th>

        <th scope="col">Weight(kg) </th>

        <th scope="col"><input type="text" name="weight" maxlength="4" class="form-control" style="width: 90px" value="<?php echo $rowpatientes['weight']; ?>" /></th>

        <th scope="col">BMI : </th>

        <th scope="col"><input type="text" name="bmi"  maxlength="10" class="form-control" onClick="calculateBmi()" style="width: 100px" value="<?php echo $rowpatientes['bmi']; ?>" /></th>

        <th scope="col">&nbsp; </th>

      </tr>

    </thead>

  </table>
			
   
<div class="table-responsive">
<form id="form" name="bmiForm"  method="POST"  class="form-horizontal" action="prescription_code.php">
 <input type="hidden" name="patient_id"  class="form-control" value="<?php echo $rowpatientes['patient_id'];?>" />
 <input type="hidden" name="centre_id"  class="form-control" value="<?php echo $rowpatientes['centre_id'];?>" />
  <table class="table">

    <thead>

      <tr>

        <th scope="col">Sr. No.</th>

        <th scope="col">Supplements </th>

        

        <th scope="col">Doses</th>

     

        <th scope="col">Instruction </th>

        <th scope="col">No of B </th>

        <th scope="col">Price</th>

      
      </tr>

    </thead>

    <tbody>

       
	<?php 
	   $i=1;
	  
	     

  $resultPrescriptions = mysqli_query($con, "SELECT * FROM prescriptions where patient_id = '". $_POST['patient_id']."' group by reciptid");
       $numes = mysqli_num_rows($resultPrescriptions);

	   if(!empty($numes)){
	 
       while($rowPrescriptions =  mysqli_fetch_array($resultPrescriptions))
        {
        	$supplementsids = $rowPrescriptions['supplements_id'];
        	  $rowFormulas = mysqli_query($con, "SELECT * FROM formulas where id = '".$supplementsids."'");

	       $rowFormulas =mysqli_fetch_array($rowFormulas);
         ?>
       <tr>
        <th scope="row"><?php echo $i++;?></th>
        <td> <input type="text" name="formulas_name[]" class="form-control" style="width:200px;" value="<?php echo ucwords($rowFormulas['formulas_name']);?>" readonly="readonly"/>

         </td>
        <td><select id="doses" name="doses[]" class="form-control"  style="width:100px;">

          <option value=""> Doses</option>

          <option value="1"<?php if($rowPrescriptions['doses']==1) { echo "selected='selected'";}?>>0-1-1</option>

          <option value="2"<?php if($rowPrescriptions['doses']==2) { echo "selected='selected'";}?>>1-1-1</option>

          <option value="3"<?php if($rowPrescriptions['doses']==3) { echo "selected='selected'";}?>>1-0-1</option>

          <option value="4"<?php if($rowPrescriptions['doses']==4) { echo "selected='selected'";}?>>0-1-0</option>

          <option value="5"<?php if($rowPrescriptions['doses']==5) { echo "selected='selected'";}?>>0-0-1</option>

          <option value="6"<?php if($rowPrescriptions['doses']==6) { echo "selected='selected'";}?>>1-0-0</option>

          <option value="7"<?php if($rowPrescriptions['doses']==7) { echo "selected='selected'";}?>>2-0-2</option>

          <option value="8"<?php if($rowPrescriptions['doses']==8) { echo "selected='selected'";}?>>2-0-1</option>

          <option value="9"<?php if($rowPrescriptions['doses']==9) { echo "selected='selected'";}?>>2-2-2</option>

        </select>

         </td>
        <td>
          <select id="instruction" name="instruction[]" class="form-control"  style="width:150px;">

              <option value=""> Instruction</option>

              <option value="1" <?php if($rowPrescriptions['instruction']==1) { echo "selected='selected'";}?>>1/2 hour before Meal</option>

              <option value="2" <?php if($rowPrescriptions['instruction']==2) { echo "selected='selected'";}?>>1/2 hour ofter Meal</option>
        </select>
         </td>
        <td>
<input type="text" name="noofb[]" class="form-control" style="width:100px;" value="<?php echo $rowPrescriptions['noofb']; ?>"/>
        </td>
        <td>
          <input type="text" name="formulas_rate[]" class="form-control" style="width:100px;" value="<?php echo $rowPrescriptions['price']; ?>" />

        </td>
        </tr>
	<?php } ?>

<?php }  if(empty($numes)){ ?>
       
	<?php 
	  
		while($formulas = mysqli_fetch_array($resultFormulas)) {
		?>
      <tr>

        <th scope="row"> <input type="checkbox"  id="formula_id" name="formula_id[]"   value="<?php echo $formulas['id']; ?>" checked="checked"/></th>

        <td> <input type="text" name="formulas_name[]" class="form-control" style="width:200px;" value="<?php echo ucwords($formulas['formulas_name']); ?>" readonly="readonly"/>
	 </td>

      <td> <select id="doses" name="doses[]" class="form-control"  style="width:100px;">

		<option value=""> Doses</option>

		<option value="1">0-1-1</option>

		<option value="2">1-1-1</option>

		<option value="3">1-0-1</option>

		<option value="4">0-1-0</option>

		<option value="5">0-0-1</option>

		<option value="6">1-0-0</option>

		<option value="7">2-0-2</option>

		<option value="8">2-0-1</option>

		<option value="9">2-2-2</option>

	</select></td>

        <td>

        <select id="instruction" name="instruction[]" class="form-control"  style="width:150px;">

		<option value=""> Instruction</option>

		<option value="1">1/2 hour before Meal</option>

		<option value="2">1/2 hour ofter Meal</option>

	

	</select></td>

        <td><input type="text" name="noofb[]" class="form-control" style="width:100px;"/></td>

        <td><input type="text" name="formulas_rate[]" maxlength="10" class="form-control" style="width:100px;" value="<?php echo $formulas['formulas_rate']; ?>" readonly="readonly"/></td>
    
      </tr>
	<?php } ?>
	<?php } ?>
    </tbody>

  </table>

  <table class="table">

  	<thead>

      <tr>
        <td><input type="checkbox"  id="formula_id" name="formula_id[]"   value="<?php echo $formulas['id']; ?>" checked="checked"/>&nbsp;Alpha Cardio D Oil</td><td><input type="checkbox"  id="formula_id" name="formula_id[]"   value="<?php echo $formulas['id']; ?>" checked="checked"/>&nbsp;Alfa Nirogi Salt </td><td><input type="checkbox"  id="formula_id" name="formula_id[]"   value="<?php echo $formulas['id']; ?>" checked="checked"/>&nbsp;Antiox GT</td><td><input type="checkbox"  id="formula_id" name="formula_id[]"   value="<?php echo $formulas['id']; ?>" checked="checked"/>&nbsp;Stevia SF</td><td><input type="checkbox"  id="formula_id" name="formula_id[]"   value="<?php echo $formulas['id']; ?>" checked="checked"/>&nbsp;F-54</td><td><input type="checkbox"  id="formula_id" name="formula_id[]"   value="<?php echo $formulas['id']; ?>" checked="checked"/>&nbsp;Alkaline Rod</td><td><input type="text" name="description" class="form-control" style="width:250px; font-weight: bold" value="" required="required" placeholder="Next Review Date: DD/MM/YYYY"></td>
      </tr>

        <tr>

        <th colspan="9">Barley 600gm + channa dal 400gm + 1 fibre pack pocket</th>

      </tr>

        <tr>

        <th colspan="7">Advice Investigations </th>

      </tr>

    </thead>

    <thead>
    	<tr>
    	<td colspan="7"><table>
		<?php 
		$i=1;
        $resultInvestigations = mysqli_query($con, "SELECT * FROM  investigations  order by id desc");
		?>
       <?php
			$i=0;
			 while($investigations = mysqli_fetch_array($resultInvestigations)) {
			if($i>6){
			?>
              <tr>
             <?php
				  $i=0;
				}
				  ?>
      <td><input type="checkbox" name="investigations_id[]"  value="<?php echo $investigations['id']; ?>" /> <?php echo ucwords($investigations['investigations_name']); ?> &nbsp; &nbsp;</td>
   <?php   $i++; }	 ?>
      </tr>
  </table>
</td></tr>
    </thead>

    <tr><td colspan="9">&nbsp;</td></tr>

     <tr><td colspan="9">
     	<button type="submit" name="submit" id="save" class="btn btn-warning">Save</button>
   <button type="reset" class="btn btn-default">Reset</button></td></tr>

 <tr><td colspan="9">&nbsp;</td></tr>  

  </tbody>

</table>




</form>
</div>

</div>

</section>

</div>



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



		



        <script>







	function check_mobile_no(){



	



	



				



				var httpxml;



				



				var number = document.getElementById('phone').value;



				



				try  { // Firefox, Opera 8.0+, Safari



			  		httpxml=new XMLHttpRequest();



			  	}catch (e) { // Internet Explorer



			  		try { httpxml=new ActiveXObject("Msxml2.XMLHTTP"); }



			  		catch (e) {  



						try { httpxml=new ActiveXObject("Microsoft.XMLHTTP"); }



			    		catch (e) {



			      			alert("Your browser does not support AJAX!");



			      			return false;



			      		}



					}



			  	}



			  



				function stateck(){



					if(httpxml.readyState==3 || httpxml.readyState==2 || httpxml.readyState==1) {  }



					if(httpxml.readyState==4)  {



						var rsponse=httpxml.responseText; 



						rsponse=rsponse.trim();



						







						if(rsponse.trim() == "find"){



							document.getElementById('phone').value = '';



							document.getElementById('response').innerHTML = 'Phone Number Is Already Exist!';



							



						}



						if(rsponse.trim() == "not"){



							document.getElementById('response').innerHTML = '';



							



						}



					



					}	



				}



			



				var url="action_layer.html";



				url=url+"?action=check_mobile_no&no="+number;



				httpxml.onreadystatechange=stateck;



				httpxml.open("GET",url,true);



				httpxml.send(null);



				



			}



			



</script>



		


<script  src="js/index.js"></script>

	</body>



</html>