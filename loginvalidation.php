<?php
session_start();
$insert=false;
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);
mysqli_select_db($con,'maa ki rasoi');
$email = $_POST['email'];
$password  =  $_POST['password'];
$s="SELECT * FROM validate WHERE  email='$email' && password='$password' ";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1)
{   $_SESSION['email']=$email;
    header('location:index.php');
}
else{
    $insert=true;
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" href="images/foodie3.jpg " type="image-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet"> <!-- navbar -->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
<div class="content" style="display: flex;padding: 90px;">
<div class="image">
      <img src="chef2.jpg" alt="">
    </div>
    <div class="container">
    <?php
   
    if($insert==true)
    {    echo '<p style font-face:"bold">You entered incorrect email id or password ...Try again </p>';
        echo '<a href="login.php">Login Here</a>';
        
    }

   
?>
<p id="register" style="color: black;margin-top: 10px;">Don't have an account?<a href="register.php"> Register here</a></p>
    </div>

</div>
</body>
</html>

