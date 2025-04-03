<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="./registrationForm.css">
    <?php include "../header/header.php" 
    ?>
</head>

<body>
    <?php
    $error_message = isset($_GET['error']) ? htmlspecialchars($_GET['error']) : '';
    session_start();
    $email = $_SESSION['user_email']?$_SESSION['user_email']:'';
    $password = $_SESSION['user_password']?$_SESSION['user_password']:'';
    ?>
    <div class="body-container">
        <div class="form-container">
            <h1>Registration Form</h1>
            <div class="form-item-container">
                <form name="registrationForm" class="registration-form" method="post" action="./registration.php" onsubmit="return validate_form();">
                    <div class="form-item">
                        <label for="fname">First Name:</label>
                        <input type="text" id="fname" name="fname" class="input-box">
                    </div>
                    <div class="form-item">
                        <label for="lname">Last Name:</label>
                        <input type="text" id="lname" name="lname" class="input-box">
                    </div>
                    <div class="form-item">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email)?>" class="input-box">
                    </div>
                    <div class="form-item">
                        <label for="phone">Phone No:</label>
                        <input type="tel" id="phone" name="phone" class="input-box">
                    </div>
                    <div class="form-item">
                        <label for="address">Address:</label>
                        <input type="text" id="address" name="address" class="input-box">
                    </div>
                    <div class="form-item">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" value="<?php echo htmlspecialchars($password)?>" class="input-box">
                    </div>
                    <!-- error-message -->
                    <p id="error-message" class="error-message"><?php echo $error_message; ?></p>
                    <div class="button-group">
                        <button name="send" class="btn btn-primary btn-lg me-5" type="submit">Sign Up</button>
                        <button name="cancel" class="btn btn-outline-primary btn-lg" type="reset">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <?php include "../footer/footer.php"; 
    unset($_SESSION['user_password']);
    ?>
    <script src="./registrationForm.js"></script>
</body>

</html>