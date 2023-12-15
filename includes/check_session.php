<?php
session_start();

if(empty($_SESSION['patiId'])){

header("Location:index.php?not");
}
?>