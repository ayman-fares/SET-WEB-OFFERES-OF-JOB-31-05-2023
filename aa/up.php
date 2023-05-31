<?php
include('config.php');
if(isset($_POST['updat'])){
 $ID=$_POST['id'];
$NAME=$_POST['name'];
$PRICE=$_POST['price'];
$TOWN=$_POST['town'];
$PH=$_POST['phon-number'];
$update =" UPDATE offers SET  namejob='$NAME',price='$PRICE',town='$TOWN',phonnumber='$PH' WHERE id=$ID ";
mysqli_query($con,$update);
}
header('location: profil.php'); 
?>