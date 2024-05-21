<?php
    include('config.php'); 
    session_start();
    
    $conn = new mysqli($_ENV['DB_SERVER'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD'], $_ENV['DB_DATABASE']);
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $sql = "SELECT * FROM Emplogin WHERE username = '$username' AND password = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $_SESSION['username'] = $username; // Storing username in session
            header("Location: home.html"); // Redirect to home page
            exit();
        } else {
            // Authentication failed
            echo "Invalid username or password";
        }
    }
    // Close connection
    $conn->close();
