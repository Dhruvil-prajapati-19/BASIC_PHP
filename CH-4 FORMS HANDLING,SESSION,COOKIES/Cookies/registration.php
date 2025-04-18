<?php
// Step 1: Handle form submission and create cookies
if(isset($_POST['submit']) && $_POST['submit'] == 'registration') {
    // Step 1: Create cookies
    $expiry = time() + 2; // Expiry time set to 10 seconds from now
    setcookie('name', $_POST['name'], $expiry);
    setcookie('username', $_POST['username'], $expiry);
    setcookie('email', $_POST['email'], $expiry);
  
    echo "Registration data stored in cookies.";
}

// Step 2: Access and assign cookies
if(isset($_COOKIE['name'])) {
    $name = $_COOKIE['name'];
    $username = $_COOKIE['username'];
    $email = $_COOKIE['email'];

    echo "<h2>Cookie Data:</h2>";
    echo "Name: $name<br>";
    echo "Username: $username<br>";
    echo "Email: $email<br>";
}

// Step 3: Destroy cookies
if(isset($_GET['logout']))
 {
    // Step 3: Destroy cookies by setting their expiry time to the past
    if(isset($_COOKIE['name'])) {
        setcookie('name', '', time() - 3600);
    }
    if(isset($_COOKIE['username'])) {
        setcookie('username', '', time() - 3600);
    }
    if(isset($_COOKIE['email'])) {
        setcookie('email', '', time() - 3600);
    }

    echo "<p>Cookies deleted. You are logged out.</p>";
}
