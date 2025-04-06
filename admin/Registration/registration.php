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
<link rel="stylesheet" href="./registration.css">
<!-- nav-bar -->
<?php
include "../../header/header.php";
include "../../database/connection.php";
?>
</head>

<body>
    <div class="container admin-container">
        <!-- slide bar -->
        <aside class="admin-sidebar">
            <div class="action-buttons" style="margin-top: 10px;">
                <button class="btn btn-outline-primary" onclick="window.location.href='../Dashboard/dashboard.php';">Dashboard</button>
                <button class="btn btn-outline-primary" onclick="window.location.href='../Employee/employee.php';">Employee</button>
                <button class="btn btn-outline-primary" onclick="window.location.href='../User/user.php';">User</button>
                <button class="btn btn-outline-primary" onclick="window.location.href='../Classes/class.php';">Classes</button>
                <button class="btn btn-outline-primary" onclick="window.location.href='../Trainer/trainer.php';">Trainer</button>
                <button class="btn btn-outline-primary" onclick="window.location.href='../Registration/registration.php';"> Registration</button>
                <button class="btn btn-outline-primary">Appointments</button>
                <button class="btn btn-outline-primary"> Queries</button>
                <button class="btn btn-outline-primary">Promotions</button>
                <button class="btn btn-outline-primary">Blogs</button>
            </div>
        </aside>
        <!-- view account details -->
        <main class="main-content content1 active">
            <h2 class="page-title">Registration Management</h2>
            <div class="view-table-container">
                <div class="search-bar">
                    <input type="text" id="searchInput" placeholder="Search for names.." style="margin-bottom: 10px; padding: 6px; width: 200px;">
                </div>
                <div class="view-table">
                    <table id="registrationTable">
                        <tr>
                            <th>RegistrationID</th>
                            <th>UserID</th>
                            <th>User Email</th>
                            <th>ClassID</th>
                            <th>Class Name</th>
                            <th>Status</th>
                        </tr>

                        <?php
                        $sql = "SELECT r.id, r.UserID, u.Email AS UserEmail, r.ClassID, c.ClassName AS ClassName, r.Status
            FROM Registration r
            JOIN User u ON r.UserID = u.UserID
            JOIN Class c ON r.ClassID = c.ClassID";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                <td>{$row["id"]}</td>
                <td>{$row["UserID"]}</td>
                <td>{$row["UserEmail"]}</td>
                <td>{$row["ClassID"]}</td>
                <td>{$row["ClassName"]}</td>
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
                <form name="form" id="form" method="POST" action="./registrationapproved.php">
                    <div class="form-group">
                        <label for="id">RegistrationID</label>
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
                        <label for="classID">ClassID</label>
                        <input type="number" id="classID" class="form-control" readonly>
                    </div>

                    <div class="form-group">
                        <label for="className">Class Name</label>
                        <input type="text" id="className" class="form-control" readonly>
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <input name="status" type="text" id="status" class="form-control" readonly>
                    </div>
                    <div class="action-buttons">
                        <button type="submit" class="btn btn-primary" onclick="setStatusAndSubmit('approved')">Approved</button>
                        <button type="submit" class="btn btn-danger" onclick="setStatusAndSubmit('Declined')">Declined</button>
                    </div>
                </form>
            </div>
        </main>
    </div>

    <script src="./registration.js"></script>
</body>

</html>