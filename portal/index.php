<?php
include '../controllers/includes.php';

if (isLoggedIn()) {
    // Redirect based on user role or show dashboard
} else {
    // Show login options
    include 'admin/login/index.php'; // Default to admin login
}
?>