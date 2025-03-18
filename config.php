<?php
$host = 'localhost'; // change if necessary
$dbname = 'user_registration';
$username = 'root'; // change if necessary
$password = ''; // change if necessary

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
