<?php

error_reporting(0);

include_once("includes/db_config.php");

require_once('includes/check_session.php');

 $patient_id = $_SESSION['patiId'];

$sqlg = "SELECT * FROM patientinvests group by reciptid";
$resultQgl = mysqli_query($con, $sqlg); 
$rownum = mysqli_num_rows($resultQgl);

$reciptid =  100000 + $rownum;


if(isset($_POST['submit']))

{ 
	@extract($_POST);


  $diabetesid = $_POST['diabetes'];
  $diabetesvalue = $_POST['diabetes_value'];
  $totalDiabetes = sizeof($diabetesid);

for($i=0;$i<$totalDiabetes;$i++) {
    $patient_id = $_POST['patient_id'];
    $centre_id = $_POST['centre_id'];
    $diabetes_id = $diabetesid[$i];
    $diabetes_value = $diabetesvalue[$i];

	//$diabetes_value = $_POST['diabetes_value'][];
// connect to mysql database
	$sql = "INSERT INTO patientinvests (reciptid, patient_id, diabetes_id, diabetes_value, user_id, created_at, status) VALUES ('$reciptid','$patient_id', '$diabetes_id', '$diabetes_value', '$centre_id', now(), 'Y')";
	mysqli_query($con, $sql) or die(mysqli_error($con));

}
echo '<script type="text/javascript">alert("Investigations Added Sucessfully...!");</script>';
	echo '<script type="text/javascript">window.location.assign("investigations.php");</script>';
//print_r($sql);exit;

}

?>
