<!doctype html>
<html class="fixed">
	<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<!-- Basic -->
		<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Mobile Metas -->
		     <title>Zerodiabeties | Hospital</title>|    <title>Zerodiabeties | Hospital</title>
		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">
		<!-- Vendor CSS -->
		<link rel="stylesheet" href="../wgym/assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="../wgym/assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="../wgym/assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />
		<!-- Theme CSS -->
		<link rel="stylesheet" href="../wgym/assets/stylesheets/theme.css" />
		<!-- Skin CSS -->
		<link rel="stylesheet" href="../wgym/assets/stylesheets/skins/default.css" />
		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="../wgym/assets/stylesheets/theme-custom.css">
	<!--<script type="text/javascript">
      if (location.protocol != 'https:')
      {
       location.href = 'https:' + window.location.href.substring(window.location.protocol.length);
      }
    </script>-->
		<!-- Head Libs -->
		<script src="../wgym/assets/vendor/modernizr/modernizr.js"></script>
		<script type="text/javascript">
			function get_validate()
			{
				var err=0;
				if (document.getElementById('usremail').value==='')
				{
					document.getElementById('err_usremail').innerHTML='Please Enter Email ID or Mobile Number.';
					err++;
				}
				else
				{
					document.getElementById('err_usremail').innerHTML='';
				}
				if (document.getElementById('usrpwd').value==='')
				{
					document.getElementById('err_usrpwd').innerHTML='Please Enter Password.';
					err++;
				}
				else
				{
					document.getElementById('err_usrpwd').innerHTML='';
				}
				if (err>0)
				{
					return false;
				}
			}
		</script>
        <style>
/*    .back_banner {
    background-repeat: no-repeat;
    background-image: url(../wgym/assets/images/login_back.jpg);
    background-size: cover;
    background-position: center;
}*/
.overlay {
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.4);
}
.mt-xl {
    text-align: center;
    background-color: rgb(0, 136, 204);
    margin-top: 25px !important;
}
.body-sign .panel-sign .panel-title-sign .title {
    /* background-color: rgba(0, 126, 255, 0.5); */
    text-align: center;
    /* background-color: #0088cc; */
}
.body-sign .panel-sign .panel-title-sign .title {
    /* background-color: #CCC; */
    /* border-radius: 5px 5px 0 0; */
    color: #FFF;
    display: inline-block;
    font-size: 1.2rem;
    line-height: 2rem;
    padding: 13px 17px;
    font-size: 22px;
    vertical-align: bottom;
}
.body-sign .panel-sign .panel-body {
    background-color: rgba(50, 61, 72, 0.7);
    /* background: #FFF; */
    /* border-top: 5px solid #CCC; */
    /* border-radius: 5px 0 5px 5px; */
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
    padding: 33px 33px 15px;
    /* background-color: rgba(0, 136, 204,0.3); */
    /* background-color: rgba(0, 126, 255, 0.5); */
}
label {
    font-size: 18px;
    color: #fff;
	}
	body .btn-primary {
    font-size: 18px;
    width: 80%;
	    margin: 0 auto;
	}
	.forgot_pass {
	    padding-bottom: 20px;
}
.forgot_pass a{
   font-size: 16px;
    color: #fff !important; 
	}
	.forgot_pass a:hover {
    text-decoration:none !important; 
	}
	p.text-center.text-muted.mt-md.mb-md {
    color: #fff !important;
}
section.body-sign {
    left: 50%;
    position: absolute;
    top: 50%;
    transform: translate(-50%, -50%);
}
/*.carousel-inner {
 position: relative;
}*/
#background { 
    position:fixed; left: 0px; 
    top: 0px; background-size:100%;  
     width:100%; height:100%; 
     -webkit-user-select: none; -khtml-user-select: none; 
     -moz-user-select: none; -o-user-select: none; user-select: none; 
     /* z-index:9990; */
    background-repeat: no-repeat;
    background-size: cover;
	    background-position: center;
    }
		</style>
	</head>
	<body>
   
<!--      
    <div class="back_banner">
    <div class="overlay">-->
		<!-- start: page -->
        <div id="background"></div>
        <div class="container">
		<section class="body-sign">
			<div class="center-sign">
				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i>  Sign In</h2>
					</div>
					<div class="panel-body">
                         <form id="form" method="POST" action="login_code.php" onSubmit="return get_validate();" class="form-horizontal">
                         	<div style="color:#FF0000"><?php 
							  error_reporting(0);
							  $msg = $_GET['msg'];
							    if($msg=='error')
								{
								  echo "The username or password you entered is incorrecth";
								}
								
								?></div>
							<div class="form-group mb-lg">
								<label>User Id</label>
								<div class="input-group input-group-icon">
									<input name="usremail" id="usremail" class="form-control input-lg" maxlength="100"/>
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
								</div>
								<label class="required" id="err_usremail"></label>
							</div>
							<div class="form-group mb-lg">
								<div class="clearfix">
									<label class="pull-left">Password</label>
								</div>
								<div class="input-group input-group-icon">
									<input name="usrpwd" id="usrpwd" type="password" maxlength="100" autocomplete="off" class="form-control input-lg" />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
									</span>
								</div>
								<label class="required" id="err_usrpwd"></label>
							</div>
							<div class="row">
								<div class="col-xs-12 text-right forgot_pass">
										<a href="forgotpassword.php">Forgot Password ?</a>
								</div>
								<div class="col-xs-12 text-center">
									
									<button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Sign In</button>
									<input type="hidden" name="addLogin" id="addLogin" value="addLogin">
								</div>
							</div>
						</form>
					</div>
				</div>
				<p class="text-center text-muted mt-md mb-md">&copy; Copyright 2019-2020. All rights reserved.</p>
			</div>
		</section>
        </div>
       <!--  </div>
       </div>-->
		<!-- end: page -->
		<!-- Vendor -->
		<script src="../wgym/assets/vendor/jquery/jquery.js"></script>
		<script src="../wgym/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="../wgym/assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="../wgym/assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="../wgym/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		<!-- Specific Page Vendor -->
		<script src="../wgym/assets/vendor/jquery-validation/jquery.validate.js"></script>
		<!-- Theme Base, Components and Settings -->
		<script src="../wgym/assets/javascripts/theme.js"></script>
		<!-- Theme Custom -->
		<script src="../wgym/assets/javascripts/theme.custom.js"></script>
		<!-- Theme Initialization Files -->
		<script src="../wgym/assets/javascripts/theme.init.js"></script>
		<!-- Examples -->
		<script src="../wgym/assets/vendor/jquery-validation/jquery.validate.js"></script>
        <script src="../ajax/libs/jquery/1-10-2/jquery.min.js" type="text/javascript" ></script>
<script type="text/javascript">
 var images = ['slider1.jpg', 'slider2.jpg','slider3.jpg'];
 $('#background').css({'background-image': 'url(assets/images/' + images[Math.floor(Math.random() * images.length)] + ')'});
</script>
	</body>
</html>