<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>User Registration</h2>
<form action="register_action.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="file" name="photo" accept="image/*" required><br>
    <button type="submit">Register</button>
</form>

</body>
</html>
