<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include("../../database/connection.php");

if (isset($_POST['submit'])) {
    // Get and sanitize input data
    $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Secure hash
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $role = mysqli_real_escape_string($conn, $_POST['role']);
    $startDate = !empty($_POST['start_date']) ? $_POST['start_date'] : date('Y-m-d');
    $status = "new";

    // Insert query
    $sql = "INSERT INTO Employee (
                First_Name, Last_Name, Email, PhoneNumber, Password, 
                Address, Role,  Employment_Start_Date, 
                Status
            ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssssssss", $firstName, $lastName, $email, $phone, $password, $address, $role, $startDate,$status);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: ./employee.php");
        exit();
    } else {
         header("Location: ./employee.php?error=Submition Faild");
        exit();
    }
}
?>
