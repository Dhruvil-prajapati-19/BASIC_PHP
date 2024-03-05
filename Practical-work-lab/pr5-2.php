<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practical-5</title>
</head>
<body>
    <?php
    // Array to be sorted
    $data = array(56, 55, 44, 11, 22, 77, 88);

    // Sorting with function
    sort($data);
    echo "Sorted array with function: ";
    foreach ($data as $value) {
        echo $value . " ";
    }
    echo "<br>";

    // Sorting without  function   

    
    function bubbleSort(&$arr) 
    {
        $n = count($arr);
        for ($i = 0; $i < $n - 1; $i++) {
            for ($j = 0; $j < $n - $i - 1; $j++) 
            {
                // Swap if current element is greater than the next
                if ($arr[$j] > $arr[$j + 1])
                 {
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $temp;
                }
            }
        }
    }

    // Call bubbleSort function to sort the array
    bubbleSort($data);

    // Output the sorted array
    echo "Sorted array without  function: ";
    foreach ($data as $value) {
        echo $value . " ";
    }
    ?>
</body>
</html>
