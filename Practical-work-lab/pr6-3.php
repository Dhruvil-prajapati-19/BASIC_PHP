<?php

// a. Function to generate a random number between the given range
function generateRandomNumber() {
    $min = 1;
    $max = 100;
    $randomNumber = rand($min, $max);
    echo "Random number between $min and $max: $randomNumber\n";
}

// b. Function to display the binary, octal, and hexadecimal of a given decimal number
function displayConversions() {
    $decimalNumber = 255;
    echo "Decimal number: $decimalNumber\n";
    echo "Conversions:\n";
    echo "Binary: " . decbin($decimalNumber) . "\n";
    echo "Octal: " . decoct($decimalNumber) . "\n";
    echo "Hexadecimal: " . dechex($decimalNumber) . "\n";
}

// c. Function to display the sin, cos, and tan of the given angle (in radians)
function displayTrigonometricFunctions() {
    $angleInRadians = deg2rad(45); // Convert degrees to radians
    echo "Angle (in radians): $angleInRadians\n";
    echo "Trigonometric functions:\n";
    echo "Sin: " . sin($angleInRadians) . "\n";
    echo "Cos: " . cos($angleInRadians) . "\n";
    echo "Tan: " . tan($angleInRadians) . "\n";
}

// Call each function
generateRandomNumber();
echo"<br/>";
displayConversions();
echo"<br/>";
displayTrigonometricFunctions();

?>
