<?php
$pageTitle = "Contact - Electricsol";
?>
<?php include "includes/header.php"; ?>
<?php include "includes/loader.php"; ?>

<!-- Navbar & Hero Start -->
<?php include "includes/nav.php"; ?>        
<!-- Navbar & Hero End -->

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
  <div class="container text-center py-5" style="max-width: 900px;">
    <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contact Us</h4>
    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
      <li class="breadcrumb-item"><a href="index">Home</a></li>
      <li class="breadcrumb-item active">Contact</li>
    </ol>    
  </div>
</div>
<!-- Header End -->

<!-- Contact Start -->
<div class="container-fluid contact bg-light py-5">
  <div class="container py-5">
    <div class="row g-5 align-items-start">
      
      <!-- Left Column -->
      <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
        <h4 class="fw-bold" style="color:#011b59;">Contact Us</h4>
        <h1 class="display-5 fw-semibold mb-4">Illuminate Your Message. Get in Touch</h1>
        <p class="mb-5 text-muted">
          Whether you have a project in mind or simply want to learn more about how we empower Africa through energy, we’re ready to hear from you.
        </p>

        <!-- Social Links -->
        <div class="d-flex align-items-center mb-4 gap-2">
          <a class="btn btn-info btn-md-square social-hover" href="https://facebook.com/electricsolafrica" target="_blank"><i class="fab fa-facebook-f"></i></a>
          <a class="btn btn-info btn-md-square social-hover" href="https://x.com/ElectricsolAf" target="_blank"><i class="fab fa-x-twitter"></i></a>
          <a class="btn btn-info btn-md-square social-hover" href="https://instagram.com/eletricsolafrica" target="_blank"><i class="fab fa-instagram"></i></a>
          <a class="btn btn-info btn-md-square social-hover" href="https://linkedin.com/company/eletricsolafrica" target="_blank"><i class="fab fa-linkedin-in"></i></a>
          <a class="btn btn-info btn-md-square social-hover" href="https://wa.me/2349021611689" target="_blank"><i class="fab fa-whatsapp"></i></a>
        </div>

        <!-- Contact Info -->
        <div class="row g-4">
          <div class="col-12">
            <div class="contact-card bg-white shadow-sm rounded p-4 d-flex align-items-start">
              <i class="fas fa-map-marker-alt fa-2x text-info me-4"></i>
              <div>
                <h5 class="fw-bold">Address</h5>
                <p class="mb-0 small text-muted">Area 2 Section 2, Block 2, Jibiya Street, Garki-Abuja</p>
              </div>
            </div>
          </div>
          <div class="col-lg-12 col-xl-6">
            <div class="contact-card bg-white shadow-sm rounded p-4 d-flex align-items-start">
              <i class="fas fa-envelope fa-2x text-info me-4"></i>
              <div>
                <h5 class="fw-bold">Mail Us</h5>
                <p class="mb-0 small text-muted">info@electricsol.org</p>
              </div>
            </div>
          </div>
          <div class="col-lg-12 col-xl-6">
            <div class="contact-card bg-white shadow-sm rounded p-4 d-flex align-items-start">
              <i class="fa fa-phone-alt fa-2x text-info me-4"></i>
              <div>
                <h5 class="fw-bold">Call Us</h5>
                <p class="mb-0 small text-muted">+234 703 900 0386</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Column: Form -->
      <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
        <div class="card shadow-sm border-0 rounded-3 p-4">
			
	<?php
		use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\SMTP;
		use PHPMailer\PHPMailer\Exception;

		require 'vendor/autoload.php';			


// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars(trim($_POST['name']));
    $email   = htmlspecialchars(trim($_POST['email']));
    $phone   = htmlspecialchars(trim($_POST['phone']));
    $project = htmlspecialchars(trim($_POST['project']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = "electricsol.org";       // Your SMTP server
        $mail->SMTPAuth   = true;
        $mail->Username   = "admin@electricsol.org"; // Sender email (authenticated user)
        $mail->Password   = "YOUR_PASSWORD_HERE";    // Replace with actual password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                   // or 'tls' if supported
        $mail->Port       = 465;                     // 465 for SSL, 587 for TLS

        // Sender & Recipient
        $mail->setFrom("admin@electricsol.org", "Electricsol Website");
        $mail->addAddress("info@electricsol.org", "Electricsol Team"); 

        // Reply goes to the sender
        if (!empty($email)) {
            $mail->addReplyTo($email, $name);
        }

        // Content
        $mail->isHTML(true);
        $mail->Subject = !empty($subject) ? $subject : "New Contact Form Message";

        $mail->Body = "
            <h2>New Contact Form Submission</h2>
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Phone:</strong> {$phone}</p>
            <p><strong>Project:</strong> {$project}</p>
            <p><strong>Subject:</strong> {$subject}</p>
            <p><strong>Message:</strong><br>" . nl2br($message) . "</p>
        ";

        $mail->AltBody = "Name: $name\nEmail: $email\nPhone: $phone\nProject: $project\nSubject: $subject\nMessage:\n$message";

        $mail->send();
        $success = "✅ Your message has been sent successfully!";
    } catch (Exception $e) {
        $error = "❌ Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>

<!-- Contact Form HTML (your existing form) -->
<div class="container mt-4">
    <?php if (!empty($success)): ?>
        <div class="alert alert-success"><?= $success; ?></div>
    <?php elseif (!empty($error)): ?>
        <div class="alert alert-danger"><?= $error; ?></div>
    <?php endif; ?>
</div>			
			
			
          <form action="process-form.php" method="POST" class="p-4 bg-light rounded shadow-sm">
    <div class="row g-3">
        <!-- Name -->
        <div class="col-12 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
            <input type="text" name="name" class="form-control form-control-lg border-primary" placeholder="Your Name" required>
        </div>

        <!-- Email -->
        <div class="col-12 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
            <input type="email" name="email" class="form-control form-control-lg border-primary" placeholder="Your Email" required>
        </div>

        <!-- Mobile -->
        <div class="col-12 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
            <input type="text" name="mobile" class="form-control form-control-lg border-primary" placeholder="Your Mobile" required>
        </div>

        <!-- Service Option -->
        <div class="col-12 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
            <select name="service" class="form-select form-select-lg border-primary" required>
                <option selected disabled>Select a Service</option>
                <option value="Renewable Energy Solutions">Renewable Energy Solutions</option>
                <option value="Power Infrastructure Development">Power Infrastructure Development</option>
                <option value="Smart Grid Solutions">Smart Grid Solutions</option>
                <option value="Battery for Sustainable Clean Energy">Battery for Sustainable Clean Energy</option>
                <option value="Metering Infrastructure">Metering Infrastructure</option>
                <option value="Construction & Operations Management">Construction & Operations Management</option>
            </select>
        </div>

        <!-- Special Note -->
        <div class="col-12 wow fadeInUp" data-wow-delay="1.0s">
            <textarea name="message" class="form-control border-primary" placeholder="Special Note" rows="4"></textarea>
        </div>

        <!-- Submit Button -->
        <div class="col-12 wow fadeInUp" data-wow-delay="1.1s">
            <button class="btn w-100 py-3" type="submit" style="background-color:#0046AA; color:#fff; font-weight:600;">
                Submit Request
            </button>
        </div>
    </div>
</form>
        </div>
      </div>

      <!-- Map -->
      <div class="col-12 wow fadeInUp" data-wow-delay="0.6s">
        <div class="h-100 overflow-hidden rounded shadow-sm mt-5">
          <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Area%202%20Section%202,%20Block%202,%20Jibiya%20Street,%20Garki-Abuja+(Electricsol)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.mapsdirections.info/it/calcola-la-popolazione-su-una-mappa/">mappa della popolazione Italia</a></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Contact End -->

<!-- Download Start -->
<?php include "includes/download.php"; ?>

<!-- Footer Start -->
<?php include "includes/footer.php"; ?>
