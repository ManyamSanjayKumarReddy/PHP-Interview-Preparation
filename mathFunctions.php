<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Functions in PHP</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="valueofx">Enter the value of x :</label>
        <input type="text" name="valueofx" id="valueofx">
        <br><br>
        <label for="valueofy">Enter the value of y :</label>
        <input type="text" name="valueofy" id="valueofy">
        <br><br>
        <label for="valueofz">Enter the value of z :</label>
        <input type="text" name="valueofz" id="valueofz">
        <br><br>
        <input type="submit" value="Submit">
        <br>
        <hr>
        <br>
    </form>
</body>
</html>

<?php
    // Retrieve values from the form
    $x = $_POST["valueofx"];
    $y = $_POST["valueofy"];
    $z = $_POST["valueofz"];
    $total = null;

    // Example 1: Absolute value of x
    // $total = abs($x);

    // Example 2: Round x to 2 decimal places
    $total = round($x, 2);

    // Example 3: Floor value of x
    // $total = floor($x);

    // Example 4: Ceil value of x
    // $total = ceil($x);

    // Example 5: x raised to the power of y
    // $total = pow($x, $y);

    // Example 6: Square root of x
    // $total = sqrt($x);

    // Example 7: Maximum value among x, y, and z
    // $total = max($x, $y, $z);

    // Example 8: Minimum value among x, y, and z
    // $total = min($x, $y, $z);

    // Example 9: Value of π (pi)
    // $total = pi();

    // Example 10: Generate a random number between 1 and 500
    // $total = rand(1, 500);

    echo "Result: {$total}";
?>
