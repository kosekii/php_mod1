<?php include "includes/header.php"; ?>

<?php
$quantity = "2";
$price = 120;

$total = $quantity * $price; // PHP auto converts string to int
?>

<p>Quantity: <?php echo $quantity; ?></p>
<p>Price per cup: ₱<?php echo $price; ?></p>
<p>Total: ₱<?php echo $total; ?></p>

<?php include "includes/footer.php"; ?>
