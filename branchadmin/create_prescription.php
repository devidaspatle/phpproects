<?php 
include_once("includes/db_config.php");

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
		  var y = document.getElementById("plan_type").value;
		  var i = document.getElementById("plan_price").value;
		  var p = document.getElementById("plan_parcent").value;
		  
		  var amt = i * y;
		  var o = (amt/p);
		  var tamt  = amt + o;
		  document.getElementById("total_rs").value = tamt;
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
	
	
	function getPlan(id) {		
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

<script type="text/javascript">
	
	function multiplyBy()
	{
        num1 = document.getElementById("plan_type").value;
        num2 = document.getElementById("plan_price").value;
       total = document.getElementById("result").innerHTML = num1 * num2;
       //alert(total);
	}
</script>

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

							<form id="form"  method="POST" action="customer_code.php" class="form-horizontal" onSubmit="disable();">

								<section class="panel">

									<header class="panel-heading">

										<h2 class="panel-title" style="text-align: center">Patient Registration & Declaration Form</h2>

									</header>

									<div class="panel-body">

										<div class="form-group col-sm-6">

										<label class="col-sm-4 control-label">Patient Name <span class="required">*</span></label>

											<div class="col-sm-8">

												<input type="text" name="patientName" id="patientName" maxlength="100" class="form-control" required />

												<span class="red" id="err_gymname"></span>

											</div>

										</div>

										create_Prescription_detail
									

											<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Son/Daughter/Wife of <span class="required">*</span></label>

											<div class="col-sm-8">

												<input type="text" name="father_name" id="father_name" maxlength="100" class="form-control" required />

												<span class="red" id="err_gymname"></span>

											</div>

										</div>

										

										



										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Marital Status </label>

											<div class="col-sm-8">

										<input type="radio" id="marital_status" name="marital_status"> Single  &nbsp;&nbsp;<input type="radio" id="marital_status" name="marital_status"> Married &nbsp;&nbsp;<input type="radio" id="marital_status" name="marital_status"> Other
												
												<span class="red" id="err_emptype"></span>

											</div>

										</div>

										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Gender </label>

											<div class="col-sm-8">

											<input type="radio" id="gender" name="gender"> Male  &nbsp;&nbsp;<input type="radio" id="gender" name="gender"> Female
												
												<span class="red" id="err_emptype"></span>

											</div>

										</div>
										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Age </label>

											<div class="col-sm-8">

												<input type="text" name="age" id="age"  value="0" maxlength="10" class="form-control" /><!--required-->

												<span class="red" id="err_empsalary"></span>

											</div>

										</div>



										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Date of Birth </label>

											<div class="col-sm-8">

												<div class="input-group">

													<span class="input-group-addon">

														<i class="fa fa-calendar"></i>

													</span>
 								<input type="date" name="date_of_birth" id="date_of_birth"  maxlength="30"  class="form-control"><!--required-->

												</div>

												<span class="red" id="err_dob"></span>

											</div>

										</div>

										

										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Email </label>

											<div class="col-sm-8">

												<div class="input-group">

													<span class="input-group-addon">

														<i class="fa fa-envelope"></i>

													</span>

													<input type="email"  name="emailid" id="emailid" onChange="check_mail_id()" maxlength="100" class="form-control"  /><!--required-->

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
                                       
										<div class="form-group col-sm-12"><h4>Present Address</h4></div>	
											<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Address </label>

											<div class="col-sm-8">

												<textarea name="present_address" id="present_address" rows="2" class="form-control" ></textarea>

												<span class="red" id="err_address"></span>

											</div>

										</div>
 

										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">City <span class="required">*</span></label>

											<div class="col-sm-8">

												<input type="text" required name="present_city" id="present_city" maxlength="100" class="form-control" />

												<span class="red" id="err_city"></span>

											</div>

										</div>

										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">State </label>

											<div class="col-sm-8">

											<select id="present_state" name="present_state" class="form-control" required >

												<option value="">Select</option>
                                                 <?php 
												while($rowState = mysqli_fetch_array($resultState))
												{
												?>
												<option value="<?php echo $rowState['sta_id'];?>"<?php if($rowState['sta_id'] == 26) { echo "selected='selected'";}?>><?php echo $rowState['sta_name'];?></option>	
												<?php }?>
											</select>

											</div>

										</div>
                                          <div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Pincode </label>

											<div class="col-sm-8">

												<input type="text" name="present_pincode" id="present_pincode" maxlength="50" class="form-control" />

												<span class="red" id="err_city"></span>

											</div>

										</div>

										


										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Date of Registration <span class="required">*</span></label>

											<div class="col-sm-8">

												<div class="input-group">

													<span class="input-group-addon">

														<i class="fa fa-calendar"></i>

													</span>

                                                 	<!--<input type="date" name="doj" id="doj" value="" autocomplete="off" maxlength="30" class="form-control">-->

													<input type="date" name="date_of_join" id="date_of_join" value="<?php echo  date('d-m-Y')?>" maxlength="30" required  class="form-control">

												</div>

												<span class="red" id="err_doj"></span>

											</div>

										</div>

										


										<div class="form-group col-sm-6" id="trainid" >

											<label class="col-sm-4 control-label">PAN No.</label>

											<div class="col-sm-8">

												<input type="text" name="pan_number" id="pan_number"  maxlength="10"  class="form-control">

												<span class="red" id="err_traincharges"></span>

											</div>

										</div>

										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Nationality</label>

											<div class="col-sm-8">

												<input type="text" name="nationality" value="Indian" id="nationality" maxlength="100" class="form-control" readonly="readonly"  />

												<span class="red" id="err_nationality"></span>

											</div>

										</div>

								
                                        <div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">ID proof Type <span class="required">*</span></label>

											<div class="col-sm-8">
											<select id="id_proof_type" name="id_proof_type" class="form-control" required >

												<option value="">Select ID proof Type</option>
                                                 <?php 
												while($rowIdproofType = mysqli_fetch_array($resultIdprooftype))
												{
												?>
												<option value="<?php echo $rowIdproofType['id'];?>"><?php echo $rowIdproofType['proof_type'];?></option>	
												<?php }?>
											</select>

												<span class="red" id="err_emptype"></span>

											</div>

										</div>
										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">ID Proof Number</label>

											<div class="col-sm-8">

												<input type="text" name="id_number" value="0" id="id_number" maxlength="100" class="form-control" required  />

												<span class="red" id="err_biomatricid"></span>

											</div>

										</div>
										 
										<div class="form-group col-sm-12"><h4>How did you hear about Appropriate Diet Therapy Centre</h4></div>	
											<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label"> </label>

											<div class="col-sm-8">

											<input type="radio" id="marital_status" name="marital_status"> Advertisement  

												<span class="red" id="err_address"></span>

											</div>

										</div>
 

										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Corporate(Name): </label>

											<div class="col-sm-8">

												<input type="text" required name="present_city" id="present_city" maxlength="100" class="form-control" />

												<span class="red" id="err_city"></span>

											</div>

										</div>
										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Doctor(Kindly Provide Name): </label>

											<div class="col-sm-8">

												<input type="text" required name="present_city" id="present_city" maxlength="100" class="form-control" />

												<span class="red" id="err_city"></span>

											</div>

										</div>

										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Website: </label>

											<div class="col-sm-8">

												<input type="text" required name="present_city" id="present_city" maxlength="100" class="form-control" />

												<span class="red" id="err_city"></span>

											</div>

										</div>
</div>
										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Doctor(Kindly Provide Name): </label>

											<div class="col-sm-8">

												<input type="text" required name="present_city" id="present_city" maxlength="100" class="form-control" />

												<span class="red" id="err_city"></span>

											</div>

										</div>	
										<div class="form-group col-sm-6">

											<label class="col-sm-4 control-label">Other(Kindly Specify): </label>

											<div class="col-sm-8">

												<input type="text" required name="present_city" id="present_city" maxlength="100" class="form-control" />

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

		

		<script>

			function trim(str)

		  	{

		      	return str.replace(/^\s+|\s+$/g,"");

		  	}

			

			$(function()

			{

				var btnUpload=$('#uploadprofile');

				var status=$('#picture_error');

				new AjaxUpload(btnUpload, {

				action: 'upload-file.html',

				name: 'uploadfile',

				onSubmit: function(file, ext)

				{

				 if (! (ext && /^(jpeg|jpg|png|gif|bmp)$/.test(ext))){ 

				status.html('Only JPEG.JPG,PNG or BMP files allowed');

				return false;

				}

							status.html("Wait...");

			

				},

				

				onComplete: function(file, response)

				{

					var bb=response.split('##')

					if(trim(bb[0])=="success")

					{

						document.getElementById('profileimage').src=bb[1];

						document.getElementById('profile').value=bb[1];

							status.html("");

			

						status.html("<font color='green'>Sucess..!</font>");

					}

					else

					{

						status.html("<font color='red'>OOps! something wrong.</font>");

					}

				}});

			});

		</script>

        

        <script>



	function check_mail_id(){

		

		//alert('a');

				

				var httpxml;

				

				var mail = document.getElementById('emailid').value;

				

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

						

						//alert(rsponse);

						

						if(rsponse.trim() == "yes"){

							document.getElementById('emailid').value = '';

							document.getElementById('response1').innerHTML = 'Email ID Has been Already Existed';

						}

						if(rsponse.trim() == "no"){

							document.getElementById('response1').innerHTML = '';

						}

					}	

				}

			

				var url="action_layer.html";

				url=url+"?action=check_mail&mail="+mail;

				//alert(url);

				httpxml.onreadystatechange=stateck;

				httpxml.open("GET",url,true);

				httpxml.send(null);

				

			}

			 

</script>

	</body>

</html>