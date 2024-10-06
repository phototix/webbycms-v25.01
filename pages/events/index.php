<?php
echo "<h1>Events Page</h1>";
// Fetch and display events from the database
?>

<?php
$sql = "SELECT * FROM Events WHERE status='active'";
$result = $conn->query($sql);
?>

<ul>
<?php while ($event = $result->fetch_assoc()): ?>
    <li><?php echo $event['title']; ?> - <?php echo $event['description']; ?></li>
<?php endwhile; ?>
</ul>
