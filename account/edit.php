<?php
session_start();
include("../database/connection.php");

if (isset($_POST['send'])) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $currentPassword = $_POST["currentPassword"];
    $newPassword = $_POST["newPassword"];
    $confirmPassword = $_POST["confirmPassword"];

    $userRole = $_SESSION['user_role'];
    $userID = $_SESSION['user_id'];

    if (empty($currentPassword) && empty($newPassword) && empty($confirmPassword)) {
        if ($userRole == "customer") {
            $sql = "UPDATE User SET First_Name=?, Last_Name=?, Email=?, PhoneNumber=?, Address=?, Username=? WHERE UserID=?";
        } elseif ($userRole == "Admin" || $userRole == "Manager") {
            $sql = "UPDATE Employee SET First_Name=?, Last_Name=?, Email=?, PhoneNumber=?, Address=?, Username=? WHERE EmployeeID=?";
        } elseif ($userRole == "Trainer") {
            $sql = "UPDATE Trainer SET FirstName=?, LastName=?, Email=?, Phone=?, Address=?, Username=? WHERE TrainerID=?";
        } else {
            header("Location: ./account.php?error=User Not Found");
            exit();
        }

        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ssssssi", $fname, $lname, $email, $phone, $address, $username, $userID);
            if (mysqli_stmt_execute($stmt)) {
                $_SESSION['user_fname'] = $fname;
                $_SESSION['user_lname'] = $lname;
                $_SESSION['user_email'] = $email;
                $_SESSION['user_phone'] = $phone;
                $_SESSION['user_address'] = $address;
                $_SESSION['user_username'] = $username;
                header("Location: ./account.php");
                exit();
            } else {
                header("Location: ./account.php?error=Update Failed");
                exit();
            }
        } else {
            header("Location: ./account.php?error=System Failed");
            exit();
        }
    } else if (empty($currentPassword)) {
        header("Location: ./account.php?error=Current Password is required");
        exit();
    } else if (empty($newPassword)) {
        header("Location: ./account.php?error=New Password is required");
        exit();
    } else if (empty($confirmPassword)) {
        header("Location: ./account.php?error=Confirm Password is required");
        exit();
    } else if ($newPassword != $confirmPassword) {
        header("Location: ./account.php?error=Password Mismatch");
        exit();
    } else {
        // Password change section
        if ($userRole == "customer") {
            $stmt = $conn->prepare("SELECT Password FROM User WHERE UserID=?");
        } elseif ($userRole == "Admin" || $userRole == "Manager") {
            $stmt = $conn->prepare("SELECT Password FROM Employee WHERE EmployeeID=?");
        } elseif ($userRole == "Trainer") {
            $stmt = $conn->prepare("SELECT Password FROM Trainer WHERE TrainerID=?");
        } else {
            header("Location: ./account.php?error=User Not Found");
            exit();
        }

        $stmt->bind_param("s", $userID);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($row = $result->fetch_assoc()) {
            if (password_verify($currentPassword, $row['Password'])) {
                $hashed_password = password_hash($newPassword, PASSWORD_DEFAULT);

                if ($userRole == "customer") {
                    $sql = "UPDATE User SET First_Name=?, Last_Name=?, Email=?, PhoneNumber=?, Password=?, Address=?, Username=? WHERE UserID=?";
                } elseif ($userRole == "Admin" || $userRole == "Manager") {
                    $sql = "UPDATE Employee SET First_Name=?, Last_Name=?, Email=?, PhoneNumber=?, Password=?, Address=?, Username=? WHERE EmployeeID=?";
                } elseif ($userRole == "Trainer") {
                    $sql = "UPDATE Trainer SET FirstName=?, LastName=?, Email=?, Phone=?, Password=?, Address=?, Username=? WHERE TrainerID=?";
                }

                $stmt = mysqli_prepare($conn, $sql);
                if ($stmt) {
                    mysqli_stmt_bind_param($stmt, "sssssssi", $fname, $lname, $email, $phone, $hashed_password, $address, $username, $userID);
                    if (mysqli_stmt_execute($stmt)) {
                        $_SESSION['user_fname'] = $fname;
                        $_SESSION['user_lname'] = $lname;
                        $_SESSION['user_email'] = $email;
                        $_SESSION['user_phone'] = $phone;
                        $_SESSION['user_address'] = $address;
                        $_SESSION['user_username'] = $username;
                        header("Location: ./account.php");
                        exit();
                    } else {
                        header("Location: ./account.php?error=Update Failed");
                        exit();
                    }
                } else {
                    header("Location: ./account.php?error=System Failed");
                    exit();
                }
            } else {
                header("Location: ./account.php?error=Current Password is incorrect");
                exit();
            }
        } else {
            header("Location: ./account.php?error=System Failed");
            exit();
        }
    }
}
?>
