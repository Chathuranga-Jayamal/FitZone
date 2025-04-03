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

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO User(First_Name, Last_Name, Email,PhoneNumber, Password,Address) VALUES (?,?,?,?,?,?)";
    $stmt = mysqli_prepare($conn, $sql);

    if($stmt){
        mysqli_stmt_bind_param($stmt, "ssssss", $fname, $lname, $email, $phone, $hashed_password, $address);
        if(mysqli_stmt_execute($stmt)){
            header("Location: ../home/home.php");
        }else{
            header("Location: ./registrationForm.php?error=Registration Failed");
        }
    }else{
        header("Location: ./registrationForm.php?error=System Failed");
    }
}
?>