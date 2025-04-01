<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Link to css file -->
    <link rel="stylesheet" href="./login.css">
</head>

<body>
    <?php include __DIR__ . '/../header/header.php'; ?>

    <div class="container body-container">
        <div class="login-container">
        <h1>Login</h1>
        <form class="login-form" action="" method="POST">
            <input type="text" name="username" placeholder="Username" required><br><br>
            <input type="password" name="password" placeholder="Password" required><br><br>
            <div class="btn-container">
            <button class="submitbtn btn btn-primary" type="submit">Login</button>
            <button class="resetbtn btn btn-outline-primary" type="reset">Cancel</button>
            </div>
        </form>
    </div>
    </div>

    <?php include __DIR__ . '/../footer/footer.php'; ?>
</body>

</html>