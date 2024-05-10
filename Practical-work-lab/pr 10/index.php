
<?php
/** Database connection
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 */

include('config.php');

$name = $_POST['name'];
$number = $_POST['number'];

// Create connection
$conn = new mysqli($_ENV['DB_SERVER'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD'], $_ENV['DB_DATABASE']);

// Check connection
if ($conn != null) {
    // SQL query to insert employee information into the database
    $sql = "INSERT INTO employees (name, number) VALUES ('$name', '$number')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    }

    $conn->close();

}

