<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("../../database/connection.php");

if (isset($_POST['submit'])) {
    // Sanitize blog ID
    $id = intval($_POST['id']);

    // Prepare delete query
    $sql = "DELETE FROM blogs WHERE id = ?";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: ./blog.php?success=Blog+Deleted+Successfully");
        exit();
    } else {
        header("Location: ./blog.php?error=Delete+Failed");
        exit();
    }
}
?>
