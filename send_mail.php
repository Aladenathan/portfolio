<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));
    
    // Set email parameters
    $to = "aladefeminathaniel@gmail.com";
    $subject = "New Message from " . $name;
    $body = "Name: " . $name . "\nEmail: " . $email . "\n\nMessage:\n" . $message;
    $headers = "From: " . $email;

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message. Please try again later.";
    }
}
?>
