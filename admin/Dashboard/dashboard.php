<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Google Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="./dashboard.css">

</head>

<body>
    <!-- nav-bar -->
    <?php include "../../header/header.php" ?>
    <div class="container admin-container">
        <!-- slide bar -->
        <aside class="admin-sidebar">
            <div class="action-buttons" style="margin-top: 10px;">
                <button class="btn btn-outline-primary" onclick="window.location.href='./dashboard.php';">Dashboard</button>
                <button class="btn btn-outline-primary" onclick="window.location.href='../Employee/employee.php'">Employee</button>
                <button class="btn btn-outline-primary" onclick="window.location.href='../User/user.php';">User</button>
                <button class="btn btn-outline-primary" onclick="window.location.href='../Classes/class.php';">Classes</button>
                <button class="btn btn-outline-primary" onclick="window.location.href='../Trainer/trainer.php';">Trainer</button>
                <button class="btn btn-outline-primary" onclick="window.location.href='../Registration/registration.php';"> Registration</button>
                <button class="btn btn-outline-primary" onclick="window.location.href='../Appointments/appointments.php'">Appointments</button>
                <button class="btn btn-outline-primary" onclick="window.location.href='../Queries/queries.php'"> Queries</button>
                <button class="btn btn-outline-primary" onclick="window.location.href='../Membership/membership.php'">Membership</button>
                <button class="btn btn-outline-primary">Blogs</button>
            </div>
        </aside>
        <!-- view account details -->
        <main class="main-content content1 active">
            <h2 class="page-title">Admin Dashboard</h2>
            <div class="dashboard-container">
                <div class="dashboard-row">
                    <div class="dashboard-item">
                        <?php
                        include '../../database/connection.php';
                        $sql = 'SELECT COUNT(EmployeeID) AS count FROM Employee';
                        $result = $conn->query($sql);

                        if ($result) {
                            $row = $result->fetch_assoc();
                            $employeeCount = $row['count'];
                            echo "<h4>Number of Employees</h3>
                            <h1>$employeeCount</h1>";
                        } else {
                            echo "<h3>Error fetching data</h3>";
                        }
                        ?>

                    </div>
                    <div class="dashboard-item">
                        <?php
                        include '../../database/connection.php';
                        $sql = 'SELECT COUNT(UserID) AS count FROM User';
                        $result = $conn->query($sql);

                        if ($result) {
                            $row = $result->fetch_assoc();
                            $userCount = $row['count'];
                            echo "<h4>Number of Users</h3>
                            <h1>$userCount</h1>";
                        } else {
                            echo "<h3>Error fetching data</h3>";
                        }
                        ?>
                    </div>
                    <div class="dashboard-item">
                        <?php
                        include '../../database/connection.php';
                        $sql = 'SELECT COUNT(TrainerID) AS count FROM Trainer';
                        $result = $conn->query($sql);

                        if ($result) {
                            $row = $result->fetch_assoc();
                            $trainerCount = $row['count'];
                            echo "<h4>Number of Trainers</h3>
                            <h1>$trainerCount</h1>";
                        } else {
                            echo "<h3>Error fetching data</h3>";
                        }
                        ?>
                    </div>
                </div>
                <div class="dashboard-row">
                    <div class="dashboard-item">
                        <?php
                        include '../../database/connection.php';
                        $sql = 'SELECT COUNT(ClassID) AS count FROM Class';
                        $result = $conn->query($sql);

                        if ($result) {
                            $row = $result->fetch_assoc();
                            $classCount = $row['count'];
                            echo "<h4>Number of Classes</h3>
                            <h1>$classCount</h1>";
                        } else {
                            echo "<h3>Error fetching data</h3>";
                        }
                        ?>
                    </div>
                    <div class="dashboard-item">
                        <?php
                        include '../../database/connection.php';
                        $sql = 'SELECT COUNT(ID) AS count FROM Registration';
                        $result = $conn->query($sql);

                        if ($result) {
                            $row = $result->fetch_assoc();
                            $registrationCount = $row['count'];
                            echo "<h4>Number of Registrations</h3>
                            <h1>$registrationCount</h1>";
                        } else {
                            echo "<h3>Error fetching data</h3>";
                        }
                        ?>
                    </div>
                    <div class="dashboard-item">
                        <?php
                        include '../../database/connection.php';
                        $sql = 'SELECT COUNT(ID) AS count FROM Appointments';
                        $result = $conn->query($sql);

                        if ($result) {
                            $row = $result->fetch_assoc();
                            $appointmentCount = $row['count'];
                            echo "<h4>Number of Appointments</h3>
                            <h1>$appointmentCount</h1>";
                        } else {
                            echo "<h3>Error fetching data</h3>";
                        }
                        ?>
                    </div>
                </div>
                <div class="dashboard-row">
                    <div class="dashboard-item">
                        <?php
                        include '../../database/connection.php';
                        $sql = 'SELECT COUNT(ID) AS count FROM Queries';
                        $result = $conn->query($sql);

                        if ($result) {
                            $row = $result->fetch_assoc();
                            $queryCount = $row['count'];
                            echo "<h4>Number of Queries</h3>
                            <h1>$queryCount</h1>";
                        } else {
                            echo "<h3>Error fetching data</h3>";
                        }
                        ?>
                    </div>
                    <div class="dashboard-item">
                        <?php
                        include '../../database/connection.php';
                        $sql = 'SELECT COUNT(MembershipID) AS count FROM Membership';
                        $result = $conn->query($sql);

                        if ($result) {
                            $row = $result->fetch_assoc();
                            $membershipCount = $row['count'];
                            echo "<h4>Number of Membership</h3>
                            <h1>$membershipCount</h1>";
                        } else {
                            echo "<h3>Error fetching data</h3>";
                        }
                        ?>
                    </div>
                    <div class="dashboard-item">
                        <h4>Number of Blogs</h4>
                        <h1>5</h1>
                    </div>
                </div>
            </div>
        </main>
    </div>

</body>

</html>