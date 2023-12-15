<?php
include_once("includes/db_config.php");
session_start();

if(isset($_POST['addLogin'])=='addLogin')
{
$sid=$_POST['mobile'];

$pwd1=$_POST['password'];
//echo "SELECT * FROM users WHERE `email`='$sid'   AND `password`='$pwd1'";
//die;
echo  "SELECT * FROM patients  WHERE `mobile_number`='$sid'   AND `password`='$pwd1'";


$result = mysqli_query($con, "SELECT * FROM patients  WHERE `mobile_number`='$sid'   AND `password`='$pwd1'");
echo $num=mysqli_num_rows($result);
//die;
$rowes=mysqli_fetch_array($result);
//$name = $rowes['LoginID'];
//echo $name;
if($num>0)
{
$_SESSION['patiId']=$rowes['id'];
header("location:view_patient.php");
}
else
{
header("location:login.php?msg=error");
}
}

?>