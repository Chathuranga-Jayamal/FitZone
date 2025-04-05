<?php
session_start();
include("../database/connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $UserName = $_POST["email"];
    $Password = $_POST["password"];

    //check in employee table
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

            if ($row['Role'] == "Admin") {
                header("Location: ../home/home.php");
                exit();
            } elseif ($row['Role'] == "Manager") {
                header("Location: ../program/program.php");
                exit();
            }
            exit();
        }
    }

    //check in user table
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


    //incorrect input
    header("Location: ./login.php?error=Invalid Credentials");
    exit();
}
