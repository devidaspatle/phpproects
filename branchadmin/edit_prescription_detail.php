<?php 
error_reporting(0);
include("includes/db_config.php");
require_once('includes/check_session.php');
error_reporting(0);
$user_id = $_SESSION['rsoftId'];
$patientid = $_GET['patientid'];



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
  <form id="form" method="POST" action="edit_allopathic_medicine_code.php" class="form-horizontal" onSubmit="disable();">
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
       $resultPrescriptions = mysqli_query($con, "SELECT * FROM prescriptions where patient_id = '".$patientid."'");
       while($rowPrescriptions =  mysqli_fetch_array($resultPrescriptions))
        {
       $supplementsids = $rowPrescriptions['supplements_id'];

       $rowFormulas = mysqli_query($con, "SELECT * FROM formulas where id = '".$supplementsids."'");

       $rowFormulas =mysqli_fetch_array($rowFormulas);
        if(!empty($rowPrescriptions['noofb'])){
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
         <td><?php  
          $explodednoS =  $rowPrescriptions['noofb'];
          $explodedS = $rowPrescriptions['price'];
         echo $gtotal = $explodedS * $explodednoS; ?></td>

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

       $resultPres = mysqli_query($con, "SELECT * FROM prescriptions where patient_id = '".$patientid."'");
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
        <th colspan="9">
          <?php 
            $resultpestiions = mysqli_query($con, "SELECT * FROM  adviceinvests where patient_id = '".$patientid."'");
          $rowinvests = mysqli_fetch_array($resultpestiions);
        ?>
          <textarea class="form-control" name="description"><?php echo $rowinvests['descriptions'];?></textarea>

        </th>
      </tr>
        <tr>
        <th colspan="7">Investigations </th>
      </tr>
    </thead>
    <thead>
     
          <?php 
             $i=1;
            
            $resultpInvestigations = mysqli_query($con, "SELECT * FROM  adviceinvests where patient_id = '".$patientid."'");
          while($rowinvestigations = mysqli_fetch_array($resultpInvestigations)) { 

           $investigations_id = $rowinvestigations['investigations_id'];

            $resultInvestigations = mysqli_query($con, "SELECT * FROM  investigations where id = $investigations_id");
            $investigations = mysqli_fetch_array($resultInvestigations);

            ?>
            <tr>
        
      <th scope="col"

      ><input type="checkbox" name="investigations_id[]"  value="<?php echo $rowinvestigations['id']; ?>" checked="checked" /> </th>
      <th scope="col" colspan="7"> 
        <input type="text" name="investigations_name[]"  class="form-control"  value="<?php echo ucwords($investigations['investigations_name']); ?>" readonly="readonly" style="width:200px;" />
     </th>
      </tr>

     <?php  }?>
    
       
      
    </thead>
  

        <tr><td colspan="9">&nbsp;</td></tr>

     <tr><td colspan="9" align="center">
      <button type="submit" name="Update" id="save" value="Update" class="btn btn-warning">Update</button>
  
 <tr><td colspan="9">&nbsp;</td></tr>
  </tbody>
</table>
</form>
</div>
</div>
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

    
<script  src="js/index.js"></script>
  </body>

</html>