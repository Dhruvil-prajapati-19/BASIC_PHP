<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Handle form submission
if(isset($_POST['submit'])){
    // Database connection parameters
    $servername = "localhost"; // Change this to your MySQL server hostname
    $username = "root"; // Change this to your MySQL username
    $password = "Admin@025025"; // Change this to your MySQL password
    $database = "UsersForms"; // Change this to your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve form data
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    
    // Sanitize input data to prevent SQL injection
    $name = mysqli_real_escape_string($conn, $name);
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);
    $email = mysqli_real_escape_string($conn, $email);
    
    // Hash the password (for better security)
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
    // Insert data into database
    $sql = "INSERT INTO USERS (name, username, password, email) VALUES ('$name', '$username', '$hashed_password', '$email')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close database connection
    $conn->close();
} else {
    // Show error message when form is not submitted
    echo "Form submission error: Form not submitted.";
}

