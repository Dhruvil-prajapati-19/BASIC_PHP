<?php
function multiplicationTable($aber) {
    echo "Multiplication table for $aber:\n";
    for ($i = 1; $i <= 10; $i++) {
        echo "$aber x $i = " . ($aber * $i) . "\n";
    }
}

// Change the aber below to generate multiplication table for a different aber
$aber = 7;
multiplicationTable($aber);
?>
