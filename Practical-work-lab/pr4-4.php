<?php
function multiplicationTable($number) {
    echo "Multiplication table for $number:\n";
    for ($i = 1; $i <= 10; $i++) {
        echo "$number x $i = " . ($number * $i) . "\n";
    }
}

// Change the number below to generate multiplication table for a different number
$number = 7;
multiplicationTable($number);
?>
