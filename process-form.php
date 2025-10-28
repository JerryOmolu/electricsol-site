<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $mobile  = htmlspecialchars($_POST['mobile']);
    $service = htmlspecialchars($_POST['service']);
    $message = htmlspecialchars($_POST['message']);

    // Recipient email
    $to = "info@electricsol.org";

    // Email subject
    $subject = "New Service Request from $name";

    // Email body
    $body = "
        <h2>New Service Request</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Mobile:</strong> $mobile</p>
        <p><strong>Requested Service:</strong> $service</p>
        <p><strong>Message:</strong><br>$message</p>
    ";

    // Headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: Electricsol Africa <no-reply@electricsol.org>" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Your request has been submitted successfully!'); window.location.href='contact';</script>";
    } else {
        echo "<script>alert('Sorry, there was an error sending your request. Please try again.'); window.location.href='contact';</script>";
    }
} else {
    header("Location: contact");
    exit();
}
?>