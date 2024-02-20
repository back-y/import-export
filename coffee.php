<?php

  include("includes/header.php");

?>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="home "> <span><img src="assets/img/purposeblackethiopia-full-white.png" alt=""></span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
        <li><a class="nav-link scrollto" href="home ">Home</a></li>
          <li><a class="nav-link scrollto active" href="coffee ">Coffee</a></li>
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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero" >
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox"> <!-- carousel-inner begin-->



          <?php

            $get_slides = "select * from slider_co LIMIT 0,1";

            $run_slides = mysqli_query($con,$get_slides);

            while($row_slides = mysqli_fetch_array($run_slides)){

              $slide_name = $row_slides['slide_name'];
              $slide_image = $row_slides['slide_image'];
              $title = $row_slides['title'];
              $para = $row_slides['para'];

              echo "
              
                  
                    <div class='carousel-item active' style='background-image: url(assets/img/slide/co/$slide_image)'>
                      
                    </div>
              
                  ";
              }

          

              $get_slides = "select * from slider_co LIMIT 1,3";

              $run_slides = mysqli_query($con,$get_slides);
  
              while($row_slides = mysqli_fetch_array($run_slides)){
  
                $slide_name = $row_slides['slide_name'];
                $slide_image = $row_slides['slide_image'];
                $title = $row_slides['title'];
                $para = $row_slides['para'];
  
                echo "
                
                    
                      <div class='carousel-item' style='background-image: url(assets/img/slide/co/$slide_image)'>
                       
                      </div>
                
                    ";
                }
            
          ?>

      </div><!-- carousel-inner end -->

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->


  <main id="main">

   

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Coffee</h2>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

          

          <div class="row gy-4 portfolio-container">

            <?php getProCoffee();?>
            
          </div><!-- End Portfolio Container -->

        </div>

        
      </div>
    </section><!-- End Portfolio Section -->

    
     <!-- ======= Contact Section ======= -->
     <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>
        <div>
        <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.54156898562!2d38.745511714636095!3d9.014260491702021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b85af85c2c629%3A0x41b0831f5ff82fc8!2sPURPOSE%20BLACK%20ETHIOPIA%20OFFICE!5e0!3m2!1sen!2set!4v1679916741362!5m2!1sen!2set" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        </div>

        <div class="row mt-5">

        <div class="row mt-5">

          <div class="col-lg-4">
          <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Located in: Sengatera Trader SC Building 5<sup>th</sup> Floor</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>import@purposeblack.et</p>
                <p>export@purposeblack.et</p>
                <br>
                <i class="bi bi-envelope"></i>
                <h4>Gmail:</h4>
                <p> exportpbeth@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call: What'sup / Telegram</h4>
                <p>+2519-4356-6220</p>
              </div>
              <div class="phone">
                <i class="bi bi-linkedin"></i>
                <h4>LinkedIn:</h4>
                <p><a href="#" style="color:blue">purpose black export&import</a></p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact " method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  


  <?php
     
     include("includes/footer.php");

     ?>

  

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






  <!-- Vendor JS Files -->
  <script src="assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->






  <!-- Vendor JS Files -->
  <script src="assets/assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/assets/assets/vendor/aos/aos.js"></script>
  <script src="assets/assets/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/assets/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/assets/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/assets/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/assets/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/assets/assets/js/main.js"></script>




</body>

</html>