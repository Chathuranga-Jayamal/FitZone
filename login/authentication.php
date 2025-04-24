<?php
session_start();
include("../database/connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $UserName = $_POST["email"];
    $Password = $_POST["password"];

    // Check in Employee table
    $stmt = $conn->prepare("SELECT * FROM Employee WHERE Email=?");
    $stmt->bind_param("s", $UserName);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        if (password_verify($Password, $row['Password'])) {
            $_SESSION['user_role'] = $row['Role'];
            $_SESSION['user_id'] = $row['EmployeeID'];
            $_SESSION['user_fname'] = $row['First_Name'];
            $_SESSION['user_lname'] = $row['Last_Name'];
            $_SESSION['user_email'] = $row['Email'];
            $_SESSION['user_phone'] = $row['PhoneNumber'];
            $_SESSION['user_address'] = $row['Address'];
            $_SESSION['user_username'] = $row['Username'];
            $_SESSION['user_address'] = $row['Address'];

            //header to home
            header("Location: ../home/home.php");
            exit();
        }
    }

     // Check in Trainer table
    $stmt = $conn->prepare("SELECT * FROM Trainer WHERE Email=?");
    $stmt->bind_param("s", $UserName);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        if (password_verify($Password, $row['Password'])) {
            $_SESSION['user_role'] = $row['UserRole'];
            $_SESSION['user_id'] = $row['TrainerID'];
            $_SESSION['user_fname'] = $row['FirstName'];
            $_SESSION['user_lname'] = $row['LastName'];
            $_SESSION['user_email'] = $row['Email'];
            $_SESSION['user_phone'] = $row['Phone'];
            $_SESSION['user_username'] = $row['Username'];

            // Default redirect for other Employee roles
            header("Location: ../home/home.php");
            exit();
        }
    }


    // Check in User table
    $stmt = $conn->prepare("SELECT * FROM User WHERE Email=?");
    $stmt->bind_param("s", $UserName);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        if (password_verify($Password, $row['Password'])) {
            $_SESSION['user_role'] = "customer";
            $_SESSION['user_id'] = $row['UserID'];
            $_SESSION['user_fname'] = $row['First_Name'];
            $_SESSION['user_lname'] = $row['Last_Name'];
            $_SESSION['user_email'] = $row['Email'];
            $_SESSION['user_phone'] = $row['PhoneNumber'];
            $_SESSION['user_address'] = $row['Address'];
            $_SESSION['user_username'] = $row['Username'];

            header("Location: ../home/home.php");
            exit();
        }
    }

    // Invalid login
    header("Location: ./login.php?error=Invalid Credentials");
    exit();
}
?>
