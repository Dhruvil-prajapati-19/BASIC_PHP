<?php
class Person 
{
  private $name; // Private properties to store name and age
  private $age;
  
  public function getdata($name, $age) 
  {
    print($name);
    print "\n";
    print($age);
  }
}

$person = new Person();
$person->getdata("Dhruv", 30);

