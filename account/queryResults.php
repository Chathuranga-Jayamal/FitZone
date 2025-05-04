<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Answered Queries - FitZone</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f7f9fc;
        }

        .body-container {
            max-width: 1000px;
            margin: 80px auto 40px;
            background-color: #ffffff;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-bottom: 25px;
            color: #333;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th,
        td {
            padding: 14px 18px;
            text-align: left;
        }

        th {
            background-color: #0d6efd;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f6fb;
        }

        tr:hover {
            background-color: #e2ecf9;
        }

        td {
            color: #333;
        }

        .no-results {
            text-align: center;
            font-size: 18px;
            padding: 30px 0;
            color: #777;
        }
    </style>
</head>

<body>

    <?php
    include "../header/header.php"; // Your navbar
    include "../database/connection.php";
    session_start();

    $userID = $_SESSION['user_id'] ?? null;

    if (!$userID) {
        echo "<div class='container'><p class='no-results'>You must be logged in to view your answered queries.</p></div>";
        exit;
    }

    $query = "SELECT Question, Answer, Qdate, Adate FROM Queries 
              WHERE UserID = ? AND Answer IS NOT NULL";

    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $userID);
    $stmt->execute();
    $result = $stmt->get_result();
    ?>

    <div class="body-container">
        <h2>Your Answered Queries</h2>

        <?php
        if ($result->num_rows > 0) {
            echo "<table>
                    <tr>
                        <th>Question</th>
                        <th>Asked Date</th>
                        <th>Answer</th>
                        <th>Answered Date</th>
                    </tr>";
            while ($row = $result->fetch_assoc()) {
                $question = htmlspecialchars($row['Question']);
                $qdate = $row['Qdate'] ? date("F j, Y", strtotime($row['Qdate'])) : 'N/A';
                $answer = htmlspecialchars($row['Answer']);
                $adate = $row['Adate'] ? date("F j, Y", strtotime($row['Adate'])) : 'N/A';

                echo "<tr>
            <td>$question</td>
            <td>$qdate</td>
            <td>$answer</td>
            <td>$adate</td>
          </tr>";
            }
            echo "</table>";
        } else {
            echo "<p class='no-results'>No answered queries found.</p>";
        }

        $stmt->close();
        $conn->close();
        ?>
    </div>
</body>

</html