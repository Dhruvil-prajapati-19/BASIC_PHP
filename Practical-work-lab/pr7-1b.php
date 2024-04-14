<?php
class A {
    public $name = "Dhruv";
}
$abc = new A();
function greet($abc) 
{
    echo "Hello, " . $abc->name . "!\n";
}

// Call the greet function with the object
greet($abc);


