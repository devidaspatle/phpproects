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
                    <h1>Alopathic Medicine </h1>
                </div>
                <div class="col-md-6 text-right">
                    <ul class="breadcrumb">
                        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active"> Alopathic Medicine </li>
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
  
<form id="form" method="POST" action="allopathic_medicine_code.php" class="form-horizontal" onSubmit="disable();">
<div class="table-responsive">

  <table class="table" width="100%">
   <input type="hidden" name="patient_id" value="<?php echo $patient_id; ?>">
   <input type="hidden" name="centre_id" value="<?php echo $centre_id; ?>">

    <tbody>

      <tr>

        <th scope="row">SN</th>

        <th>Brand Name</th>

        <th>Generic Name</th>

        <th>Doses</th>

     </tr>

       <tr>

        <th scope="row">1</th>

        <td><input type="text" name="brand_name[]"  class="form-control"  style="width: 240px"/></td>

        <td><input type="text" name="generic_name[]"  class="form-control"/></td>

        <td><input type="text" name="doses[]" class="form-control" style="width: 100px" /></td>

     </tr>





       <tr>

        <th scope="row">2</th>

          <td><input type="text" name="brand_name[]"  class="form-control"  style="width: 240px"/></td>

        <td><input type="text" name="generic_name[]"  class="form-control"/></td>

        <td><input type="text" name="doses[]" class="form-control" style="width: 100px" /></td>

     </tr>



       <tr>

        <th scope="row">3</th>

          <td><input type="text" name="brand_name[]" class="form-control"  style="width: 240px"/></td>

        <td><input type="text" name="generic_name[]" class="form-control"/></td>

        <td><input type="text" name="doses[]" class="form-control" style="width: 100px" /></td>
     </tr>



       <tr>

        <th scope="row">4</th>

         <td><input type="text" name="brand_name[]" class="form-control"  style="width: 240px"/></td>

        <td><input type="text" name="generic_name[]" class="form-control"/></td>

        <td><input type="text" name="doses[]" class="form-control" style="width: 100px" /></td>

     </tr>





       <tr>

        <th scope="row">5</th>

          <td><input type="text" name="brand_name[]" class="form-control"  style="width: 240px"/></td>

        <td><input type="text" name="generic_name[]" class="form-control"/></td>

        <td><input type="text" name="doses[]" class="form-control" style="width: 100px" /></td>

     </tr>



       <tr>

        <th scope="row">6</th>

         <td><input type="text" name="brand_name[]" class="form-control"  style="width: 240px"/></td>

        <td><input type="text" name="generic_name[]" class="form-control"/></td>

        <td><input type="text" name="doses[]" class="form-control" style="width: 100px" /></td>

     </tr>



       <tr>

        <th scope="row">7</th>

           <td><input type="text" name="brand_name[]" class="form-control"  style="width: 240px"/></td>

        <td><input type="text" name="generic_name[]" class="form-control"/></td>

        <td><input type="text" name="doses[]" class="form-control" style="width: 100px" /></td>

     </tr>

       <tr>

        <th scope="row">8</th>

         <td><input type="text" name="brand_name[]" class="form-control"  style="width: 240px"/></td>

        <td><input type="text" name="generic_name[]" class="form-control"/></td>

        <td><input type="text" name="doses[]" class="form-control" style="width: 100px" /></td>

     </tr>



       <tr>

        <th scope="row">9</th>

           <td><input type="text" name="brand_name[]" class="form-control"  style="width: 240px"/></td>

        <td><input type="text" name="generic_name[]" class="form-control"/></td>

        <td><input type="text" name="doses[]" class="form-control" style="width: 100px" /></td>

     </tr>



       <tr>

        <th scope="row">10</th>

          <td><input type="text" name="brand_name[]" class="form-control"  style="width: 240px"/></td>

        <td><input type="text" name="generic_name[]" class="form-control"/></td>

        <td><input type="text" name="doses[]" class="form-control" style="width: 100px" /></td>

     </tr>

       <tr>

        <th scope="row">11</th>

         <td><input type="text" name="brand_name[]" class="form-control"  style="width: 240px"/></td>

        <td><input type="text" name="generic_name[]" class="form-control"/></td>

        <td><input type="text" name="doses[]" class="form-control" style="width: 100px" /></td>

     </tr>

      <tr>
        <th scope="row">&nbsp;</th>

        <td>&nbsp; </td>

        <td>
    <button type="submit" name="submit" id="save" class="btn btn-warning">Save</button>
    </td>
     <td>&nbsp;</td>
     </tr>

    </tbody>

  </table>
                       
           </form>

            </div>
         </div>
            
        </div>
      
 </div>
    </div>
    </div>

    <div class="row">
    <div class="col-sm-12">&nbsp;</div>
    <div class="col-sm-12">&nbsp;</div>
</div>

   <?php include("footer_pages.php"); ?>