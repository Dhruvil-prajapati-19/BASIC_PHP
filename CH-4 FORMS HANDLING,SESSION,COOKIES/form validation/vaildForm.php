<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $url = $_POST["url"];

    $errors = [];

    // Empty string validation
    if (empty($name && $username))
     {
        $errors[] = "filed cannot be empty";
       
    }

    // Username length validation
    if (strlen($username) < 6 || strlen($username) > 20) {
        $errors[] = "Username must be between 6 and 20 characters";
    }

    // Password length validation
    if (strlen($password) < 8 || strlen($password) > 20) {
        $errors[] = "Password must be between 8 and 20 characters";
    }

    // Email format validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }

    // URL format validation
    if (!filter_var($url, FILTER_VALIDATE_URL)) {
        $errors[] = "Invalid URL format";
    }

    // Display errors or success message
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p>Error: $error</p>";
        }
    } else {
        echo "<p>Form submitted successfully!</p>";
    }
}

