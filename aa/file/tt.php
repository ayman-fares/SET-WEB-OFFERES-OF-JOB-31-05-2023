<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>




<?php
include('config.php');
$result = mysqli_query($con,"SELECT * FROM prod");
while($row = mysqli_fetch_array($result)){
echo"



<center>
<nav>


<div class='card' style='width:18rem'></div>
<img src='C:\xampp\htdocs\aa\nn.jpg' class='cardimg'>
<div class='cardbody'>
<h5 class='card-title'>$row[namejob]</h5>
<p class='card-text'>$row[price]</p>
<a href='' class='btn btn-primary'>go</a>

</div>

</nav>


</center>";


}

?>















































   
</body>
</html>