<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("../../database/connection.php");

if (isset($_POST['submit'])) {
    // Get and sanitize input data
   $id = $_POST['membershipID'];
   $name = $_POST['name'];
   $price = $_POST['price'];
   $discount = $_POST['discount'];
   $percentage = $_POST['percentage'];
   $duration = $_POST['duration'];
   $description = $_POST['description'];


    // Prepare update query
    $sql = "UPDATE Membership SET  
                Name = ?, 
                Price = ?, 
                Duration = ?, 
                Discount = ?, 
                Description = ?, 
                Percentage = ?
            WHERE MembershipID = ?";

    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, 'ssssssi', $name, $price, $duration, $discount, $description, $percentage, $id);

        if (mysqli_stmt_execute($stmt)) {
            header("Location: ./membership.php?success=Trainer+updated");
            exit();
        } else {
            header("Location: ./membership.php?error=Update+Failed");
            exit();
        }
    } else {
        header("Location: ./membership.php?error=Database+Error");
        exit();
    }
}
