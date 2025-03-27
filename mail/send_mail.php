<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = urlencode($_POST['name']);
    $email = urlencode($_POST['email']);
    $mobile = urlencode($_POST['mobile']);
    $service = urlencode($_POST['service']);
    $note = urlencode($_POST['note']);
    
    // Save to database first (recommended)
    // ...
    
    // Generate pre-filled WhatsApp message
    $message = "New Inquiry Details:%0A" .
               "Name: $name%0A" .
               "Email: $email%0A" .
               "Mobile: $mobile%0A" .
               "Service: $service%0A" .
               "Note: $note";
    
    $whatsapp_url = "https://wa.me/255769500302?text=$message";
    
    // Redirect to WhatsApp
    header("Location: $whatsapp_url");
    exit;
}
?> 