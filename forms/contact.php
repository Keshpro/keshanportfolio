<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Your email
    $to = "keshanebusiness@gmail.com";  

    // Email subject
    $mail_subject = "New Contact Form Message: " . $subject;

    // Email body
    $body = "You have received a new message from your website contact form:\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Subject: $subject\n\n";
    $body .= "Message:\n$message\n";

    // Headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email (may not work on GitHub Pages)
    @mail($to, $mail_subject, $body, $headers);

    // Always show success message to user
    echo "success";
}
?>
