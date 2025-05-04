<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>
<!-- Google Icons -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<!-- CSS -->
<link rel="stylesheet" href="./queries.css">
<!-- nav-bar -->
<?php
 session_start();
    if (!isset($_SESSION['user_id'])) {
    session_destroy();
    header("Location: /FitZone/login/login.php");
    exit();
    }

include "../../header/header.php";
include "../../database/connection.php";
?>
</head>

<body>
    <div class="container admin-container">
        <!-- slide bar -->
        <aside class="admin-sidebar">
            <div class="action-buttons" style="margin-top: 10px;">
                 <?php if ($_SESSION['user_role'] == "Admin") : ?>
                     <button class="btn btn-outline-primary" onclick="window.location.href='../Dashboard/dashboard.php';">Dashboard</button>
                <button class="btn btn-outline-primary" onclick="window.location.href='../Employee/employee.php'">Employee</button>
                <button class="btn btn-outline-primary" onclick="window.location.href='../User/user.php';">User</button>
                <button class="btn btn-outline-primary" onclick="window.location.href='../Classes/class.php';">Classes</button>
                <button class="btn btn-outline-primary" onclick="window.location.href='../Trainer/trainer.php';">Trainer</button>
                <button class="btn btn-outline-primary" onclick="window.location.href='../Registration/registration.php';"> Registration</button>
                <button class="btn btn-outline-primary" onclick="window.location.href='../Appointments/appointments.php'">Appointments</button>
                <button class="btn btn-outline-primary" onclick="window.location.href='../Queries/queries.php'"> Queries</button>
                <button class="btn btn-outline-primary" onclick="window.location.href='../Membership/membership.php'">Membership</button>
                <button class="btn btn-outline-primary" onclick="window.location.href='../blog/blog.php'">Blogs</button>
                <?php elseif ($_SESSION['user_role'] == "Manager") : ?>
                     <button class="btn btn-outline-primary" onclick="window.location.href='../Dashboard/dashboard.php';">Dashboard</button>
                <button class="btn btn-outline-primary" onclick="window.location.href='../User/user.php';">User</button>
                <button class="btn btn-outline-primary" onclick="window.location.href='../Classes/class.php';">Classes</button>
                <button class="btn btn-outline-primary" onclick="window.location.href='../Trainer/trainer.php';">Trainer</button>
                <button class="btn btn-outline-primary" onclick="window.location.href='../Registration/registration.php';"> Registration</button>
                <button class="btn btn-outline-primary" onclick="window.location.href='../Appointments/appointments.php'">Appointments</button>
                <button class="btn btn-outline-primary" onclick="window.location.href='../Queries/queries.php'"> Queries</button>
                <button class="btn btn-outline-primary" onclick="window.location.href='../Membership/membership.php'">Membership</button>
                <button class="btn btn-outline-primary" onclick="window.location.href='../blog/blog.php'">Blogs</button>
                <?php endif; ?>
            </div>
        </aside>
        <!-- view account details -->
        <main class="main-content content1 active">
            <h2 class="page-title">Queries Management</h2>
            <div class="view-table-container">
                <div class="search-bar">
                    <input type="text" id="searchInput" placeholder="Search for names.." style="margin-bottom: 10px; padding: 6px; width: 200px;">
                </div>
                <div class="view-table">
                    <table id="queryTable">
                        <tr>
                            <th>QueryID</th>
                            <th>UserID</th>
                            <th>User Email</th>
                            <th>Question</th>
                            <th>Answer</th>
                            <th>Status</th>
                        </tr>

                        <?php
                        $sql = "SELECT  q.id, q.UserID, u.Email AS UserEmail, q.Question, q.Answer, q.Status
                        FROM Queries q
                        JOIN User u ON q.UserID = u.UserID";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                            <td>{$row["id"]}</td>
                            <td>{$row["UserID"]}</td>
                            <td>{$row["UserEmail"]}</td>
                            <td>{$row["Question"]}</td>
                            <td>{$row["Answer"]}</td>
                            <td>{$row["Status"]}</td>
                            </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='6'>No records found</td></tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
            <div class="form-container activate-form-container">
                <form name="form" id="form" method="POST" action="./queriesReply.php">
                    <div class="form-group">
                        <label for="id">QueryID</label>
                        <input name="id" type="number" id="id" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="userID">UserID</label>
                        <input type="number" id="userID" class="form-control" readonly>
                    </div>

                    <div class="form-group">
                        <label for="email">User Email</label>
                        <input type="email" id="email" class="form-control" readonly>
                    </div>

                    <div class="form-group">
                        <label for="question">Question</label>
                        <input type="text" id="question" class="form-control" readonly>
                    </div>

                     <div class="form-group">
                        <label for="status">Status</label>
                        <input name="status" type="text" id="status" class="form-control" readonly>
                    </div>

                    <div class="form-group">
                        <label for="answer">Answer</label>
                        <input name="answer" type="text" id="answer" class="form-control" required>
                    </div>
                    <div class="action-buttons">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>         
            </div>                                      
        </main>
    </div>
    <script src="./queries.js"></script>
    
</body>

</html>