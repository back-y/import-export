<?php

  include("includes/db.php");
  include("functions/functions.php");

?>


<?php

  if(isset($_GET['pro_id'])){

    $product_id = $_GET['pro_id'];

    $get_product = "select * from products where product_id='$product_id'";

    $run_product = mysqli_query($con,$get_product);

    $row_product = mysqli_fetch_array($run_product);

    $pro_id = $row_product['product_id'];

    $pro_cat = $row_product['p_cat_id'];

    $pro_title = $row_product['product_title'];

    $pro_desc = $row_product['product_desc'];

    $pro_price = $row_product['product_price'];

    $pro_weight = $row_product['product_weight'];
    
    $pro_unit = $row_product['product_unit'];
    
    $pro_desc = $row_product['product_desc'];

    $pro_img1 = $row_product['product_img1'];

    $pro_img2 = $row_product['product_img2'];

    $pro_img3 = $row_product['product_img3'];

  }


?>








<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Purpose-Black-sample-page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">







 <!-- Favicons -->


 <!-- Vendor CSS Files -->
 

 <!-- Template Main CSS File -->






 <!-- Google Fonts -->
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

 <!-- Vendor CSS Files -->
 <link href="assets/assets/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <link href="assets/assets/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
 <link href="assets/assets/assets/vendor/aos/aos.css" rel="stylesheet">
 <link href="assets/assets/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
 <link href="assets/assets/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

 <!-- Template Main CSS File -->
 






<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="assets/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
<link href="assets/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="assets/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="assets/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<!-- Template Main CSS File -->
  <!--<link href="assets/assets/css/style.css" rel="stylesheet">-->




  

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

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>