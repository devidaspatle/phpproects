<?php

error_reporting(0);

require_once('includes/db_config.php'); 

require_once('includes/check_session.php'); 

$user_name = $_SESSION['rsoftId'];



$resultlogo=mysqli_query($con, "select * from centres  where id = '".$user_name."'");

$rowlogo = mysqli_fetch_array($resultlogo);

$user_id = $rowlogo['id'];


if(isset($_POST['Update'])=='Update')

{

 @extract($_POST);

 $sql = "UPDATE centres SET `centre_name`='$centre_name', `office_time`='$office_time', `office_open`='$office_open', `visit_days`='$visit_days',`contact_person`='$contact_person',`mobile_number`='$mobile_number',`city`='$city', `state`='$state', `pincode`='$pincode', `address`='$address',`updated_at`= now() WHERE `id`='$user_id'";


//echo $sql;

//print_r($sql);

//exit; 



  if (mysqli_query($con, $sql) or die(mysqli_error($con))) {

  

  echo '<script type="text/javascript">alert("Settings Edited Sucessfully...!");</script>';

  echo '<script type="text/javascript">window.location.assign("Settings.php");</script>';

  

}

$_SESSION['message']="Unsucessfull";

}

?>

