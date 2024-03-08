<?php
print "normal if else";
$x = 10;
if ($x > 0) {
    echo "Positive";
} else {
    echo "Non-positive";
}

echo "\n";
echo "\n";

// nested
print "nested if else";
$x = 10;
if ($x > 0) {
    if ($x % 2 == 0) {
        echo "Positive even";
    } else {
        echo "Positive odd";
    }
} else {
    echo "Non-positive";
}

// ladder if else

echo "\n";
echo "\n";

print "ladder if else";
$y = 5;
if ($y < $x) {
    echo "max x";
} elseif ($y > $x) {
    echo "max y";
} else {
    echo "both equal";
}

echo "\n";
echo "\n";
//swich case

print "swich-case";
$dayno = 0;
switch ($dayno) {
    case 0:
        echo "Today is sunday";
        break;
    case 1:
        echo "Today is monday";
        break;
    default:
        echo "It's neither sunday nor monday";
}

echo "\n";
echo "\n";
// ternary opratoer
$age = 10;
$ternary = ($age < 18) ? "child" : "adult";
echo "ternary:" . $ternary;

?>
