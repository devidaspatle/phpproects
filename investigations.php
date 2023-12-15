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
                  <div class="screen-reader-response"><a href="create_investigations.php" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add Investigations</a> &nbsp;&nbsp;</div>   
            
        </div>
        <div class="table-responsive">
                      
                <table class="table" width="100%">

                                                            <tbody>

                                                                <tr>

                                                                    <th scope="row">SN</th>
                                                                    <th>Investigations No. </th>
                                                                    <th>Patient Name </th>
                                                                    <th>Investigations Date </th>
                                                                      <th>Action </th>
                                                                </tr>

                                                                <?php
                                                                //echo "SELECT * FROM patientinvests where patient_id = '".$patient_id."'GROUP BY reciptid";
                                        $i=1;
$resultInvestigations = mysqli_query($con, "SELECT * FROM patientinvests where patient_id = '".$patient_id."' group by reciptid");

                                        while($investigations = mysqli_fetch_array($resultInvestigations))

                                        {

                                        $patient_id = $investigations['patient_id'];

                                       $result = mysqli_query($con, "SELECT * FROM patients  WHERE  patient_id = '".$patient_id."'");

                                        $rownum=mysqli_fetch_array($result);
                                    ?>

                                <tr>

                                    <th scope="row">
                                        <?php echo $i++; ?>
                                    </th>

                                    <td> <?php echo $investigations['reciptid'];?> </td>
                                     <td> <?php echo $rownum['patient_name'];?></td>
                                 
                                    <td>  <?php echo $investigations['created_at'];?></td>
                                     <td>
                                       <a  href="edit_investigations.php?reciptid=<?php echo $investigations['reciptid']; ?>" onClick="return confirm('Do You Want To View This Record ?');"  class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>View  </a>
                                    </td>
                                </tr>
                                <?php } ?>

                                                            </tbody>

                                                        </table>

                                                    </div>

                                                </div>
       <div class="col-sm-12">&nbsp;</div>
<div class="col-sm-12">&nbsp;</div>
<div class="col-sm-12">&nbsp;</div>
<div class="col-sm-12">&nbsp;</div>                                         
    </div>
    </div>

    <div class="row">


</div>

   <?php include("footer_pages.php"); ?>