<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bethany Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/acca73d133.js" crossorigin="anonymous"></script><script src="https://kit.fontawesome.com/acca73d133.js" crossorigin="anonymous"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bethany
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center justify-content-between">
        <div class="logo">
          <h1 class="text-light"><a href="index.html"><span>TRIPESSENCE</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
          <ul>
          <?php
          if(isset($_SESSION['uid']))
          {
            echo "<li class='nav-item'><a lass='nav-link' href='index.php'>Home</a></li>";
            echo "<li class='nav-item'><a lass='nav-link'>".$_SESSION['name']."</a></li>";
            
            echo "<li class='nav-item'><a class='nav-link' href='viewpackage.php'>Packages</a></li>";
            echo "<li class='nav-item'><a class='nav-link' href='viewplaces.php'>Places</a></li>";
            echo "<li class='nav-item'><a class='nav-link' href='view_vehicle.php'>Vehicle</a></li>";
            echo "<li class='nav-item'><a class='nav-link' href='view_food.php'>Food</a></li>";
            echo "<li class='nav-item'><a class='nav-link' href='view_itinerary.php'>Itinary</a></li>";
            echo "<li class='nav-item'><a class='nav-link' href='view_testimonial.php'>Testimonials</a></li>";
            echo "<li class='nav-item'><a class='nav-link' href='logout.php'>Logout</a></li>";
          }else{
            
            echo "<li class='nav-item'><a class='nav-link' href='userreg.php'>Register</a></li>";
            echo "<li class='nav-item'><a class='nav-link' href='login.php'>Login</a></li>";

          }
          ?>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div><!-- End Header Container -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1>Let's travel the world together</h1>
      <h2>“Jobs fill your pocket, but adventures fill your soul.” – Jamie Lyn Beatty</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->
