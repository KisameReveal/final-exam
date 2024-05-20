<?php
  // Menu prices
  $menu = [
      "Shawarma" => 85,
      "Sisig" => 75,
      "Shiomay" => 65
  ];

  // Get user input
  $order = $_GET['order'];
  $quantity = $_GET['quantity'];
  $cash = $_GET['cash'];

  // Calculate total amount
  $total = $menu[$order] * $quantity;

  // Check if the cash paid is enough
  if ($cash >= $total) {
      $change = $cash - $total;
      echo "<p>Your order of $quantity {$order}s is successful.</p>";
      echo "<p>Total amount: $total PHP</p>";
      echo "<p>Change: $change PHP</p>";
  } else {
      echo "<p>Sorry, your cash payment is not enough. Please pay at least $total PHP.</p>";
  }
  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
  <a href="logout.php">Logout</a>
  </body>
  </html>