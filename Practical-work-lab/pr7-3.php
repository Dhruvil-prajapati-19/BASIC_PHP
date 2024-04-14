<?php

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

$objb = new B();
$objb->displayA();
$objb->displayB();

