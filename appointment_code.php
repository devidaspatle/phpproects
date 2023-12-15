<?php
//error_reporting(0);
require_once('includes/db_config.php'); 

if(isset($_POST['submit']))
{ 
@extract($_POST);

$name = $_POST['first-name'];
	
$sqlg = "SELECT * FROM appointments order by id desc";
$resultQgl = mysqli_query($con, $sqlg); 
$rownum = mysqli_fetch_array($resultQgl);

$patient_id = 10000 + $rownum['id'];

  $sql = "INSERT INTO `appointments`(`id`, `centre_id`,`patient_id`,  `name`, `gender`, `age`, `mobile_number`, `emailid`, `comments`, `created_at`, `is_active`) VALUES (NULL, '$centre_id', '$patient_id',  '$name','$gender', '$age', '$mobile_number','$emailid','$comments', now(), '1')";


/********* start sms code *************/
// $username = "test";
 //$password = "123456";

 //$four_digit = mt_rand(1000, 9999);

 //$message = $comments;


//https://api.msg91.com/api/sendhttp.php?group_id=group_id&authkey=283627APEWxeHj5d1c6156&mobiles=8450940001&country=91&message=Hello! This is a test message&sender=DOCTOR&route=4

 //$senderid = 'DOCTOR';

	$request = "https://api.msg91.com/api/sendhttp.php?group_id=group_id&authkey=283627APEWxeHj5d1c6156&mobiles=$mobile_number&country=91&message=Hello! This is a test message&sender=DOCTOR&route=4";

 //$request = "http://www.smsjust.com/sms/user/urlsms.php?username=$username&pass=$password&senderid=$sender1&dest_mobileno=$mobile&message=$message&response=Y";

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $request);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$response = curl_exec($ch);
//echo $sql;
//print_r($sql);
//die;;

if (mysqli_query($con, $sql) or die(mysqli_error($con))) {
	
	echo '<script type="text/javascript">alert("Our representative will contact you...!");</script>';
	echo '<script type="text/javascript">window.location.assign("index.php");</script>';
	
}
$_SESSION['message']="Unsucessfull";
}
?>