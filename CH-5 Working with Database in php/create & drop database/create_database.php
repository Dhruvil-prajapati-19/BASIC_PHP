<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = 'Admin@025025';

// Step 1: Create connection
$conn = new mysqli($servername, $username, $password);


if ($conn) {
  
    $db = $_POST["database_name"];

   // Step 2: Write SQL query 
    $q = "CREATE DATABASE $db";
    // $q = "DROP DATABASE $db";
    
    // Step 3: Execute query
    if ($conn->query($q) === TRUE) {
        echo "Database '$db' created successfully.";
    } else {
        echo "Error creating database: " . $conn->error;
    }
}

// Step 4: Close connection
$conn->close();
