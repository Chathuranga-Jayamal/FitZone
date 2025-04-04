<?php
session_start();
include("../database/connection.php");

if(isset($_POST['send'])){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $UserName = $_POST["username"];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO User(First_Name, Last_Name, Email,PhoneNumber, Password,Address,Username) VALUES (?,?,?,?,?,?,?)";
    $stmt = mysqli_prepare($conn, $sql);

    if($stmt){
        mysqli_stmt_bind_param($stmt, "sssssss", $fname, $lname, $email, $phone, $hashed_password, $address, $UserName);
        if(mysqli_stmt_execute($stmt)){
            $_SESSION['user_fname'] = $fname;
            $_SESSION['user_lname'] = $lname;
            $_SESSION['user_email'] = $email;
            $_SESSION['user_phone'] = $phone;
            $_SESSION['user_address'] = $address;
            $_SESSION['user_username'] = $UserName;
            header("Location: ../account/account.php");
            exit();
        }else{
            header("Location: ./registrationForm.php?error=Registration Failed");
            exit();
        }
    }else{
        header("Location: ./registrationForm.php?error=System Failed");
        exit();
    }
}
?>