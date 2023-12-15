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
                    <h1>Patient Investigations </h1>
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
                    <div role="form" class="wpcf7" id="wpcf7-f203-p196-o1" lang="en-US" dir="ltr">
                        <div class="screen-reader-response"></div>
                        <div class="col-md-1">&nbsp;</div>


                    <!-- start: page -->
                <div id="printableArea"  style="border:dotted">
              <form id="form" method="POST" action="investigations_code.php" class="form-horizontal">
                        <table class="table" width="100%">
                        <input type="hidden" name="patient_id" value="<?php echo $patient_id; ?>">
                        <input type="hidden" name="centre_id" value="<?php echo $centre_id; ?>">
                          <tbody>
                               <tr>
                                   <th>Investigations</th>
                                    <td>
                                    <select name="diabetes_id" class="form-control" required>
                                    <option value="">Select Investigation</option>
                                      <?php 
                                    $resultInvestigations = mysqli_query($con, "SELECT * FROM investigations order by investigations_name asc");
                                while($investigations = mysqli_fetch_array($resultInvestigations))
                                     {
                                      ?>                                  
                                    <option value="<?php echo $investigations['id'];?>"><?php echo $investigations['investigations_name'];?></option>  
                                      <?php } ?>
                                    </select>
                                    </td>
                                  <th>Value</th>
                                    <td>
                                    <input type="text" name="diabetes_value" maxlength="10" class="form-control" style="width: 150px;" />
                                    </td>
                                    <td>
                                    <button type="submit" name="submit" id="save" class="btn btn-warning">Save</button>

                                    </td>
                                </tr>

                                  </tbody>

                              </table>
           </form>


            </div>
</div>
            
        </div>
        <div class="table-responsive">
                      
              <table class="table" width="100%">

                  <tbody>

                      <tr>

                          <th scope="row">SN</th>

                          <th>Investigations Name</th>

                          <th>Investigations Value</th>

                      </tr>
</tbody>
<tbody>
                                   <?php
                                    $i=1;
$resultInvestigations = mysqli_query($con, "SELECT * FROM patientinvests  where    patient_id  = '".$patient_id."'");

                                    while($investigations = mysqli_fetch_array($resultInvestigations))

                                    {
                                    
                                        $diabetesid = $investigations['diabetes_id'];

                                        $unit = $investigations['diabetes_value'];
                                        $exploded = explode(",", $diabetesid);

                                     foreach ($exploded as $rowid){
                                    
                                        $resultDiagnosis = mysqli_query($con, "SELECT * FROM investigations where id  = '$rowid'");
                                          $rowDiagnosis = mysqli_fetch_array($resultDiagnosis);
                                  ?>

                                <tr>

                                    <th scope="row"><?php echo $i++; ?> </th>

                                    <td> <?php echo $rowDiagnosis['investigations_name'];?></td>

                                    <td><?php echo $investigations['diabetes_value'];?> </td>

                                </tr>
                                <?php } ?>
                                <?php } ?>

                                                            </tbody>

                                                        </table>

                                                    </div>

                                                </div>
    </div>
    </div>

    <div class="row">
<div class="col-sm-12">&nbsp;</div>
<div class="col-sm-12">&nbsp;</div>
<div class="col-sm-12">&nbsp;</div>
<div class="col-sm-12">&nbsp;</div>
<div class="col-sm-12">&nbsp;</div>
<div class="col-sm-12">&nbsp;</div>
<div class="col-sm-12">&nbsp;</div>
<div class="col-sm-12">&nbsp;</div>
<div class="col-sm-12">&nbsp;</div>
<div class="col-sm-12">&nbsp;</div>
<div class="col-sm-12">&nbsp;</div>
<div class="col-sm-12">&nbsp;</div>
<div class="col-sm-12">&nbsp;</div>
<div class="col-sm-12">&nbsp;</div>
<div class="col-sm-12">&nbsp;</div>

</div>

   <?php include("footer_pages.php"); ?>