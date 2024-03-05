<?php
$m1 = array(
    array(2, 2, 2),
    array(2, 2, 2),
    array(2, 2, 2)
);

$m2 = array(
    array(2, 2, 2),
    array(2, 2, 2),
    array(2, 2, 2)
);

$sum = array();
    for ($i = 0; $i < 3; $i++)
    {
        for ($j = 0; $j < 3; $j++)
        {
        
            $sum[$i][$j] = $m1[$i][$j] + $m2[$i][$j]; // output of this line 444444444
            
        }
    }

// Output the result matrix
echo "Result of matrix addition:<br>";
for ($i = 0; $i < 3; $i++) 
{
    for ($j = 0; $j < 3; $j++)
     {
        echo $sum[$i][$j] . " ";
    }
    echo "<br>";
}

?>
