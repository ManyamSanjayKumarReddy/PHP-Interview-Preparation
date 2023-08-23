<!DOCTYPE html>
<html>
<head>
    <title>Radio Button Example</title>
</head>
<body>
    <form method="post" action="index.php">
        <label for="option1">Option 1:</label>
        <input type="radio" id="option1" name="option" value="Option 1"><br>
        <label for="option2">Option 2:</label>
        <input type="radio" id="option2" name="option" value="Option 2"><br>
        <label for="option3">Option 3:</label>
        <input type="radio" id="option3" name="option" value="Option 3"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["option"])) {
        $selectedOption = $_POST["option"];
        echo "You selected: $selectedOption";
    } else {
        echo "Please select an option.";
    }
}
?>
