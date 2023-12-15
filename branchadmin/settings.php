

<?php 

error_reporting(0);
include "includes/check_session.php";
include_once("includes/db_config.php");
$rsoftid = $_SESSION['rsoftId'];

$result_centres_setting = mysqli_query($con, "SELECT * FROM centres   where id ='".$rsoftid."'");

$total_centres_setting = mysqli_num_rows($result_centres_setting);

$rowCompanySetting = mysqli_fetch_array($result_centres_setting);



$resultState = mysqli_query($con, "SELECT * FROM bh_state where currentStatus='Y'");

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



<!-- Specific Page Vendor CSS -->



<link rel="stylesheet" href="assets/vendor/summernote/summernote.css" />



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



</script>  <!-- end: header -->



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



        <h2>General Settings</h2>



        <div class="right-wrapper pull-right">



          <ol class="breadcrumbs">



            <li> <a href="dashboard.php"> <i class="fa fa-home"></i> </a> </li>



            <li><span>General Settings&nbsp;&nbsp;</span></li>



          </ol>



        </div>



      </header>



      <!-- start: page -->



      <div class="row">



        <div class="col-md-12">



                    <form id="form" action="setting_code.php"  method="POST" class="form-horizontal" enctype="multipart/form-data" >



            <input type="hidden" name="edit_id" value="<?php echo $rowCompanySetting['id'];?>" />



            <section class="panel">



              <header class="panel-heading">



                <h2 class="panel-title">General Settings</h2>



              </header>



              <<div class="col-md-4">

        <div class="form-group">

        

          <label for="Brand Name"> Centre Name:</label>



        <input type="text" class="form-control" name="centre_name" value="<?php echo $rowCompanySetting['centre_name'];?>" />



        </div>

       </div>

        <div class="col-md-4">

        <div class="form-group">



          <label for="Generic Name">Office Time:</label>



           <input type="text" class="form-control" name="office_time" value="<?php echo $rowCompanySetting['office_time'];?>"  />



        </div>

      </div>

        <div class="col-md-4">

        <div class="form-group">



          <label for="Generic Name">Office open:</label>



           <input type="text" class="form-control" name="office_open" value="<?php echo $rowCompanySetting['office_open'];?>"/>



        </div>

        </div>

        <div class="col-md-4">

        <div class="form-group">



          <label for="Visit Days">Visit Days:</label>



           <input type="text" class="form-control" name="visit_days" value="<?php echo $rowCompanySetting['visit_days'];?>"  />



        </div>

        </div>

        <div class="col-md-4">

        <div class="form-group">



          <label for="Contact Person">Contact Person:</label>



           <input type="text" class="form-control" name="contact_person" value="<?php echo $rowCompanySetting['contact_person'];?>"  />



        </div>

        </div>

        <div class="col-md-4">

        <div class="form-group">



          <label for="Mobile Number">Mobile Number:</label>



           <input type="text" class="form-control" name="mobile_number" value="<?php echo $rowCompanySetting['mobile_number'];?>"  />



        </div>

        </div>

        <div class="col-md-4">

        <div class="form-group">



          <label for="City">City:</label>



           <input type="text" class="form-control" name="city" value="<?php echo $rowCompanySetting['city'];?>"  />



        </div>

        </div>

        <div class="col-md-4">

        <div class="form-group">



          <label for="Generic Name">State:</label>



           <input type="text" class="form-control" name="state" value="<?php echo $rowCompanySetting['state'];?>"  />



        </div>

        </div>

        <div class="col-md-4">

        <div class="form-group">



          <label for="pincode">Pincode:</label>



           <input type="text" class="form-control" name="pincode" value="<?php echo $rowCompanySetting['pincode'];?>"  />



        </div>

        </div>

        <div class="col-md-6">

        <div class="form-group">



          <label for="address">Address:</label>



          <textarea name="address" id="address" class="form-control"><?php echo $rowCompanySetting['address'];?></textarea>



        </div>

      </div>




              <footer class="panel-footer">



                <div class="row">



                  <div class="col-sm-12 col-sm-offset-5">



                    <button type="submit" name="update" class="btn btn-warning">Update</button>

<input type="hidden" name="Update" id="update" value="Update">

                    <button type="reset" class="btn btn-default">Reset</button>



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



<script type="text/javascript">







			function onlyAlphabets(e, t) {







            try {







                if (window.event) {







                    var charCode = window.event.keyCode;







                }







                else if (e) {







                    var charCode = e.which;







                }







                else { return true; }







                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))







                    return true;







                else







                    return false;







            }







            catch (err) {







                alert(err.Description);







            }







        }



		</script>



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



<script src="assets/vendor/summernote/summernote.js"></script>



<!-- Theme Base, Components and Settings -->



<script src="assets/javascripts/theme.js"></script>



<!-- Theme Custom -->



<script src="assets/javascripts/theme.custom.js"></script>



<!-- Theme Initialization Files -->



<script src="assets/javascripts/theme.init.js"></script>



<!-- Examples -->



<script src="assets/javascripts/forms/examples.validation.js"></script>



<script src="assets/javascripts/ajaxupload.3.5.js"></script>







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



				 // extension is not allowed 



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



</body>



</html>



