<?php

// Database connection
$sn = "localhost";
$un = 'root';
$pd = 'Admin@025025';
$db = 'UsersForms';

$conn = new mysqli($sn, $un, $pd, $db);

// File upload handling
if (isset($_FILES['image'])) 
{
    $image_data = $conn->real_escape_string(file_get_contents($_FILES['image']['tmp_name']));

    $sql = "INSERT INTO images (image_data) VALUES ('$image_data')";
    if ($conn->query($sql) === TRUE)
     {  echo "Image uploaded successfully";}
}
$conn->close();
