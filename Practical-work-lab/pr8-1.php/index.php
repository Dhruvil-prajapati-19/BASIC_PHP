<?php
// Check if form is submitted
if(isset($_POST['submit'])) {
    // Define validation rules
    $employee_id = $_POST['employee_id'];
    $name = $_POST['name'];
    $department = $_POST['department'];

    // Validate Employee ID
    if(empty($employee_id) || !preg_match('/^[0-9]*$/', $employee_id)) {
        $error = "Please enter a valid Employee ID (up to 10 digits)";
    }

    // Validate Name
    if(empty($name) || !preg_match('/^[a-zA-Z\s]+$/', $name)) {
        $error = "Please enter a valid Name (letters and spaces only)";
    }

    // If there are no errors, process the form
    if(!isset($error)) {
        // Perform any additional processing here
        echo "Form submitted successfully!";
    } else {
        echo $error; // Display validation error
    }
}

