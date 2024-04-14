<?php
$cars = [
    "Suzuki" => ["Swift", "Alto", "Baleno", "Brezza"],
    "Tata" => ["Safari", "Nexon", "Tigor", "Tiago"],
    "Mahindra" => ["XUV700", "XUV300", "Bolero"],
    "Hyundai" => ["120", "Verna", "Venue", "Creta"]
];

foreach ($cars as $company => $models) {
    echo "$company:<br>";
    echo implode(", ", $models) . "<br><br>";
}
?>