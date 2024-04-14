<?php

class A {
    // Constructor
    public function __construct() {
        echo "Class A :Constructor called\n";
        
    }

    // Destructor
    public function __destruct() {
        echo "class A: Destructor called\n";
    }
}

// Create an object of A
$objA = new A();

