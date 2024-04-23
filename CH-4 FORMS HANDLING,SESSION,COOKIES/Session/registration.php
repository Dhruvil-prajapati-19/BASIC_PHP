<?php
// Step 1: Start session
session_start();

// Step 2: Handle form submission
if(isset($_POST['submit']) && $_POST['submit'] == 'registration') {
    // Step 3: Store form data in session variables
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
   

    echo "Registration data stored in session.";
}

// Step 4: Access session data
if(isset($_SESSION['name'])) {
    echo "<h2>Session Data:</h2>";
    echo "Name: " . $_SESSION['name'] . "<br>";
    echo "Username: " . $_SESSION['username'] . "<br>";
    echo "Email: " . $_SESSION['email'] . "<br>";
    
    echo "Password: ";
    for ($i = 0; $i < strlen($_SESSION['password']); $i++) {
        echo '●';
    }
    echo "<br>";
}

// Step 5: Modify session data (optional)
// Example: Change the name in session data
if(isset($_SESSION['name'])) {
    $_SESSION['name'] =   $_SESSION['name'] ." ". "HINDU";
    echo "<p>Name updated in session.</p>";
    echo  $_SESSION['name'];
}

// Step 6: Destroy session (optional)
// Example: Logout functionality
if(isset($_GET['logout'])) {
    // Unset all session variables
    session_unset();
    // Destroy the session
    session_destroy();
    echo "<p>Session destroyed. You are logged out.</p>";
}
