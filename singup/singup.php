<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Link to css file -->
    <link rel="stylesheet" href="./signup.css">
</head>

<body>
    <?php include __DIR__ . '/../header/header.php'; ?>

    <div class="container body-container">
        <div class="signup-container">
        <h1>Sign Up</h1>
        <form class="signup-form" action="" method="POST">
            <input type="email" name="username" placeholder="Email" required><br><br>
            <input type="password" name="password" placeholder="Password" required><br><br>
            <div class="btn-container">
            <button class="submitbtn btn btn-primary" type="submit">Sign Up</button>
            <button class="resetbtn btn btn-outline-primary" type="reset">Cancel</button>
            </div>
        </form>
    </div>
    </div>

    <?php include __DIR__ . '/../footer/footer.php'; ?>
</body>

</html>