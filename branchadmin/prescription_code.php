<?php

//error_reporting(0);

include_once("includes/db_config.php");

require_once('includes/check_session.php');

$centre_id = $_SESSION['rsoftId'];

$sqlg = "SELECT * FROM prescriptions order by reciptid desc";
$resultQgl = mysqli_query($con, $sqlg); 
$rownum = mysqli_num_rows($resultQgl);

$reciptid =  100000 + $rownum;

if(isset($_POST['submit']))

{ 
	
	$doses = $_POST['doses'];
	$instruction = $_POST['instruction'];
	$noofb = $_POST['noofb'];
	$price = $_POST['formulas_rate'];
	$formulasid = $_POST['formula_id'];
	 $totalFormulas = sizeof($formulasid);

	//print_r($totalFormulas);
	

for($i=0;$i<$totalFormulas;$i++) {
	$patient_id = $_POST['patient_id'];
    $dosess = $doses[$i];
    $instructions = $instruction[$i];
    $noofbs = $noofb[$i];
    $prices = $price[$i];
    $totalFormula = $_POST['formula_id'][$i];
	
  $sql = "INSERT INTO  prescriptions(`reciptid`,`patient_id`, `centre_id`,  `doses`, `instruction`, `noofb`,`price`,`supplements_id`,`is_active`,`created_at`) VALUE('$reciptid','$patient_id','$centre_id', '$dosess', '$instructions' , '$noofbs', '$prices','$totalFormula','1', now())";
		mysqli_query($con, $sql) or die(mysqli_error($con));
	}
//die;
//print_r($sql);exit;
	$investigationsid = $_POST['investigations_id'];
	$totalInvestigations = sizeof($investigationsid);

for($j=0;$j<$totalInvestigations;$j++) {
    $patient_id = $_POST['patient_id'];
    $descriptions = $_POST['description'];
    $nvestigations = $_POST['investigations_id'][$j];

	 $sqls = "INSERT INTO adviceinvests (`reciptid`,patient_id, 	centre_id, 	investigations_id, descriptions,  created_at, status) VALUES ('$reciptid','$patient_id', '$centre_id', '$nvestigations', '$descriptions', now(), '1')";
	mysqli_query($con, $sqls) or die(mysqli_error($con));
}

	echo '<script type="text/javascript">alert("Prescription Details Added Sucessfully...!");</script>';

	echo '<script type="text/javascript">window.location.assign("manage_prescription.php");</script>';

	
$_SESSION['message']="Unsucessfull";

}

?>
