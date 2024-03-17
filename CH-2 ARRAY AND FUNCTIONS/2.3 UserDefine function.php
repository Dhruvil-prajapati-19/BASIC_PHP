<?php
// user define fumction

function display()
{
    echo " hello World";
}

function displayParameter($a)
{
    echo "\n hello $a , \n how are you ";
}

display();
displayParameter("Dhruv");
error_reporting(E_ALL);

// call by value
function Vincrement($a) 
{
    echo " call by value \n";
    echo "Before increment: $a\n"; //10
    $a++;
    echo "Inside function: $a\n"; //11
    return $a;
}


$a = 10;
Vincrement($a);
echo "After (CBV) function call: $a\n"; //10



// call by refence 

function Rincrement(&$a) 
{
    echo " call by refence \n "; 
    echo "Before increment: $a\n";  //5
    $a++;      
    echo "Inside function: $a\n"; //6
    return $a;
}

$a = 5;
Rincrement($a);
echo "After (CBR) function call: $a\n";  //6

/*
 call by value 
 10
 11
 10

 call by refrence

 5
 6
 6

*/

// Variable function 

function hello(){
    echo "Hello World";
 }
 $var="Hello";
 $var();

//Variable length functions
/*
1. **`func_num_args()`**: Counts the number of arguments passed to a function.
2. **`func_get_arg($i)`**: Retrieves the value of a specific argument based on its position (`$i`) in the argument list.
3. **`func_get_args()`**: Retrieves all arguments passed to a function as an array.
*/ 
function maths()
 {
    $numArgs = func_num_args();  // Get the number of arguments
    $maths = 0;
    for ($i = 0; $i < $numArgs; $i++)
     {
        $arg = func_get_arg($i); // Get the value of the argument at position $i

        $maths = $maths + $arg;
     }
    return $maths;
}

// Call the maths function with different numbers of arguments
echo "maths of numbers: " . maths(1, 2, 3) . "\n"; 
echo "maths of numbers: " . maths(10, 20) . "\n";

function maths_as_array() 
{
    $args = func_get_args(); // Get all arguments as an array
    $maths = 0;
    foreach ($args as $arg)
     {
        $maths = $maths + $arg;
     }

    // Return the maths
    return $maths;
}
// Call the maths function with different numbers of arguments
echo "maths of numbers: " . maths_as_array(1, 2, 3, 4) . "\n"; // Calculates maths of 1, 2, 3, 4, and 5
echo "maths of numbers: " . maths_as_array(10, 20, 30) . "\n"; // Calculates maths of 10, 20, and 30


