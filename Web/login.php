<?php

  session_start();

  include("connection.php");
  include("functions.php");

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
      $user_name = $_POST ['user_name'];
      $password = $_POST ['password'];

      if(!empty($username) && !empty($password) && !is_numeric($user_name))
      {
          $query = "select * from users where user_name = '$user_name' limit 1";

          $result = mysqli_query($con, $query);

          if($result)
          {
              if($result && mysqli_num_rows($result) > 0){
                 $user_data = mysqli_fetch_assoc($result);
                 
                 if($user_data['password'] === $password)
                 {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: index.php");
                    die;
                 }                 
              }
          }


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

    <form>
        <div class="imgcontainer">
          <h1 class="fname">Login</h1>
          <img src="IMG\pngfuel.com.png" alt="Avatar" class="avatar">
        </div>
        <div class="logincontainer">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="user_name">
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password">
      
          <input id="button" type="submit" value="Login">
        </div>
      
        <div class="logincontainer" style="background-color:#f1f1f1">
          <button type="button" class="cancelbtn">Forgot password?</button>
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
