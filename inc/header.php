<?php 
include "dbconnect.php";
session_start();

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: index.php"); // Redirect to login page if not logged in
    exit();
}

// Retrieve username from session
$username = $_SESSION['username'];

// Fetch user details from database
$sql = "SELECT * FROM user WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // User found, fetch details
    $row = $result->fetch_assoc();
    $id = $row['Id'];
    $name = $row['name'];
    $email = $row['email'];
    $curr_amount = $row['current_amount'];
    $current_amount = number_format($curr_amount, 2);
    $level = $row['level'];
    $date_registered = $row['date_registered'];
}

 $stmt->close(); 
?>    

<!DOCTYPE html>
<html lang="en">

<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DCU - Digital Credit Union Landing</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="dashboard">

<div id="main-wrapper">


   <div class="header">
    <div class="container">
       <div class="row">
          <div class="col-xxl-12">
             <div class="header-content">
                <div class="header-left">
                   <div class="brand-logo"><a class="mini-logo" href="index.php"><img src="images/web-mag.png" alt="" width="100"></a></div>
                   <!-- <div class="search">
                      <form action="#">
                         <div class="input-group"><input type="text" class="form-control" placeholder="Search Here"><span class="input-group-text"><i class="ri-search-line"></i></span></div>
                      </form>
                   </div>--> 
                </div>
                <div class="header-right">
                   <div class="dark-light-toggle"><span class="dark"><i class="ri-moon-line"></i></span><span class="light"><i class="ri-sun-line"></i></span></div>
                   
                   <div class="dropdown profile_log dropdown">
                      <div data-toggle="dropdown" aria-haspopup="true" class="" aria-expanded="false">
                         <div class="user icon-menu active"><span><i class="ri-user-line"></i></span></div>
                      </div>
                      <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu dropdown-menu-right">
                         <div class="user-email">
                            <div class="user">
                               <span class="thumb"><img src="images/profile/3.png" alt=""></span>
                               <div class="user-info">
                                  <h5><?php  echo $name; ?> </h5>
                                  <span><?php  echo $email; ?> </span>
                               </div>
                            </div>
                         </div>
                         <a class="dropdown-item" href="profile.php"><span><i class="ri-user-line"></i></span>Profile</a>
                         <a class="dropdown-item" href="dashboard.php"><span><i class="ri-wallet-line"></i></span>Balance</a>
                         <a class="dropdown-item" href="settings-profile.php"><span><i class="ri-settings-3-line"></i></span>Settings</a>
                         <a class="dropdown-item" href="activities.php"><span><i class="ri-time-line"></i></span>Transaction History</a>
                         <a class="dropdown-item logout" href="../logout.php"><i class="ri-logout-circle-line"></i>Logout</a>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
