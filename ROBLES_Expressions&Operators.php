<?php
    $items = 3;
    $cost = 5;
    $subtotal = $cost * $items;
    $tax = ($subtotal/100)*12;
    $total = $subtotal + $tax;
    $greet = "Thank you for purchasing ICE CREAM!"
?>

<!DOCTYPE HTML>  
<html>
<head>
    <meta charset = "utf-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/styles.css">
    <title>Expression & Operators</title>
</head>
<body>
    <h1>Ice Cream's Shop</h1>
    <h2>Shopping Cart</h2>
    <p>Items: <?= $items ?></p>
    <p>Cost per pack: P<?= $cost ?></p>
    <p>Subtotal: P<?= $subtotal ?></p>
    <p>Tax: P<?= $tax ?></p>
    <p>Total: P<?= $total ?></p>
    <p><?= $greet ?></p>
</body>
</html>