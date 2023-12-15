<?php

include_once("includes/db_config.php");

session_start();



if(isset($_POST['addLogin'])=='addLogin')

{

$sid=$_POST['username'];



$pwd1=$_POST['password'];

//echo "SELECT * FROM centres WHERE `username`='$sid'   AND `password`='$pwd1'";

//die;

$result = mysqli_query($con, "SELECT * FROM centres  WHERE `username` = '$sid'   AND `password` = '$pwd1'");

 $num=mysqli_num_rows($result);

$rowes=mysqli_fetch_array($result);

$name = $rowes['centre_name'];


if($num>0)

{

$_SESSION['rsoftId']=$rowes['id'];

header("location:dashboard.php");

}

else

{

header("location:index.php?msg=error");

}

}



?>