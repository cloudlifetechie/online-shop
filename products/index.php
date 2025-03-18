<?php
include '../includes/db.php';

$stmt = $pdo->query("SELECT * FROM products");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="products">
    <?php foreach ($products as $product): ?>
        <div class="product">
            <h2><?= htmlspecialchars($product['name']) ?></h2>
            <p><?= htmlspecialchars($product['description']) ?></p>
            <p>Price: $<?= htmlspecialchars($product['price']) ?></p>
            <p>Stock: <?= htmlspecialchars($product['stock']) ?></p>
        </div>
    <?php endforeach; ?>
</div>