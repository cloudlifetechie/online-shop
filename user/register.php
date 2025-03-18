<?php
include '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $address = $_POST['address'];

    $stmt = $pdo->prepare("INSERT INTO users (name, email, password, address) VALUES (?, ?, ?, ?)");
    $stmt->execute([$name, $email, $password, $address]);
    echo "Registration successful!";
}
?>

<form method="POST">
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <textarea name="address" placeholder="Address" required></textarea>
    <button type="submit">Register</button>
</form>