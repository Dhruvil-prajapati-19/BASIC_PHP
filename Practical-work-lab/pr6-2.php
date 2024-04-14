<?php
print "<h1> Four String Function  </h1>";
function isLowercase($str) {
    echo "<h2>Check if the given string is lowercase or not</h2>";
    echo (strtolower($str) === $str) ? "true" : "false";
}
function reverseString($str) {
    echo "<h2>Reverse the given string</h2>";
    echo strrev($str);
}
function removeWhiteSpaces($str) {
    echo "<h2>Remove white spaces from the given string</h2>";
    echo str_replace(' ', '', $str);
}
function replaceWord($str, $search, $replace) 
{
    echo "<h2>Replace the given word from the given string</h2>";
    echo str_replace($search, $replace, $str);
}
$string = "hello! how are you";
$search = "how";
$replace = "who";

isLowercase($string); // Output: "true"
reverseString($string); // Output: "dlrow olleh"
removeWhiteSpaces($string); // Output: "helloworld"
replaceWord($string, $search, $replace); // Output: "hello universe"

