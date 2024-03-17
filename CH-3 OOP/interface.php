<?php

// Define an interface
interface A{
    function displayI(); // Method declaration without implementation
}

// Implement the interface in a class
class B implements A{
    function displayI(){
        echo "Interface method implementation in class B\n";
    }
    
    function displayB(){
        echo "Class B method\n";
    }
}

// Instantiate the class
$obj = new B();

// Call the interface method
$obj->displayI(); // Outputs: Interface method implementation in class B

// Call the class method
$obj->displayB(); // Outputs: Class B method

