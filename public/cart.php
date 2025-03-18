<?php
// cart.php - Cart page to display products added to the cart

include('includes/auth.php');
include('config/db.php');

// Logic to manage cart items
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Cart</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <h1>Your Cart</h1>
    <div id="cart-items">
        <!-- Dynamically list cart items -->
    </div>
    <a href="checkout.php">Proceed to Checkout</a>
</body>
</html>
