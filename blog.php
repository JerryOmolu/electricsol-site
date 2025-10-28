<?php
$pageTitle = "Blog - Electricsol";
?>
<?php include "includes/header.php"; ?>
<?php include "includes/loader.php"; ?>
       

        <!-- Navbar & Hero Start -->
<?php include "includes/nav.php"; ?>        
        <!-- Navbar & Hero End -->

<!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Blog</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>
<!--                    <li class="breadcrumb-item"><a href="#">Pages</a></li>-->
                    <li class="breadcrumb-item active text-primary">Blog</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->


        <!-- Blog Start -->
<?php include "includes/blog-page.php"; ?>         
       <!-- Blog End -->

        <!-- Footer Start -->
<?php include "includes/footer.php"; ?>         