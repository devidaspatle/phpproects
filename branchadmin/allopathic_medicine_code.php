<?php
include_once("includes/db_config.php");

require_once('includes/check_session.php');
error_reporting(0);
$centre_id = $_SESSION['rsoftId'];

$sqlg = "SELECT * FROM allopathics order by reciptid desc";
$resultQgl = mysqli_query($con, $sqlg); 
$rownum = mysqli_num_rows($resultQgl);

$reciptid =  100000 + $rownum;


if(isset($_POST['submit']))
{ 
	@extract($_POST);
	$patient_id = $_POST['patient_id'];
	$brand_names = $_POST['brand_name'];
	$generic_names = $_POST['generic_name'];
	$dosess = $_POST['doses'];

$totalBrandname = sizeof($brand_names);

for($i=0;$i<$totalBrandname;$i++) {

    $brand_name = $brand_names[$i];
    $generic_name = $generic_names[$i];
    $doses = $dosess[$i];


    $sql = "INSERT INTO allopathics (`reciptid`,`centre_id`, `patient_id`, `brand_name`, `generic_name`, `doses`,
     `created_at`,`updated_at`,`is_active`) VALUE('$reciptid','$centre_id','$patient_id','$brand_name', '$generic_name' , '$doses' , now() , now(), '1')";
     mysqli_query($con, $sql) or die(mysqli_error($con));
}

//print_r($sql);exit;

	echo '<script type="text/javascript">alert("Allopathic medicine Added Sucessfully...!");</script>';

	echo '<script type="text/javascript">window.location.assign("manage_allopathic_medicine.php");</script>';

	

$_SESSION['message']="Unsucessfull";

}

?>
