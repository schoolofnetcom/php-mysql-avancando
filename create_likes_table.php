<?php

$conn = require __DIR__.'/utils/connection.php';

$conn->query('DROP TABLE users');
$conn->query('DROP TABLE likes');

$sql = '
    CREATE TABLE users(
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50) NOT NULL
    )
';

if (!$conn->query($sql)) {
    die('Error: table exists');
}

$sql = '
    CREATE TABLE likes(
        id INT AUTO_INCREMENT PRIMARY KEY,
        user_id VARCHAR(50) NOT NULL,
        post_id TEXT NOT NULL
    )
';

if (!$conn->query($sql)) {
    die('Error: table exists');
}

$result = $conn->query('DESCRIBE posts');

var_dump($result->fetch_all());
