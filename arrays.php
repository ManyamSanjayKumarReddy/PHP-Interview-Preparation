<?php
// Creating an array of fruits
$fruits = array("Apple", "Banana", "Orange");

// Counting the number of elements in the array
$numberOfFruits = count($fruits);
echo "Number of fruits: " . $numberOfFruits . "\n";
// Output: Number of fruits: 3

// Adding an element to the end of the array
array_push($fruits, "Grapes");

// Printing the modified array
print_r($fruits);
// Output: Array ( [0] => Apple [1] => Banana [2] => Orange [3] => Grapes )

// Removing and returning the last element from the array
$lastFruit = array_pop($fruits);
echo "Removed fruit: " . $lastFruit . "\n";
// Output: Removed fruit: Grapes

// Printing the array after popping
print_r($fruits);
// Output: Array ( [0] => Apple [1] => Banana [2] => Orange )

// Removing and returning the first element from the array
$firstFruit = array_shift($fruits);
echo "Removed fruit: " . $firstFruit . "\n";
// Output: Removed fruit: Apple

// Printing the array after shifting
print_r($fruits);
// Output: Array ( [0] => Banana [1] => Orange )

// Adding an element to the beginning of the array
array_unshift($fruits, "Mango");

// Printing the modified array
print_r($fruits);
// Output: Array ( [0] => Mango [1] => Banana [2] => Orange )


// Creating an array of numbers
$numbers = array(1, 2, 3, 4, 5);

// Reversing the array
$reversedNumbers = array_reverse($numbers);

// Printing the original and reversed arrays
echo "Original array: ";
print_r($numbers);
// Output: Original array: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )

echo "Reversed array: ";
print_r($reversedNumbers);
// Output: Reversed array: Array ( [0] => 5 [1] => 4 [2] => 3 [3] => 2 [4] => 1 )
?>

