<?php
$servername = "localhost";
$username = "root";
$password = 'Admin@025025';
$dbname = "Custom";

// Step 1: Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


if($conn){
// Step 3: Select query to fetch all customer records
$q = "SELECT Cust_ID, Cust_name, Contact_no, Address FROM Customer";
$result = $conn->query($q);

// Step 4: Display data in table format
if ($result->num_rows > 0) {
    echo "<h2>Customer Information</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Cust_ID</th><th>Cust_name</th><th>Contact_no</th><th>Address</th></tr>";
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["Cust_ID"] . "</td>";
        echo "<td>" . $row["Cust_name"] . "</td>";
        echo "<td>" . $row["Contact_no"] . "</td>";
        echo "<td>" . $row["Address"] . "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
} else {
    echo "No records found";
}
}
// Close connection
$conn->close();
