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
    $role = mysqli_real_escape_string($conn, $_POST['role']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Secure hash
    $bio = mysqli_real_escape_string($conn, $_POST['bio']);
    $image = mysqli_real_escape_string($conn, $_POST['image']);
    $certificationID = $_POST['certificationID'];
    $years = $_POST['experience'];
    $specialites = mysqli_real_escape_string($conn, $_POST['specialties']);
    $status = "new";
    $UserRole = "Trainer";

    // Insert query
    $sql = "INSERT INTO Trainer (
                FirstName, LastName, Email, Phone, Role, Bio, ImageURL, CertificationID, ExperienceYears, Specialties, Status, Password, UserRole 
            ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?,?,?,?,?)";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssssssiissss", $firstName, $lastName, $email, $phone, $role, $bio, $image, $certificationID,$years,$specialites, $status, $password, $UserRole);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: ./trainer.php");
        exit();
    } else {
         header("Location: ./trainer.php?error=Submition Faild");
        exit();
    }
}
?>
