<?php 

session_start();

include("connection.php");
include("functions.php");

//$user_data = check_login($con);


?>

<!DOCTYPE html>
<html lang="en">
<title>RentCheck</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="CSS\index.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>

<!-- Navbar -->
<div class="topnav">
    <a href="index.php" >Home</a>
    <div class="dropdown">
      <button class="dropbtn">Rent
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="rent_history.php">Rent History</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">Complaint
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="view_complaint.php">View Complaints</a>
        <a href="complaint.php">File Complaint</a>  
      </div>
    </div>
    <div class="topnav-right">
      <a href="search.php" >Search Now</a>
      <div class="dropdown">
        <button class="dropbtn">Account
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="logout.php">Sign Out</a>
          </div>
        </div>
    </div>
    </div>


<!-- Header -->
<div class= "container">
  <img class= "head_img" src="IMG\pexels-min-an-1087727.jpg" alt="Front Page" style="opacity: 0.8">
  <h1 class="centered" >RentCheck</h1>
  <p class="sub_text"> Rent Management Became Easier 
  </p>
</div>

</body>
</html>
