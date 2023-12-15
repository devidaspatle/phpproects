<?php 

include_once("includes/db_config.php");

if($_POST)
{
 $formulaid=$_POST['formula_id'];
 $doses=$_POST['doses'];
 $instruction=$_POST['instruction'];
 $noofb=$_POST['noofb'];
 $price=$_POST['price'];

 $sql = "INSERT INTO register(`formula_id`, `doses`, `instruction`,`noofb`,`price`,`postDateTime`) VALUE('$formulaid', '$doses', '$instruction' , '$noofb' , '$price' , now(), 'Y')";
mysqli_query($con, $sql) or die(mysqli_error($con));
}else { }

?>	