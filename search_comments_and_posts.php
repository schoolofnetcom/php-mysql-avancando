<?php

$conn = require __DIR__.'/utils/connection.php';

$result = $conn->query('SELECT * FROM comments LEFT JOIN posts ON comments.post_id = posts.id WHERE comments.id=1');

$posts = $result->fetch_all(MYSQLI_ASSOC);

var_dump($posts);
exit;

foreach ($posts as $post) {
    echo $post['title']. PHP_EOL;
    echo $post['body']. PHP_EOL;
    echo PHP_EOL;
}
