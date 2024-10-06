<?php
require_once '../../../controllers/conn.php';
require_once '../../../controllers/includes.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = sanitize($_POST['email']);
    // Assuming password handling is implemented
    $stmt = $conn->prepare("SELECT id FROM Members WHERE email = ? AND user_role != 1");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($id);
    if($stmt->fetch()){
        $_SESSION['member_id'] = $id;
        header("Location: ../index.php");
        exit();
    }
    $stmt->close();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Member Login</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <header>
        <img src="/assets/images/logo.jpg" alt="Logo">
    </header>
    <main>
        <h1>Member Login</h1>
        <form method="POST" action="">
            <label>Email:</label><br>
            <input type="email" name="email" required><br>
            <!-- Add password field as needed -->
            <button type="submit">Login</button>
        </form>
    </main>
    <footer>
        &copy; 2024 Your Company
    </footer>
</body>
</html>
