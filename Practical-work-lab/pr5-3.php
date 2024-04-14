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

$maths = array();
    for ($i = 0; $i < 3; $i++)
    {
        for ($j = 0; $j < 3; $j++)
        {
        
            $maths[$i][$j] = $m1[$i][$j] + $m2[$i][$j]; // output of this line 444444444
            
        }
    }

// Output the result matrix
echo "Result of 3*3 matrix addition:<br>"; 
for ($i = 0; $i < 3; $i++) 
{
    for ($j = 0; $j < 3; $j++)
     {
        echo $maths[$i][$j] . " ";
    }
    echo "<br>";
}


