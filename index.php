<?php 
session_start();

if(!isset($_SESSION['username'])) {
	header('Location: login.php');
} 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Management System</title>
</head>
<body>
<h1>Welcome! <?php echo $_SESSION['username'];?></h1>
    <h2>Welcome to Kym's kitchenette. Here's the menu and the prices.</h2>
    <h3>Pay as you order. Thanks!</h3>
    <ul>
        <li>Shawarma rice pampawala karma = 85 PHP</li>
        <li>Sisig rice pampakilig = 75 PHP</li>
        <li>Shiomay rice pampawala umay = 65 PHP</li>
    </ul>
    <form method = "GET" action = "getOrder.php">
        <label for="order">Select an order:</label>
        <select id="order" name="order">
            <option value="Shawarma">Shawarma rice pampawala karma</option>
            <option value="Sisig">Sisig rice pampakilig</option>
            <option value="Shiomay">Shiomay rice pampawala umay</option>
        </select><br><br>
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" min="1" required><br><br>
        <label for="cash">Cash Paid:</label>
        <input type="number" id="cash" name="cash" min="0" required><br><br>
        <input type="submit" value="Submit Order">
    </form>
</body>
</html>