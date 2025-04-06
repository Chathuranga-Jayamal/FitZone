<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("../../database/connection.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = intval($_POST['trainerID']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);

    
    if ($status === "Active") {
        $date = NULL; 
    } else if ($status === "Inactive") {
        $date = date("Y-m-d"); 
    } else {
        header("Location: /FitZone/admin/Trainer/trainer.php?error=Invalid+Status");
        exit();
    }

    $sql = "UPDATE Trainer SET Status = ?, Employment_End_Date = ? WHERE TrainerID = ?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssi", $status, $date, $id);

        if (mysqli_stmt_execute($stmt)) {
            header("Location: /FitZone/admin/Trainer/trainer.php?success=Trainer+updated");
            exit();
        } else {
            header("Location: /FitZone/admin/Trainer/trainer.php?error=Update+Failed");
            exit();
        }
    } else {
        header("Location: /FitZone/admin/Trainer/trainer.php?error=SQL+Error");
        exit();
    }
}
?>
