<?php
// user define fumction

function display()
{
    echo " hello World";
}

function displayParameter($a)
{
    echo "\n hello $a , \n how are you ";
}

display();
displayParameter("Dhruv");
error_reporting(E_ALL);

?>