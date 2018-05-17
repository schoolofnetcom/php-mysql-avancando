<?php

$conn = require __DIR__.'/utils/connection.php';

$save = true;

$conn->query('TRUNCATE likes');
$conn->query('TRUNCATE users');

$sql = file_get_contents(__DIR__.'/insert_likes.sql');
$sql2 = file_get_contents(__DIR__.'/insert_users.sql');

$conn->begin_transaction();
$conn->query($sql);
$conn->query($sql2);

if  ($save) {
    $conn->commit();
} else {
    $conn->rollback();
}

echo 'DONE' . PHP_EOL;
