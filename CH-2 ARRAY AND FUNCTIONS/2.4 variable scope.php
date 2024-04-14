<?php

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