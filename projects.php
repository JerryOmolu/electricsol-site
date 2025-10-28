<?php
$pageTitle = "Projects - Electricsol";
?>
<?php include "includes/header.php"; ?>
<?php include "includes/loader.php"; ?>
       

        <!-- Navbar & Hero Start -->
<?php include "includes/nav.php"; ?>        
        <!-- Navbar & Hero End -->


        <!-- Header Start -->
        <!-- Project Breadcrumb Section Start -->
<div class="container-fluid bg-breadcrumb position-relative">
  <!-- Overlay for readability -->
  <div class="position-absolute top-0 start-0 w-100 h-100" 
       style="background: rgba(1, 27, 89, 0.6); z-index: 1;">
  </div>

  <div class="container text-center py-5 position-relative" style="max-width: 900px; z-index: 2;">
    <!-- Animated Heading -->
    <h4 class="text-white display-4 fw-bold mb-3 wow fadeInDown" data-wow-delay="0.1s" 
        style="text-shadow: 1px 1px 3px rgba(0,0,0,0.5);">
      Our Projects
    </h4>

    <!-- Subheading -->
    <p class="text-white-50 mb-4 wow fadeInUp" data-wow-delay="0.2s" 
       style="font-size: 1.1rem;">
      Discover the groundbreaking energy and infrastructure projects transforming Africa with Electricsol.
    </p>

    <!-- Breadcrumb -->
    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInUp" data-wow-delay="0.3s">
      <li class="breadcrumb-item">
        <a href="index" class="text-decoration-none text-light">Home</a>
      </li>
      <li class="breadcrumb-item active text-warning">Project</li>
    </ol>
  </div>
</div>
<!-- Project Breadcrumb Section End -->

        <!-- Header End -->


        <!-- Projects Start -->
<?php include "includes/projects-page.php"; ?>
        <!-- Projects End -->

<!-- Dlownload Start -->
<?php include "includes/download.php"; ?>

        <!-- Footer Start -->
<?php include "includes/footer.php"; ?>       