<?php
define('SECURITY', true);
include 'dbHandling.php';
if (isset($_GET['password']) && $_GET['password'] == SITEPASSWORD) {
    $databaseObj = new db();
    $databaseObj->query(
        'CREATE TABLE `competenze` (`id` INTEGER PRIMARY KEY AUTO_INCREMENT, `competenza` TEXT);'
    ) or die('Maybe already exists');
} else {
    include 'index.php';
    exit(0);
}
