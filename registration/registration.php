<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="./registration.css">

</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION['user_id'])) {
        $user_email = $_SESSION['user_email'] ? $_SESSION['user_email'] : '';
        $user_fname = $_SESSION['user_fname'] ? $_SESSION['user_fname'] : '';
        $user_lname = $_SESSION['user_lname'] ? $_SESSION['user_lname'] : '';
        $user_username = $_SESSION['user_username'] ? $_SESSION['user_username'] : '';
    } else {
        session_destroy();
        header("Location: /FitZone/login/login.php");
        exit();
    }
    include "../header/header.php";
    $error_message = isset($_GET['error']) ? htmlspecialchars($_GET['error']) : '';
    $success_message = isset($_GET['success']) ? htmlspecialchars($_GET['success']) : '';
    ?>

    <div class="body-container">
        <div class="form-container">
            <h1>Register to Our Classes</h1>
            <div class="view-table">
                <table id="Table">
                    <tr>
                        <th>ClassID</th>
                        <th>ClassName</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Capacity</th>
                        <th>Trainer</th>
                    </tr>

                    <?php
                    include "../database/connection.php";
                    $sql = "SELECT c.ClassID, c.ClassName, c.ClassDescription, c.Date, c.Capacity, t.FirstName AS TrainerName
                                FROM Class c
                                JOIN Trainer t ON c.TrainerID = t.TrainerID";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                            <td>{$row["ClassID"]}</td>
                            <td>{$row["ClassName"]}</td>
                            <td>{$row["ClassDescription"]}</td>
                            <td>{$row["Date"]}</td>
                            <td>{$row["Capacity"]}</td>
                            <td>{$row["TrainerName"]}</td>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>No records found</td></tr>";
                    }

                    ?>
                </table>
            </div>
            <div class="form-item-container mt-5">
                <form name="registrationForm" class="registration-form" method="post" onsubmit="return validate_form();" action="./registrationAdd.php">

                    <div class="form-item">
                        <label for="classID">Class ID:</label>
                        <input type="number" id="classID" name="classID" class="input-box" readonly>
                    </div>
                    <div class="form-item">
                        <label for="className">Class Name:</label>
                        <input type="text" id="className" name="className" class="input-box" readonly>
                    </div>                 
                    <div class="form-item">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($user_fname . " " . $user_lname) ?>" class="input-box">
                    </div>
                    <div class="form-item">
                        <label for="Username">Username:</label>
                        <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($user_username) ?>" class="input-box">
                    </div>
                    <div class="form-item">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user_email) ?>" class="input-box" required>
                    </div>
                    <!-- error-message -->
                     <p id="success-message" class="success-message"><?php echo $success_message;?></p>
                    <p id="error-message" class="error-message"><?php echo $error_message; ?></p>
                    <div class="button-group">
                        <button name="send" class="btn btn-primary btn-lg me-5 mt-4" type="submit">Register</button>
                        <button name="cancel" class="btn btn-outline-primary btn-lg mt-4" type="reset">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="./registration.js"></script>
</body>

</html>