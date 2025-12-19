<?php include "includes/header.php"; ?>

<?php
$size = "M";

$cup = match($size) {
  "S" => "Small Cup",
  "M" => "Medium Cup",
  "L" => "Large Cup",
  default => "Unknown Size"
};
?>

<p>Cup Size Code: <?php echo $size; ?></p>
<p>Description: <?php echo $cup; ?></p>

<?php include "includes/footer.php"; ?>
