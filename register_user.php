<?php
$servername = "localhost";
$username = "veg_user";
$password = "P@ssword1";
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
    
    // Check if email already exists in the database
    $email_check_query = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
    $result = $conn->query($email_check_query);

    if ($result->num_rows > 0) {
        // Email already exists, redirect with error message
        header("Location: register.php?error=Email already exists! Please use a different email address.");
        exit();
    } else {
        // Upload photo
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($photo);
        
        if (move_uploaded_file($photo_temp, $target_file)) {
            // Insert user into database
            $sql = "INSERT INTO users (name, email, photo) VALUES ('$name', '$email', '$photo')";
            
            if ($conn->query($sql) === TRUE) {
                // Redirect to the registration page with a success message
                header("Location: register.php?success=User registered successfully!");
                exit();
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

$conn->close();
?>
