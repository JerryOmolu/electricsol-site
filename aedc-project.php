<?php
$pageTitle = "AEDC Project - Electricsol";
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
    <h1 class="display-4 text-white">AEDC Project</h1>
    <p class="lead">Tackling revenue loss through smart grid infrastructure.</p>
  </div>
</section>


  <!-- Project Details -->
  <section class="py-5">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-8">
		<div id="aedcProjectCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
		<div class="carousel-inner rounded shadow">
		<div class="carousel-item active">
		<img src="electricsol-img/aedc_project.jpeg" class="d-block w-100 img-fluid" alt="AEDC Project Image 1">
		</div>
		<div class="carousel-item">
		<img src="electricsol-img/aedc_project.jpeg" class="d-block w-100 img-fluid" alt="AEDC Project Image 2">
		</div>
		<div class="carousel-item">
		<img src="electricsol-img/aedc_project.jpeg" class="d-block w-100 img-fluid" alt="AEDC Project Image 3">
		</div>
		</div>

		<!-- Controls -->
		<button class="carousel-control-prev" type="button" data-bs-target="#aedcProjectCarousel" data-bs-slide="prev">
		<span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#aedcProjectCarousel" data-bs-slide="next">
		<span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
		</button>
		</div>

          <h2 class="mb-3" style="color:#011b59;">PROJECT OVERVIEW</h2>
          <p>The AEDC Project aimed to address the significant revenue loss experienced due to meter bypass and obsolete meters. The focus was on creating a system with visibility with geo-location, allowing monitoring of energy flow, distribution transformers, and customer meters.</p>

          <h4 class="mt-4" style="color:#011b59;">Problem Statement</h4>
          <p>AEDC faced substantial revenue loss from meter bypass and obsolete meters, impacting financial sustainability.</p>
			
		  <h4 class="mt-4" style="color:#011b59;">Our Recommendation</h4>
          <p>Implement a system with smart meters capable of providing real-time notifications in case of tampering. Replace obsolete meters with communication-ready smart meters.</p>
			
		  <h4 class="mt-4" style="color:#011b59;">Implementation</h4>
          <p>Smart meters were introduced, sending automated notifications in case of tampering. The system enabled precise location identification for field teams, resulting in a drastic reduction in energy loss and increased satisfaction for AEDC.</p>

          <h4 class="mt-4" style="color:#011b59;">Impact</h4>
          <ul>
            <li>Revenue leakage reduced by 35%</li>
            <li>Enhanced customer trust through data visibility</li>
            <li>Improved transformer performance monitoring</li>
          </ul>
        </div>
        <div class="col-lg-4">
          <div class="bg-light p-4 rounded shadow-sm">
            <h5 class="mb-3">Project Details</h5>
            <ul class="list-unstyled">
              <li><strong>Client:</strong> Abuja Electricity Distribution Company</li>
              <li><strong>Location:</strong> Abuja, Nigeria</li>
              <li><strong>Scope:</strong> Smart Metering, Monitoring</li>
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