<?php
// Step 1: Handle form submission and create cookies
if(isset($_POST['submit'])) {
    // Step 1: Create cookie
    $expiry = time() + 10; // Expiry time set to 10 seconds from now
    setcookie('username', $_POST['username'], $expiry);

    echo "Username stored in cookie.";
}

// Step 2: Access and assign cookies
if(isset($_COOKIE['username'])) {
    $username = $_COOKIE['username'];

    echo "<h2>Cookie Data:</h2>";
    echo "Username: $username<br>";

}

