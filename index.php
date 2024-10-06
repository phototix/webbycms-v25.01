<?php
require_once 'controllers/conn.php';
require_once 'controllers/includes.php';
require_once 'vendor/autoload.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

$allowed_pages = ['home', 'about', 'events', 'register', 'contact', 'membership', 'member_signup', 'login'];

if (!in_array($page, $allowed_pages)) {
    $page = 'home';
}

include "pages/$page/index.php";
?>
