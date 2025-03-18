<?php
// db.php - Database connection configuration

$host = "localhost";
$dbname = "vegetable_store"; // Replace with your DB name
$username = "root"; // Replace with your DB username
$password = ""; // Replace with your DB password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
