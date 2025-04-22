<?php
include("../database/connection.php");

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Invalid blog ID.");
}

$blog_id = intval($_GET['id']);

$sql = "SELECT * FROM blogs WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $blog_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    die("Blog not found.");
}

$blog = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title><?= htmlspecialchars($blog['title']) ?> - Fitness Blog</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f4f4f4;
            margin: 0;
        }

        .blog-wrapper {
            max-width: 800px;
            margin: 50px auto;
            background: #ffffff;
            padding: 40px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .blog-image {
            width: 100%;
            max-height: 400px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 25px;
        }

        .blog-title {
            font-size: 32px;
            margin-bottom: 10px;
            color: #333;
        }

        .blog-meta {
            color: #777;
            margin-bottom: 25px;
            font-size: 0.95em;
        }

        .blog-category {
            color: #4CAF50;
            font-weight: bold;
        }

        .blog-content {
            font-size: 1.1em;
            line-height: 1.7em;
            color: #444;
        }

        .back-link {
            display: inline-block;
            margin-top: 30px;
            text-decoration: none;
            color: #007bff;
            transition: color 0.3s;
        }

        .back-link:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
<?php include("../header/header.php");?>
<div class="blog-wrapper">
    <?php if (!empty($blog['featured_image'])): ?>
        <img class="blog-image" src="./images/<?= htmlspecialchars($blog['featured_image']) ?>" alt="<?= htmlspecialchars($blog['title']) ?>">
    <?php endif; ?>

    <div class="blog-title"><?= htmlspecialchars($blog['title']) ?></div>
    <div class="blog-meta">
        <span class="blog-category"><?= htmlspecialchars($blog['category']) ?></span> |
        <?= date("F j, Y", strtotime($blog['created_at'])) ?>
    </div>
    <div class="blog-content">
        <?= nl2br(htmlspecialchars($blog['content'])) ?>
    </div>
    <a class="back-link" href="./blog.php">&larr; Back to Blog List</a>
</div>
</body>
</html>
