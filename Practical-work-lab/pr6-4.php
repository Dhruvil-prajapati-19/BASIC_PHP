<?php

function displayDateTimeFormats() {
    $currentDateTime = new DateTime();

    echo "Current Date and Time:\n";
    echo "1. Year-month-day hh:mm:ss : " . $currentDateTime->format('Y-m-d H:i:s') . "\n";
    echo "2. day/month/Year hh:mm:ss : " . $currentDateTime->format('d/m/Y H:i:s') . "\n";
    echo "3. l, F j, Y g:i A : " . $currentDateTime->format('l, F j, Y g:i A') . "\n";
}

// Call the function
displayDateTimeFormats();

?>
