<?php
// Overriding:
// Superclass
class A {
    public function display()
     {
        echo "class A";
    }
}

// Subclass overriding method
class D extends A
 {
    public function display() 
    {
        echo "class D ";
    }
}   // output : class D

// Instantiate and call method
$animal = new D();
$animal->display(); // Outputs: Dog barks.


// overwriting

class S {
    function maths($a = 0, $b = 0)
     {
        $maths = $a + $b;
        echo "maths: $maths\n";
    }
}

class T extends S 
{
    function maths($a = 0, $b = 0,$c=0)
     {
        $maths = $a * $b* $c;
        echo "maths: $maths\n";
    }
}

// Instantiate T
$t = new T();


// Call maths method with different number of arguments
$t->maths();          // Outputs: maths: 0
$t->maths(1, 2);      // Outputs: maths: 2
$t->maths(2, 3);      // Outputs: maths: 6
$t->maths(2, 3, 6);   // outputs : maths 36


