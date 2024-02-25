<?php
// Function to calculate GTU Grade based on marks
function calculateGrade($marks)
{
    if ($marks >= 85 && $marks <= 100) {
        return "AA";
    } elseif ($marks >= 75 && $marks <= 84) {
        return "AB";
    } elseif ($marks >= 65 && $marks <= 74) {
        return "BB";
    } elseif ($marks >= 55 && $marks <= 64) {
        return "BC";
    } elseif ($marks >= 45 && $marks <= 54) {
        return "CC";
    } elseif ($marks >= 40 && $marks <= 44) {
        return "CD";
    } elseif ($marks >= 35 && $marks <= 39) {
        return "DD";
    } else {
        return "FF (FAIL)";
    }
}

// Function to display the result in tabular format
function displayResult($marks)
{
    echo "<table border='1'>";
    echo "<tr><th>Subject</th><th>Marks</th><th>GTU Grade</th></tr>";

    foreach ($marks as $subject => $mark) {
        echo "<tr>";
        echo "<td>$subject</td>";
        echo "<td>$mark</td>";
        echo "<td>" . calculateGrade($mark) . "</td>";
        echo "</tr>";
    }

    echo "</table>";
}

// Example marks for subjects
$subjectMarks = [
    "Subject 1" => 78,
    "Subject 2" => 92,
    "Subject 3" => 55,
    "Subject 4" => 40
];

// Displaying the result
displayResult($subjectMarks);
?>