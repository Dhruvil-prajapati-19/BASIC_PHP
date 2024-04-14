<?php

// Define an interface
interface display
{
    function displayI(); // Method declaration without implementation
}

// Implement the interface in a class
class A implements display
{
    function displayI()
    {
        echo "Interface method implementation in class B\n";
    }
    
    function displayB()
    {
        echo "Class B method\n";
    }
}

// Instantiate the class
$obj = new A();
// Call the interface method
$obj->displayI(); // Outputs: Interface method implementation in class B
// Call the class method
$obj->displayB(); // Outputs: Class B method

