<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];

 
        echo "<p>Name: $name</p>";
        echo "<p>Username: $username</p>";
        echo "<p>Password: $password</p>";
        echo "<p>Email: $email</p>";
    }


