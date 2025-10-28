<?php
$pageTitle = "Stavian Project - Electricsol";
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
    <h1 class="display-4 text-white">STAVIAN Project</h1>
    <p class="lead">Delivering uninterrupted, high-capacity power for industrial operations.</p>
  </div>
</section>

<!-- Project Details -->
<section class="py-5">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-8">
        <div id="stavianProjectCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
          <div class="carousel-inner rounded shadow" style="max-height: 450px;">
            <div class="carousel-item active">
              <img src="electricsol-img/stavian_project.jpeg" class="d-block w-100 img-fluid object-cover" style="height: 450px; object-fit: cover;" alt="STAVIAN Project Image 1">
            </div>
            <div class="carousel-item">
              <img src="electricsol-img/stavian2.jpeg" class="d-block w-100 img-fluid object-cover" style="height: 450px; object-fit: cover;" alt="STAVIAN Project Image 2">
            </div>
            <div class="carousel-item">
              <img src="electricsol-img/stavian3.jpeg" class="d-block w-100 img-fluid object-cover" style="height: 450px; object-fit: cover;" alt="STAVIAN Project Image 3">
            </div>
          </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#stavianProjectCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#stavianProjectCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

        <h2 class="mb-3" style="color:#011b59;">PROJECT OVERVIEW</h2>
        <p>The STAVIAN Project addressed the lack of reliable power supply for a company requiring uninterrupted power. The client needed high power reliability for operating heavy machinery and conducting a business that demanded a consistent power supply.</p>

        <h4 class="mt-4" style="color:#011b59;">Problem Statement</h4>
        <p>The client faced power shortages and unreliable supply, impacting the operation of heavy machinery and overall business continuity.</p>

        <h4 class="mt-4" style="color:#011b59;">Our Recommendation</h4>
        <p>Acquire eligibility customer license, sign power purchasing agreements, and draw power lines to the community. Conduct Corporate Social Responsibility (CSR) activities to ensure customers in the community are metered.</p>

        <h4 class="mt-4" style="color:#011b59;">Implementation</h4>
        <p>Licenses were obtained, power lines were drawn to the community, and a CSR initiative ensured customer metering. The client and the community benefited from improved power reliability.</p>

        <h4 class="mt-4" style="color:#011b59;">Impact</h4>
        <ul>
          <li>Achieved 99.99% uptime for the client</li>
          <li>Reduced equipment downtime and maintenance cost</li>
          <li>Enabled smooth industrial processes and production</li>
        </ul>
      </div>

      <div class="col-lg-4">
        <div class="bg-light p-4 rounded shadow-sm">
          <h5 class="mb-3">Project Details</h5>
          <ul class="list-unstyled">
            <li><strong>Client:</strong> Stavian Industries</li>
            <li><strong>Location:</strong> Lagos, Nigeria</li>
            <li><strong>Scope:</strong> Industrial Power, Redundancy</li>
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
