<?php
$servername = "localhost";
$username = "root";
$password = 'Admin@025025';
$dbname = "Custom";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn)
 {
    // Step 1: Get data from html
    $Cust_ID = $_POST["Cust_ID"];
    $Cust_name = $_POST["Cust_name"];
    $Contact_no = $_POST["Contact_no"];
    $Address = $_POST["Address"];

    //Step 2: write the SQL query 
    $q = "INSERT INTO Customer (Cust_ID, Cust_name, Contact_no, Address) VALUES ('$Cust_ID', '$Cust_name', '$Contact_no', '$Address')";
   //$q = "DELETE FROM Customer WHERE Cust_ID = '$Cust_ID'";

    //  Step 3: Execute the query
    if ($conn->query($q) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error" ;
    }
}

// Step:4 Close connection
$conn->close();
