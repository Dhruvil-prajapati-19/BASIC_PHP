<?php

// While loop: The while loop repeats a block of code as long as a specified condition is true.
$i = 1;
echo "While loop:\n";
while ($i <= 5) {
    echo $i . " ";
    $i++;
}

echo "\n\n";
echo "<br/>";
// Do-while loop: The do-while loop is similar to while, but it executes the block of code at least once, even if the condition is false.
$j = 1;
echo "Do-while loop:\n";
do {
    echo $j . " ";
    $j++;
}
while ($j <= 5);


echo "\n\n";
echo "<br/>";
// Foreach loop: The foreach loop is used to iterate over arrays.
$colors = array("red", "green", "blue");
echo "Foreach loop:\n";
foreach ($colors as $color) {
    echo $color . " ";
}


echo "\n\n";
echo "\n";

echo "<br/>";
// Nesting loops: Nested loops demonstrate loops within loops, which are useful for dealing with multi-dimensional data or generating complex patterns.
echo "Nesting loops:\n";
for ($row = 1; $row <= 3; $row++) {
    for ($col = 1; $col <= 3; $col++) {
        echo "Row: $row, Column: $col\n";
    }
}
echo "\n";

echo "<br/>";
// Break statement: The break statement terminates the loop prematurely when a certain condition is met.
echo "Break statement:\n";
for ($i = 1; $i <= 10; $i++) {
    if ($i == 6) {
        break; // Exits the loop when $i equals 6
    }
    echo $i . " ";
}

echo "\n\n";
echo "<br/>";
// Continue statement: The continue statement skips the current iteration and moves to the next iteration of the loop.
echo "Continue statement:\n";
for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        continue; // Skips the iteration when $i equals 3
    }
    echo $i . " ";
}

echo "\n";

