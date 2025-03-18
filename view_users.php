<?php
include('db.php'); // Include database connection file

// Fetch all users from the database
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each user
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"]. " - Photo: <img src='uploads/" . $row["photo"] . "' width='50' height='50'>" . 
        " <a href='delete_user.php?id=" . $row["id"] . "' onclick='return confirm(\"Are you sure you want to delete this user?\")'>Delete</a><br>";
    }
} else {
    echo "No users found.";
}

$conn->close();
?>
