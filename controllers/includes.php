<?php
function sanitize($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

function checkUserRole($user_id, $required_role) {
    global $conn;
    $stmt = $conn->prepare("SELECT r.role_name FROM members m JOIN roles r ON m.user_role = r.id WHERE m.id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $stmt->bind_result($role_name);
    $stmt->fetch();
    $stmt->close();
    return $role_name === $required_role;
}

function addColumnIfNotExists($table, $column, $datatype) {
    global $conn;
    $result = $conn->query("SHOW COLUMNS FROM `$table` LIKE '$column'");
    if($result->num_rows == 0){
        $conn->query("ALTER TABLE `$table` ADD `$column` $datatype");
    }
}

function addTableIfNotExists($table, $schema) {
    global $conn;
    $result = $conn->query("SHOW TABLES LIKE '$table'");
    if($result->num_rows == 0){
        $conn->query($schema);
    }
}
?>
