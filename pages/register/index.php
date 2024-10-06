<?php
require_once '../../controllers/conn.php';
require_once '../../controllers/includes.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = sanitize($_POST['name']);
    $phone = sanitize($_POST['phone']);
    $email = sanitize($_POST['email']);
    $full_name = sanitize($_POST['full_name']);
    $user_role = 2; // Assuming 2 is default member role

    $stmt = $conn->prepare("INSERT INTO Members (name, phone, email, full_name, user_role) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi", $name, $phone, $email, $full_name, $user_role);
    $stmt->execute();
    $stmt->close();
    header("Location: ?page=login");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Member Signup</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <header>
        <img src="/assets/images/logo.jpg" alt="Logo">
        <nav>
            <a href="?page=home">Home</a>
            <a href="?page=about">About</a>
            <a href="?page=events">Events</a>
            <a href="?page=membership">Membership</a>
            <a href="?page=contact">Contact</a>
            <a href="?page=member_signup">Signup</a>
            <a href="?page=login">Login</a>
        </nav>
    </header>
    <main>
        <h1>Member Signup</h1>
        <form method="POST" action="">
            <label>Name:</label><br>
            <input type="text" name="name" required><br>
            <label>Phone:</label><br>
            <input type="text" name="phone" required><br>
            <label>Email:</label><br>
            <input type="email" name="email" required><br>
            <label>Full Name:</label><br>
            <input type="text" name="full_name" required><br>
            <button type="submit">Signup</button>
        </form>
    </main>
    <footer>
        &copy; 2024 Your Company
    </footer>
    <script src="/assets/js/script.js"></script>
</body>
</html>
