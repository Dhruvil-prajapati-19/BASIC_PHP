<?php

class A {
    private $attribute;

    // Setter method to set the private attribute
    public function __set($name, $value) {
        if ($name === 'attribute') {
            $this->attribute = $value;
        } else {
            echo "Error: $name is not a valid property\n";
        }
    }

    // Getter method to get the private attribute
    public function __get($name) {
        if ($name === 'attribute') {
            return $this->attribute;
        } else {
            echo "Error: $name is not a valid property\n";
            return null;
        }
    }
}

// Create an object of A
$obj = new A();

// Set the private attribute using __set()
$obj->attribute = "Value";

// Get the private attribute using __get()
echo "Attribute value: " . $obj->attribute . "\n";

// Try accessing an invalid property
echo "Trying to access an invalid property:\n";
echo $obj->invalidProperty;

?>
