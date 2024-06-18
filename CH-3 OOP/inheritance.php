<?php
<?php 
// Single-level inheritance // ab
class A
{
    public function displayA()
    {
        echo "Class A function\n";
    }
}

class B extends A
{
    public function displayB()
    {
        echo "Class B function\n";
    }
}

// Creating an object of class B 
$objB = new B();
$objB->displayA(); // Calls method from class A
$objB->displayB(); // Calls method from class B

// Multilevel inheritance //xyz
// Grandparent class
class X
{
    public function displayX()
    {
        echo "Class X function\n";
    }
}

// Parent class inheriting from class X
class Y extends X
{
    public function displayY()
    {
        echo "Class Y function\n";
    }
}

// Child class inheriting from class Y
class Z extends Y
{
    public function displayZ()
    {
        echo "Class Z function\n";
    }
}

$objC = new Z();
$objC->displayX(); // Calls method from class X (grandparent)
$objC->displayY(); // Calls method from class Y (parent)
$objC->displayZ(); // Calls method from class Z (child)

// Multiple inheritance using interfaces //QRP
interface Q
{
    public function displayQ();
}

interface R
{
    public function displayR();
}

class P implements Q, R
{
    public function displayQ()
    {
        echo "Interface Q function\n";
    }

    public function displayR()
    {
        echo "Interface R function\n";
    }
}

$objP = new P();
$objP->displayQ(); // Output: Interface Q function
$objP->displayR(); // Output: Interface R function

// Multiple inheritance using traits //EFG
trait E 
{
    public function displayE()
    {
        echo "Trait E function\n";
    }
}

trait F
{
    public function displayF()
    {
        echo "Trait F function\n";
    }
}

class G
{
    use E, F;
}

$objG = new G();
$objG->displayE(); // Output: Trait E function
$objG->displayF(); // Output: Trait F function

// Hierarchical inheritance //HIJ
// Parent class
class H
{
    public function displayH()
    {
        echo "Class H function\n";
    }
}

// Child class 1 inheriting from class H
class I extends H
{
    public function displayI()
    {
        echo "Class I function\n";
    }
}

// Child class 2 inheriting from class H
class J extends H
{
    public function displayJ()
    {
        echo "Class J function\n";
    }
}

$objI = new I();
$objJ = new J();

$objI->displayH(); // Calls method from class H (parent)
$objI->displayI(); // Calls method from class I (child)

$objJ->displayH(); // Calls method from class H (parent)
$objJ->displayJ(); // Calls method from class J (child)
