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
<link rel="stylesheet" href="./trainer.css">
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
            <h2 class="page-title">Trainer Management</h2>
            <div class="view-table-container">
                <div class="search-bar">
                    <input type="text" id="searchInput" placeholder="Search for names.." style="margin-bottom: 10px; padding: 6px; width: 200px;">
                </div>
                <div class="view-table">
                    <table id="trainerTable">
                        <tr>
                            <th>TrainerID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Role</th>
                            <th>Bio</th>
                            <th>Image</th>
                            <th>CertificationID</th>
                            <th>Certification</th>
                            <th>Experience Years</th>
                            <th>Specialties</th>
                            <th>Status</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                        </tr>

                        <?php
                        $sql = "SELECT t.TrainerID, t.FirstName, t.LastName, t.Email, t.Phone, t.Role, t.Bio, t.ImageURL, 
                        t.CertificationID, c.Certification AS Certification, t.ExperienceYears, t.Specialties, 
                        t.Status, t.Employment_Start_Date, t.Employment_End_Date
                        FROM Trainer t
                        JOIN Certification c ON t.CertificationID = c.CertificationID";


                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                                <td>{$row["TrainerID"]}</td>
                                <td>{$row["FirstName"]}</td>
                                <td>{$row["LastName"]}</td>
                                <td>{$row["Email"]}</td>
                                <td>{$row["Phone"]}</td>
                                <td>{$row["Role"]}</td>
                                <td>{$row["Bio"]}</td>
                                <td>{$row["ImageURL"]}</td>
                                <td>{$row["CertificationID"]}</td>
                                <td>{$row["Certification"]}</td>
                                <td>{$row["ExperienceYears"]}</td>
                                <td>{$row["Specialties"]}</td>
                                <td>{$row["Status"]}</td>
                                <td>{$row["Employment_Start_Date"]}</td>
                                <td>{$row["Employment_End_Date"]}</td>
                                </tr>";
                                }
                        } else {
                            echo "<tr><td colspan='15'>No records found</td></tr>";
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
                <form name="addform" id="addform" action="./trainerADD.php" method="POST" onsubmit="return validate_form();">
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
                        <label for="role">Role</label>
                        <input name="role" type="text" id="role" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="bio">Bio</label>
                        <input name="bio" type="text" id="bio" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input name="image" type="text" id="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="certificationID">certificationID</label>
                        <input name="certificationID" type="text" id="certificationID" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="Experience">Experience of Years</label>
                        <input name="experience" type="text" id="experience" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Specialties">Specialties</label>
                        <input name="specialties" type="text" id="specialties" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input name="password" type="password" id="passsword" class="form-control">
                    </div>
                    <p id="error-message"></p>
                    <div class="action-buttons">
                        <button name="submit" id="" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <div class="form-container update-form-container">
                <form name="updateform" id="updateform" method="POST" action="./trainerUpdate.php" onsubmit="return validate_updateform();">
                    <div class="form-group">
                        <label for="id">EmployeeID</label>
                        <input name="trainerID" type="text" id="idUpdate" class="form-control" readonly>
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
                        <label for="phone">Phone Number</label>
                        <input name="phone" type="text" id="phoneUpdate" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="role">Role</label>
                        <input name="role" type="text" id="roleUpdate" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="bio">Bio</label>
                        <input name="bio" type="text" id="bioUpdate" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input name="image" type="text" id="imageUpdate" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="certificationID">certificationID</label>
                        <input name="certificationID" type="text" id="certificationIDUpdate" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="certification">certification</label>
                        <input name="certification" type="text" id="certificationUpdate" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Experience">Experience of Years</label>
                        <input name="experience" type="text" id="experienceUpdate" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Specialties">Specialties</label>
                        <input name="specialties" type="text" id="specialtiesUpdate" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input name="status" type="text" id="statusUpdate" class="form-control" readonly>
                    </div>
                    <p id="error-message2"></p>
                    <div class="action-buttons">
                        <button name="submit" id="" type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>

            <div class="form-container activate-form-container">
                <form name="Activateform" id="Activateform" method="POST" action="./trainerActivate.php">
                     <div class="form-group">
                        <label for="id">TrainerID</label>
                        <input name="trainerID" type="text" id="idActivate" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="firstName">First name</label>
                        <input name="firstName" type="text" id="firstNameActivate" class="form-control" readonly>
                    </div>

                    <div class="form-group">
                        <label for="lastName">Last name</label>
                        <input name="lastName" type="text" id="lastNameActivate" class="form-control" readonly>
                    </div>

                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input name="email" type="email" id="emailActivate" class="form-control" readonly>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input name="phone" type="text" id="phoneActivate" class="form-control" readonly>
                    </div>
                     <div class="form-group">
                        <label for="role">Role</label>
                        <input name="role" type="text" id="roleActivate" class="form-control" readonly>
                    </div>

                    <div class="form-group">
                        <label for="bio">Bio</label>
                        <input name="bio" type="text" id="bioActivate" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input name="image" type="text" id="imageActivate" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="certificationID">certificationID</label>
                        <input name="certificationID" type="text" id="certificationIDActivate" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="certification">certification</label>
                        <input name="certification" type="text" id="certificationActivate" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="Experience">Experience of Years</label>
                        <input name="experience" type="text" id="experienceActivate" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="Specialties">Specialties</label>
                        <input name="specialties" type="text" id="specialtiesActivate" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input name="status" type="text" id="statusActivate" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="Start Date">Start Date</label>
                        <input name="startDate" type="text" id="startDateActivate" class="form-control" readonly>
                    </div>
                   <div class="form-group">
                        <label for="End Date">End Date</label>
                        <input name="endDate" type="text" id="endDateActivate" class="form-control" readonly>
                    </div>
                    <div class="action-buttons">
                        <button type="submit" class="btn btn-primary" onclick="setStatusAndSubmit('Active')">Activate</button>
                        <button type="submit" class="btn btn-danger" onclick="setStatusAndSubmit('Inactive')">Diactivate</button>
                    </div>
                </form>
            </div>
        </main>
    </div>

    <script src="./trainer.js"></script>
</body>

</html>