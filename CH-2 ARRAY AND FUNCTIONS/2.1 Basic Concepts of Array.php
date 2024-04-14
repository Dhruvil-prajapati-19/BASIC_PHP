
<?php
// create array

$array = array(10, 20, "Null", 'Null', 0, true);
foreach ($array as $item)
 {
    echo "item is: $item \n ";
}
 // index array
 
$colors = array("Red", "Green", "Blue");
echo $colors[0]; // Output: Red
echo $colors[1]; // Output: Green
echo $colors[2]; // Output: Blue

// Associative Arrays:
$student = array("name" => "Dhurvil", "age" => 20, "grade" => "A");
echo $student["name"]; // Output: Dhurvil
echo $student["age"]; // Output: 20
echo $student["grade"]; // Output: A


// Multidimensional Arrays:
$cars = array(
    array("brand" => "Toyota", "model" => "Camry", "year" => 2020),
    array("brand" => "Honda", "model" => "Civic", "year" => 2019),
    array("brand" => "Ford", "model" => "Mustang", "year" => 2021)
);
echo $cars[0]["brand"]; // Output: Toyota
echo $cars[1]["model"]; // Output: Civic
echo $cars[2]["year"]; // Output: 2021
 


