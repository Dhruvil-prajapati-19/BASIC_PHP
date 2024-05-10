<?php
include('config.php'); 
session_start();
$conn = new mysqli($_ENV['DB_SERVER'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD'], $_ENV['DB_DATABASE']);
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM Emplogin WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
       echo ($_SESSION['username'] = $username);
         echo "come in ";
        exit();
    } else {
        // Authentication failed
        echo "get lost";
    }
    // Close connection
$conn->close();



