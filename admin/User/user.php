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
<link rel="stylesheet" href="./user.css">
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
                <button class="btn btn-outline-primary">Trainer</button>
                <button class="btn btn-outline-primary">Members</button>
                <button class="btn btn-outline-primary">Classes</button>
                <button class="btn btn-outline-primary"> Registration</button>
                <button class="btn btn-outline-primary">Appointments</button>
                <button class="btn btn-outline-primary"> Queries</button>
                <button class="btn btn-outline-primary">Promotions</button>
                <button class="btn btn-outline-primary">Blogs</button>
            </div>
        </aside>
        <!-- view account details -->
        <main class="main-content content1 active">
            <h2 class="page-title">User Management</h2>
            <div class="view-table-container">
                <div class="search-bar">
                    <input type="text" id="searchInput" placeholder="Search for names.." style="margin-bottom: 10px; padding: 6px; width: 200px;">
                </div>
                <div class="view-table">
                    <table id="employeeTable">
                        <tr>
                            <th>UserID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Username</th>
                            <th>Status</th>
                        </tr>

                        <?php
                        $sql = "SELECT*FROM User";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                            <td>{$row["UserID"]}</td>
                            <td>{$row["First_Name"]}</td>
                            <td>{$row["Last_Name"]}</td>
                            <td>{$row["Email"]}</td>
                            <td>{$row["PhoneNumber"]}</td>
                            <td>{$row["Address"]}</td>
                            <td>{$row["Username"]}</td>
                            <td>{$row["Status"]}</td>";
                            }
                        } else {
                            echo "<tr><td colspan='4'>No records found</td></tr>";
                        }

                        ?>
                    </table>
                </div>
            </div>            
            <div class="form-container activate-form-container">
                <form name="Activateform" id="Activateform" method="POST" action="./userActivate.php">
                    <div class="form-group">
                        <label for="id">EmployeeID</label>
                        <input name="employeeID" type="text" id="idActivate" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="firstName">First name</label>
                        <input type="text" id="firstNameActivate" class="form-control" readonly>
                    </div>

                    <div class="form-group">
                        <label for="lastName">Last name</label>
                        <input type="text" id="lastNameActivate" class="form-control" readonly>
                    </div>

                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" id="emailActivate" class="form-control" readonly>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="text" id="phoneActivate" class="form-control" readonly>
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" id="addressActivate" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="role">Username</label>
                        <input type="text" id="usernameActivate" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input name="status" type="text" id="statusActivate" class="form-control" readonly>
                    </div>
                    <div class="action-buttons">
                        <button type="submit" class="btn btn-primary" onclick="setStatusAndSubmit('Active')">Activate</button>
                        <button type="submit" class="btn btn-danger" onclick="setStatusAndSubmit('Diactive')">Diactivate</button>
                    </div>
                </form>
            </div>
        </main>
    </div>

    <script src="./user.js"></script>
</body>

</html>