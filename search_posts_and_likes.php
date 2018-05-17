<?php

$conn = require __DIR__.'/utils/connection.php';

$result = $conn->query('SELECT * FROM likes
    INNER JOIN users ON likes.user_id = users.id
    INNER JOIN posts ON likes.post_id = posts.id'
);

$posts = $result->fetch_all(MYSQLI_ASSOC);

var_dump($posts);
exit;
