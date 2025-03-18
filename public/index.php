<?php
// index.php - Display available products

include('config/db.php');
$stmt = $pdo->prepare("SELECT * FROM products");
$stmt->execute();
$products = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home - Vegetable Store</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <h1>Our Vegetables</h1>
    <div class="products">
        <?php foreach ($products as $product): ?>
            <div class="product">
                <h3><?php echo $product['name']; ?></h3>
                <p><?php echo $product['description']; ?></p>
                <p>$<?php echo $product['price']; ?></p>
                <a href="product-details.php?id=<?php echo $product['id']; ?>">View Details</a>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
