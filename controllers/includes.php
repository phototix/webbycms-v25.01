<?php
function updateTableSchema($tableName, $columnName, $dataType) {
    global $pdo;

    $query = "ALTER TABLE `$tableName` ADD `$columnName` $dataType";
    try {
        $pdo->exec($query);
    } catch (PDOException $e) {
        echo "Error updating table schema: " . $e->getMessage();
    }
}
?>
