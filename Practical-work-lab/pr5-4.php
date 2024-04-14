<?php

function encodeToMorse($message)
{
    $morseCode = [
        'A' => '.-', 'B' => '-...', 'C' => '-.-.', 'D' => '-..', 'E' => '.', 'F' => '..-.', 'G' => '--.',
        'H' => '....', 'I' => '..', 'J' => '.---', 'K' => '-.-', 'L' => '.-..', 'M' => '--', 'N' => '-.',
        'O' => '---', 'P' => '.--.', 'Q' => '--.-', 'R' => '.-.', 'S' => '...', 'T' => '-', 'U' => '..-',
        'V' => '...-', 'W' => '.--', 'X' => '-..-', 'Y' => '-.--', 'Z' => '--..',
        '0' => '-----', '1' => '.----', '2' => '..---', '3' => '...--', '4' => '....-', '5' => '.....',
        '6' => '-....', '7' => '--...', '8' => '---..', '9' => '----.',
        '.' => '.-.-.-', ',' => '--..--', '?' => '..--..', "'" => '.----.', '!' => '-.-.--', '/' => '-..-.',
        '(' => '-.--.', ')' => '-.--.-', '&' => '.-...', ':' => '---...', ';' => '-.-.-.', '=' => '-...-',
        '+' => '.-.-.', '-' => '-....-', '_' => '..--.-', '"' => '.-..-.', '$' => '...-..-', '@' => '.--.-.',
        ' ' => '/'
    ];

    $encodedMessage = '';

    $message = strtoupper($message);

    for ($i = 0; $i < strlen($message); $i++) {
        $char = $message[$i];
        if (isset($morseCode[$char])) {
            $encodedMessage .= $morseCode[$char] . ' ';
        }
    }

    return trim($encodedMessage);
}

// Example usage:
$message = "Hello,how are you?";
$encodedMessage = encodeToMorse($message);
echo "Original Message: $message";
echo"<br/>";
echo "Encoded Message: $encodedMessage";

