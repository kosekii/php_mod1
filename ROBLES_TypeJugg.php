<?php
    $coffeeType = "Caramel Latte";
    $pricePerCup = "10";
    $quantity = 4;
    $subtotal = $pricePerCup * $quantity;
    $tax = ($subtotal / 100) * 20;
    $total = $subtotal + $tax;
    $priceCheckLoose = ($pricePerCup == 10);
    $priceCheckStrict = ($pricePerCup === 10);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/styles.css">
        <title>The Coffee Corner</title>
    </head>

<body>
    <h1>Otherside Coffee</h1>
    <h2>Your Order</h2>
    <p>Coffee: <?= $coffeeType ?></p>
    <p>Quantity: <?= $quantity ?></p>
    <p>Price per cup: ₱<?= $pricePerCup ?></p>
    <p>Subtotal: ₱<?= $subtotal ?></p>
    <p>Tax (20%): ₱<?= $tax ?></p>
    <p><strong>Total: ₱<?= $total ?></strong></p>
</body>
</html>