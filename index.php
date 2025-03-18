<?php
include('includes/db.php');
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
$products = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vegetable Store</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1>Vegetable Store</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="admin/admin.php">Admin Panel</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="product-list">
            <h2>Available Vegetables</h2>
            <div class="products">
                <?php foreach ($products as $product): ?>
                    <div class="product">
                        <img src="assets/uploads/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                        <h3><?php echo $product['name']; ?></h3>
                        <p><?php echo $product['description']; ?></p>
                        <p>Price: $<?php echo $product['price']; ?></p>
                        <a href="product.php?id=<?php echo $product['id']; ?>" class="btn">View Details</a>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Vegetable Store. All rights reserved.</p>
    </footer>

    <script src="js/scripts.js"></script>
</body>
</html>
