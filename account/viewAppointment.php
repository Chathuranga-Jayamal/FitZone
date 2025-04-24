<?php
session_start();
include "../header/header.php";
include "../database/connection.php";

// Get Trainer ID from session
$trainerID = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';

// Fetch appointments assigned to this trainer with user details
$sql = "SELECT a.ID, a.Title, a.Description, a.Status, 
               u.First_Name, u.Last_Name, u.Email, u.PhoneNumber
        FROM Appointments a
        JOIN User u ON a.UserID = u.UserID
        WHERE a.TrainerID = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $trainerID);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trainer - View Appointments</title>
  <style>
    body {
        font-family: 'Segoe UI', sans-serif;
        background-color: #f2f6fa;
        

    h1 {
        text-align: center;
        color: #2c3e50;
        margin-bottom: 20px;
    }

    table {
        width: 95%;
        margin: 0 auto;
        border-collapse: collapse;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        overflow: hidden;
    }

    th, td {
        padding: 14px 16px;
        text-align: left;
        border-bottom: 1px solid #eee;
    }

    th {
        background-color: #34495e;
        color: #fff;
    }

    tr:hover {
        background-color: #f1f1f1;
    }

    .no-data {
        text-align: center;
        color: #555;
        font-size: 18px;
        margin-top: 40px;
    }
  </style>
</head>
<body>

<h1>Your Appointments</h1>

<?php if ($result->num_rows > 0): ?>
<table>
  <thead>
    <tr>
      <th>Appointment ID</th>
      <th>Title</th>
      <th>Description</th>
      <th>Status</th>
      <th>User Name</th>
      <th>Email</th>
      <th>Phone</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($row = $result->fetch_assoc()): ?>
    <tr>
      <td><?= htmlspecialchars($row['ID']) ?></td>
      <td><?= htmlspecialchars($row['Title']) ?></td>
      <td><?= $row['Description'] ? htmlspecialchars($row['Description']) : 'N/A' ?></td>
      <td><?= htmlspecialchars($row['Status']) ?></td>
      <td><?= htmlspecialchars($row['First_Name'] . ' ' . $row['Last_Name']) ?></td>
      <td><?= htmlspecialchars($row['Email']) ?></td>
      <td><?= htmlspecialchars($row['PhoneNumber']) ?></td>
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>
<?php else: ?>
  <div class="no-data">No appointments have been made with you yet.</div>
<?php endif; ?>

</body>
</html>
