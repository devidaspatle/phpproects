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
                  <div class="screen-reader-response"><a href="create_allopathic_medicine.php" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add Alopathic Medicine</a>&nbsp;&nbsp;</div>   
            
        </div>
        <div class="table-responsive">
                      
              <table id="example" class="table table-striped table-bordered" style="width:100%">



                <thead>

                  <tr>

                    <th>Sr.No.</th>
                    <th>Allopathics No.</th>
                    <th>Patient name</th>
                    <th>Date</th>
                    <th>Action</th>
              </tr>



                </thead>



                <tbody>



                    <?php
                    $i=1;
                    $resultAllopathics = mysqli_query($con, "SELECT * FROM allopathics  where  patient_id = '".$patient_id."' group by reciptid");
                     while($rowAllopathics = mysqli_fetch_array($resultAllopathics)) { 
                      $patientid =$rowAllopathics['patient_id'];
                    $sqlg = "SELECT * FROM patients where patient_id = '".$patientid."'";
                      $resultQgl = mysqli_query($con, $sqlg); 
                      $rownum = mysqli_fetch_array($resultQgl);
                     ?>

                    <tr>      

                    <td align="center"><?php echo $i++; ?></td>
                     <td><?php echo $rowAllopathics['reciptid'];?>  </td>
                    <td><?php echo $rownum['patient_name']; ?></td>
                    <td><?php echo $rowAllopathics['created_at']; ?></td>
                     <td>

                       <a  href="edit_allopathic_medicine.php?reciptid=<?php echo $rowAllopathics['reciptid']; ?>" onClick="return confirm('Do You Want To View This Record ?');"  class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>View  </a>
                      </td>
                  
                  </tr> 

                  <?php 

                                        }

                                    ?>              



                </tbody>



              </table>

                                                    </div>

             <div class="col-sm-12">&nbsp;</div>
<div class="col-sm-12">&nbsp;</div>

                               
 </div>
    </div>
    </div>

    <div class="row">



</div>

   <?php include("footer_pages.php"); ?>