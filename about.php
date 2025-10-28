<?php
$pageTitle = "About Us - Electricsol";
?>

<?php include "includes/header.php"; ?>
<?php include "includes/loader.php"; ?>
       

        <!-- Navbar & Hero Start -->
<?php include "includes/nav.php"; ?>        
        <!-- Navbar & Hero End -->


        <!-- Header Start -->
        <!-- About Us Hero Section Start -->
<div class="container-fluid bg-breadcrumb position-relative d-flex align-items-center" 
     style="background: url('electricsol-img/art2.jpg') center/cover no-repeat; min-height: 300px;">

  <!-- Dark overlay for readability -->
  <div class="position-absolute top-0 start-0 w-100 h-100" 
       style="background: rgba(1, 27, 89, 0.7); z-index: 1;"></div>

  <!-- Content -->
  <div class="container text-center py-5 position-relative" style="max-width: 900px; z-index: 2;">
    <h4 class="text-white display-4 fw-bold mb-3 wow animate__animated animate__fadeInDown" data-wow-delay="0.2s">
      About Us
    </h4>

    <!-- Breadcrumb -->
    <ol class="breadcrumb justify-content-center mb-0 wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
      <li class="breadcrumb-item">
        <a href="index" class="text-white-50 text-decoration-none">Home</a>
      </li>
      <li class="breadcrumb-item active text-info fw-semibold" aria-current="page">About</li>
    </ol>
  </div>
</div>
<!-- About Us Hero Section End -->

<!-- Extra Styling -->
<style>
.breadcrumb-item + .breadcrumb-item::before {
  color: #fff !important; /* White divider for better contrast */
}
.bg-breadcrumb h4 {
  text-shadow: 1px 2px 4px rgba(0,0,0,0.4);
}
</style>

        <!-- Header End -->


        <!-- About Start -->
<?php include "includes/about.php"; ?>

        <!-- About End -->

<!-- Mission, Vision & Values Start -->
<div class="container py-5">
  <!-- Section Heading -->
  <div class="text-center mb-5">
    <h1 class="display-5 fw-semibold wow fadeInUp" data-wow-delay="0.3s" style="color:#011b59;">
      Who We Are, What Drives Us & Core Values
    </h1>
    <p class="text-muted wow fadeInUp" data-wow-delay="0.5s" style="max-width: 700px; margin: auto;">
      At Electricsol, we are committed to transforming Africa’s energy landscape with sustainable, reliable, and innovative solutions.
    </p>
  </div>

  <!-- Cards Row -->
  <div class="row g-4">
    <!-- Who We Are -->
    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
      <div class="info-card text-center p-4 rounded-3 shadow-sm h-100 bg-mission">
        <div class="icon-wrapper mb-3">
          <i class="fas fa-bullseye fa-3x"></i>
        </div>
        <h4 class="fw-bold mb-3">Who We Are</h4>
        <hr class="mx-auto" style="width:60px; border-top:3px solid #fff;">
        <p>
          Electricsol is an award-winning energy infrastructure and project development company specializing in renewable, gas-fired, and smart grid power solutions. We tackle Africa’s unique electricity access challenges with creativity and purpose.
        </p>
      </div>
    </div>

    <!-- What Drives Us -->
    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.4s">
      <div class="info-card text-center p-4 rounded-3 shadow-sm h-100 bg-vision">
        <div class="icon-wrapper mb-3">
          <i class="fas fa-eye fa-3x"></i>
        </div>
        <h4 class="fw-bold mb-3">What Drives Us</h4>
        <hr class="mx-auto" style="width:60px; border-top:3px solid #fff;">
        <p>
          Our team wakes up energized by our goal of sustainably meeting Africa’s growing power demands. By embracing the latest technologies and environmentally responsible practices, we empower growth and prosperity from Cape to Cairo!
        </p>
      </div>
    </div>

    <!-- Core Values -->
    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.6s">
      <div class="info-card text-center p-4 rounded-3 shadow-sm h-100 bg-values">
        <div class="icon-wrapper mb-3">
          <i class="fas fa-star fa-3x"></i>
        </div>
        <h4 class="fw-bold mb-3">Our Core Values</h4>
        <hr class="mx-auto" style="width:60px; border-top:3px solid #fff;">
        <ul class="list-unstyled mt-3">
          <li><i class="fas fa-check-circle me-2"></i> Integrity</li>
          <li><i class="fas fa-check-circle me-2"></i> Innovation</li>
          <li><i class="fas fa-check-circle me-2"></i> Sustainability</li>
          <li><i class="fas fa-check-circle me-2"></i> Customer Focus</li>
          <li><i class="fas fa-check-circle me-2"></i> Excellence</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Custom Styles -->
<style>
.info-card {
  color: #fff;
  transition: all 0.4s ease;
  position: relative;
  overflow: hidden;
}
.info-card .icon-wrapper {
  background: rgba(255, 255, 255, 0.15);
  width: 80px; height: 80px;
  display: flex; align-items: center; justify-content: center;
  border-radius: 50%;
  margin: auto;
  transition: transform 0.3s ease;
}
.info-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 10px 25px rgba(0,0,0,0.3);
}
.info-card:hover .icon-wrapper {
  transform: scale(1.1);
  background: rgba(255, 255, 255, 0.25);
}
.bg-mission { background: linear-gradient(135deg, #011b59, #0a2a70); }
.bg-vision  { background: linear-gradient(135deg, #176FFF, #0c4db3); }
.bg-values  { background: linear-gradient(135deg, #0b3052, #022038); }
.info-card p, .info-card ul li {
  color: #eaeaea;
}
</style>

<!-- Mission, Vision & Values End -->

        <!-- Banner Start -->
<?php include "includes/banner.php"; ?>         
        <!-- Banner End -->

        <!-- Projects Start -->
<?php include "includes/projects.php"; ?> 
        <!-- Projects End -->

<!-- Team Start -->
<?php include "includes/team.php"; ?> 
        <!-- Team End -->

  <!-- Partners Start -->
<?php include "includes/partners.php"; ?> 
        <!-- Partners End -->

<!-- Dlownload Start -->
<?php include "includes/download.php"; ?>
        
        <!-- Footer Start -->
<?php include "includes/footer.php"; ?>        