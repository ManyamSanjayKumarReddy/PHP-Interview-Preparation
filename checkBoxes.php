<!DOCTYPE html>
<html>
<head>
    <title>Checkbox Example</title>
</head>
<body>
    <form method="post" action="index.php">
        <label for="food1">Food 1:</label>
        <input type="checkbox" id="food1" name="foods[]" value="Food 1"><br>
        <label for="food2">Food 2:</label>
        <input type="checkbox" id="food2" name="foods[]" value="Food 2"><br>
        <label for="food3">Food 3:</label>
        <input type="checkbox" id="food3" name="foods[]" value="Food 3"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["foods"]) && is_array($_POST["foods"])) {
        $allFoods = array("Food 1", "Food 2", "Food 3");
        $selectedFoods = $_POST["foods"];

        echo "You selected: ";
        foreach ($allFoods as $food) {
            if (in_array($food, $selectedFoods)) {
                echo "$food, ";
            } else {
                echo "Not $food, ";
            }
        }
    } else {
        echo "Please select at least one food.";
    }
}
?>
