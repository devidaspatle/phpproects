<?php
include_once("includes/db_config.php");

require_once('includes/check_session.php');
error_reporting(0);
$centre_id = $_SESSION['rsoftId'];

if(isset($_POST['submit']))
{ 
	@extract($_POST);
	$patient_id = $_POST['patient_id'];
	$brand_names = $_POST['brand_name'];
	$generic_names = $_POST['generic_name'];
	$dosess = $_POST['doses'];

	$brand_name = implode(",",$brand_names);
	$generic_name = implode(",",$generic_names);
	$doses = implode(",",$dosess);

    $sql = "INSERT INTO allopathics (`centre_id`, `patient_id`, `brand_name`, `generic_name`, `doses`,
     `created_at`,`updated_at`,`is_active`) VALUE('$centre_id','$patient_id','$brand_name', '$generic_name' , '$doses' , now() , now(), '1')";


//print_r($sql);exit;



if (mysqli_query($con, $sql) or die(mysqli_error($con))) {

	
		 $patientallopathicsid = mysqli_insert_id($con);

	echo '<script type="text/javascript">alert("Allopathic medicine Added Sucessfully...!");</script>';

	echo '<script type="text/javascript">window.location.assign("views_allopathic_medicine.php?pivent='.$patientallopathicsid.'");</script>';

	

}

$_SESSION['message']="Unsucessfull";

}

?>
