<?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $photo = $_FILES['photo']['name'];
    $photo_temp = $_FILES['photo']['tmp_name'];
    
    // Define upload directory
    $upload_dir = "uploads/";

    // Move uploaded photo to the upload directory
    move_uploaded_file($photo_temp, $upload_dir . $photo);
    
    // Insert user data into database
    $sql = "INSERT INTO users (name, email, photo) VALUES ('$name', '$email', '$photo')";
    
    if ($conn->query($sql) === TRUE) {
        echo "User registered successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>
    <h2>User Registration</h2>
    <form action="register.php" method="POST" enctype="multipart/form-data">
        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>
        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>
        <label>Photo:</label><br>
        <input type="file" name="photo" required><br><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>
