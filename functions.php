<?php
// Defining and using functions
function add($a, $b) {
    $sum = $a + $b;
    return $sum;
}

$result = add(5, 3); // Calling the function with $a = 5 and $b = 3
echo "Result: $result<br>";
// Output: Result: 8

function calculateAverage($numbers) {
    $total = array_sum($numbers);
    $count = count($numbers);
    if ($count > 0) {
        $average = $total / $count;
        return $average;
    } else {
        return "No numbers provided.";
    }
}

$numbers = array(2, 4, 6, 8, 10);
$avg = calculateAverage($numbers);
echo "Average: $avg<br>";
// Output: Average: 6

function checkEvenOdd($number) {
    if ($number % 2 == 0) {
        return "Even";
    } else {
        return "Odd";
    }
}

$num1 = 7;
$evenOdd1 = checkEvenOdd($num1);

$num2 = 12;
$evenOdd2 = checkEvenOdd($num2);

echo "$num1 is $evenOdd1<br>"; // Output: 7 is Odd
echo "$num2 is $evenOdd2<br>"; // Output: 12 is Even

// Working with strings and string functions
$string = "Hello, World!";

$length = strlen($string);
echo "Length of the string: $length<br>"; // Output: Length of the string: 13

$lowercase = strtolower($string);
$uppercase = strtoupper($string);
echo "Lowercase: $lowercase<br>"; // Output: Lowercase: hello, world!
echo "Uppercase: $uppercase<br>"; // Output: Uppercase: HELLO, WORLD!

$substring = substr($string, 7, 5);
echo "Substring: $substring<br>"; // Output: Substring: World

$replacedString = str_replace("World", "Universe", $string);
echo "Replaced: $replacedString<br>"; // Output: Replaced: Hello, Universe!

$position1 = strpos($string, "o");
$position2 = strrpos($string, "o");
echo "First 'o' at position: $position1<br>"; // Output: First 'o' at position: 4
echo "Last 'o' at position: $position2<br>"; // Output: Last 'o' at position: 8

$trimmed = trim("   Spaces    ");
echo "Trimmed: $trimmed<br>"; // Output: Trimmed: Spaces

$padded = str_pad($string, 20, "*", STR_PAD_BOTH);
echo "Padded: $padded<br>"; // Output: Padded: **Hello, World!***

$repeated = str_repeat("PHP ", 3);  
echo "Repeated: $repeated<br>"; // Output: Repeated: PHP PHP PHP

$charCount = count_chars($string, 1);
foreach ($charCount as $ascii => $count) {
    $character = chr($ascii);
    echo "Character '$character' appears $count times.<br>";
}

$string = "   Hello, PHP!   ";

$reversed = strrev($string);
echo "Reversed: $reversed<br>"; // Output: Reversed:    !PHP ,olleH

$words = explode(" ", $string);
$joined = implode("-", $words);
echo "Exploded array: ";
print_r($words);
echo "Joined with '-': $joined<br>"; // Output: Joined with '-': Hello,-PHP!

$negativeSubstring = substr($string, -6);
echo "Negative Substring: $negativeSubstring<br>"; // Output: Negative Substring: PHP!

$arrayFromString = str_split($string);
$stringFromArray = implode("", $arrayFromString);
echo "Array from string: ";
print_r($arrayFromString);
echo "String from array: $stringFromArray<br>";

$encoded = htmlentities($string);
$decoded = html_entity_decode($encoded);
echo "Encoded: $encoded<br>"; // Output: Encoded: &nbsp;&nbsp;&nbsp;Hello, PHP!&nbsp;&nbsp;&nbsp;
echo "Decoded: $decoded<br>"; // Output: Decoded:    Hello, PHP!
?>
