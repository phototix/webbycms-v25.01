<?php
require_once '../../controllers/conn.php';
require_once '../../controllers/includes.php';
$events = [];
$sql = "SELECT * FROM Events WHERE status = 'active'";
$result = $conn->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $events[] = $row;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Events</title>
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
        <h1>Upcoming Events</h1>
        <?php foreach($events as $event): ?>
            <div class="event">
                <h2><?php echo htmlspecialchars($event['title']); ?></h2>
                <p><?php echo htmlspecialchars($event['description']); ?></p>
                <img src="/assets/images/<?php echo htmlspecialchars($event['cover_image']); ?>" alt="Event Image">
            </div>
        <?php endforeach; ?>
    </main>
    <footer>
        &copy; 2024 Your Company
    </footer>
    <script src="/assets/js/script.js"></script>
</body>
</html>
