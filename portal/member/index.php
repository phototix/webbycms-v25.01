<?php
require_once '../../controllers/conn.php';
require_once '../../controllers/includes.php';
session_start();

if(!isset($_SESSION['member_id']) || !checkUserRole($_SESSION['member_id'], 'member')){
    header("Location: login/index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Member Portal</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <header>
        <img src="/assets/images/logo.jpg" alt="Logo">
        <nav>
            <a href="/?page=home">Home</a>
            <a href="?action=check_events">Check Events</a>
            <a href="?action=add_friend">Add Friend</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>
    <main>
        <h1>Member Dashboard</h1>
        <!-- Member functionalities here -->
    </main>
    <footer>
        &copy; 2024 Your Company
    </footer>
</body>
</html>
