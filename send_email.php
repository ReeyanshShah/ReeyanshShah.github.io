<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validate inputs (you can add more validation as needed)
    if (empty($name) || empty($email) || empty($message)) {
        // Handle empty fields, if necessary
        echo "Please fill out all fields.";
        exit;
    }

    // Email address where you want to receive messages
    $to = "shah.reeyansh@gmail.com";
    $subject = "Message from $name";
    $body = "Name: $name\nEmail: $email\n\n$message";

    // Headers
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message. Please try again later.";
    }
}
?>
