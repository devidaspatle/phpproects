<?php
error_reporting(0);
require_once('includes/db_config.php'); 
require_once('includes/check_session.php'); 
 $ids = $_SESSION['patiId'];

$result = mysqli_query($con, "SELECT * FROM patients  WHERE  `id`='$ids'");
$num=mysqli_num_rows($result);
$rownum=mysqli_fetch_array($result);
$centre_id = $rownum['centre_id'];
$state = $rownum['state'];

$resultCentres = mysqli_query($con, "SELECT * FROM centres  where id ='$centre_id'");
$totalCentres =mysqli_num_rows($resultCentres);
$rowCentres=mysqli_fetch_array($resultCentres);

$resultState = mysqli_query($con, "SELECT * FROM states where sta_id ='$state'");
$rowState=mysqli_fetch_array($resultState);


?>
<script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
   <?php include("header.php"); ?>
     
    <div class="breadcrumb-area shadow dark bg-fixed text-light" style="background-image: url(images/7-6.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Patient Registration </h1>
                </div>
                <div class="col-md-6 text-right">
                    <ul class="breadcrumb">
                        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active"> Registration </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

        <div class="features-area default-padding bg-gray">
            <div class="container">
                <div class="row">
                    <div role="form" class="wpcf7" id="wpcf7-f203-p196-o1" lang="en-US" dir="ltr">
                        <div class="screen-reader-response"></div>
                        <div class="col-md-1">&nbsp;</div>

<input type="button" onClick="printDiv('printableArea')" value="Print" style="width: 80px; font-weight: bold;" />
                    <!-- start: page -->
                <div id="printableArea"  style="border:dotted">
              <table class="table" style="background-color:#FFFFFF;">
                                <thead>
                                    <tr>
                                       <td colspan="6">  <div>
<div style="text-align:center"><img src="images/logozero.png" style="width:100px"></div>

<div style="text-align:center; font-size:14px; color:#000066"><h5><b>Address: <?php echo $rowCentres['address'];?>, <?php echo $rowCentres['city'];?>-<?php echo $rowCentres['pincode'];?></b></h5></div>
<div style="text-align:center; font-size:14px;color:#000066"><h5><b>Email:zerodiabetes@gmail.com&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Phone. No. <?php echo $rowCentres['mobile_number'];?></b></h5></div>

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
                                        <td> <?php echo $rownum['district'];?></td>
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
                                        <td><?php echo round($rownum['bmi']);?></td>
                                    </tr>
                                     <tr>
                                       <td>Registration Amount : </td>
                                        <td><?php echo $rownum['amount'];?></td>
                                        <td>Consaltancy Charges :</td>
                                        <td><?php echo $rownum['consaltancy'];?></td>
                                    </tr>
                                     <tr>
                                       <td> Mode of Payment :</td>
                                        <td><?php echo ucwords($rownum['mode_payment']);?></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                     <tr>
                                       <td colspan="4" style="text-align: justify;"><b>TERMS & CONDITIONS</b><br>                        
I the undersigned declared that Appropriate Diet Therepy Center has made me understand the treatment                        
to be given to me is based on Non drug concept & absolutely based on Dietary Suppliments, Antioxidents,                     Trace elements, Vitamins & Minerals. I decleared that I will compulsory & strictly follow the instructions                  given to me during the course of diatery treatment. If I do not get result by preventive diet and diatary                   supliments , then I will have no claims from them by any nature Financial / Civil / Criminal / Customer                     
protection act, prevailing in India as on date. <br>                    
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
            
        </div>
    </div>
    </div>

   

   <?php include("footer_pages.php"); ?>