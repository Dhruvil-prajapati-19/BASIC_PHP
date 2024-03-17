<!DOCTYPE html>
<html>
<head>
    <title>String Length and Word Count Calculator</title>
</head>
<body>

<h2>String Length and Word Count Calculator</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Enter a string: <br>
    <textarea name="inputString" rows="4" cols="50"></textarea>
    <br>
    <input type="submit" name="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputString = $_POST['inputString'];
    $length = calculateStringLength($inputString);
    $wordCount = countWords($inputString);
    
    echo "<br>Length of the string: " . $length . "<br>";
    echo "Number of words in the string: " . $wordCount;
}

function calculateStringLength($str) {
    $length = 0;
    $chars = str_split($str); // Convert string to array of characters
    
    foreach ($chars as $char) {
        $length++;
    }
    
    return $length;
}

function countWords($str) {
    $wordCount = 0;
    $words = explode(" ", $str); // Split string into words
    
    foreach ($words as $word) {
        // Exclude empty strings (multiple spaces) from the word count
        if (!empty(trim($word))) {
            $wordCount++;
        }
    }
    
    return $wordCount;
}
?>

</body>
</html>
