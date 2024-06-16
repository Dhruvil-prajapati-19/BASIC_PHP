<?php
$servername = "localhost";
$username = "root";
$password = 'Admin@025025';
$database_name = "StudentDetails";

// Step 1: Create connection
$conn = new mysqli($servername, $username, $password , $database_name);

if($conn)
{
// Step 2: Write SQL query 
$q = "CREATE TABLE IF NOT EXISTS Students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Student_Name VARCHAR(255) NOT NULL,
    roll_number VARCHAR(20) NOT NULL,
    email VARCHAR(100),
    dob DATE
)";

// Step 3: Execute query
if ($conn->query($q) === TRUE){
    echo "Table 'Students' created successfully";
} else {
    echo "Error creating table: ";
}

}
// Step 4: Close connection
$conn->close();

