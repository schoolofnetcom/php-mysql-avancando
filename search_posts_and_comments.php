<?php

$conn = require __DIR__.'/utils/connection.php';

$one_to_one = 'SELECT * FROM posts LEFT JOIN comments ON posts.id = comments.post_id WHERE posts.id = 1 GROUP BY posts.id;';
$one_to_many = 'SELECT * FROM posts LEFT JOIN comments ON posts.id = comments.post_id WHERE posts.id = 1;';
$belong_to = 'SELECT * FROM posts RIGHT JOIN comments ON posts.id = comments.post_id WHERE comments.id = 1;';
$belong_to_2 = 'SELECT * FROM comments RIGHT JOIN posts ON comments.post_id = posts.id WHERE comments.id = 1;';

$result = $conn->query($belong_to_2);

$posts = $result->fetch_all(MYSQLI_ASSOC);

var_dump($posts);
exit;
