<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $subject = "New Subscriber to Flexora";
    $message = "You have a new subscriber: " . $email;
    $headers = "From: noreply@flexora.com";

    // Send email
    mail("baranivigneshwar62@gmail.com", $subject, $message, $headers);

    // Confirmation message to user
    echo "Thank you for subscribing!";
}
?>