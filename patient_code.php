<?php

error_reporting(0);

require_once('includes/db_config.php'); 



$sqlg = "SELECT * FROM patients order by id desc";

$resultQgl = mysqli_query($con, $sqlg); 

$rownum = mysqli_fetch_array($resultQgl);

$patient_id = 10000 + $rownum['id'];



if(isset($_POST['submit']))

{ 

	@extract($_POST);



 $patient_name = $_POST['patient_name'].' '.$_POST['surname'];

 $sql = "INSERT INTO `patients` (`id`,`patient_id`,`centre_id`, `password`, `patient_name`, `mobile_number`,`email`,`weight`,`height`, `bmi`, `blood_group`,`allergy`,`amount`,`consaltancy`,`appropriate`, `country`, `city`, `date_of_birth`,`age`,
  `gender`, `marital_status`, `state`,`district`, `pincode`,    `mode_payment`, `created_at`, `is_active`) VALUES (NULL, '$patient_id','$centre_id', '$password',  '$patient_name', '$mobile_number','$email', '$weight','$height', '".round($bmi)."',  '$blood_group', '$allergy','$amount','$consaltancy','$appropriate', '$country', '$city', '$date_of_birth', '$age','$gender', '$marital_status', '$state','$district','$pincode',   '$mode_payment',now(),'1')";



//echo $sql;

//print_r($sql);

//exit; 



if (mysqli_query($con, $sql) or die(mysqli_error($con))) {



$result = mysqli_query($con, "SELECT * FROM patients  WHERE `mobile_number`='$mobile_number' AND `password`='$password'");

 $num=mysqli_num_rows($result);

$rowes=mysqli_fetch_array($result);

//$name = $rowes['LoginID'];

//echo $name;

if($num>0)

{

$_SESSION['patiId']=$rowes['id'];



	echo '<script type="text/javascript">alert("Patient Added Sucessfully...!");</script>';

	echo '<script type="text/javascript">window.location.assign("view_patient.php");</script>';

	}

}

$_SESSION['message']="Unsucessfull";

}

if(isset($_POST['Update'])=='Update')

{

 @extract($_POST);

  $patientid = $_POST['patient_id'];
  $sql = "UPDATE patients SET `patient_id`='$patient_id', `centre_id`='$centre_id',  `password`='$password' ,`patient_name`='$patient_name' , `mobile_number`='$mobile_number', `email`='$email', `weight`='$weight', `height`='$height', `bmi`='$bmi', `blood_group`='$blood_group', `allergy`='$allergy', `amount`='$amount', `consaltancy`='$consaltancy', `appropriate`='$appropriate', `country`='$country' , `city`='$city' , `date_of_birth`='$date_of_birth' , `age`='$age' , `gender`='$gender' , `marital_status`='$marital_status'  , `state`='$state' , `district`='$district' , `pincode`='$pincode' , `mode_payment`='$mode_payment' ,`updated_at` = now() WHERE `id`='$patientid'";



  if (mysqli_query($con, $sql, MYSQLI_STORE_RESULT) or die(mysqli_error($con))) {

  

  echo '<script type="text/javascript">alert("Patient Edited Sucessfully...!");</script>';

  echo '<script type="text/javascript">window.location.assign("view_patient.php");</script>';

  

}

$_SESSION['message']="Unsucessfull";

}

?>

