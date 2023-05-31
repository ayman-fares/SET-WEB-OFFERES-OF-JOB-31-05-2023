<?php
include('config.php');
if(isset($_POST['upload'])){
$NAME=$_POST['name'];
$PRICE=$_POST['price'];

$TOWN=$_POST['town'];
$PH=$_POST['phon-number'];



$insert=" INSERT INTO prod (namejob,price,town,phnuber) VALUES ('$NAME','$PRICE','$TOWN','$PH')";
mysqli_query($con,$insert);

if(empty($NAME)){
    echo 'hghgj';
}

else 
    if(mysqli_query($con,$insert)){

        header('location: ayman.php'); 

}


}



?>