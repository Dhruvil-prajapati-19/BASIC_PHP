<?php
echo "1. Single quoted strings\n";

//Single Quoted Strings (''):
$name = 'Dhurvil';
echo 'Hello, $name'; // Output: Hello, $name

echo"\n";
echo "2. Double quoted strings\n";

// Double Quoted Strings (""):

$name = 'Dhurvil';
echo "Hello, $name"; // Output: Hello, Dhurvil

echo"\n";
echo "3. Heredoc strings\n";
// Heredoc Syntax (<<<):
/*
Heredoc syntax allows you to declare strings that span multiple lines without the need for escaping.
The syntax starts with <<< followed by an identifier (often in uppercase),
and ends with the same identifier on a line by itself.
*/
$name = 'Dhurvil';
$message = <<<EOT
Hello, $name!
This is a multiline string.
EOT;
echo $message;
/*
Output:
Hello, Dhurvil!
This is a multiline string.
*/
echo"\n";
echo "4. Nowdoc strings\n";

// Nowdoc Syntax (<<<''):

/*
 Nowdoc syntax is similar to Heredoc syntax, but 
it behaves like single quoted strings.
It does not interpret escape sequences or variable names. 
*/
$name = 'Dhurvil';
$message = <<<'EOT'
Hello, $name!
This is a multiline string.
EOT;
echo $message;
/*
Output:
Hello, $name!
This is a multiline string.
*/




