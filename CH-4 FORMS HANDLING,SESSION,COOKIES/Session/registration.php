<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Session Example</title>
</head>
<body>
    
<form action="" method="post">
    <input type="submit" name="logout" value="Logout">
</form>
    
<?php

// Step 1: Start session
session_start();

// Step 2: Handle form submission
if (isset($_POST['submit'])) {
    // Step 3: Store form data in session variables from index form
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['uid'] = $_POST['uid'];

    echo "Registration data stored in session.";
}

// Step 4: Access session data and Display session data
if (isset($_SESSION['name']) && isset($_SESSION['uid'])) {
    echo "<h2>Session Data:</h2>";
    echo "uid: " . htmlspecialchars($_SESSION['uid']) . "<br>";
    echo "Name: " . htmlspecialchars($_SESSION['name']) . "<br>";
    echo "<br>";
} else {
    // Redirect to index.html if 'name' or 'uid' is not set
    header("Location: index.html");
    exit(); // Ensure no further code is executed after the redirect
}

// Step 5: Modify session data (optional)
// Example: Change the name in session data
if (isset($_SESSION['name'])) {
    $_SESSION['name'] = $_SESSION['name'] . " " . "HINDU";
    echo "<p>Name updated in session.</p>";
    echo htmlspecialchars($_SESSION['name']);
}

// Step 6: Destroy session (optional)
// Example: Logout functionality
if (isset($_POST['logout'])) {
    // Unset all session variables
    session_unset();
    // Destroy the session
    session_destroy();
    echo "<p>Session destroyed. You are logged out.</p>";
    header("Location: index.html");  
}
?>

</body>
</html>
