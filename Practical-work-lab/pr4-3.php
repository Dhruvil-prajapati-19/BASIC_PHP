<?php
function fibonacci($n) {
    $fibonacci = [];
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;
    
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    
    return $fibonacci;
}

$terms = 10; // Change this to the desired number of Fibonacci terms

$fibonacciSequence = fibonacci($terms);

echo "Fibonacci series up to $terms terms:\n";
foreach ($fibonacciSequence as $term) {
    echo "$term ";
}
?>
