<?php

function minimumNotes($amount)
{
    $rupees = [100, 50, 20, 10, 5, 2, 1];
    $count = 0;

    foreach ($rupees as $note) {
        if ($amount >= $note) {
            $count = floor($amount / $note);
            $count += $count;
            $amount -= $count * $note;
        }
    }

    return $count;
}

$amount = 256;
echo "Amount: Rs. $amount\n";
echo"<br/>";
echo "Minimum aber of notes: " . minimumNotes($amount) . "\n";

?>
