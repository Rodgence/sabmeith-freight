<?php
// Process form submission
$success_message = '';
$error_message = '';

// Get form data
$name = strip_tags(trim($_POST["name"]));
$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
$phone = strip_tags(trim($_POST["phone"]));
$subject = strip_tags(trim($_POST["subject"]));
$message = strip_tags(trim($_POST["message"]));
$consent = isset($_POST['consent']) ? true : false;

// Check if all required fields are filled
if (empty($name) || empty($email) || empty($phone) || empty($subject) || empty($message) || !$consent) {
    $error_message = "Please fill all the required fields and accept the consent.";
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
    $email_content .= "<h2>Contact Form Submission - Sabmeith Freight</h2>";
    $email_content .= "<p><strong>Name:</strong> $name</p>";
    $email_content .= "<p><strong>Email:</strong> $email</p>";
    $email_content .= "<p><strong>Phone:</strong> $phone</p>";
    $email_content .= "<p><strong>Service Required:</strong> $subject</p>";
    $email_content .= "<p><strong>Message:</strong><br>$message</p>";
    $email_content .= "</body></html>";

    // Send email
    if (mail($recipient, "Contact Form: $subject", $email_content, $headers)) {
        $success_message = "Your message has been sent successfully! We'll get back to you soon.";
        
        // Redirect back to contact page with success message
        header("Location: ../contact.php?success=1");
        exit();
    } else {
        $error_message = "There was an error sending your message. Please try again later.";
        
        // Redirect back to contact page with error message
        header("Location: ../contact.php?error=1");
        exit();
    }
}

// If there's an error before attempting to send the email
header("Location: ../contact.php?error=2");
exit();
?> 