<?php

$conn = require __DIR__.'/utils/connection.php';

$term = $argv[1] ?? null;
$term = '%'.$term.'%';

$stmt = $conn->prepare('SELECT *, MATCH(title, body) AGAINST(? IN BOOLEAN MODE) as score FROM posts ORDER BY score DESC;');
$stmt->bind_param('s', $term);
$stmt->execute();

$result = $stmt->get_result();
$posts = $result->fetch_all(MYSQLI_ASSOC);

foreach ($posts as $post) {
    echo $post['title']. PHP_EOL;
    echo $post['body']. PHP_EOL;
    echo $post['score']. PHP_EOL;
    echo PHP_EOL;
}
