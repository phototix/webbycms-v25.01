<?php
require_once '../../controllers/conn.php';
require_once '../../controllers/includes.php';
session_start();

if(!isset($_SESSION['admin_id']) || !checkUserRole($_SESSION['admin_id'], 'admin')){
    header("Location: login/index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Portal</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <header>
        <img src="/assets/images/logo.jpg" alt="Logo">
        <nav>
            <a href="/?page=home">Home</a>
            <a href="?action=manage_events">Manage Events</a>
            <a href="?action=manage_members">Manage Members</a>
            <a href="?action=update_pages">Update Pages</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>
    <main>
        <h1>Admin Dashboard</h1>
        <!-- Admin functionalities here -->
    </main>
    <footer>
        &copy; 2024 Your Company
    </footer>
</body>
</html>
