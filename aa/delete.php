<?php 

include('config.php');

$ID =$_GET['id'];

mysqli_query($con,"DELETE FROM offers WHERE id=$ID");
header('location: profil.php');




?>