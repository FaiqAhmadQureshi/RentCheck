<?php

session_start();

include("connection.php");
include("functions.php");

//$user_data = check_login($con);


?>

<!DOCTYPE html>
<html lang="en">
<title>Rent History - RentCheck</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="CSS\index.css">
<link rel="stylesheet" href="CSS\complaint.css">
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
          <a href="index.php">SignOut</a>
        </div>
      </div>
  </div>
</div>


<!-- Header -->
<h1 class= "header">File A Complaint</h1>

<!-- First Grid -->
<div class="container">
  <form action="file_complaint.php" method="POST">

    <label for="ownerid" class="fname">Owner Id</label>
    <input type="text" id="fname" name="ownerid" placeholder="Owner id..">

    <label for="tenantid" class="fname">Tenant Id</label>
    <input type="text" id="lname" name="tenantid" placeholder="Tenant id..">

    <label for="propertyid" class="fname">Property ID</label>
    <input type="text" id="lname" name="propertyid" placeholder="Property id..">
    
    <label class="fname">Subject</label>
    <select>
      <option class="opacity">-- Subject --</option>
      <option value="australia">Property Damage</option>
      <option value="canada">Water Maintenance</option>
      <option value="usa">Electricity Maintenance</option>
    </select>

    <label for="complaint" class="fname">Complaint</label>
    <textarea id="subject" name="complaint" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" class="btn btn-primary" />

  </form>
</div>
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
