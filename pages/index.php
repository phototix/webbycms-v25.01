<?php
include_once '../controllers/conn.php';
include_once '../controllers/includes.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

if (file_exists("{$page}/index.php")) {
    include "{$page}/index.php";
} else {
    include 'home/index.php'; // default page
}
?>