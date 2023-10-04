<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emailOrUsername = $_POST["emailOrUsername"];
    // $password = $_POST["password"];

    // You can perform any necessary processing, such as database queries, validation, etc., here

    // For demonstration purposes, let's assume we're just echoing back the received data
    echo "Received data: Email/Username - $emailOrUsername";
} else {
    echo "Invalid request!";
}