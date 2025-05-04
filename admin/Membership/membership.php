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
<link rel="stylesheet" href="./membership.css">
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
    <div class="admin-container">
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
            <h2 class="page-title">Membership Management</h2>
            <div class="view-table-container">
                <div class="search-bar">
                    <input type="text" id="searchInput" placeholder="Search for names.." style="margin-bottom: 10px; padding: 6px; width: 200px;">
                </div>
                <div class="view-table">
                    <table id="membershipTable">
                        <tr>
                            <th>MembershipID</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Discount</th>
                            <th>Percentage</th>
                            <th>Duration</th>
                            <th>Description</th>
                        </tr>

                        <?php
                        $sql = "SELECT * FROM Membership";

                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                                <td>{$row["MembershipID"]}</td>
                                <td>{$row["Name"]}</td>
                                <td>{$row["Price"]}</td>
                                <td>{$row["Discount"]}</td>
                                <td>{$row["Percentage"]}</td>
                                <td>{$row["Duration"]}</td>
                                <td>{$row["Description"]}</td>
                                </tr>";
                                }
                        } else {
                            echo "<tr><td colspan='15'>No records found</td></tr>";
                        }
                        ?>
                    </table>

                </div>
            </div>
            
            <div class="form-container update-form-container">
                <form name="updateform" id="updateform" method="POST" action="./membershipUpdate.php" onsubmit="return validate_updateform();">
                    <div class="form-group">
                        <label for="id">MembershipID</label>
                        <input name="membershipID" type="number" id="id" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="firstName">Membership name</label>
                        <input name="name" type="text" id="name" class="form-control" readonly>
                    </div>

                    <div class="form-group">
                        <label for="lastName">Price</label>
                        <input name="price" type="number" id="price" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="email">Discount</label>
                        <input name="discount" type="number" id="discount" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="phone">Percentage</label>
                        <input name="percentage" type="text" id="percentage" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="role">Duration</label>
                        <input name="duration" type="text" id="duration" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="bio">Description</label>
                        <input name="description" type="text" id="description" class="form-control">
                    </div>
                    <p id="error-message"></p>
                    <div class="action-buttons">
                        <button name="submit" id="" type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </main>
    </div>

    <script src="./membership.js"></script>
</body>

</html>