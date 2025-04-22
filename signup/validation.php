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
$employee = $employeeResult->fetch_assoc();

// Check in Trainer table
$stmt = $conn->prepare("SELECT Email, Status FROM Trainer WHERE Email = ?");
$stmt->bind_param("s", $Email);
$stmt->execute();
$trainerResult = $stmt->get_result();
$trainer = $trainerResult->fetch_assoc();

//Email not in User, Employee, or Trainer
if ($userResult->num_rows === 0 && !$employee && !$trainer) {
    $_SESSION['user_email'] = $Email;
    $_SESSION['user_password'] = $Password;
    header("Location: registrationForm.php");
    exit();
}

// Email in Employee with status "new"
if ($employee && $employee['Status'] === 'new') {
    $update = $conn->prepare("UPDATE Employee SET Status='Active' WHERE Email = ?");
    $update->bind_param("s", $Email);
    $update->execute();
    header("Location: ../home.php");
    exit();
}

// Email in Trainer with status "new" 
if ($trainer && $trainer['Status'] === 'new') {
    $update = $conn->prepare("UPDATE Trainer SET Status='Active' WHERE Email = ?");
    $update->bind_param("s", $Email);
    $update->execute();
    header("Location: ../home.php");
    exit();
}

// Email exists and already active
header("Location: ./signup.php?error=User Exists Already");
exit();
?>
