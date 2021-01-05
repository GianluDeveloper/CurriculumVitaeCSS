<?php
define('SECURITY', true);
include 'dbHandling.php';

$databaseObj = new db();

if (isset($_GET['password']) && $_GET['password'] == SITEPASSWORD) {
    if (isset($_GET['id'])) {
        if (
            $databaseObj->query(
                "DELETE FROM competenze WHERE `id` = '" .
                    $databaseObj->escape($_GET['id']) .
                    "';"
            )
        ) {
            echo 'Ok';
        }
        exit(0);
    }
}
echo 'Generic error';
