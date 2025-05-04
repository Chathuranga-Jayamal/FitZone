<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("../../database/connection.php");

if (isset($_POST['submit'])) {
    $id = ($_POST['id']);
    $status = $_POST['status'];
    $newstatus = "Replyed";
    $answer = $_POST['answer'];

    $sql = "UPDATE Queries SET Answer = ?, Status = ? WHERE ID = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssi", $answer,$newstatus, $id);

    if ($status === "Pending") {
        if (mysqli_stmt_execute($stmt)) {
        header("Location: ./queries.php");
        exit();
    } else {
        header("Location: ./queries.php?error=Update Failed");
        exit();
    }
    }else{
        header("Location: ./queries.php?error=Already Replyed");
        exit();
    }
}else {
    header("Location: ./queries.php?error=Invalid Request");
    exit();
}
?>
