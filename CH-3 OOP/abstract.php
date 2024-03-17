<?php

abstract class A
{
    abstract function display();

    function displayA()
    {
        echo "This is a common method/function in abstract class.\n";
    }
}
// Implement the abstract class in a concrete class
class B extends A
{
   
    function display()
     {
        $a= "this";
        echo $a . " "."Implementation of the abstract method in the concrete class B.\n";
    }
}

$obj = new B();
$obj->display();
$obj->displayA();
