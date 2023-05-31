<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="job1.css" rel="stylesheet">
    <link  rel="icon" href="logojob.png">
</head>
<body>
 
 <script src="job.js"> </script>




<!-- list side-->
    <div id="my_m" class="s_nav">
       <a href="javascript:void(0)" class="closebtn" onclick="closeNav();">&times;</a>
       <a href="http://localhost/aa/create.php">creat accounte📝</a>
      <a href="http://localhost/aa/login.php">login📲</a>
      <a href="http://localhost/aa/profil.php">profil🎁</a>
      <a href="http://localhost/aa/home1.php">    howm🏁</a>
      <a href="http://localhost/aa/helpme.php">help❔</a>
      <br>
      <br>
      <br>
      <br>
      <br>
      
      <br>

      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      
    
 
      <div id="ayman">
        <a href=" https://facebook.com/"><img src="fac.png">facebook</a>
        <a href="https://search.brave.com/search?q=inastagre&source=desktop "><img src="youty.png"> youtuep</a>
        <a href="https://search.brave.com/search?q=youtuep&source=desktop "><img src="inst.png">inastagre</a>
        

    </div>
   </div>
   <script src="home.js">
   </script>


        <header>
         <a href="http://localhost/aa/home1.php"> <img class="mmimg" src="mmm.png"> </a>
         <h2 class="title" data-text="&nbsp;welcome " >&nbsp;welcome &nbsp;</h2>
         <div id="main">
         <span onclick="openNav()"> &#9776;  </span>
         </div>
         </header>

    <?php
include('config.php');
session_start();
 $emailget=@$_SESSION['email']; 
$ID=@$_GET['id'];
$result = mysqli_query($con,"SELECT * FROM offers WHERE PRICE <> '' ");

$log = mysqli_query($con,"SELECT * FROM creat WHERE email='$emailget'");


$num_row = mysqli_num_rows($result);
if ($num_row ==0){
    echo "  
    <div class='xclam'>
    <img   class='t' src='ereer (1).png' >
    <h3 class='tt'>il ya un ereer par le momonat nous avant fg</h3>
    <p class='ttt' >ga gfhgjk jhfejjk fkke kjf sjhfjfgkjgjkfbg;,n,f jklskj hvkfkz jhdkjgmi kefk pozkfj zf  kklezlfzoef</p>
    <a href='http://localhost/aa/home1.php'> <button class='btnx' >creat offer</button></a>
    </div>
    <div id='clock'></div>
";

}
else{
  
    while($row = mysqli_fetch_array($result)){
        echo"
        
        <div class='container' >
        <div class='card'>
          <div class='box'>
          <span class='span0'></span>
              <div class='content'> 
                   <img  class='img0' src='$row[image]'>
                   <div class='aymanjjj'>
                   <h5 class='aymanjj'>&nbsp;$row[name]&nbsp;</h5>
                   </div>
                   <h4>name of job</h4>
                   <h5><span></span>&nbsp;[&nbsp;$row[namejob]&nbsp;]&nbsp;<span></span>&nbsp;</h5>
                   <h4>the price</h4>
                   <h5><span></span>&nbsp;[&nbsp;$row[price]&nbsp;]&nbsp;<span></span>&nbsp;</h5>         
                   <h4>town</h4>
                   <h5><span></span>&nbsp;[&nbsp;$row[town]&nbsp;]&nbsp;<span></span>&nbsp;</h5>                             
                   <h4>phone </h4>      
                   <h5><span></span>&nbsp;[&nbsp;$row[phonnumber]&nbsp;]&nbsp;<span></span>&nbsp;</h5>   
                   <a href='$row[link]'  type='submit'> <button class='btn1'><img  class='img1' src='telegram (4).png' ><span class='span1'>telegrame</span></button> </a>           
              </div>
          </div>
        </div>
      </div>
      <div id='clock'></div>
      ";
      
        
        
        }
}
?>
<center></center>

</body>
</html>