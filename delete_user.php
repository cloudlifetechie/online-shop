<?php
include('db.php'); // Include database connection file

// Check if an ID is provided for deletion
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the user from the database
    $sql = "DELETE FROM users WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        // Redirect to the view users page with a success message
        header("Location: view_users.php?success=User deleted successfully!");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
