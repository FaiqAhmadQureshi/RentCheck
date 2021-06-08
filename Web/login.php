<?php

  session_start();

  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
  include("connection.php");

  $user_name = $_POST['user_name'];
  $password = $_POST['password'];

  $user_name = stripcslashes($user_name);
  $password = stripcslashes($password);
  $user_name = mysqli_real_escape_string($con ,$user_name);
  $password = mysqli_real_escape_string($con , $password);

  $result = mysqli_query($con ,"select * from users where user_name = '$user_name' and password = '$password'")
            or die("Failed to query database" .sql_error());
  $row = mysqli_fetch_array($result);
  if($row['user_name'] == $user_name && $row['password'] == $password){
  header('Location: index.php');
  die; 
}         
else{
  echo "Please Enter Valid Information";
}
}
?>

<html>
<title>Login - RentCheck</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="CSS\index.css">
<link rel="stylesheet" href="CSS\login.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>

<!-- Navbar -->
<div class="topnav">
  <a href="index.php" >Home</a>
  <div class="topnav-right">
  <div class="dropdown">
    <button class="dropbtn">Account
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
        <a href="signup.php">SignUp</a>
      </div>
    </div>
  </div>
</div>

<!--Body-->

  <header style="padding:18px 16px">

    <form method="POST">
        <div class="imgcontainer">
          <h1 class="fname">Login</h1>
          <img src="IMG\pngfuel.com.png" alt="Avatar" class="avatar">
        </div>
        <div class="logincontainer">
          <label for="user_name"><b>Username</b></label>
          <input id="user_name" type = "text" name = "user_name" class = "box"/>

          <label for="password"><b>Password</b></label>
          <input id="password" type = "password" name = "password" class = "box" />   
             
          <input type="submit" name="login" value="Login" class="btn btn-primary">
          
        </div>
      
      </form>

    </header>

<!-- Footer -->
<footer>  
  <div>
 <h5 class= "head5">
  <a href="index.html">RENTCHECK</a>
</h5>
 </div>
</footer>

</body>
    
</html>
