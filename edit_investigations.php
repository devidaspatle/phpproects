<?php
error_reporting(0);
require_once('includes/db_config.php'); 
require_once('includes/check_session.php'); 
 $ids = $_SESSION['patiId'];

$reciptid = $_GET['reciptid'];
$result = mysqli_query($con, "SELECT * FROM patients  WHERE  `id`='$ids'");
$num=mysqli_num_rows($result);
$rownum=mysqli_fetch_array($result);
$centre_id = $rownum['centre_id'];
$state = $rownum['state'];
$patient_id = $rownum['patient_id'];

$resultCentres = mysqli_query($con, "SELECT * FROM centres  where id ='$centre_id'");
$totalCentres =mysqli_num_rows($resultCentres);
$rowCentres=mysqli_fetch_array($resultCentres);

$resultState = mysqli_query($con, "SELECT * FROM states where id ='$state'");
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
                    <h1>Investigations </h1>
                </div>
                <div class="col-md-6 text-right">
                    <ul class="breadcrumb">
                        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active"> Investigations </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

        <div class="features-area default-padding bg-gray">
            <div class="container">
                <div class="row">
                    <div> <a  href="investigations.php" onClick="return confirm('Do You Want To list This Record ?');"  class="btn btn-primary btn-sm">Back  </a></div>
                    <div role="form" class="wpcf7" id="wpcf7-f203-p196-o1" lang="en-US" dir="ltr">
                        <div class="screen-reader-response"></div>
                        <div class="col-md-1"> </div>


                    <!-- start: page -->
                <div id="printableArea"  style="border:dotted">
            
                <table class="table">

    <thead>

      <tr>

        <th scope="col">Patient Name: <th>

        <th scope="col" colspan="4"><?php echo ucwords($rownum['patient_name']); ?></th>

        <th scope="col">ID No. : </th>

        <th scope="col"><?php echo ucwords($rownum['patient_id']); ?> </th>

        <th scope="col">Date : </th>

        <th scope="col"><?php  echo date('d-m-Y');

            ?></th>

        <th scope="col">Mobile No. : </th>

        <th scope="col"><?php echo ucwords($rownum['mobile_number']); ?></th>

      </tr>

       

    </thead>

  </table>
  

<form id="form" method="POST" action="edit_investigations_code.php" class="form-horizontal">
                         <table class="table" width="100%">
                         <input type="hidden" name="patient_id" value="<?php echo $piventid; ?>">
                       
                                                            <tbody>

                                                                <tr>

                                                                    <th scope="row">SN</th>

                                                                    <th>Investigations Name</th>
                                                                    <th>Unit</th>
                                                                    <th>Normal Value</th>

                                                                    <th> Value</th>

                                                                </tr>

                                   <?php
                                        $i=1;

                             $resultInvestigations = mysqli_query($con, "SELECT * FROM patientinvests  where    patient_id  = '".$patient_id."' and reciptid = '".$reciptid."'");

                                        while($investigations = mysqli_fetch_array($resultInvestigations))

                                        {
                                    
                                        $diabetesid = $investigations['diabetes_id'];

                                        $diabetes_value = $investigations['diabetes_value'];
                                       
                                        $resultDiagnosis = mysqli_query($con, "SELECT * FROM investigations where id  = '$diabetesid'");
                                        $rowDiagnosis = mysqli_fetch_array($resultDiagnosis);
                                       if(!empty($diabetes_value))
                                       {
                                    ?>

                                <tr>

                                    <th scope="row"> 
                                      
                                        <input type="checkbox" name="diabetes[]" value="<?php echo $diabetesid;?>" checked="checked">
                                   
                                    </th>

                                    <td> <input type="text" name="investigations_name[]" maxlength="10" class="form-control" style="width: 250px;" value="<?php echo $rowDiagnosis['investigations_name'];?>" readonly="readonly" /> 
                                     </td>
                                    <td>  <input type="text" name="investigations_unit []" maxlength="10" class="form-control" style="width: 150px;" value="<?php echo $rowDiagnosis['investigations_unit'];?>"readonly="readonly" />  </td>

                                     <td> <input type="text" name="normal_value[]" maxlength="10" class="form-control" style="width: 250px;" value="<?php echo $rowDiagnosis['normal_value'];?>" readonly="readonly" /> 
                                     </td>

                                    <td>  <input type="text" name="diabetes_value[]" maxlength="10" class="form-control" style="width: 150px;" value="<?php echo $diabetes_value;?>" readonly="readonly" />  </td>
                                  
                                </tr>
                              
                                <?php } }?>
                                    <tr>

                                    <th scope="row"> &nbsp;</th>

                                    <td> &nbsp; </td>

                                    <td>  </td>

                                </tr>

                                                            </tbody>

                                                        </table>
                                                          
</form>
                                                </div>

                                            </div>

                                        </div>

    <div class="row">
<div class="col-sm-12">&nbsp;</div>
<div class="col-sm-12">&nbsp;</div>


                                    </section>

                                </div>

                         
    </div>

   

   <?php include("footer_pages.php"); ?>