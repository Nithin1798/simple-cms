<?php
include 'config.php';

try {
    $stmt = $pdo->query("SELECT * FROM posts");
    $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo '<pre>';
    print_r($posts);
    echo '</pre>';
} catch (PDOException $e) {
    echo 'Query failed: ' . $e->getMessage();
}
?>
