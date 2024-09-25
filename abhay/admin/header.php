<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">TRIP ESSENSE</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <!-- <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i> -->
            <!-- <span class="badge bg-primary badge-number">4</span> -->
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              
              
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <>
            </li>

            <

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

<!-- <a class="nav-link nav-icon" href="https://wa.me/9605595165" >
  <i class="bi bi-chat-left-text"></i>
  <span class="badge bg-success badge-number">3</span> -->
</a><!-- End Messages Icon -->

        
       

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">ADMIN</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Abhay</h6>
              <span>Admin</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Log Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
      <a class="nav-link " href="add_foodmenu.php">
          <i class="bi bi-menu-button-wide"></i><span>ADD FOOD</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link " href="add_itinerary.php">
          <i class="bi bi-menu-button-wide"></i><span>Add ITINERARY</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        
      </li><!-- End Components Nav -->

      <li class="nav-item">
      <a class="nav-link " href="add_tour_packages.php">
          <i class="bi bi-menu-button-wide"></i><span>ADD TOUR PACKAGES</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        
      </li><!-- End Components Nav -->
      
      <li class="nav-item">
      <a class="nav-link " href="add_tourist_place.php">
          <i class="bi bi-menu-button-wide"></i><span>ADD TOURIST PLACE</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        
      </li><!-- End Components Nav -->
      <li class="nav-item">
      <a class="nav-link " href="add_vehicles.php">
          <i class="bi bi-menu-button-wide"></i><span>ADD VEHICLES</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>

        </li><!-- End Components Nav -->

      <li class="nav-item">
      <a class="nav-link " href="add_blog.php">
          <i class="bi bi-menu-button-wide"></i><span>ADD BLOG</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        
        
      </li><!-- End Components Nav -->
      <li class="nav-item">
      <a class="nav-link " href="view_foodmenu.php">
          <i class="bi bi-menu-button-wide"></i><span>VIEW FOODMENU</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        
      </li><!-- End Components Nav -->

      <li class="nav-item">
      <a class="nav-link " href="view_itenerary.php">
          <i class="bi bi-menu-button-wide"></i><span>VIEW ITINERARY</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        
      </li><!-- End Components Nav -->
      <li class="nav-item">
      <a class="nav-link " href="view_tourpackages.php">
          <i class="bi bi-menu-button-wide"></i><span>VIEW TOUR PACKAGES</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        
      </li><!-- End Components Nav -->
      <li class="nav-item">
      <a class="nav-link " href="view_tourplace.php">
          <i class="bi bi-menu-button-wide"></i><span>VIEW TOUR PLACES</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        
      </li><!-- End Components Nav -->
      <li class="nav-item">
      <a class="nav-link " href="view_vehicle.php">
          <i class="bi bi-menu-button-wide"></i><span>VIEW VEHICLE</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>

          
      </li><!-- End Components Nav -->
      <li class="nav-item">
      <a class="nav-link " href="view_blog.php">
          <i class="bi bi-menu-button-wide"></i><span>VIEW BLOG</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>

        </li><!-- End Components Nav -->
      <li class="nav-item">
      <a class="nav-link " href="view_testimonial.php">
          <i class="bi bi-menu-button-wide"></i><span>VIEW TESTIMONIAL</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        
        </li><!-- End Components Nav -->
      <li class="nav-item">
      <a class="nav-link " href="viewbooking.php">
          <i class="bi bi-menu-button-wide"></i><span>VIEW BOOKING</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        
      
        
      </li><!-- End Components Nav -->
  </aside><!-- End Sidebar-->