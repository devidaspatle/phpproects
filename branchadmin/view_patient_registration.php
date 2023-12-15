<?php 
include_once("includes/db_config.php");
require_once('includes/check_session.php');
error_reporting(0);
$user_id = $_SESSION['rsoftId'];
$patientid = $_GET['patientid'];

$sqlg = "SELECT * FROM patients where id = '".$patientid."'";
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
									   <td colspan="6">  <div style="background-color:#FFFFFF;">
<div style="text-align:center"><img src="images/logo.png" style="width:100px;"></div>
<div style="text-align:center; font-size:14px; color:#000066"><h5><b>Address: <?php echo $rowCentres['address'];?>, <?php echo $rowCentres['city'];?>-<?php echo $rowCentres['pincode'];?></b></h5></div>
<div style="text-align:center; font-size:14px;color:#000066"><h5><b>Email:zerodiabetes@gmail.com&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Phone. No. <?php echo $rowCentres['mobile_number'];?></b></h5></div>

										<div style="text-align:center"><h2 class="panel-title"><b>Patient Registration & Declaration Form</b></h2></div></td>
									</tr>
                                    <tr>
									   <td>Patient ID </td>
										<td><?php echo $rownum['patient_id'];?></td>
										<td>Patient Name</td>
										<td><?php echo ucwords($rownum['patient_name']);?></td>
									</tr>
                                    <tr>
									   <td>Marital Status : </td>
										<td><?php echo $rownum['marital_status'];?></td>
										<td>Gender</td>
										<td><?php echo $rownum['gender'];?></td>
									</tr>
                                    <tr>
									   <td>Age</td>
										<td><?php echo $rownum['age'];?></td>
										<td>Date Of Birth</td>
										<td><?php 
			 										$dateofbirth = $rownum['date_of_birth'];
													if(!empty($dateofbirth))
													{
													echo  date("d-m-Y", strtotime($dateofbirth));
													}
												?>				
										</td>
									</tr>
                                     <tr>
									   <td>Email ID</td>
										<td><?php echo $rownum['email'];?></td>
										<td> Mobile No. </td>
										<td><?php echo $rownum['mobile_number'];?></td>
									</tr>
                                     <tr>
									   <td colspan="4"><h5><b>Present Address</b></h5></td>	
									</tr>
                                     <tr>
									   <td>Address</td>
										<td> <?php echo $rownum['address'];?></td>
										<td>Country</td>
										<td><?php echo $rownum['country'];?></td>
									</tr>
                                     <tr>
									   <td>State</td>
										<td> <?php  echo $rowState['sta_name']; ?></td>
										<td>City</td>
										<td><?php echo $rownum['city'];?></td>
									</tr>
                                     
                                    <tr>
									   <td>District</td>
										<td> <?php echo ucwords($rownum['district']);?></td>
										<td>Pincode</td>
										<td><?php echo $rownum['pincode'];?></td>
									</tr>
									<tr><td colspan="4"><b>How did you come to know Appropriate Diet Therapy Centre : 	

										<?php 
										if($rownum['advertisement'] == 1)
											{ echo "Advertisement";} 
										if($rownum['advertisement'] == 2)
											{ echo "Privious Patient";} 
										if($rownum['advertisement'] == 3)
											{ echo "Doctor";} 
										if($rownum['advertisement'] == 4)
											{ echo "Website";} 
										if($rownum['advertisement'] == 5)
											{ echo "Video";} 
										if($rownum['advertisement'] == 6)
											{ echo "Friend";} 
										if($rownum['advertisement'] == 7)
											{ echo "Relative";} 
										?>
											
										</b></td></tr>
                                     <tr>
									   <td>Blood Group :</td>
									   <td><?php  echo $rownum['blood_group']; ?></td>
										<td>Known Allergy If Any :</td>
										<td><?php echo $rownum['allergy'];?></td>
									</tr>
                                     <tr>
									   <td>Height/Weight :</td>
										<td><?php echo $rownum['height'];?>/<?php echo $rownum['weight'];?></td>
										<td>BMI</td>
										<td><?php echo $rownum['bmi'];?></td>
									</tr>
                                     <tr>
									   <td>Registration Amount : </td>
										<td><?php echo $rownum['amount'];?></td>
										<td>Consaltancy Charges :</td>
										<td><?php echo $rownum['consaltancy'];?></td>
									</tr>
									 <tr>
									   <td>	Mode of Payment :</td>
										<td><?php echo ucwords($rownum['mode_payment']);?></td>
										<td>&nbsp;</td>
										<td>&nbsp;</td>
									</tr>
                                     <tr>
									   <td colspan="4"><b>TERMS & CONDITIONS</b><br>						
I the undersigned declared that Appropriate Diet Therepy Center has made me understand the treatment						
to be given to me is based on Non drug concept & absolutely based on Dietary Suppliments, Antioxidents, 					Trace elements, Vitamins & Minerals. I decleared that I will compulsory & strictly follow the instructions 					given to me during the course of diatery treatment. If I do not get result by preventive diet and diatary 					supliments , then I will have no claims from them by any nature Financial / Civil / Criminal / Customer						
protection act, prevailing in India as on date.	<br>					
	My improvemental results / My Photo / Video / Clinical findings, can be used for their research,					
Publications and advertisements for which I hereby give my consent.						
						</td>	
									</tr>
                                     
										<tr>
									  <td>&nbsp;</td>
										<td>&nbsp;</td>
										<td>&nbsp;</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
									   <td>&nbsp;</td>
										<td>&nbsp;</td>
										<td>&nbsp;</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
									  <td>  Date</td>
										<td>Place</td>
										<td>&nbsp;</td>
										<td>Signature</td>
									</tr>
                                       
								</thead>
                                </table>

										</div>	
</div>
											

								</section>


						</div>

					</div>

											<div class="col-sm-12 col-sm-offset-5">

											
												<button type="button" onClick="window.location.href='manage_customer.php'" name="" class="btn btn-default">Back</button>

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