    <?php
    // Check if form data is submitted
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Retrieve form data
        $fullname = isset($_GET['textbox']) ? $_GET['textbox'] : '';
        $address = isset($_GET['textarea']) ? $_GET['textarea'] : '';
        $interests = isset($_GET['listbox']) ? $_GET['listbox'] : [];
        $department = isset($_GET['dropdown']) ? $_GET['dropdown'] : '';
        $agreement = isset($_GET['checkbox']) ? $_GET['checkbox'] : '';
        $gender = isset($_GET['radiobox']) ? $_GET['radiobox'] : ''; 
        $color = isset($_GET['color']) ? $_GET['color'] : '';
        $dob = isset($_GET['DOB']) ? $_GET['DOB'] : '';

        // Display submitted data
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
        // If form is not submitted, display a message
        echo "<p>No data submitted.</p>";
    }
