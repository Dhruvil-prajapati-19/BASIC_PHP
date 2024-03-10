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
function sum()
 {
    $numArgs = func_num_args();  // Get the number of arguments
    $sum = 0;
    for ($i = 0; $i < $numArgs; $i++)
     {
        $arg = func_get_arg($i); // Get the value of the argument at position $i

        $sum = $sum + $arg;
     }
    return $sum;
}

// Call the sum function with different numbers of arguments
echo "Sum of numbers: " . sum(1, 2, 3) . "\n"; 
echo "Sum of numbers: " . sum(10, 20) . "\n";

function sum_as_array() 
{
    $args = func_get_args(); // Get all arguments as an array
    $sum = 0;
    foreach ($args as $arg)
     {
        $sum = $sum + $arg;
     }

    // Return the sum
    return $sum;
}
// Call the sum function with different numbers of arguments
echo "Sum of numbers: " . sum_as_array(1, 2, 3, 4) . "\n"; // Calculates sum of 1, 2, 3, 4, and 5
echo "Sum of numbers: " . sum_as_array(10, 20, 30) . "\n"; // Calculates sum of 10, 20, and 30

//  scope of function

$s=10; // global variable
$s1=25;// global variable
$st=array("Hello",10, 20,); // global variable include array
{
    echo" Global: $s  \n"; // 
}
function scope()
 {
    $s=5;                     // local variable 
    echo"Loal var : $s \n "; 
    // echo"Global var: $s1"; here we cant use s1 or global varible directly
    global $s1;
    global $s;
    echo "Global in var s1 : $s1 \n";
    echo "Global in var s  : $s \n";
    $s2=$GLOBALS['st']; // print_r($s2)
    
    foreach ($s2 as $items) // here another way to access array elements
    {
      echo" array elements: $items \n"; 
    }
 }
scope();

