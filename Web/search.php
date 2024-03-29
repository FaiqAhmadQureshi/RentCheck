<?php

session_start();
include("connection.php");

?>

<html>
  <title>RentCheck</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="CSS\search.css">
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
          <a href="logout.php">SignOut</a>
        </div>
      </div>
  </div>
</div>

<!-- Header -->
<div class= "container">
  <img class= "head_img" src="IMG\pexels-min-an-1087727.jpg" alt="Front Page" style="opacity: 0.8">
  <div class="s01">
    <form position: relative; action="search_result.php" method="POST">
      <fieldset class="heading">
        <h1>Discover Your Perfect Place</h1>
      </fieldset>
      <div class="inner-form">
        <div class="input-field second-wrap">
          <input type="text" name="purpose" placeholder="Property For..." />
        </div>
        <div class="input-field third-wrap">
          <input type="text" name="location" placeholder="Location" />
        </div>
        <div class="input-field forth-wrap">
          <button type="submit" name="submit-search">Search</button>
        </div>
      </div>
    </form>
  </div>
    </div>
  </body>
</html>
