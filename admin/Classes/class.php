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
<link rel="stylesheet" href="./class.css">
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
                <button class="btn btn-outline-primary" onclick="window.location.href='../blog/blog.php'">Blogs</button>
            </div>
        </aside>
        <!-- view account details -->
        <main class="main-content content1 active">
            <h2 class="page-title">Classes Management</h2>
            <div class="view-table-container">
                <div class="search-bar">
                    <input type="text" id="searchInput" placeholder="Search for names.." style="margin-bottom: 10px; padding: 6px; width: 200px;">
                </div>
                <div class="view-table">
                    <table id="classTable">
                        <tr>
                            <th>ClassID</th>
                            <th>ClassName</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th>Capacity</th>
                            <th>Attendee</th>
                            <th>Trainer</th>
                        </tr>

                        <?php
                        $sql = "SELECT c.ClassID, c.ClassName, c.ClassDescription, c.Date, c.Capacity, c.Attendee, t.FirstName AS TrainerName
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
                            <td>{$row["Attendee"]}</td>
                            <td>{$row["TrainerName"]}</td>";
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
                <button id="deletebtn" class="btn btn-danger">Delete</button>
            </div>
            <div class="form-container add-form-container active">
                <form name="addform" id="addform" method="POST" action="./classAdd.php" onsubmit="return validate_form();">

                    <div class="form-group">
                        <label for="clasName">Class Name</label>
                        <select name="className" id="className" class="form-control" required>
                            <option value="Cardio Class">Cardio Class</option>
                            <option value="Yoga Class">Yoga Class</option>
                            <option value="Strength Training">Strength Training Class</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input name="description" type="text" id="description" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="date">Date</label>
                        <input name="date" type="date" id="date" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="capacity">Capacity</label>
                        <input name="capacity" type="number" id="capacity" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="trainer">TrainerID</label>
                        <input name="trainerID" type="number" id="trainer" class="form-control" required>
                    </div>

                    <p id="error-message"></p>
                    <div class="action-buttons">
                        <button name="submit" id="" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <div class="form-container update-form-container">
                <form name="updateform" id="updateform" method="POST" action="./classUpdate.php" onsubmit="return validate_updateform();">
                    <div class="form-group">
                        <label for="id">Class ID</label>
                        <input name="id" type="number" id="idUpdate" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="clasName">Class Name</label>
                        <select name="className" id="classNameUpdate" class="form-control" required>
                            <option value="Cardio Class">Cardio Class</option>
                            <option value="Yoga Class">Yoga Class</option>
                            <option value="Strength Training Class">Strength Training Class</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input name="description" type="text" id="descriptionUpdate" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="date">Date</label>
                        <input name="date" type="date" id="dateUpdate" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="capacity">Capacity</label>
                        <input name="capacity" type="number" id="capacityUpdate" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="trainer">TrainerID</label>
                        <input name="trainerID" type="text" id="trainerUpdate" class="form-control">
                    </div>
                    <p id="error-message2"></p>
                    <div class="action-buttons">
                        <button name="submit" id="" type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>

            <div class="form-container delete-form-container">
                <form name="Deleteform" id="Deleteform" method="POST" action="./classDelete.php">
                     <div class="form-group">
                        <label for="id">Class ID</label>
                        <input name="id" type="number" id="idDelete" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="className">Class Name</label>
                        <input name="className" type="text" id="classNameDelete" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input name="description" type="text" id="descriptionDelete" class="form-control" readonly>
                    </div>

                    <div class="form-group">
                        <label for="date">Date</label>
                        <input name="date" type="date" id="dateDelete" class="form-control" readonly>
                    </div>

                    <div class="form-group">
                        <label for="capacity">Capacity</label>
                        <input name="capacity" type="number" id="capacityDelete" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="trainer">Trainer</label>
                        <input name="trainer" type="text" id="trainerDelete" class="form-control" readonly>
                    </div>
                    <div class="action-buttons">
                        <button name="submit" type="submit" class="btn btn-danger">Delete</button>

                    </div>
                </form>
            </div>
        </main>
    </div>

    <script src="./class.js"></script>
</body>

</html>