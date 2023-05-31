


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>howm
    </title>
    <link rel="stylesheet" href="home1.css"></head>
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
       
    </style>
    
    
     <video src="add.webm" id="vid" autoplay loop muted></video> 

 
<section class="home" id="home">
      <nav>
        <div class="logo"><h2>JOB<span> OPPRTUINTY</span></h2></div>
       <ul>
       <li style="--clr:#00ade1">
       <a href="http://localhost/aa/create.php" data-text="&nbsp;create">&nbsp;create&nbsp;</a>
       </li>
       <li style="--clr:#ff6493">
       <a href="http://localhost/aa/login.php" data-text="&nbsp;Login">&nbsp;Login&nbsp;</a>
       </li>
       <li style="--clr:#ffdd1c">
       <a href="http://localhost/aa/job1.php" data-text="&nbsp;offers">&nbsp;offers&nbsp;</a>
       </li>  
       <li style="--clr:#0ddc82">
       <a href="http://localhost/aa/profil.php" data-text="&nbsp;profile&nbsp;">&nbsp;profile&nbsp;</a>
       </li>
       <li style="--clr:#dc00d4">
       <a href="http://localhost/aa/helpme.php" data-text="&nbsp;help">&nbsp;help&nbsp;</a>
       </li>
       </ul>

<?php

include('config.php');
session_start();
$emailget=@$_SESSION['email'];
$log0 = mysqli_query($con,"SELECT * FROM login");  
$num_row = mysqli_num_rows($log0);

if($emailget==''){

  mysqli_query($con,"TRUNCATE TABLE login");
  }

  
if($num_row >0){

 
  $log = mysqli_query($con,"SELECT * FROM login WHERE email='$emailget' ");
  $row = mysqli_fetch_array($log);
  $log2 = mysqli_query($con,"SELECT * FROM creat WHERE email='$emailget'");
  $row2 = mysqli_fetch_array($log2);

echo"
<button id='gg'   onclick='rr()'  >
<img id='ss' src= '$row2[image]' >
</button>
<div class='dd'>
<span></span>
<div class='log'>
<br>
<br>
<p claas='your-name'> hi  $row2[username]</p>
<p> Create job offers❗</p>
<a  href='creation_of_offers.php' type='submit' class='btngo' >Create </a><br>
<p> go to your profile❗</p>
<a href='profil.php'  class='btngo' >go now</a>
<p> log out of the account❗</p>
<a href='delletlog.php? id=$row[id]' name='delletelog' class='btnremove' >log out</a>
</div>
</div>";
}

if($num_row ==0){

  echo"
  <button id='gg'   onclick='rr()'  >
  <img id='ss' src= 'compt.png' >
  </button>
  <div class='dd'>
  <span></span>
  <div class='log'>
  <br>
  <br>
  <br>
  <br><br>
  <br>
  <p>are you new here ❗</p>
  <a href='create.php' type='submit' class='btngo' >create</a><br>
  <p>do you have account ❗</p>
  <a href='login.php' class='btngo1' >login </a>
  </div>
  </div>";
}

?>
   
    <script>
           let dd = document.querySelector(".dd");
           let isho = true;
           function rr(){
          if(isho){
          dd.style.display = "block";
           isho = false;
           }
           else{
           dd.style.display = "none";
            isho = true;
           }
          }
          </script>


     </nav>
        <div class="content">
        <h1>   THIS IS YOUR CHANCE
        </h1>
        <h3>TO FIND A JOB FOR YOU
        </h3>
        <h4>CREATE<span> ACCOUNT</span></h4>
        <a href="http://localhost/aa/create.php" class="btns">lits go</a>


   <div class="social">
       <a href="sqdsqd"><img src="face.png"></a>
       <a href="sqdsqd"><img src="yout.png"></a>
       <a href="sqdsqd"><img src="insta.png"></a>
       <a href="sqdsqd"><img src="twit.png"></a>
   </div>
   <div  class="cimg">
      <img src="dd.png" alt="" class="shape">

   </div>
   </div>
      <br><br>
      
      <hr width="100%"  color="wheat" size="1" >


<section class="ayman">
    <div class="contimg">
       <a href="http://localhost/aa/helpme.php"><img src="qq.png" alt=""></a> 
   </div>
   <div class="conttext">

         <h1>help<span>me</span></h1>
         <br>
         <h3>Are you facing a problem?</h3>
         <br>
         <h5>You can go to the help page by clicking on the button or the image on the left to find the solution</h5>
         <br>
         <a  style=" text-transform: none;font-size: none; font-weight: 300;" href="http://localhost/aa/helpme.php" class="btns">help</a>
 
        </div>
</section>
        <hr width="100%" color="wheat" size="1">


<section class="fares">
    <h2 class="title"> call now<span class="call">📞</span></h2>

           <div class="contenth">
           <div class="card">
           <div class="k"><img style="background-color: #fff;" src="h (2).png" alt=""> </div>
           <div class="info">
             <h3> <span>ooredo:  </span> 0552522238<hr width="0%" color="blue"> <span> mobilis:  </span>
              0668002641</h3>     
 
          </div>
          </div>
          </div>
          </div>



          <div class="contentg">
          <div class="card">
          <div class="kk"><img src="h (1).png" alt=""> </div>
          <div class="info">
             <h3> ayamanfare2001@gmail.com</h3>         
             <h3> ayamanfares360@gmail.com</h3>
          </div>
          </div>
          </div>
          </div>




<div class="imgp">
    <img src="mm.png">
</div>
</section>
</body>
</html>

















