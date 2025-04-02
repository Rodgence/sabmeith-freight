<?php
// Process form submission
$success_message = '';
$error_message = '';

// Get form data
$name = strip_tags(trim($_POST["name"]));
$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
$phone = strip_tags(trim($_POST["phone"]));
$service = strip_tags(trim($_POST["service"]));
$message = strip_tags(trim($_POST["message"]));

// Check if all required fields are filled
if (empty($name) || empty($email) || empty($phone) || empty($service) || empty($message)) {
    $error_message = "Please fill all the required fields.";
} else {
    // Recipient email
    $recipient = "operations@sabmeithfreight.co.tz";
    
    // Email headers
    $headers = "From: $name <$email>" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Email content
    $email_content = "<html><body>";
    $email_content .= "<h2>Inquiry Form Submission - Sabmeith Freight</h2>";
    $email_content .= "<p><strong>Name:</strong> $name</p>";
    $email_content .= "<p><strong>Email:</strong> $email</p>";
    $email_content .= "<p><strong>Phone:</strong> $phone</p>";
    $email_content .= "<p><strong>Service:</strong> $service</p>";
    $email_content .= "<p><strong>Message:</strong><br>$message</p>";
    $email_content .= "</body></html>";

    // Send email
    if (mail($recipient, "Inquiry Form: $service", $email_content, $headers)) {
        $success_message = "Your inquiry has been sent successfully! We'll get back to you soon.";
        
        // Redirect back to inquiry page with success message
        header("Location: ../inquiry.php?success=1");
        exit();
    } else {
        $error_message = "There was an error sending your inquiry. Please try again later.";
        
        // Redirect back to inquiry page with error message
        header("Location: ../inquiry.php?error=1");
        exit();
    }
}

// If there's an error before attempting to send the email
header("Location: ../inquiry.php?error=2");
exit();
?> 