<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" lang="en-IN">



<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

  

    <title>Zerodiabeties | Hospital</title>

   

    <!-- Favicons

    ================================================== -->

    <link href="login/assets/css/dist/loan_type_style_newhdr.css" rel="stylesheet">

  

 <link href="login/assets/css/dist/header-1.2.css" rel="stylesheet">

<link href="login/assets/css/dist/home28.css" rel="stylesheet">



 <link rel="stylesheet" href="login/css/mystyle.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <style>.banks-section ul li:nth-child(2n+1) a:hover{background:#00655a!important}.banks-section ul li:nth-child(2n) a:hover{background:#205069!important}.banks-section ul li:nth-child(2n+1) a:hover{background:#00655a!important}.banks-section ul li:nth-child(2n) a:hover{background:#205069!important}.banks-section ul li:nth-child(2n) a,.banks-section ul li:nth-child(2n+1) a{height:47px!important;width:100%;background:#008a7b;color:#fff;display:block;padding:15px 5px 7px;font-size:14px;text-shadow:1px 2px 1px #770c0c}.banks-section ul li:nth-child(2n) a{background:#3a7999}</style>                



<!-- End Google Tag Manager (noscript) -->

</head>



<body  class="firstSection">

<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">



 

<!-- Google Tag Manager -->





<!-- End Facebook Pixel Code -->





<span id="top"></span>



<header id="zindexup">



      </header>

 <div class="lightbox-pop" id="poplogin" style="display:none">

<div class="lightbox-pop-11">

<div class=""><div id="close_pop" class="close_pop" onClick="close123()">x</div>

<div style="padding-top: 15% !important;">



</div></div></div></div>

<script>function popup(){document.getElementById("poplogin").style.display='block'} function close123(){document.getElementById("poplogin").style.display='none'}</script>     <main class="mdl-layout__content">

        <div class="page-content">

                

<div>

<div class="container header_wrapper pdT10">

<div class="prequote-desktop-wrapper">

    <div class="col-sm-12" style="padding-left:400px;">

    <div style="padding-left:130px;">

<a itemprop="url" class="notIeLogoHeader" href="../index.php"><img src="logo.png" style="width:120px;"></a></div>

    <div class="prequot-desktop-left" id="left-box">

                   <div class="heading-left-prequote "><h1><i class="fa fa-user mr-xs"></i>  Sign In</h1></div>

                  

                   <div class='clear'></div>

                       <div style="color:#FF0000"><?php 

							  error_reporting(0);

							  $msg = $_GET['msg'];

							    if($msg=='error')

								{

								  echo "The username or password you entered is incorrect";

								}

								

							?></div>

                 

                <form class="form-horizontal form-material" method="post" id="loginform" action="login_code.php">

                 <table class='table table-curved' style="border:0px; width:100%">

                 <tr style="border:0px;">

                  <th width="24%" class='th'>User Id</th>

                  <th width="7%" >:</th>

                  <th width="69%" class='th'><input name="username" id="username" class="form-control input-lg" maxlength="100"/>				</th>

                 </tr>

                   <tr>



                 <th  colspan="3" style="height:6px;">&nbsp;</th>

                 </tr>

                   <tr>

                  <th class='th'>Password</th>

                  <th>:</th>

                  <th class='th'><input name="password" id="password" type="password" maxlength="100" autocomplete="off" class="form-control input-lg" /></th>

                 </tr>

                   <tr>

                    <th>&nbsp;&nbsp;&nbsp;</th>

                  <th  colspan="3" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="submit" class="btn-first-fold bt-second">&nbsp;&nbsp;&nbsp;Sign In&nbsp;&nbsp;&nbsp;</button>

                  

									<input type="hidden" name="addLogin" id="addLogin" value="addLogin"></th>

                 </tr>

                 

     	</table> 

         </form>               

    </div>

           

     </div>

   

<div class="clear"></div>



	</div>

</div>

</div>



            <hr>

            

        </div>

    </main>



    



</div>



</body>





</html>