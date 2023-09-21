<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to_email = "mironobot@gmail.com"; // Replace with the recipient's email address
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
        echo '<div class="thankyou_message">
                <h4><em>Thanks</em> for contacting us! We will get back to you soon!</h4>
              </div>';
    } else {
        // Error sending email
        echo '<div class="error_message">
                <h4>Sorry, there was an error sending your message. Please try again later.</h4>
              </div>';
    }
} else {
    // Redirect back to the form if accessed directly
    header("Location: your-original-form.html");
    exit;
}
?>
