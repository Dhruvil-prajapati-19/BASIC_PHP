    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $phoneNumber = $_POST['phoneNumber'];
        $address = $_POST['address'];

        echo "<p>Phone Number: $phoneNumber</p>";
        echo "<p>Address: $address</p>";
    }
    ?>

