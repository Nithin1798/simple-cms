<?php
include 'config.php';

$stmt = $pdo->query('SELECT * FROM posts ORDER BY created_at DESC');
$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Simple CMS</title>
    <link rel="stylesheet" href="css/styles.css">

</head>
<body>
    <h1>Blog Posts</h1>
    <a href="add_post.php">Add New Post</a>
    <?php foreach ($posts as $post): ?>
        <div class="post">
            <h2><?php echo htmlspecialchars($post['title']); ?></h2>
            <p><?php echo htmlspecialchars($post['content']); ?></p>
            <a href="edit_post.php?id=<?php echo $post['id']; ?>">Edit</a> | 
            <a href="delete_post.php?id=<?php echo $post['id']; ?>">Delete</a>
        </div>
    <?php endforeach; ?>
</body>
</html>
