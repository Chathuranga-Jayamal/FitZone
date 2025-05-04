<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("../../database/connection.php");

if (isset($_POST['submit'])) {
    // Get and sanitize input data
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $category = isset($_POST['category']) ? mysqli_real_escape_string($conn, $_POST['category']) : null;
    $featured_image = isset($_POST['featured_image']) ? mysqli_real_escape_string($conn, $_POST['featured_image']) : null;

    // Prepare SQL insert
    $sql = "INSERT INTO blogs (title, content, category, featured_image) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        // Bind parameters
        mysqli_stmt_bind_param($stmt, "ssss", $title, $content, $category, $featured_image);

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            header("Location: ./blog.php?success=Blog+added");
            exit();
        } else {
            header("Location: ./blog.php?error=Insert+failed");
            exit();
        }
    } else {
        header("Location: ./blog.php?error=Database+error");
        exit();
    }
}
?>
