
<?php
include('config.php');

$error = [
    'name_h' =>'',

   ];
if(isset($_POST['submit'])){
    $EMAIL=@$_POST['email'];
    $PASS=@$_POST['password'];
 

    $log = mysqli_query($con,"select * FROM creat WHERE email='$EMAIL' && password='$PASS'");
    $rowlog = mysqli_fetch_array($log);
    
    

    
    if(mysqli_num_rows($log)>0){
        
        $insert1= " INSERT INTO login (email,password) VALUES ('$EMAIL','$PASS')";
        $result1 = mysqli_query($con,$insert1);
        header('location:home1.php');
        session_start();
        $_SESSION['email']=@$EMAIL;

    }
    else{
        $error['name_h'] = 'there is a error in your information';
        
    }





}
    
if(isset($_POST['submit'])){
$EMAIL=$_POST['email'];
$PASS=$_POST['password'];
if(empty($EMAIL)){
    $error['name_h'] = 'enter the email please';
}
elseif(!filter_var($EMAIL,FILTER_VALIDATE_EMAIL)){

    $error['name_h'] = 'the email is not true';
}

elseif(empty($PASS)){
    $error['name_h'] = 'enter the password please';
}

}

?>
<!DOCTYPE html>
</html>
<head>
<title>
    login from 

</title>
<link rel="stylesheet" href="login.css">
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
        <form action="login.php" method="post">
        <div class="fares">
        <div class="ayman">
        <label >login</label><br>
        <input  type="text" name="email" placeholder="enter your email" value="<?php echo @$EMAIL?>">
        <br>
        <input  type="password" name="password"  placeholder="password" value="<?php echo @$PASS ?>">
        <br>
        <a  href='hhhh.php' >  <button  type='submit' name='submit'>login in </button></a>"
        <br>
        <h3 class="hh"><?php echo $error['name_h'] ?>   </h3>
        <br>
        <h2> or</h2>
        <a href="http://localhost/aa/create.php"> create an account</a>
        <div id="ayman">
        <a href=" https://facebook.com/"><img src="fac.png"></a>
        <a href="https://search.brave.com/search?q=inastagre&source=desktop "><img src="youty.png"> </a>
        <a href="https://search.brave.com/search?q=youtuep&source=desktop "><img src="inst.png"></a>
        </div>
        </div>
        </div>
        </form>
</body>