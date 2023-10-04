<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emailOrUsername = $_POST["email"];
    $password = $_POST["password"];
    if (!isset($emailOrUsername) || !isset($password)) {
        echo "Please provide valid input!";
    } else {
        $to = "recipient@example.com";
        $subject = "Subject of the email";
        $message = "Hello,\n\nYou have received a login attempt from: " . $emailOrUsername;
        $headers = "From: your_email@example.com"; // Replace with your email address
        $mailSent = mail($to, $subject, $message, $headers);
        if ($mailSent) {
            echo "Email sent successfully.";
        } else {
            echo "Error sending email.";
        }
    }
} else {
    echo "Something went wrong.";
}