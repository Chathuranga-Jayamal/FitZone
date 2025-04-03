<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- Link to css file -->
    <link rel="stylesheet" href="./signup.css">
</head>

<body>
    <?php include __DIR__ . '/../header/header.php'; 
     $error_message = isset($_GET['error']) ? htmlspecialchars($_GET['error']) : '';
    ?>

    <div class="container body-container">
        <div class="signup-container">
        <h1>Sign Up</h1>
        <form name="signupForm" class="signup-form" action="./validation.php" method="POST" onsubmit="return validate_form();">
            <input type="text" name="email" placeholder="Email" required><br><br>
            <input type="password" name="password" placeholder="Password" required><br><br>

             <!-- error-message -->
            <p id="error-message" class="error-message"><?php echo $error_message; ?></p>

            <div class="btn-container">
            <button class="submitbtn btn btn-primary" type="submit">Sign Up</button>
            <button class="resetbtn btn btn-outline-primary" type="reset">Cancel</button>
            </div>
        </form>
    </div>
    </div>

    <?php include __DIR__ . '/../footer/footer.php'; ?>
    <script src="./validation.js"></script>
</body>

</html>