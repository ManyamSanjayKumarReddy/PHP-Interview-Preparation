<?php
// Creating an associative array with person details
$person = array(
    "name" => "John",
    "age" => 30,
    "occupation" => "Developer"
);

// Accessing values using keys using foreach
foreach ($person as $key => $value) {
    echo "$key: $value<br>";
}
// Output:
// name: John
// age: 30
// occupation: Developer

// Adding a new key-value pair to the associative array
$person["city"] = "New York";

// Modifying an existing value using the key
$person["occupation"] = "Software Engineer";

// Iterating through the modified associative array
foreach ($person as $key => $value) {
    echo "$key: $value<br>";
}
// Output:
// name: John
// age: 30
// occupation: Software Engineer
// city: New York

// Checking if a key exists in the associative array
if (array_key_exists("job", $person)) {
    echo "Job key exists<br>";
} else {
    echo "Job key does not exist<br>";
}

// Removing a key-value pair from the associative array
unset($person["city"]);

// Iterating through the array after removing the key
foreach ($person as $key => $value) {
    echo "$key: $value<br>";
}
// Output:
// name: John
// age: 30
// occupation: Software Engineer

// Getting all keys and values from the associative array
$keys = array_keys($person);
$values = array_values($person);

foreach ($keys as $key) {
    echo "Key: $key<br>";
}
// Output:
// Key: name
// Key: age
// Key: occupation

foreach ($values as $value) {
    echo "Value: $value<br>";
}
// Output:
// Value: John
// Value: 30
// Value: Software Engineer
?>
