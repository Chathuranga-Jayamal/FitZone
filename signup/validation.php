<?php
session_start();
include("../database/connection.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Email = $_POST["email"];
    $Password = $_POST["password"];
}

//CHECK IN TEMP TABLE
$stmt = $conn->prepare("SELECT ID, Email, Password FROM Temp WHERE Email=?");
$stmt->bind_param("s", $Email);
$stmt->execute();
$result = $stmt->get_result();

if ($row = $result->fetch_assoc()) {
    if (password_verify($Password, $row['Password'])) {
        $_SESSION['user_email'] = $row['Email'];
        header("Location: ./reset.php");
        exit();
    }
}

// Check in User table
$stmt = $conn->prepare("SELECT Email FROM User WHERE Email=?");
$stmt->bind_param("s", $Email);
$stmt->execute();
$result = $stmt->get_result();

// Check in Employee table
$stmt = $conn->prepare("SELECT Email FROM Employee WHERE Email=?");
$stmt->bind_param("s", $Email);
$stmt->execute();
$result2 = $stmt->get_result();

// If the email doesn't exist in both User and Employee tables, allow registration
if ($result->num_rows === 0 && $result2->num_rows === 0) {
    $_SESSION['user_email'] = $Email;
    $_SESSION['user_password'] = $Password;
    header("Location: registrationForm.php");
    exit();
} else {
    // If the email exists in either table, show error message
    header("Location: ./signup.php?error=User Exist Already");
    exit();
}


?>