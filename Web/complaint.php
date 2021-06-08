<?php

session_start();

include("connection.php");

$query = "select * from complaint";

$result = mysqli_query($con,$query); 

if(isset($_POST['submit']))
{
  $owner_id = $_POST["owner_id"];
  $tenant_id = $_POST["tenant_id"];
  $property_id = $_POST["property_id"];
  $subject = $_POST["subject"];
  
	
    $query = "insert into complaint set owner_id='$owner_id', tenant_id='$tenant_id', property_id='$property_id', subject='$subject'";
	
    if($con->query($query)===TRUE){
        header("location:view_complaint.php");
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>

<!DOCTYPE html>
<html lang="en">
<title>File A Complaint - RentCheck</title>
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
          <a href="logout.php">SignOut</a>
        </div>
      </div>
  </div>
</div>


<!-- Header -->
<h1 class= "header">File A Complaint</h1>

<!-- First Grid -->
<div class="container">
  <form method="POST">

    <label for="ownerid" class="fname">Owner Id</label>
    <input type="text" name="owner_id" value="<?php echo $row['owner_id'] ?>" placeholder="Owner id..">

    <label for="tenantid" class="fname">Tenant Id</label>
    <input type="text" name="tenant_id" value="<?php echo $row['tenant_id'] ?>" placeholder="Tenant id..">

    <label for="propertyid" class="fname">Property ID</label>
    <input type="text"  name="property_id" value="<?php echo $row['property_id'] ?>" placeholder="Property id..">
    
    <label class="fname">Subject</label>
    <input type="text" name="subject" value="<?php echo $row['subject'] ?>" placeholder="Subject..">

    <input type="submit" name="submit" value="submit" class="btn btn-primary" />

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
