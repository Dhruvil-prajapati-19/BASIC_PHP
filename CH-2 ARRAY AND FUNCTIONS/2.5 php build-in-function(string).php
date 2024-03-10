<?php
 // Define a sample string
 $string = " Hello, World! ";
 
 // char() - Get the character at a specific position
 echo "Character at position 4: " . $string[4] . "\n";
 
 // ord() - Get ASCII value of the first character
 echo "ASCII value of the first character: " . ord($string[0]) . "\n";
 
 // strlen() - Get the length of the string
 echo "Length of the string: " . strlen($string) . "\n";
 
 // trim() - Remove whitespace from the beginning and end of the string
 echo "Trimmed string: " . trim($string) . "\n";
 
 // ltrim() - Remove whitespace from the beginning of the string
 echo "Left trimmed string: " . ltrim($string) . "\n";
 
 // rtrim() - Remove whitespace from the end of the string
 echo "Right trimmed string: " . rtrim($string) . "\n";
 
 // join() (PHP 7.4+) - Join array elements with a string
 $words = ["Hello", "World", "!"];
 echo "Joined string: " . join(" ", $words) . "\n";
 
 // substr() - Get a part of the string
 echo "Substring from position 3: " . substr($string, 3) . "\n";
 
 // str_replace() - Replace all occurrences of a substring with another substring
 echo "String after replacement: " . str_replace("World", "Universe", $string) . "\n";
 
 // str_split() - Split a string into an array of characters
 $characters = str_split($string);
 echo "Characters array: ";
 print_r($characters);
 
 // str_word_count() - Count the number of words in a string
 echo "Number of words: " . str_word_count($string) . "\n";
 
 // strcmp() - Compare two strings (case-sensitive)
 echo "Comparison result: " . strcmp("hello", "HELLO") . "\n";
 
 // strcasecmp() - Compare two strings (case-insensitive)
 echo "Case-insensitive comparison result: " . strcasecmp("hello", "HELLO") . "\n";
 
 // strpos() - Find the position of the first occurrence of a substring
 echo "Position of 'World': " . strpos($string, "World") . "\n";
 
 // stripos() - Find the position of the first occurrence of a substring (case-insensitive)
 echo "Position of 'world': " . stripos($string, "world") . "\n";
 
 // strrev() - Reverse a string
 echo "Reversed string: " . strrev($string) . "\n";
 
 // strtolower() - Convert a string to lowercase
 echo "Lowercase string: " . strtolower($string) . "\n";
 
 // strtoupper() - Convert a string to uppercase
 echo "Uppercase string: " . strtoupper($string) . "\n";
 
 // str_shuffle() - Randomly shuffle a string
 echo "Shuffled string: " . str_shuffle($string) . "\n";
 
 