<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("../../database/connection.php");

if (isset($_POST['submit'])) {
    // Get and sanitize input data
    $id = intval($_POST['trainerID']);
    $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $role = mysqli_real_escape_string($conn, $_POST['role']);
    $bio = mysqli_real_escape_string($conn, $_POST['bio']);
    $image = mysqli_real_escape_string($conn, $_POST['image']);
    $certificationID = intval($_POST['certificationID']);
    $years = intval($_POST['experience']);
    $specialties = mysqli_real_escape_string($conn, $_POST['specialties']);

    // Prepare update query
    $sql = "UPDATE Trainer SET 
                FirstName = ?, 
                LastName = ?, 
                Email = ?, 
                Phone = ?, 
                Role = ?, 
                Bio = ?, 
                ImageURL = ?, 
                CertificationID = ?, 
                ExperienceYears = ?, 
                Specialties = ?
            WHERE TrainerID = ?";

    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param(
            $stmt,
            "sssssssiisi",
            $firstName,
            $lastName,
            $email,
            $phone,
            $role,
            $bio,
            $image,
            $certificationID,
            $years,
            $specialties,
            $id
        );

        if (mysqli_stmt_execute($stmt)) {
            header("Location: ./trainer.php?success=Trainer+updated");
            exit();
        } else {
            header("Location: ./trainer.php?error=Update+Failed");
            exit();
        }
    } else {
        header("Location: ./trainer.php?error=Database+Error");
        exit();
    }
}
