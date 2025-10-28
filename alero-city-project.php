<?php
$pageTitle = "Alero Project - Electricsol";
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
    <h1 class="display-4 text-white">The Alero City Project</h1>
    <p class="lead">Powering Lekki Free Trade Zone with a smart, independent network.</p>
  </div>
</section>

<!-- Project Details -->
<section class="py-5">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-8">
        <div id="aleroProjectCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
          <div class="carousel-inner rounded shadow" style="max-height: 450px;">
  <div class="carousel-item active">
    <img src="electricsol-img/alero_project.jpeg" class="d-block w-100 img-fluid object-cover" style="height: 450px; object-fit: cover;" alt="Alero City Project Image 1">
  </div>
  <div class="carousel-item">
    <img src="electricsol-img/alero2.jpeg" class="d-block w-100 img-fluid object-cover" style="height: 450px; object-fit: cover;" alt="Alero City Project Image 2">
  </div>
  <div class="carousel-item">
    <img src="electricsol-img/alero3.jpeg" class="d-block w-100 img-fluid object-cover" style="height: 450px; object-fit: cover;" alt="Alero City Project Image 3">
  </div>
</div>


          <button class="carousel-control-prev" type="button" data-bs-target="#aleroProjectCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#aleroProjectCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

        <h2 class="mb-3" style="color:#011b59;">PROJECT OVERVIEW</h2>
        <p>The Alero City Project involved developing a smart city infrastructure within the Lekki Free Trade Zone. Electricsol was tasked with creating an Independent Distribution Network (IDN) to provide uninterrupted power, independent of the traditional power discos.</p>

        <h4 class="mt-4" style="color:#011b59;">Problem Statement</h4>
        <p>The client needed a dedicated power solution with reliability and independence from the regular disco setup.</p>

        <h4 class="mt-4" style="color:#011b59;">Our Recommendation</h4>
        <p>Conduct a power needs analysis, obtain the necessary licenses for an Independent Network, and proceed with the project phases.</p>

        <h4 class="mt-4" style="color:#011b59;">Implementation</h4>
        <p>After conducting a power needs analysis, the project obtained the required license, and Phase One was successfully completed, establishing a reliable and independent power supply for Alero City.</p>

        <h4 class="mt-4" style="color:#011b59;">Impact</h4>
        <ul>
          <li>100% power availability for smart city residents and industries</li>
          <li>Reduced dependency on the national grid</li>
          <li>Boosted investor confidence in the Lekki Free Zone</li>
        </ul>
      </div>

      <div class="col-lg-4">
        <div class="bg-light p-4 rounded shadow-sm">
          <h5 class="mb-3">Project Details</h5>
          <ul class="list-unstyled">
            <li><strong>Client:</strong> Lekki Free Trade Zone Developers</li>
            <li><strong>Location:</strong> Lagos, Nigeria</li>
            <li><strong>Scope:</strong> Smart Grid, IDN</li>
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
