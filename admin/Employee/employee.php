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
<link rel="stylesheet" href="./employee.css">
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
                <button class="btn btn-outline-primary" onclick="window.location.href='../Appointments/appointments.php'">Appointments</button>
                <button class="btn btn-outline-primary" onclick="window.location.href='../Queries/queries.php'"> Queries</button>
                <button class="btn btn-outline-primary" onclick="window.location.href='../Membership/membership.php'">Membership</button>
                <button class="btn btn-outline-primary">Blogs</button>
            </div>
        </aside>
        <!-- view account details -->
        <main class="main-content content1 active">
            <h2 class="page-title">Employee Management</h2>
            <div class="view-table-container">
                <div class="search-bar">
                    <input type="text" id="searchInput" placeholder="Search for names.." style="margin-bottom: 10px; padding: 6px; width: 200px;">
                </div>
                <div class="view-table">
                    <table id="employeeTable">
                        <tr>
                            <th>EmployeeID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Role</th>
                            <th>Status</th>
                        </tr>

                        <?php
                        $sql = "SELECT*FROM Employee";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                            <td>{$row["EmployeeID"]}</td>
                            <td>{$row["First_Name"]}</td>
                            <td>{$row["Last_Name"]}</td>
                            <td>{$row["Email"]}</td>
                            <td>{$row["PhoneNumber"]}</td>
                            <td>{$row["Address"]}</td>
                            <td>{$row["Role"]}</td>
                            <td>{$row["Status"]}</td>";
                            }
                        } else {
                            echo "<tr><td colspan='4'>No records found</td></tr>";
                        }

                        ?>
                    </table>
                </div>
            </div>
            <div class="btn-container">
                <button id="addbtn" class="btn btn-success">Add</button>
                <button id="updatebtn" class="btn btn-primary">Update</button>
                <button id="activatebtn" class="btn btn-danger">Activate</button>
            </div>
            <div class="form-container add-form-container active">
                <form name="addform" id="addform" action="./addEmployee.php" method="POST" onsubmit="return validate_form();">
                    <div class="form-group">
                        <label for="firstName">First name</label>
                        <input name="firstName" type="text" id="firstName" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="lastName">Last name</label>
                        <input name="lastName" type="text" id="lastName" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input name="email" type="email" id="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input name="phone" type="text" id="phone" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <input name="address" type="text" id="address" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input name="password" type="password" id="address" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="role">Role</label>
                        <select name="role" id="role" class="form-control" required>
                            <option value="Manager">Manager</option>
                            <option value="Admin">Admin</option>
                            
                        </select>
                    </div>
                    <p id="error-message"></p>
                    <div class="action-buttons">
                        <button name="submit" id="" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <div class="form-container update-form-container">
                <form name="updateform" id="updateform" method="POST" action="./updateEmployee.php" onsubmit="return validate_updateform();">
                    <div class="form-group">
                        <label for="id">EmployeeID</label>
                        <input name="employeeID" type="text" id="idUpdate" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="firstName">First name</label>
                        <input name="firstName" type="text" id="firstNameUpdate" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="lastName">Last name</label>
                        <input name="lastName" type="text" id="lastNameUpdate" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input name="email" type="email" id="emailUpdate" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="email">Phone Number</label>
                        <input name="phone" type="text" id="phoneUpdate" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="email">Address</label>
                        <input name="address" type="text" id="addressUpdate" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="role">Role</label>
                        <select name="role" id="roleUpdate" class="form-control" required>
                            <option value="Manager">Manager</option>
                            <option value="Admin">Admin</option>
                            
                        </select>
                    </div>
                    <p id="error-message2"></p>
                    <div class="action-buttons">
                        <button name="submit" id="" type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>

            <div class="form-container activate-form-container">
                <form name="Activateform" id="Activateform" method="POST" action="./activateEmployee.php">
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
                        <label for="role">Role</label>
                        <input type="text" id="roleActivate" class="form-control" readonly>
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

    <script src="./employee.js"></script>
</body>

</html>