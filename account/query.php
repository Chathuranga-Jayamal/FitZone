<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Query</title>
    <style>
        form {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-family: Arial, sans-serif;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            border: none;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<?php 
session_start();
if (!isset($_SESSION['user_id'])) {
    session_destroy();
    header("Location: ../login/login.php");
    exit();
}

include "../header/header.php";
$userID = $_SESSION['user_id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "../database/connection.php";
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $question = mysqli_real_escape_string($conn, $_POST['question']);
    $qdate = date('Y-m-d');

    $sql = "INSERT INTO Queries (UserID, Question, Qdate, Answer, Adate, Status)
            VALUES ('$userID', '$question', '$qdate', NULL, NULL, 'Pending')";

    if (mysqli_query($conn, $sql)) {
        echo "<p style='text-align:center; color:green;'>Your query has been submitted successfully.</p>";
    } else {
        echo "<p style='text-align:center; color:red;'>Error: " . mysqli_error($conn) . "</p>";
    }

    mysqli_close($conn);
}
?>

<form method="POST" action="">
    <h2>Send Your Query</h2>
    <label for="question">Enter your query:</label><br>
    <textarea name="question" id="question" rows="5" required></textarea><br>
    <input type="submit" value="Submit Query">
</form>

</body>
</html>
