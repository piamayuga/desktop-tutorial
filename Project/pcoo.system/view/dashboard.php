<?php
session_start();
//return to login if not logged in
if (!isset($_SESSION['user']) || (trim($_SESSION['user']) == '')) {
  header('location:index.php');
}

include_once('../model/User.php');

$user = new User();

//fetch user data
$sql = "SELECT * FROM usertbl WHERE `employee_ID` = '" . $_SESSION['user'] . "'";
$row = $user->details($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Presidential Communications Operations Office</title>
  <!-- css -->
  <link rel="icon" href="images/pcoo_logo.png" type="image">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="res/bs-css/bootstrap.css">
  <link rel="stylesheet" href="res/dataTables/css/dataTables.bootstrap5.min.css">

  <!-- links -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
  <!-- sidebar -->
  <div class="sidebar">

    <div class="logo-details">
      <i class='icon'>
        <img src="images/pcoo_logo.png">
      </i>
      <div class="logo_name">PCOO</div>
      <i class='bx bx-menu' id="btn"></i>
    </div>

    <ul class="nav-list ">
      <!-- search bar -->
      <!-- <li>
        <i class='bx bx-search'></i>
        <input type="text" placeholder="Search...">
        <span class="tooltip">Search</span>
      </li> -->
      <!-- search bar -->

      <!-- links -->
      <li>
        <a href="dashboard.php" class="highlight">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
        <span class="tooltip">Dashboard</span>
      </li>

      <li>
        <a href="pds.html">
          <i class='bx bx-spreadsheet'></i>
          <span class="links_name">Personal Data Sheet</span>
        </a>
        <span class="tooltip">Personal Data Sheet</span>
      </li>

      <li>
        <a href="einfo.html">
          <i class='bx bx-user'></i>
          <span class="links_name">Employment Info</span>
        </a>
        <span class="tooltip">Employment Info</span>
      </li>

      <li>
        <a href="erecords.html">
          <i class='bx bx-folder'></i>
          <span class="links_name">Employment Records</span>
        </a>
        <span class="tooltip">Employment Records</span>
      </li>

      <li>
        <a href="request.html">
          <i class='bx bx-file-blank'></i>
          <span class="links_name">Request Form</span>
        </a>
        <span class="tooltip">Request Form</span>
      </li>

      <li>
        <a href="settings.html">
          <i class='bx bx-cog'></i>
          <span class="links_name">Settings</span>
        </a>
        <span class="tooltip">Settings</span>
      </li>
      <!-- links -->

      <li class="profile">
        <div class="profile-details">
          <img src="images/sample.png" alt="profileImg">
          <div class="name_job">
            <div class="name"></div>
            <div class="job">Secretary</div>
          </div>
        </div>

        <!-- location.href='index.html' -->
        <a href="../controller/logout.php"><i type="button" class='bx bx-log-out' id="log_out" onClick=""></i></a>

      </li>

    </ul>

  </div>
  <!-- sidebar -->

  <main class="home-section">
    <div class="text">Dashboard</div>

  </main>

  <!-- scripts -->
  <script src="js/script.js"></script>
  <script src="res/bs-js/bootstrap.bundle.js"></script>
  <script src="res/dataTables/js/jquery-3.5.1.js"></script>
  <script src="res/dataTables/js/jquery.dataTables.min.js"></script>
  <script src="res/dataTables/js/dataTables.bootstrap5.min.js"></script>
  <script src="res/dataTables/js/main.js"></script>

</body>

</html>