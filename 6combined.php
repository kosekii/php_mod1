<?php include "includes/header.php"; ?>

<?php
$day = "Monday";
$discount = match($day) {
  "Monday" => 0.10,
  "Friday" => 0.15,
  default => 0
};

$prices = [120, 150, 180];

foreach ($prices as $price) {
  $final = $price - ($price * $discount);
  echo "<p>Original: ₱$price | Final: ₱$final</p>";
}
?>

<?php include "includes/footer.php"; ?>
