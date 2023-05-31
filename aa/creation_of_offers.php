



<?php
include('config.php');

session_start();
 $emailget=@$_SESSION['email'];
 
 

 $log = mysqli_query($con,"SELECT * FROM creat WHERE email='$emailget' ");
 $row = mysqli_fetch_array($log);
 
 $offer0=mysqli_query($con,"SELECT * FROM offers WHERE email='$emailget' AND price='' ");
 $row0= mysqli_fetch_array($offer0);
 
 $ID1=$row0['id'];

$error = [
 'name_r' =>''
 

];

if(isset($_POST['upload'])){
$NAME=$_POST['name'];
$PRICE=$_POST['price'];
$TOWN=@$_POST['town'];
$PH=$_POST['phon-number'];
$LINK=$_POST['link'];
$offer1 =" UPDATE offers SET price='$PRICE',namejob='$NAME',town='$TOWN' ,link='$LINK', phonnumber='$PH' WHERE id='$ID1'  ";
$insert=" INSERT INTO prod (namejob,price) VALUES ('$NAME','$PRICE')";


if(empty($NAME)){
    $error['name_r'] = 'enter the name of job please';
    
}
elseif(empty($PRICE)){
    $error['name_r'] = 'enter the price please';
}
elseif(!filter_var($PRICE,FILTER_VALIDATE_FLOAT)){
    $error['name_r'] = 'enter a number please';

}
elseif(empty($TOWN)){
    $error['name_r'] = 'enter your town please';
}
elseif(empty($PH)){
    $error['name_r'] = 'enter the phonnumber please';
}
elseif(!filter_var($PH,FILTER_VALIDATE_FLOAT)){
    $error['name_r'] = 'your phone number is wrong';

}
elseif(empty($LINK)){
    $error['name_r'] = 'enter the link of telegrame please';
}

elseif(mysqli_query($con,$offer1)){
    
        header('location: creation_of_offers.php');

    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>creation of offers</title>
    <link rel="stylesheet"    href="creation_of_offers.css">
    <link  rel="icon" href="logojob.png">
</head>
<body>
    

    <style>
    #vid{
    width: 100%;
    height: auto;
    position: fixed;
    top: 0px;
    left: 0px;
    z-index: -1;
      }
      center{
      color: wheat;
      }
      ::selection{
      color: yellow;
      background-color: black;
  
      }
      </style>
      <video src="add.webm" id="vid" autoplay loop muted></video> 

 
      <center>
        <div class="fares">
        <div class="ayman">
        <form action="creation_of_offers.php" method="post">

        
          <label  >create offer </label><br>
          <input  type="text" name="name" id="username" placeholder="name of job                   ✍" value="<?php echo @$NAME ?>" >
          <br>
          <input type="number" name="price"  placeholder="price in dollars               💲" value="<?php echo @$PRICE ?>"> 
          <br>
          <input type="text" name="town"  placeholder="town                              🗼"   value="<?php echo @$TOWN ?>"> 
          <br>
          <input  type="tel" name="phon-number" maxlength="10" minlength="10" value="<?php echo @$PH ?>"  id="phone_number" placeholder="phone_number              📞">
          <br>
          <input  type="tel" name="link"  value="<?php echo @$LINK?>"  id="link" placeholder="link telegram                 📲">
          <br>
          <button type="submit" name="upload" id="submit" value="register" >save </button>
          <br>
          <h3 class="hh"><?php echo $error['name_r'] ?>   </h3>
          <h2> or</h2>
          <a href="profil.php"> go to your profil</a>
        </form>
        </div>
        </did>
      </center>
</body>
</html>