<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trainer Details</title>
    <?php include "../header/header.php"; ?>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            color: #333;
        }
        .trainer-container {
            max-width: 700px;
            margin: 60px auto;
            background-color: #fff;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
        }
        .back-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 15px;
            text-decoration: none;
            color: #555;
            margin-bottom: 25px;
            transition: color 0.3s ease;
        }
        .back-btn:hover {
            color: #007bff;
        }
        .trainer-header {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            align-items: center;
        }
        .trainer-img {
            width: 200px;
            height: 200px;
            border-radius: 14px;
            object-fit: cover;
            border: 4px solid #e0e0e0;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }
        .trainer-info h2 {
            margin: 0;
            font-size: 32px;
            color: #222;
        }
        .trainer-info p {
            margin: 8px 0;
            font-size: 16px;
            color: #666;
        }
        .details {
            margin-top: 35px;
        }
        .details p {
            font-size: 15.5px;
            margin: 12px 0;
        }
        .details p strong {
            display: inline-block;
            min-width: 140px;
            color: #444;
        }
        .btn-appointment {
            display: inline-block;
            margin-top: 30px;
            padding: 12px 28px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            font-weight: 600;
            border-radius: 10px;
            transition: background-color 0.3s ease;
        }
        .btn-appointment:hover {
            background-color: #0056b3;
        }
        @media (max-width: 700px) {
            .trainer-header {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }
            .trainer-img {
                width: 100%;
                height: auto;
            }
        }
    </style>
</head>
<body>

<div class="trainer-container">
    <a href="javascript:history.back()" class="back-btn">⬅ Back to Trainers</a>

    <?php
    include "../database/connection.php";

    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $trainerID = $_GET['id'];

        $stmt = $conn->prepare("SELECT * FROM Trainer WHERE TrainerID = ?");
        $stmt->bind_param("i", $trainerID);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $trainer = $result->fetch_assoc();
            ?>
            <div class="trainer-header">
                <img src="../Trainer/image/<?php echo htmlspecialchars($trainer['ImageURL']); ?>" alt="Trainer Image" class="trainer-img">
                <div class="trainer-info">
                    <h2><?php echo htmlspecialchars($trainer['FirstName'] . ' ' . $trainer['LastName']); ?></h2>
                    <p><strong>🧑‍💼 Role:</strong> <?php echo htmlspecialchars($trainer['Role']); ?></p>
                    <p><strong>📧 Email:</strong> <?php echo htmlspecialchars($trainer['Email']); ?></p>
                    <p><strong>📞 Phone:</strong> <?php echo htmlspecialchars($trainer['Phone']); ?></p>
                </div>
            </div>
            <div class="details">
                <?php if ($trainer['Bio']) echo "<p><strong>📝 Bio:</strong> " . htmlspecialchars($trainer['Bio']) . "</p>"; ?>
                <p><strong>💼 Experience:</strong> <?php echo htmlspecialchars($trainer['ExperienceYears'] ?? 0); ?> years</p>
                <?php if ($trainer['Specialties']) echo "<p><strong>🏅 Specialties:</strong> " . htmlspecialchars($trainer['Specialties']) . "</p>"; ?>
                <p><strong>📅 Employment Start:</strong> <?php echo htmlspecialchars($trainer['Employment_Start_Date']); ?></p>
                <?php if ($trainer['Employment_End_Date']) echo "<p><strong>📆 Employment End:</strong> " . htmlspecialchars($trainer['Employment_End_Date']) . "</p>"; ?>

                <a href="./Appointment.php?trainer_id=<?php echo urlencode($trainer['TrainerID']); ?>" class="btn-appointment">📞 Book Appointment</a>
            </div>
            <?php
        } else {
            echo "<p style='color: red; text-align: center;'>Trainer not found.</p>";
        }

        $stmt->close();
    } else {
        echo "<p style='color: red; text-align: center;'>Invalid trainer ID.</p>";
    }

    $conn->close();
    ?>
</div>
</body>
</html>
