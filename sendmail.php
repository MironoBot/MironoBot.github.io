<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to_email = "recipient@example.com"; // Replace with the recipient's email address
    $subject = "Contact Form Submission";
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $message = $_POST["Message"];
    
    // Compose the email message
    $message_body = "Name: $name\n";
    $message_body .= "Email: $email\n\n";
    $message_body .= "Message:\n$message";
    
    // Send the email
    $headers = "From: $email\r\n";
    
    if (mail($to_email, $subject, $message_body, $headers)) {
        // Email sent successfully
        echo 'success';
    } else {
        // Error sending email
        echo 'error';
    }
} else {
    // Handle other cases if needed
    echo 'error';
}
?>
