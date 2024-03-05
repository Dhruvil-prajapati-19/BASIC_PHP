<?php
class Person 
{
  private $name;
  private $age;

  public function setdata($name, $age) 
  {
    $this->name = $name;
    $this->age = $age;
  }

  public function getdata() 
  {
    return $this->name . ' ' . $this->age; // Added space between name and age
  }
}

$person = new Person();
$person->setdata("jay", 30); // Added $ before person variable
echo $person->getdata(); // Added echo to display the result

