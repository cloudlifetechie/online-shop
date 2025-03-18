<?php
// Check if there's a message to show (email conflict or success)
$error_message = isset($_GET['error']) ? $_GET['error'] : '';
$success_message = isset($_GET['success']) ? $_GET['success'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register New User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Register New User</h1>

    <?php if ($error_message): ?>
        <p style="color: red;"><?php echo $error_message; ?></p>
        <p><a href="index.php">Back to Home</a></p>
    <?php endif; ?>

    <?php if ($success_message): ?>
        <p style="color: green;"><?php echo $success_message; ?></p>
        <p><a href="index.php">Back to Home</a></p>
    <?php endif; ?>

    <form action="register_user.php" method="post" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="photo">Photo:</label>
        <input type="file" id="photo" name="photo" required><br><br>

        <button type="submit">Register</button>
    </form>
    <br>
    <a href="index.php">Back to Home</a>
</body>
</html>
