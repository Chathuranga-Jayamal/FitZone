<?php
session_start();
include("../database/connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $UserName = $_POST["email"];
    $Password = $_POST["password"];

    //check in employee table
    $stmt = $conn->prepare("SELECT EmployeeID, Password, Role FROM Employee WHERE Email=?");
    $stmt->bind_param("s", $UserName);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        if (password_verify($Password, $row['Password'])) {
            $_SESSION['user_role'] = $row['Role'];
            $_SESSION['user_id'] = $row['EmployeeID'];

            if ($row['Role'] == "Admin") {
                header("Location: ../home/home.php");
            } elseif ($row['Role'] == "Manager") {
                header("Location: ../program/program.php");
            }
            exit();
        }
    }

    //check in user table
    $stmt = $conn->prepare("SELECT UserID, Password FROM User WHERE Email=?");
    $stmt->bind_param("s", $UserName);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        if (password_verify($Password, $row['Password'])) {

            $_SESSION['user_role'] = "customer";
            $_SESSION['user_id'] = $row['UserID'];
            header("Location: ../membership/membership.php");
            exit();
        }
    }


    //incorrect input
    header("Location: ./login.php?error=Invalid Credentials");
    exit();
}
