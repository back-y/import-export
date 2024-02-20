<?php

  include("includes/header.php");

?>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-lg-between">

    <h1 class="logo me-auto me-lg-0"><a href="home "> <span><img style="text-size: 1;"src="assets/img/purposeblackethiopia-full-white.png" alt=""></span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
        <li><a class="nav-link scrollto" href="home ">Home</a></li>
          <li><a class="nav-link scrollto" href="coffee ">Coffee</a></li>
          <li><a class="nav-link scrollto" href="our_packaging ">Our Packaging</a></li>
          <li><a class="nav-link scrollto" href="cereals_and_oil_seed ">Cereals and Oil Seed</a></li>
          <li><a class="nav-link scrollto " href="fruits_and_vegetable ">Fruits And Vegetable</a></li>
          <li><a class="nav-link scrollto " href="agro_process ">Agro-Process</a></li>
          
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#import-export" class="get-started-btn scrollto">Export & Import</a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Services Details</h2>
          <ol>
            <li><a href="home ">Home</a></li>
            <li><a><?php echo $pro_title; ?></a></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="admin_area/product_images/<?php echo $pro_img3; ?>" alt="">
                </div>

              </div>

              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="portfolio-info">
              <h3> <?php echo $pro_title; ?></h3>
              <ul>
                <li><strong>Category</strong>: <?php echo $pro_title; ?></li>
                <li><strong>Weight</strong>: <?php echo $pro_weight; ?> KG</li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Our Best Services Detail</h2>
              <p><?php echo $pro_desc; ?></p>
            </div>
          </div>

        </div>

      </div>
      <div class="text-center contact-us"> <a href="https://purposeblackethiopia.com/contact/"> <p class="btn"> Contact Us </p></a></div>
    </section><!-- End Portfolio Details Section -->

    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  
  <?php  
  
    include("includes/footer.php");
  
  ?>

  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>