<?php
include("../database/connection.php");
include("../header/header.php");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all blog posts
$sql = "SELECT * FROM blogs ORDER BY created_at DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Fitness Blog</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            margin: 0;
        }

        h1 {
            text-align: center;
            margin: 40px 0;
        }

        .blog-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px 40px;
        }

        .blog-card {
            background: #fff;
            padding: 20px;
            flex: 1 1 calc(25% - 20px); /* 4 per row with 20px gap */
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
            border-radius: 8px;
            display: flex;
            flex-direction: column;
        }

        .blog-image {
            width: 100%;
            height: 160px;
            object-fit: cover;
            border-radius: 6px;
            margin-bottom: 15px;
        }

        .blog-card h2 {
            font-size: 18px;
            margin-top: 0;
            color: #333;
        }

        .meta {
            color: #777;
            font-size: 0.85em;
            margin-bottom: 10px;
        }

        .category {
            color: #4CAF50;
            font-weight: bold;
        }

        .blog-card p {
            flex-grow: 1;
            color: #444;
        }

        .btn-primary {
            margin-top: 15px;
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            text-align: center;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        /* Responsive Breakpoints */
        @media (max-width: 992px) {
            .blog-card {
                flex: 1 1 calc(50% - 20px); /* 2 per row */
            }
        }

        @media (max-width: 600px) {
            .blog-card {
                flex: 1 1 100%; /* 1 per row */
            }
        }
    </style>
</head>
<body>

<h1>Fitness Blog</h1>

<div class="blog-container">
    <?php if ($result->num_rows > 0): ?>
        <?php while($row = $result->fetch_assoc()): ?>
            <div class="blog-card">
                <?php if (!empty($row['featured_image'])): ?>
                    <img class="blog-image" src="./images/<?= htmlspecialchars($row['featured_image']) ?>" alt="<?= htmlspecialchars($row['title']) ?>">
                <?php endif; ?>
                <h2><?= htmlspecialchars($row['title']) ?></h2>
                <div class="meta">
                    <span class="category"><?= htmlspecialchars($row['category']) ?></span> |
                    <?= date("F j, Y", strtotime($row['created_at'])) ?>
                </div>
                <p><?= htmlspecialchars(substr($row['content'], 0, 100)) ?>...</p>
                <a class="btn-primary" href="./blog-details.php?id=<?= $row['id'] ?>">See More</a>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <p>No blog posts found.</p>
    <?php endif; ?>
</div>

</body>
</html>
