<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Link to css file -->
    <link rel="stylesheet" href="./CSS/login.css">

</head>
<body>
    <!-- Navigation bar & icon -->
    <?php include 'header.php'?>
    
    <!-- Login Container -->
    <div class="body-container">
    <div class="form-box">
        <h1>Login</h1>
        <form action="">
            <input type="text" placeholder="Username"><br><br>
            <input type="password" placeholder="Password"><br><br>
            <button class="submitbtn btn btn-primary" type="submit">Login</button>
            <button class="resetbtn btn btn-outline-primary" type="reset">Cancel</button>
        </form>
     </div>
    </div>

    <!-- Footer -->
     <?php include 'footer.php'?>
</body>
</html>