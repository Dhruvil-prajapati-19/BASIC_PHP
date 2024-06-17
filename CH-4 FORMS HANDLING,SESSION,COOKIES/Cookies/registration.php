<?php
// defination : cookies are small text files that are stored on a user's computer by a server 

// Step 1: create cookies and Destory cookies
// setcookie(name, value, expiry);

if (isset($_POST['submit'])) {
    
    $expiry = time() + 30; // Set cookies to expire in 30 seconds
    setcookie('name', $_POST['name'], $expiry); 
    setcookie('uid', $_POST['uid'], $expiry);
    echo "Registration data stored in cookies.";
}

// Step 2: Access and display cookies 
// syntax of Access cookies :  $_COOKIE[''];

if (isset($_COOKIE['name']) && isset($_COOKIE['uid'])) {
    $name = $_COOKIE['name'];
    $uid = $_COOKIE['uid'];

    echo "<h2>Display Cookie Data:</h2>";
    echo "Name: $name" ."<br>";
    echo "Uid: $uid";

} else {
    echo "No cookies found or cookies have expired.";
}

// Step 3: Delete cookies this will delete cookies immediately
// syntax of Delete cookies :  setcookie(name, value(empty string), expiry(-1));

if (isset($_COOKIE['name']) && isset($_COOKIE['uid'])) {
    setcookie('name', '', time() - 3600);
    setcookie('uid', '', time() - 3600);
    echo "Cookies deleted successfully.";
} else {
    echo " cookies deleted.";
}
