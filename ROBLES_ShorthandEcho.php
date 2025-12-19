<?php
$name = 'John Matthew Robles!';
$favorites = ['Chocolate', 'Toffee', 'Vanilla',];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1">
        <title>Echo Shorthand</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h1>The Ice Cream Store</h1>
        <h2>Welcome <?= $name ?></h2>
        <p>Your favorite flavor of ice cream is:
            <?= $favorites[2] ?>. </p>
    </body> 
</html>