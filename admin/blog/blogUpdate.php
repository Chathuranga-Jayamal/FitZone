<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("../../database/connection.php");

if (isset($_POST['submit'])) {
    // Get and sanitize input
    $id = intval($_POST['id']);
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $category = trim($_POST['category']);
    $featured_image = trim($_POST['featured_image']);

    // Update query
    $sql = "UPDATE blogs 
            SET 
                title = ?, 
                content = ?, 
                category = ?, 
                featured_image = ?
            WHERE id = ?";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssssi", $title, $content, $category, $featured_image, $id);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: ./blog.php?success=Blog+Updated+Successfully");
        exit();
    } else {
        header("Location: ./blog.php?error=Update+Failed");
        exit();
    }
}
?>
