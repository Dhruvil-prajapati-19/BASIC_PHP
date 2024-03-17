<?php

// Magic constant __LINE__
echo "__LINE__: " . __LINE__ . "\n"; 

// Magic constant __FILE__
echo "__FILE__: " . __FILE__ . "\n"; 

// Magic constant __DIR__
echo "__DIR__: " . __DIR__ . "\n"; 

// Magic constant __FUNCTION__
function exampleFunction()
 {
    echo "__FUNCTION__: " . __FUNCTION__ . "\n"; 
}
exampleFunction();


// Magic constant __CLASS__
class ExampleClass {
    function showClassName() {
        echo "__CLASS__: " . __CLASS__ . "\n"; 
    }
}
$exampleObj = new ExampleClass();
$exampleObj->showClassName();

// Magic constant __TRAIT__
trait ExampleTrait {
    function showTraitName() {
        echo "__TRAIT__: " . __TRAIT__ . "\n"; 
    }
}
$exampleTraitObj = new class {
    use ExampleTrait;
};
$exampleTraitObj->showTraitName();

// Magic constant __METHOD__
class AnotherClass {
    function exampleMethod() {
        echo "__METHOD__: " . __METHOD__ . "\n"; 
    }
}
$anotherObj = new AnotherClass();
$anotherObj->exampleMethod();

// Magic constant __NAMESPACE__
echo "__NAMESPACE__: " . __NAMESPACE__ . "\n"; 

