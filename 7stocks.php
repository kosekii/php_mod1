<?php
declare(strict_types=1); 

include "includes/header.php";


$products = [
  "Espresso"   => ["price" => 120.00, "stock" => 8],
  "Latte"      => ["price" => 150.00, "stock" => 15],
  "Cappuccino" => ["price" => 180.00, "stock" => 6],
  "Americano"  => ["price" => 140.00, "stock" => 20],
  "Mocha"      => ["price" => 170.00, "stock" => 12]
];


$tax_rate = 12;


function get_reorder_message(int $stock): string {
  return ($stock < 10) ? "Yes" : "No";
}


function get_total_value(float $price, int $quantity): float {
  return $price * $quantity;
}


function get_tax_due(
  float $price,
  int $quantity,
  int $tax = 0
): float {
  $total_value = $price * $quantity;
  return $total_value * ($tax / 100);
}
?>

<h2>Stock Monitoring</h2>

<table>
  <tr>
    <th>Product</th>
    <th>Stock</th>
    <th>Reorder?</th>
    <th>Total Value (₱)</th>
    <th>Tax Due (₱)</th>
  </tr>

  <?php

  foreach ($products as $product_name => $data) {
    echo "<tr>";
    echo "<td>{$product_name}</td>";                  
    echo "<td>{$data['stock']}</td>";                 
    echo "<td>" . get_reorder_message($data['stock']) . "</td>"; 
    echo "<td>" . number_format(
      get_total_value($data['price'], $data['stock']), 2
    ) . "</td>";                                      
    echo "<td>" . number_format(
      get_tax_due($data['price'], $data['stock'], $tax_rate), 2
    ) . "</td>";                                      
    echo "</tr>";
  }
  ?>
</table>

<?php require "requires/footer.php"; ?>
