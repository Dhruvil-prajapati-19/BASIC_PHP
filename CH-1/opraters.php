<?php

// Arithmetic Operators

$a = 10;
$b = 5;
$sum = $a + $b;
$diff = $a - $b;
$product = $a * $b;
$quotient = $a / $b;
$remainder = $a % $b;

echo "Arithmetic Operators:\n";
echo "Sum: $sum\n";
echo "Difference: $diff\n";
echo "Product: $product\n";
echo "Quotient: $quotient\n";
echo "Remainder: $remainder\n";

echo "\n";

// Assignment Operators
print " Assignment Operators";
$c = 3;
echo "\nAssignment Operators:\n";
echo "Original value of c: $c\n";
$c += 2; // Equivalent to $c = $c + 2;
echo "After += operation: $c\n";
$c -= 1; // Equivalent to $c = $c - 1;
echo "After -= operation: $c\n";
$c *= 4; // Equivalent to $c = $c * 4;
echo "After *= operation: $c\n";
$c /= 2; // Equivalent to $c = $c / 2;
echo "After /= operation: $c\n";

echo "\n";

// Comparison Operators
$d = 7;
$e = 10;
echo "\nComparison Operators:\n";
echo "Is d equal to e? " . ($d == $e) . "\n";
echo "Is d not equal to e? " . ($d != $e) . "\n";
echo "Is d greater than e? " . ($d > $e) . "\n";
echo "Is d less than e? " . ($d < $e) . "\n";
echo "Is d greater than or equal to e? " . ($d >= $e) . "\n";
echo "Is d less than or equal to e? " . ($d <= $e) . "\n";


echo "\n";
echo "\n";

// Logical Operators
$bool1 = true;
$bool2 = false;
echo "\nLogical Operators:\n";
echo "bool1 AND bool2: " . ($bool1 && $bool2) . "\n"; //  &&
echo '$a and $b result: ' . ($bool1 and $bool2) . "\n"; //"and"

echo "bool1 OR bool2: " . ($bool1 || $bool2) . "\n"; // ||
echo "bool1 OR bool2: " . ($bool1 or $bool2) . "\n"; // "OR"

echo "NOT bool1: " . (!$bool1) . "\n"; // NOT
echo "NOT bool2: " . (!$bool2) . "\n"; // NOT

echo "a xor b: " . ($bool1 xor $bool2) . "\n";  // XOR

echo "\n";
echo "\n";

// Increment/Decrement Operators
$f = 5;
echo "\nIncrement/Decrement Operators:\n";
echo "Original value of f: $f\n";
$f++; // Increment
echo "After increment: $f\n";
$f--; // Decrement
echo "After decrement: $f\n";

// increment and decrement
echo "Initial values:\n";
echo "a: $a\n";
echo "b: $b\n";

echo "\nPost-increment and Post-decrement:\n";
echo "a++: " . $a++ . "\n"; // Post-increment, prints then increments
echo "a after post-increment: $a\n";
echo "b--: " . $b-- . "\n"; // Post-decrement, prints then decrements
echo "b after post-decrement: $b\n";

echo "\nPre-increment and Pre-decrement:\n";
echo "++a: " . ++$a . "\n"; // Pre-increment, increments then prints
echo "a after pre-increment: $a\n";
echo "--b: " . --$b . "\n"; // Pre-decrement, decrements then prints
echo "b after pre-decrement: $b\n";
?>