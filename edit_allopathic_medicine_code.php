<?php
include_once("includes/db_config.php");

require_once('includes/check_session.php');
//error_reporting(0);
 $ids = $_SESSION['patiId'];

if(isset($_POST['Update'])=='Update')
{ 
	@extract($_POST);
	$patient_id = $_POST['patient_id'];
	$brand_names = $_POST['brand_name'];
	$generic_names = $_POST['generic_name'];
	$dosess = $_POST['doses'];
	$allopathicsid = $_POST['allopathics_id'];
	

$totalBrandname = sizeof($brand_names);

for($i=0;$i<$totalBrandname;$i++) {

    $brandname = $brand_names[$i];
    $genericname = $generic_names[$i];
    $doses = $dosess[$i];
    $allopathicsids = $_POST['allopathics_id'][$i];

    $sql = "UPDATE allopathics SET `brand_name`='$brandname', `generic_name`='$genericname' , `doses`='$doses', `updated_at` = now() WHERE `id`='$allopathicsids'";
     mysqli_query($con, $sql) or die(mysqli_error($con));
}

//die;
//print_r($sql);exit;

	echo '<script type="text/javascript">alert("Allopathic medicine Update Sucessfully...!");</script>';

	echo '<script type="text/javascript">window.location.assign("allopathic_medicine.php");</script>';

	

$_SESSION['message']="Unsucessfull";

}

?>
