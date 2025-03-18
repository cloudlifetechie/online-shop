<?php
// dashboard.php - Admin Dashboard

include('../config/db.php');
include('../includes/auth.php');
redirectIfNotLoggedIn();

// Admin only logic here
echo "Welcome to Admin Dashboard!";
?>
