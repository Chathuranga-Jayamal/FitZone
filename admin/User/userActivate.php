<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("../../database/connection.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $employeeID = mysqli_real_escape_string($conn, $_POST['employeeID']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);

    $sql = "UPDATE User SET Status = ? WHERE UserID = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $status, $employeeID);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: ./user.php");
        exit();
    } else {
        header("Location: ./user.php?error=Update Failed");
        exit();
    }
}
?>
