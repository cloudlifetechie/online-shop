<?php
include 'config.php';

$sql = "SELECT * FROM users";
$stmt = $conn->prepare($sql);
$stmt->execute();
$users = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Users</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Registered Users</h2>
<table>
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Photo</th>
    </tr>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= htmlspecialchars($user['username']) ?></td>
            <td><?= htmlspecialchars($user['email']) ?></td>
            <td><img src="<?= $user['photo'] ?>" alt="User Photo" width="100" height="100"></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
