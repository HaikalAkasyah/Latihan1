<?php
include ("connect.php");

// Assuming you have a session variable that stores the username when the user is logged in
session_start();
$userLoggedIn = isset($_SESSION['username']) ? $_SESSION['username'] : null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Planet</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/icon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="about.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Planet Futsal<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="home.php" class="active">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="boking.php">Booking</a></li>
          <li class="dropdown"><a href="#"><span>Lapangan</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="lapangan1.html">Jadwal Lapangan 1</a></li>
              <li><a href="lapangan2.html">Jadwal Lapangan 2</a></li>
            </ul>
            <li class="dropdown"><a href="#"><span><?php echo $userLoggedIn ? $userLoggedIn : 'account'; ?></span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
        <ul>
          <?php if ($userLoggedIn) { ?>
            <li><a href="#"><?php echo $userLoggedIn; ?></a></li>
            <!-- Add a logout link or button here -->
            <li><a href="logout.php">Logout</a></li>
          <?php } else { ?>
            <li><a href="login.php" id="loginLink">Login</a></li>
            <li><a href="registrasi.php">Register</a></li>
          <?php } ?>
        </ul>
      </li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down">Selamat Datang Di <span>Planet Futsal</span></h2>
            <p data-aos="fade-up"></p>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/Background-Slide-4.jpeg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/Background-Slide-2.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/Background-Slide-1.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/Background-slide-3.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/Background-Slide-5.jpeg)"></div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Get Started Section ======= -->
    <!-- End Get Started Section -->

    <!-- ======= Constructions Section ======= -->
    <!-- End Constructions Section -->

    <!-- ======= Services Section ======= -->
    <!-- End Services Section -->

    <!-- ======= Alt Services Section ======= -->
    <!-- End Alt Services Section -->

    <!-- ======= Features Section ======= -->
    <!-- End Features Section -->

    <!-- ======= Our Projects Section ======= -->
    <!-- End Our Projects Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- End Testimonials Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <!-- End Recent Blog Posts Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- End Footer -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>