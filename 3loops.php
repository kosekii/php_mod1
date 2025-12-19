<?php include "includes/header.php"; ?>

<h2>Available Coffee Menu</h2>

<?php
$menu = ["Espresso", "Latte", "Cappuccino", "Americano", "Mocha"];

foreach ($menu as $item) {
  echo "<p>☕ $item</p>";
}
?>

<?php require "requires/footer.php"; ?>
