<?php
// Database connection
$sn = "localhost";
$un = 'root';
$pd = 'Admin@025025';
$db = 'UsersForms';

$conn = new mysqli($sn, $un, $pd, $db);

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_SESSION['username'];
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    
    $sql = "SELECT * FROM Emplogin WHERE username = '$username' AND password = '$old_password'";
    $result = $conn->query($sql);
    
    if ($result->num_rows == 1) {
        $update_sql = "UPDATE Emplogin SET password = '$new_password' WHERE username = '$username'";
        if ($conn->query($update_sql) === TRUE) {
            echo "Password changed successfully";
        } else {
            echo "Error updating password: " . $conn->error;
        }
    } else {
        echo "Incorrect old password";
    }
}
