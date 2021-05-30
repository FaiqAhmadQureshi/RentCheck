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
                $user_id = random_num(20);
                $query = "insert into users(user_id,user_name,password) values ('$user_id' , '$user_name' , '$password')";
                mysqli_query($con, $query);

                header("Location: login.php");
                die;
            }
            else{
                echo "Please Enter Valid Information";
            }
        }


?>

<html>
    <title>SignUp - RentCheck</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="CSS\index.css">
    <link rel="stylesheet" href="CSS\signup.css">
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
        <a href="Login.php" >Login</a>
      </div>
    </div>
  </div>
</div>

<!--Header-->
  <header style="padding:128px 16px">
    <form style="border:1px solid #ccc">
      <div class="container">
        <h1 class="fname">Sign Up</h1>
        <div class="imgcontainer">
          <img src="IMG\pngfuel.com.png" alt="Avatar" class="avatar">
        </div>
        <p>Please fill in this form to create an account.</p>
        <hr>
    
        <input id="text" type="text" name="user_name"> <br><br>
    
        <input id="text" type="password" name="password"> <br><br>
        
        <input id="button" type="submit" value="Signup"></button> <br><br>

      </div>
    </form>
  </header>

  <!-- Footer -->
<footer>  
  <div>
 <h5 class= "head5">
  <a href="index.php">RENTCHECK</a>
</h5>
 </div>
</footer>

    </body>
</html>