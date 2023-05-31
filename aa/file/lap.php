<?php
include('config.php');
if(isset($_POST['submit'])){
$NAME=$_POST['username'];
$PH=$_POST['phone_number'];
$PAS=$_POST['password'];
$AGE=$_POST['age'];
$SEX=$_POST['gender'];



$insert=" INSERT INTO creat (username,phonnumber,password,age,sex) VALUES ('$NAME','$PH','$PAS','$AGE','$SEX')";
mysqli_query($con,$insert);

}



?>