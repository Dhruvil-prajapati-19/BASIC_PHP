<?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $fullname = isset($_POST['textbox']) ? $_POST['textbox'] : '';
        $address = isset($_POST['textarea']) ? $_POST['textarea'] : '';
        $interests = isset($_POST['listbox']) ? $_POST['listbox'] : [];
        $department = isset($_POST['dropdown']) ? $_POST['dropdown'] : '';
        $agreement = isset($_POST['checkbox']) ? $_POST['checkbox'] : '';
        $gender = isset($_POST['radiobox']) ? $_POST['radiobox'] : ''; 
        $color = isset($_POST['color']) ? $_POST['color'] : '';
        $dob = isset($_POST['DOB']) ? $_POST['DOB'] : '';

        // Display retrieved data
        echo "<h2>Registration Details</h2>";
        echo "<p>Full Name: $fullname</p>";
        echo "<p>Address: $address</p>";
        echo "<p>General Interests: ";
        foreach ($interests as $key) {
            echo "$key ";
        }
        echo "</p>";
        echo "<p>Department: $department</p>";
        echo "<p>Agreement of Awareness: $agreement</p>";
        echo "<p>Gender: $gender</p>";
        echo "<p>Favorite Color: $color</p>";
        echo "<p>Date of Birth: $dob</p>";
    } else {
        // Form is not submitted
        echo "Form is not submitted.";
    }
?>
