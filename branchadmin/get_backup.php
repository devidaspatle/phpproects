<?php
include_once("includes/db_config.php");

if(isset($_POST['addLogin'])=='addLogin')
{
$sid=$_POST['usremail'];

$pwd1=$_POST['usrpwd'];
//echo "SELECT * FROM users WHERE `userName`='$sid'   AND `passWord `='$pwd1'";
//die;
$result = mysqli_query($con, "SELECT * FROM users WHERE `userName`='$sid'   AND `passWord`='$pwd1'");
 $num=mysqli_num_rows($result);
$rowes=mysqli_fetch_array($result);
//$name = $rowes['LoginID'];
//echo $name;
if($num>0)
{
header("location:thanks.php");
}
else
{
header("location:backup.php?msg=error");
}
}

?>