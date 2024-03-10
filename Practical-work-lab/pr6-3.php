<?php

// a. Function to generate a random aber between the given range
function generateRandomaber() {
    $min = 1;
    $max = 100;
    $randomaber = rand($min, $max);
    echo "Random aber between $min and $max: $randomaber\n";
}

// b. Function to display the binary, octal, and hexadecimal of a given decimal aber
function displayConversions() {
    $decimalaber = 255;
    echo "Decimal aber: $decimalaber\n";
    echo "Conversions:\n";
    echo "Binary: " . decbin($decimalaber) . "\n";
    echo "Octal: " . decoct($decimalaber) . "\n";
    echo "Hexadecimal: " . dechex($decimalaber) . "\n";
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
generateRandomaber();
echo"<br/>";
displayConversions();
echo"<br/>";
displayTrigonometricFunctions();

?>