<?php
$pageTitle = "EEDC Project - Electricsol";
?>
<?php include "includes/header.php"; ?>
<?php include "includes/loader.php"; ?>

<!-- Navbar & Hero Start -->
<?php include "includes/nav.php"; ?>
<!-- Navbar & Hero End -->

<!-- Hero Section -->
<section class="py-5 text-white text-center position-relative" style="background: url('electricsol-img/power.jpg') center center / cover no-repeat; z-index: 1;">
  <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(1, 27, 89, 0.75); z-index: 2;"></div>
  
  <div class="container position-relative" style="z-index: 3;">
    <h1 class="display-4 text-white">EEDC Project</h1>
    <p class="lead">Boosting voltage supply through strategic load center deployment.</p>
  </div>
</section>

<!-- Project Details -->
<section class="py-5">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-8">
        <div id="eedcProjectCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
          <div class="carousel-inner rounded shadow" style="max-height: 450px;">
            <div class="carousel-item active">
              <img src="electricsol-img/eede_project.jpeg" class="d-block w-100 img-fluid object-cover" style="height: 450px; object-fit: cover;" alt="EEDC Project Image 1">
            </div>
            <div class="carousel-item">
              <img src="electricsol-img/eedc2.jpeg" class="d-block w-100 img-fluid object-cover" style="height: 450px; object-fit: cover;" alt="EEDC Project Image 2">
            </div>
            <div class="carousel-item">
              <img src="electricsol-img/eedc3.jpeg" class="d-block w-100 img-fluid object-cover" style="height: 450px; object-fit: cover;" alt="EEDC Project Image 3">
            </div>
          </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#eedcProjectCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#eedcProjectCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

        <h2 class="mb-3" style="color:#011b59;">PROJECT OVERVIEW</h2>
        <p>The EEDC Project in Nike area and its environs was initiated to combat chronic low voltage issues resulting from the distance of the nearest substation. Electricsol addressed this challenge by deploying a strategically located load center, bringing the power source closer to end-users.</p>

        <h4 class="mt-4" style="color:#011b59;">Problem Statement</h4>
        <p>Customers were experiencing low voltage, and those willing to pay were underserved due to the distant substation. The suppressed load also affected the Disco’s (Distribution Company) efficiency and customer connectivity.</p>

        <h4 class="mt-4" style="color:#011b59;">Our Recommendation</h4>
        <p>Establish a 1.75KVA substation (load center) closer to customers, reducing the distance and dropping higher voltage at the center of the load. This involved cutting lengthy lines and resolving the issue of suppressed load.</p>

        <h4 class="mt-4" style="color:#011b59;">Implementation</h4>
        <p>A 1.75 substation was successfully implemented, radiating 2 feeders from the central load point. The Residential clusters that previously had 150 volts in their sockets now received 230 volts after the project. The project also resolved suppressed load issues, leading to an additional 5000 customers being connected to the network.</p>

        <h4 class="mt-4" style="color:#011b59;">Impact</h4>
        <ul>
          <li>Improved voltage supply and power quality</li>
          <li>Restored customer confidence and willingness to pay</li>
          <li>Enhanced load management and energy accountability</li>
        </ul>
      </div>

      <div class="col-lg-4">
        <div class="bg-light p-4 rounded shadow-sm">
          <h5 class="mb-3">Project Details</h5>
          <ul class="list-unstyled">
            <li><strong>Client:</strong> Enugu Electricity Distribution Company</li>
            <li><strong>Location:</strong> Nike Area, Enugu</li>
            <li><strong>Scope:</strong> Voltage Stabilization, Substation Setup</li>
            <li><strong>Status:</strong> Completed</li>
          </ul>
        </div>
        <a href="projects" class="btn btn-outline-info mt-4 w-100">← Back to Projects</a>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<?php include "includes/footer.php"; ?>
