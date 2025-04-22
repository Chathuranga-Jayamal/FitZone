<?php
session_start();
include "../header/header.php";
include "../database/connection.php";

$userID = $_SESSION['user_id'] ?? null;
$trainerID = $_GET['trainer_id'] ?? null;
$message = "";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = trim($_POST['title']);
    $description = trim($_POST['description'] ?? '');
    $trainerID = $_POST['trainer_id'];

    if ($userID && $trainerID && $title !== "") {
        $stmt = $conn->prepare("INSERT INTO Appointments (UserID, Title, Description, TrainerID, Status) VALUES (?, ?, ?, ?, 'Pending')");
        $stmt->bind_param("issi", $userID, $title, $description, $trainerID);
        if ($stmt->execute()) {
            $message = "<p style='color: green;'>Appointment booked successfully!</p>";
        } else {
            $message = "<p style='color: red;'>Error booking appointment. Please try again.</p>";
        }
        $stmt->close();
    } else {
        $message = "<p style='color: red;'>All required fields must be filled.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Appointment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 0;
        }
        .appointment-form {
            width: 90%;
            max-width: 500px;
            margin: 60px auto;
            background-color: #fff;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 25px;
        }
        label {
            display: block;
            margin: 14px 0 6px;
            font-weight: 500;
        }
        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px 14px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 15px;
        }
        textarea {
            resize: vertical;
        }
        input[type="submit"] {
            display: block;
            width: 100%;
            background-color: #007bff;
            color: white;
            padding: 12px;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            margin-top: 20px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .msg {
            text-align: center;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<div class="appointment-form">
    <h2>Book an Appointment</h2>

    <div class="msg"><?php echo $message; ?></div>

    <form method="POST" action="">
        <input type="hidden" name="trainer_id" value="<?php echo htmlspecialchars($trainerID); ?>">

        <label for="title">Title<span style="color: red;">*</span></label>
        <input type="text" id="title" name="title" required placeholder="e.g., Fitness Consultation">

        <label for="description">Description</label>
        <textarea id="description" name="description" rows="4" placeholder="Optional details about your appointment"></textarea>

        <input type="submit" value="Book Appointment">
    </form>
</div>

</body>
</html>
