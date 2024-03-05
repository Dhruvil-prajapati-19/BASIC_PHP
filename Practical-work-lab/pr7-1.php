<?php

class A {
    // Constructor
    public function __construct() {
        echo "Class A :Constructor called\n";
        $a=5;$b=6;$sum=0;$sum=$a+$b; echo "sum:" . $sum . "\n"; 
    }

    // Destructor
    public function __destruct() {
        echo "class A: Destructor called\n";
    }
}

// Create an object of A
$objA = new A();

