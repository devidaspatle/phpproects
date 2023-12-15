<?php
error_reporting(0);
require_once('includes/db_config.php'); 
require_once('includes/check_session.php'); 
$centre_id = $_SESSION['rsoftId'];

$sqlg = "SELECT * FROM patients order by id desc";
$resultQgl = mysqli_query($con, $sqlg); 
$rownum = mysqli_fetch_array($resultQgl);
$patient_id = 10000 + $rownum['id'];

if(isset($_POST['submit']))
{ 
	@extract($_POST);
	
 $patient_name = $_POST['patient_name'].' '.$_POST['surname'];
  $sql = "INSERT INTO `patients` (`id`,`patient_id`,`centre_id`, `password`, `patient_name`, `mobile_number`,`email`, `weight`,`height`, `bmi`, `blood_group`,`allergy`, `appropriate`,  `date_of_birth`, `gender`, `marital_status`, `district`,`amount`, `consaltancy`, `mode_payment`, `city`, `state`, `country`, `pincode`,   `address`, `is_active`, `created_at`) VALUES (NULL, '$patient_id','$centre_id','$password','$patient_name', '$mobile_number','$email', '$weight','$height', '$bmi',  '$blood_group', '$allergy','$appropriate','$date_of_birth','$gender', '$marital_status', '$district','$amount', '$consaltancy', '$mode_payment', '$city',   '$state','$country', '$pincode',  '$address', '1', now())";

//echo $sql;
//print_r($sql);
//exit; 

if (mysqli_query($con, $sql) or die(mysqli_error($con))) {

	echo '<script type="text/javascript">alert("Patient Added Sucessfully...!");</script>';
	echo '<script type="text/javascript">window.location.assign("manage_patient.php");</script>';
	
}
$_SESSION['message']="Unsucessfull";
}
if(isset($_POST['Update'])=='Update')
{
	@extract($_POST);
  
 
  $sql = "UPDATE patients SET  `patient_name`='$patient_name' , `mobile_number`='$mobile_number', `email`='$email', `weight`='$weight', `height`='$height', `bmi`='$bmi', `blood_group`='$blood_group', `allergy`='$allergy', `appropriate`='$appropriate', `date_of_birth`='$date_of_birth', `gender`='$gender', `marital_status`='$marital_status' , `district`='$district' , `consaltancy`='$consaltancy' , `mode_payment`='$mode_payment' , `city`='$city' , `state`='$state'  , `country`='$country' , `pincode`='$pincode' , `address`='$address',`updated_at` = now() WHERE `id`='$typeid'";

  if (mysqli_query($con, $sql, MYSQLI_STORE_RESULT) or die(mysqli_error($con))) {
  
  echo '<script type="text/javascript">alert("Patient Edited Sucessfully...!");</script>';
  echo '<script type="text/javascript">window.location.assign("manage_patient.php");</script>';
  
}
$_SESSION['message']="Unsucessfull";
}
?>
