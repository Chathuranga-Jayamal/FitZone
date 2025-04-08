<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("../database/connection.php");

if (isset($_POST["send"])) {
    $classID = $_POST["classID"];
    $email = $_POST["email"];

    // Check class
    $sql = "SELECT * FROM Class WHERE ClassID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $classID);
    $stmt->execute();
    $result = $stmt->get_result();
    $classRow = $result->fetch_assoc();

    if ($classRow && $classRow['Capacity'] > $classRow['Attendee']) {

        // Get user
        $sql = "SELECT * FROM User WHERE Email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result1 = $stmt->get_result();
        $userRow = $result1->fetch_assoc();

        if ($userRow) {
            $userID = $userRow['UserID'];

            // Check if already registered
            $sql = "SELECT * FROM Registration WHERE UserID = ? AND ClassID = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ii", $userID, $classID);
            $stmt->execute();
            $regResult = $stmt->get_result();

            if ($regResult->num_rows > 0) {
                header("Location: ./registration.php?error=User+already+registered+for+this+class");
                exit();
            }

            // Insert registration
            $sql = "INSERT INTO Registration (UserID, ClassID, Status) VALUES (?, ?, 'Pending')";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ii", $userID, $classID);
            if ($stmt->execute()) {
                // Update class attendee count
                $sql = "UPDATE Class SET Attendee = Attendee + 1 WHERE ClassID = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $classID);
                $stmt->execute();
                header("Location: ./registration.php?success=Registration+Success");
                exit();
            } else {
                header("Location: ./registration.php?error=Registration+Failed");
                exit();
            }
        } else {
            header("Location: ./registration.php?error=User+not+found");
            exit();
        }
    } else {
        header("Location: ./registration.php?error=Class+is+full+or+not+found");
        exit();
    }
} else {
    header("Location: ./registration.php?error=Invalid+Request");
    exit();
}

?>