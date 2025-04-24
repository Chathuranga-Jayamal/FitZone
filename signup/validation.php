<?php
session_start();
include("../database/connection.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Email = $_POST["email"];
    $Password = $_POST["password"];
}

// Check in User table
$stmt = $conn->prepare("SELECT Email FROM User WHERE Email = ?");
$stmt->bind_param("s", $Email);
$stmt->execute();
$userResult = $stmt->get_result();

// Check in Employee table
$stmt = $conn->prepare("SELECT Email, Status FROM Employee WHERE Email = ?");
$stmt->bind_param("s", $Email);
$stmt->execute();
$employeeResult = $stmt->get_result();

// Check in Trainer table
$stmt = $conn->prepare("SELECT Email, Status FROM Trainer WHERE Email = ?");
$stmt->bind_param("s", $Email);
$stmt->execute();
$trainerResult = $stmt->get_result();


//Email not in User, Employee, or Trainer
if ($userResult->num_rows === 0 && $employeeResult->num_rows === 0 && $trainerResult->num_rows === 0) {
    $_SESSION['user_email'] = $Email;
    $_SESSION['user_password'] = $Password;
    header("Location: ./registrationForm.php");
    exit();
}else{
    //Email exists and already active
    header("Location: ./signup.php?error=User Exists Already");
    exit();
}

?>
