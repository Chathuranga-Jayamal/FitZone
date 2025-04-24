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
<link rel="stylesheet" href="./blog.css">
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
        <!-- view blog details -->
        <main class="main-content content1 active">
            <h2 class="page-title">Blogs Management</h2>
            <div class="view-table-container">
                <div class="search-bar">
                    <input type="text" id="searchInput" placeholder="Search for titles.." style="margin-bottom: 10px; padding: 6px; width: 200px;">
                </div>
                <div class="view-table">
                    <table id="blogTable">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Category</th>
                            <th>Created At</th>
                            <th>Featured Image</th>
                        </tr>
                        <?php
                        $sql = "SELECT * FROM blogs";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                            <td>{$row["id"]}</td>
                            <td>{$row["title"]}</td>
                            <td>{$row["content"]}</td>
                            <td>{$row["category"]}</td>
                            <td>{$row["created_at"]}</td>
                            <td><img src='{$row["featured_image"]}' alt='Image' style='width: 60px; height: auto;'></td>
                        </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='6'>No blogs found</td></tr>";
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

            <!-- Add Blog Form -->
            <div class="form-container add-form-container active">
                <form id="addform" method="POST" action="./blogAdd.php" onsubmit="return validate_form();">
                    <div class="form-group">
                        <label for="title">Blog Title</label>
                        <input name="title" type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea name="content" class="form-control" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <input name="category" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="featured_image">Featured Image URL</label>
                        <input name="featured_image" type="text" class="form-control">
                    </div>
                    <div class="action-buttons">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

            <!-- Update Blog Form -->
            <div class="form-container update-form-container">
                <form id="updateform" method="POST" action="./blogUpdate.php" onsubmit="return validate_updateform();">
                    <div class="form-group">
                        <label for="id">Blog ID</label>
                        <input name="id" type="number" id="idUpdate" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="title">Blog Title</label>
                        <input name="title" type="text" id="titleUpdate" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea name="content" id="contentUpdate" class="form-control" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <input name="category" type="text" id="categoryUpdate" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="featured_image">Featured Image URL</label>
                        <input name="featured_image" type="text" id="featuredImageUpdate" class="form-control">
                    </div>
                    <div class="action-buttons">
                        <button name="submit" type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>

            <!-- Delete Blog Form -->
            <div class="form-container delete-form-container">
                <form id="Deleteform" method="POST" action="./blogDelete.php">
                    <div class="form-group">
                        <label for="id">Blog ID</label>
                        <input name="id" type="number" id="idDelete" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="title">Blog Title</label>
                        <input name="title" type="text" id="titleDelete" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea name="content" id="contentDelete" class="form-control" rows="4" readonly></textarea>
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <input name="category" type="text" id="categoryDelete" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="featured_image">Featured Image URL</label>
                        <input name="featured_image" type="text" id="featuredImageDelete" class="form-control" readonly>
                    </div>
                    <div class="action-buttons">
                        <button name="submit" type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>

        </main>

    </div>

    <script src="./blog.js"></script>
</body>

</html>