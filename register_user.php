<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $photo = $_FILES['photo']['name'];
    $photo_temp = $_FILES['photo']['tmp_name'];
    
    // Upload photo
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($photo);
    
    if (move_uploaded_file($photo_temp, $target_file)) {
        // Insert user into database
        $sql = "INSERT INTO users (name, email, photo) VALUES ('$name', '$email', '$photo')";
        
        if ($conn->query($sql) === TRUE) {
            echo "New user registered successfully!";
            header("Location: index.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

$conn->close();
?>
