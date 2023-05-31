<?php 

include('config.php');

$ID=$_GET['id'];

mysqli_query($con,"DELETE FROM login  WHERE id=$ID");
session_start();
$_SESSION['email']='';
header('location: home1.php');

?>