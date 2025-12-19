<?php include "includes/header.php"; ?>

<?php
$coffeeType = "Latte";
$price = 150;

if ($price > 200) {
  $message = "Premium Coffee";
} elseif ($price >= 100) {
  $message = "Regular Coffee";
} else {
  $message = "Budget Coffee";
}
?>

<p>Coffee Type: <?php echo $coffeeType; ?></p>
<p>Price: ₱<?php echo $price; ?></p>
<p>Category: <?php echo $message; ?></p>

<?php include "includes/footer.php"; ?>
