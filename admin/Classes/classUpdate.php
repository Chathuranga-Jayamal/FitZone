<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include("../../database/connection.php");

if (isset($_POST['submit'])) {
    // Get and sanitize input data
    $id = intval($_POST['id']);
    $classsName = $_POST['className'];
    $description = $_POST['description'];
    $dateInput = $_POST['date']; // This is '04/20/2025'
    $date = date('Y-m-d', strtotime($dateInput)); // Converts it to '2025-04-20'
    $capacity = intval($_POST['capacity']);
    $trainer = intval($_POST['trainerID']);

    // Update query
    $sql = "UPDATE Class 
        SET
            ClassName = ?,
            ClassDescription = ?,
            TrainerID = ?,
            Date = ?,
            Capacity = ?
        WHERE ClassID = ?";


    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssisii", $classsName, $description, $trainer, $date, $capacity, $id);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: ./class.php");
        exit();
    } else {
        header("Location: ./class.php?error=Update Faild");
        exit();
    }
}
