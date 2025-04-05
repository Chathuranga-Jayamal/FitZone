<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include("../../database/connection.php");

if (isset($_POST['submit'])) {
    // Get and sanitize input data
    $employeeID = mysqli_real_escape_string($conn, $_POST['employeeID']);
    $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $role = mysqli_real_escape_string($conn, $_POST['role']);

    // Update query
    $sql = "UPDATE Employee 
        SET
            First_Name = ?,
            Last_Name = ?,
            Email = ?,
            PhoneNumber = ?,
            Address = ?,
            Role = ?
        WHERE EmployeeID = ?";


    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssssss", $firstName, $lastName, $email, $phone, $address, $role, $employeeID);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: ./employee.php");
        exit();
    } else {
        header("Location: ./employee.php?error=Update Faild");
        exit();
    }
}
