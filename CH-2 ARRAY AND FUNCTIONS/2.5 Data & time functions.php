<?php
// Date and time functions demonstration

// Get current date and time information
$currentDateTime = getdate();

echo "Current Date and Time Information:\n";
print_r($currentDateTime);
echo "\n";

// Get current time in seconds since the Unix Epoch
$currentTime = time();

echo "Current Time in Seconds: $currentTime\n";

// Create a new DateTime object representing the current date and time
$dateTimeObj = date_create();

echo "DateTime Object: " . $dateTimeObj->format('Y-m-d H:i:s') . "\n";

// Create a specific date and time using mktime function
$newTime = mktime(14, 30, 0, 3, 9, 2024);

echo "Specific Date and Time: " . date('Y-m-d H:i:s', $newTime) . "\n";

// Format a date
$formattedDate = date('Y-m-d', strtotime('tomorrow'));

echo "Formatted Date: $formattedDate\n";

// Calculate the difference between two dates
$date1 = date_create('2024-03-09');
$date2 = date_create('2024-03-20');
$dateDiff = date_diff($date1, $date2);

echo "Difference between two dates: " . $dateDiff->format('%R%a days') . "\n";

// Check if a date is valid
$isValidDate = checkdate(2, 29, 2024);

echo "Is February 29, 2024 valid? " . ($isValidDate ? "Yes" : "No") . "\n";

