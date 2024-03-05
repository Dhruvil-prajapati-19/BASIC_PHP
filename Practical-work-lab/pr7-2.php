<?
class Person {
  private $name;
  private $age;

  public function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
  }

  public function setName($name) {
    $this->name = $name;
  }

  public function getName() {
    return $this->name;
  }

  public function setAge($age) {
    $this->age = $age;
  }

  public function getAge() {
    return $this->age;
  }
}

$person = new Person('John Doe', 30);

// Set the person's name using the set attribute method
$person->setName('Jane Doe');

// Get the person's name using the get attribute method
echo $person->getName(); // Outputs 'Jane Doe'

// Set the person's age using the set attribute method
$person->setAge(31);

// Get the person's age using the get attribute method
echo $person->getAge(); // Outputs 31