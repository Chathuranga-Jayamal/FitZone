<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    session_destroy();
    header("Location: ../login/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account</title>
    <!-- CSS -->
    <link rel="stylesheet" href="./account.css">
    <!-- Google Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

    <header class="header">
        <h1>MY ACCOUNT</h1>
    </header>
    <?php


    if (isset($_GET['error'])) {
        $error_message = htmlspecialchars($_GET['error']);
        echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                document.getElementById('error-message').innerText = '$error_message';
                document.getElementById('error-message').style.display = 'block';

                // Switch to the edit account section
                document.querySelector('.content1').classList.remove('active');
                document.querySelector('.content2').classList.add('active');
            });
          </script>";
    }


    $userRole = $_SESSION['user_role'] ? $_SESSION['user_role'] : '';
    $fname = $_SESSION['user_fname'] ? $_SESSION['user_fname'] : '';
    $lname = $_SESSION['user_lname'] ? $_SESSION['user_lname'] : '';
    $username = $_SESSION['user_username'] ? $_SESSION['user_username'] : '';
    $email = $_SESSION['user_email'] ? $_SESSION['user_email'] : '';
    $phone = $_SESSION['user_phone'] ? $_SESSION['user_phone'] : '';
    $address = $_SESSION['user_address'] ? $_SESSION['user_address'] : '';
    ?>

    <div class="container">
        <!-- slide bar -->
        <aside class="sidebar">
            <div>
                <div class="profile">
                    <!-- <img src="https://via.placeholder.com/100" alt="Profile" class="profile-img"> -->
                    <h3 class="user-name"><?php echo $username; ?></h3>
                    <p class="user-email"><?php echo $email; ?></p>
                </div>

                <ul class="nav-menu">
                    <li class="nav-item">
                        <a href="../account/account.php" class="nav-link active">My Account</a>
                    </li>
                    <li class="nav-item">
                        <a href="../home/home.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="../program/program.php" class="nav-link">Program</a>
                    </li>
                    <li class="nav-item">
                        <a href="../membership/membership.php" class="nav-link">Membership</a>
                    </li>
                    <li class="nav-item">
                        <a href="../blog/blog.php" class="nav-link">Blogs</a>
                    </li>
                    <?php if ($_SESSION['user_role'] == "customer"): ?>
                         <li class="nav-item">
                            <a href="./query.php" class="nav-link">Send Query</a>
                        </li>
                        <li class="nav-item">
                            <a href="./queryResults.php" class="nav-link">Query Results</a>
                        </li>
                    <?php elseif ($_SESSION['user_role'] == "Trainer"): ?>
                        <li class="nav-item">
                            <a href="./viewAppointment.php" class="nav-link">View Appointment</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>

            <div class="action-buttons" style="margin-top: 10px;">
                <button class="btn btn-success" id="editAccountbtn">Edit Account</button>
                <button class="btn btn-danger" onclick="location.href='./logout.php';">Logout</button>
            </div>
        </aside>

        <!-- view account details -->
        <main class="main-content content1 active">
            <h2 class="page-title">Account Details</h2>

            <form>
                <div class="form-group">
                    <label for="firstName">First name</label>
                    <input type="text" id="firstName" class="form-control" value="<?php echo htmlspecialchars($fname) ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="lastName">Last name</label>
                    <input type="text" id="lastName" class="form-control" value="<?php echo htmlspecialchars($lname) ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="displayName">User name</label>
                    <input type="text" id="displayName" class="form-control" value="<?php echo htmlspecialchars($username) ?>" readonly>
                    <p class="form-note">This will be how your name will be displayed in the account section and in reviews</p>
                </div>

                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" id="email" class="form-control" value="<?php echo htmlspecialchars($email) ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="email">Phone Number</label>
                    <input type="text" id="phone" class="form-control" value="<?php echo htmlspecialchars($phone) ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="email">Address</label>
                    <input type="text" id="address" class="form-control" value="<?php echo htmlspecialchars($address) ?>" readonly>
                </div>
            </form>
        </main>


        <!-- edit account details -->
        <main class="main-content content2">
            <h2 class="page-title">Account Details</h2>

            <div id="error-message" class="alert alert-danger"></div>


            <form name="accoutEditForm" class="accoutEditForm" method="post" onsubmit="return validate_form();" action="./edit.php">
                <div class="form-group">
                    <label for="firstName">First name</label>
                    <input name="fname" type="text" id="firstName" class="form-control" value="<?php echo htmlspecialchars($fname) ?>">
                </div>

                <div class="form-group">
                    <label for="lastName">Last name</label>
                    <input name="lname" type="text" id="lastName" class="form-control" value="<?php echo htmlspecialchars($lname) ?>">
                </div>

                <div class="form-group">
                    <label for="displayName">User name</label>
                    <input name="username" type="text" id="displayName" class="form-control" value="<?php echo htmlspecialchars($username) ?>">
                    <p class="form-note">This will be how your name will be displayed in the account section and in reviews</p>
                </div>

                <div class="form-group">
                    <label for="email">Email address</label>
                    <input name="email" type="email" id="email" class="form-control" value="<?php echo htmlspecialchars($email) ?>">
                </div>

                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input name="phone" type="text" id="phone" class="form-control" value="<?php echo htmlspecialchars($phone) ?>">
                </div>

                <div class="form-group">
                    <label for="email">Address</label>
                    <input name="address" type="text" id="address" class="form-control" value="<?php echo htmlspecialchars($address) ?>">
                </div>

                <h3 class="section-title">PASSWORD CHANGE</h3>

                <div class="form-group">
                    <label for="currentPassword">Current password (leave blank to leave unchanged)</label>
                    <div class="password-field">
                        <input name="currentPassword" type="password" id="currentPassword" class="form-control">
                        <button type="button" class="password-toggle">👁️</button>
                    </div>
                </div>

                <div class="form-group">
                    <label for="newPassword">New password (leave blank to leave unchanged)</label>
                    <div class="password-field">
                        <input name="newPassword" type="password" id="newPassword" class="form-control">
                        <button type="button" class="password-toggle">👁️</button>
                    </div>
                </div>

                <div class="form-group">
                    <label for="confirmPassword">Confirm new password</label>
                    <div class="password-field">
                        <input name="confirmPassword" type="password" id="confirmPassword" class="form-control">
                        <button type="button" class="password-toggle">👁️</button>
                    </div>
                </div>

                <div class="action-buttons">
                    <button name="send" type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </main>
    </div>

    <script src="./account.js"></script>
</body>

</html>