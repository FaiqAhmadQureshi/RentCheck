<?php

session_start();

include("connection.php");
$query = "select * from rent_history";
$result=mysqli_query($con,$query);


?>

<!DOCTYPE html>
<html lang="en">
<title>Rent History - RentCheck</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="CSS\index.css">
<link rel="stylesheet" href="CSS\rent_history.css">
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
<h2 class= "header">Rent History</h2>
<table>
  <tr>
    <th>PropertyID</th>
    <th>TenantID</th>
    <th>Due Date</th>
    <th>Status</th>
  </tr>
  <?php
  while($rows=mysqli_fetch_assoc($result))
  {
    ?>
    <tr>
    <td><?php echo $rows['property_id']; ?></td>
    <td><?php echo $rows['tenant_id']; ?></td>
    <td><?php echo $rows['due_date']; ?></td>
    <td><?php echo $rows['status']; ?></td>
    </tr>
    <?php
  }
  ?>
</table>

<!-- Footer -->
<footer>  
    <div>
   <h5 class= "head5">
    <a href="new_index.php">RENTCHECK</a>
</h5>
   </div>
  </footer>

</body>
</html>
