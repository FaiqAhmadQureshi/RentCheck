<?php

    session_start();

        include("connection.php");
        include("functions.php");

        $query = "select * from complaint";

$result = mysqli_query($con,$query); 

if(isset($_POST['signup']))
{
            $user_name = $_POST ['user_name'];
            $password = $_POST ['password'];
            

            $query = "insert into users set user_name='$user_name', password='$password'";
	
    if($con->query($query)===TRUE){
        header("location:login.php");
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>

<!DOCTYPE html>
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
    <form style="border:1px solid #ccc" method="post">
      <div class="container">
        <h1 class="fname">Sign Up</h1>
        <div class="imgcontainer">
          <img src="IMG\pngfuel.com.png" alt="Avatar" class="avatar">
        </div>
        <label>Please fill in this form to create an account.</label>
        <hr>

    <form method="POST">

    <label for="username" class="fname">Enter Username</label>
    <input type="text" name="user_name" value="<?php echo $row['user_name'] ?>" placeholder="Username">

    <label for="password" class="fname">Enter Password</label>
    <input type="text" name="password" value="<?php echo $row['password'] ?>" placeholder="Password">

    <input type="submit" name="signup" value="Signup" class="btn btn-primary" />

  </form>

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
