<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include("../../database/connection.php");

if (isset($_POST['submit'])) {
    // Get and sanitize input data
    $id = intval($_POST['id']);

    // Update query
    $sql = "DELETE FROM Class 
        WHERE ClassID = ?";


    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: ./class.php");
        exit();
    } else {
        header("Location: ./class.php?error=Delete Faild");
        exit();
    }
}
