
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link rel="stylesheet"    href="update.css">
    <link  rel="icon" href="logojob.png"></head>
<body>
    
<?php
include('config.php');
$ID=@$_GET['id'];
$up = mysqli_query($con,"select * from offers where id = $ID");
$data = mysqli_fetch_array($up);    
?>
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
         <form action="up.php" method="post">
         <label >update </label><br>    
         <input  type="text" name="id"  placeholder="name of jobe                                   ✍" value="<?php echo $data['id'] ?>" >
         <br>
         <input  type="text" name="name"  placeholder="name of jobe                                   ✍" value="<?php echo $data['namejob'] ?>" >
         <br>
         <input type="number" name="price"  placeholder="price in dollars               💰"   value="<?php echo $data['price'] ?>"> 
         <br>
         <input type="text" name="town"  placeholder="town               💰"   value="<?php echo $data['town'] ?>"> 
         <br>
         <input  type="tel" name="phon-number"     minlength="10"  placeholder="phone_number              📞" value="<?php echo $data['phonnumber'] ?>">
         <br>
         <button type="submit" name="updat"   >save changes </button>
         <br>
         <h2> or</h2>
         <a href="profil.php"> back to back</a>
         </form>
         </div>
         </div>
         </center>
         </body>
         </html>