<?php

//error_reporting(0);

include_once("includes/db_config.php");

require_once('includes/check_session.php');

$user_id = $_SESSION['rsoftId'];


if(isset($_POST['submit']))

{ 
	@extract($_POST);
	
	//$diabetes_values = implode(",",$diabetes_value);
	  //$diabetes_id = implode(",",$diabetes);

	$patient_id = $_POST['patient_id'];
$i=2;
  $array = $_POST['diabetes_value'];
foreach ($array as $item_id=>$item_qty)
{
	//$diabetes_value = $_POST['diabetes_value'][];
// connect to mysql database
	$sql = "INSERT INTO patientinvests (patient_id, diabetes_id, diabetes_value, user_id, created_at, status) VALUES ('$patient_id', '$i', '$item_qty', '$user_id', now(), 'Y')";
mysqli_query($con, $sql);
$i++;
}
echo '<script type="text/javascript">alert("Investigations Added Sucessfully...!");</script>';
	echo '<script type="text/javascript">window.location.assign("manage_investigation_detail.php");</script>';
//print_r($sql);exit;

}

?>
