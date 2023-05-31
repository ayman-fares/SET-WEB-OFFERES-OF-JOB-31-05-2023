
<?php
include('config.php');
$error = [
    'name_h' =>'',

   ];
if(isset($_POST['submit'])){
$NAME=@$_POST['username'];
$EMAIL=@$_POST['email'];
$PASS=@$_POST['password'];
$AGE=$_POST['age'];
$SEX=@$_POST['gender'];

$IMAGE = $_FILES['image'];
$image_location = $_FILES['image']['tmp_name'];
$image_name = $_FILES['image']['name'];
$image_up = "images/".$image_name;


$insert=" INSERT INTO creat (username,email,password,age,sex,image) VALUES ('$NAME','$EMAIL','$PASS','$AGE','$SEX','$image_up')";
for($i=0;$i<15;$i++){
    $insert0=" INSERT INTO offers (name,email,password,image) VALUES ('$NAME','$EMAIL','$PASS','$image_up')";
}
$insert2="SELECT * FROM creat WHERE email = '$EMAIL'";
$result = mysqli_query($con,$insert2);


if(empty($NAME)){
    $error['name_h'] = 'enter the name please';
    
}
elseif(empty($EMAIL)){
    $error['name_h'] = 'enter the email please';
}
elseif(!filter_var($EMAIL,FILTER_VALIDATE_EMAIL)){

    $error['name_h'] = 'the email is not true';
}

elseif(mysqli_num_rows($result)>0){

    $error['name_h'] = 'this email exists';
}

elseif(empty($PASS)){
    $error['name_h'] = 'enter the password please';
}
elseif(empty($AGE)){
    $error['name_h'] = 'enter the age please';
}

elseif(empty($SEX)){
    $error['name_h'] = 'enter the sex please';
}

elseif(mysqli_query($con,$insert)){
for($i=0;$i<15;$i++){(mysqli_query($con,$insert0));}
move_uploaded_file($image_location,'images/'.$image_name);   
header('location: login.php');
        
    }
    
}



?>

<!DOCTYPE html>
</html>
<head>
<title>
    create account </title>
<link rel="stylesheet" href="creat.css">
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
 






<div class="fares">
<div class="ayman">
<form action="create.php" method="post" enctype="multipart/form-data">
         <label style="color: #fff;" class="label" >create </label><br>      
         <input  type="text" name="username"   placeholder="username"     value="<?php echo @$NAME ?>" >
         <br>
         <input  type="text" name="email"    placeholder="your email"    value="<?php echo @$EMAIL?>"   >
         <br>
         <input  type="password" type="password" name="password" id="password" placeholder="password" value="<?php echo @$PASS?>" >  
         <br>
         <input  type="number" name="age"   placeholder="your age"   value="<?php echo @$AGE ?>"    >
         <br>
         <select name="gender"   title="gender choose male or female"  value="<?php echo @$SEX ?>" >
         <option disabled selected>sex</option>
         <option >male</option>
         <option >female</option>
        </select><br>
        <input type="file"  id="file" name="image" style="display: none;">
        <br>
       <label for="file" style="color:#fff;top:10px; font-size:12px; font-weight: 150px;    background-color: rgb(0, 0, 0);
        box-shadow:  1px 1px 4px rgb(0, 247, 255);
        margin-top: 20px;
        padding: 8px;
        border-radius: 5px;
        border: none;
        outline: none;
        transition: 6s;
        padding-left: 30;
        padding-right: 30;
        cursor: pointer;
        font-family: Arial, Helvetica, sans-serif;
         width: 100;">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;photo🙎‍♂️&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</label>
        <br>
        <button   type="submit" name="submit" id="submit" value="register">save </button>
        <h3 class="hh"><?php echo $error['name_h'] ?>   </h3>
        <h2> or</h2>
        <a href="http://localhost/aa/login.php"> i have account</a>
</form>
</div>
</div>
</body>