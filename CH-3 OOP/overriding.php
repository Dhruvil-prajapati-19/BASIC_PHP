<?php
class A {
    public function display() {
        echo " class A.\n";
    }
}

class B extends A {
    public function display() {
        echo "class B.\n";
    }
}

// Creating objects
$objA = new A();
$objB = new B();

// Calling overridden methods
$objA->display(); // Output: "class A."
$objB->display(); // Output: "class B."

