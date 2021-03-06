<?php
//start session
session_start();

//redirect if logged in
if (isset($_SESSION['user'])) {
  // header('location:dashboard.php');
  header('location:einfo.html');
}
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
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="res/bs-css/bootstrap.css">
  <!-- links -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>


  <main class="container-fluid p-lg-3 p-md-5">

    <div class="container row m-auto p-lg-3 mt-lg-3">

      <p class="mb-3 text-primary text-center fs-3">
        Presidential Communications Operations Office
      </p>
      <div class="d-flex justify-content-center">
        <img class="logo-img" src="images/pcoo_logo.png" height="100" alt="" srcset="">
      </div>

      <div class="col-lg-5 col-md-8 m-md-auto my-lg-0 my-3">
        <div class="row row-cols-1 justify-content-center align-items-center py-lg-3 px-lg-5">
          <div class="col">
            <h2 class="text-center">Sign In</h2>
          </div>

          <?php
          if (isset($_SESSION['message'])) {
          ?>
            <div class="alert alert-danger text-center mt-2 text-capitalize">
              <?php echo $_SESSION['message']; ?>
            </div>
          <?php
            unset($_SESSION['message']);
          }
          ?>

          <div class="col my-2">
            <form action="../controller/index_controller.php" method="POST" autocomplete="off">

              <div class="form-group my-1">
                <label class="text-label" for="username">Username</label>
                <input type="text" name="index_username" class="form-control" id="username" required autofocus>
              </div>

              <div class="form-group my-3">
                <label class="text-label" for="password">Password</label>
                <label for="showPassword" class="position-absolute fs-4 text-black-50" style="bottom:10px; right:15px;">
                  <i class='bx bx-low-vision' style="cursor: pointer;"></i>
                </label>
                <input type="password" name="index_password" class="form-control" id="password" required>
              </div>

              <input class="form-check-input d-none" type="checkbox" id="showPassword" onclick="showPass()">

              <div class="text-body px-3 d-flex justify-content-start">
                <a href="" class="text-black-50">Forgot Password?</a>
              </div>

              <div class="d-flex mt-5 justify-content-center">
                <button type="submit" name="login" class="button custom-btn"><span><span>Sign In</span></span></button>
              </div>

              <!-- <span class="d-block text-center my-3 text-muted">
                &mdash; <a href="#" class="text-primary"> Forgot Password? </a> &mdash;
              </span> -->

            </form>
          </div>

        </div>

      </div>

    </div>

  </main>
  <script src="js/login/jquery-3.3.1.min.js"></script>
  <script src="js/login/main.js"></script>
  <script src="js/script.js"></script>
  <script src="res/bs-js/bootstrap.bundle.js"></script>

</body>

</html>