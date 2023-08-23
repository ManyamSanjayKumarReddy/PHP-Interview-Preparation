<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Order</title>
</head>
<body>
    <h1>Pizza Order Form</h1>
    <form action="forms.php" method="post">
        <label for="quantity">Quantity of Pizza :</label>
        <!-- Input field for pizza quantity -->
        <input type="number" name="quantity" id="quantity" required>
        <br><br>
        <input type="submit" value="Order Now">
    </form>
</body>
</html>

<?php
    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Retrieve the quantity of pizzas from the form
        $quantity = $_POST["quantity"];
        
        // Price of a single pizza
        $price = 4.99;
        
        // Calculate the total cost
        $total = $quantity * $price;

        // Display the order details to the user
        echo "<h2>Order Summary</h2>";
        echo "Dear Customer, you have ordered {$quantity} pizza(s) and the total cost is \${$total}.<br>";
        echo "Thank you for your order!";
    }
?>
