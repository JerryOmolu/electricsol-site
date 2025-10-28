<?php
$pageTitle = "Services - Electricsol";
?>
<?php include "includes/header.php"; ?>
<?php include "includes/loader.php"; ?>
       

        <!-- Navbar & Hero Start -->
<?php include "includes/nav.php"; ?>        
        <!-- Navbar & Hero End -->


        <!-- Header Start -->
        <!-- Services Breadcrumb Section Start -->
<div class="container-fluid bg-breadcrumb position-relative">
  <!-- Overlay -->
  <div class="position-absolute top-0 start-0 w-100 h-100" 
       style="background: rgba(1,27,89,0.65); z-index: 1;"></div>

  <div class="container text-center py-5 position-relative" style="max-width: 900px; z-index: 2;">
    <!-- Page Title -->
    <h4 class="display-4 fw-bold text-white mb-3 wow fadeInDown" data-wow-delay="0.1s" 
        style="text-shadow: 1px 1px 3px rgba(0,0,0,0.4);">
      Our Services
    </h4>

    <!-- Breadcrumb -->
    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInUp" data-wow-delay="0.3s" 
        style="background: transparent; padding: 0; margin: 0;">
      <li class="breadcrumb-item">
        <a href="index" class="text-white text-decoration-none">Home</a>
      </li>
      <li class="breadcrumb-item active text-info fw-semibold">Service</li>
    </ol>
  </div>
</div>
<!-- Services Breadcrumb Section End -->

<!-- Custom Styles -->
<style>
  .bg-breadcrumb {
    background: url('electricsol-img/solar.jpg') center/cover no-repeat;
    position: relative;
    min-height: 300px;
    display: flex;
    align-items: center;
  }
  .breadcrumb .breadcrumb-item + .breadcrumb-item::before {
    color: #fff;
  }
  .breadcrumb a:hover {
    color: #176FFF !important;
  }
</style>

        <!-- Header End -->


        <!-- Services Start -->
<?php include "includes/services.php"; ?>
        <!-- Services End -->

        

        <!-- Testimonial Start -->
<?php include "includes/testimonial.php"; ?>         
        <!-- Testimonial End -->

        <!-- Banner Start -->
<?php include "includes/banner.php"; ?>        
        <!-- Banner End -->

<!-- Download Start -->
<?php include "includes/download.php"; ?>

        <!-- Footer Start -->
<?php include "includes/footer.php"; ?>