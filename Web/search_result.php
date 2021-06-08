<?php

session_start();
include("connection.php");

?>

<html>
  <title>RentCheck</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="CSS\index.css">
  <link rel="stylesheet" href="CSS\search_result.css">
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
     
      <!-- section --> 

          <div class="search_container">
             <h1 class="search_heading">Find Your Dream Place</h1>
             <div class="row">
              <div class="col-md-6">
                 <div>
                        <?php
                        if(isset($_POST['submit-search'])){
                            $purpose = mysqli_real_escape_string($con, $_POST['purpose']);
                            $location = mysqli_real_escape_string($con, $_POST['location']);
                            $sql = "SELECT * FROM property WHERE purpose LIKE '$purpose' AND location LIKE '$location'";
                            $result = mysqli_query($con,$sql);
                            $queryResult = mysqli_num_rows($result);
                            

                            if($queryResult > 0){
                              while($row = mysqli_fetch_assoc($result)){
                                echo "<div>
                                <h2> ".$row['title']."</h2>
                                <h3> ".$row['description']."</h3>
                                <h3> ".$row['purpose']."</h3>
                                <h3> ".$row['location']."</h3> <br> </br>
                                </div>";
                              }
                            }
                            else {
                                  echo "There Are No Results!";
                            }
                          }
                        ?>
                  </div>
              </div>
           </div>
         </div>
  </body>
</html>
