<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $photo = $_FILES['photo'];

    $photoName = time() . "_" . basename($photo['name']);
    $photoPath = "uploads/" . $photoName;

    if (move_uploaded_file($photo['tmp_name'], $photoPath)) {
        $sql = "INSERT INTO users (username, email, photo) VALUES (:username, :email, :photo)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':photo', $photoPath);

        if ($stmt->execute()) {
            echo "User registered successfully!";
        } else {
            echo "Failed to register user.";
        }
    } else {
        echo "Failed to upload photo.";
    }
}
?>
