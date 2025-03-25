<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

  </head>
<body>

<!-- Navigation Bar & Logo-->
    <div class="container">
     <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <div class="col-md-3 mb-2 mb-md-0">
        <a href="./home.php" class="d-inline-flex link-body-emphasis text-decoration-none">
        <img src="../images/logos/logo.png" alt="FitZone Logo" width="60%" height="50%">
        </a>
      </div>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="./home.php" class="nav-link px-2">Home</a></li>
        <li><a href="./program.php" class="nav-link px-2">Program</a></li>
        <li><a href="./membership.php" class="nav-link px-2">Membership</a></li>
        <li><a href="./blog.php" class="nav-link px-2">Blogs</a></li>
        <li><a href="./about.php" class="nav-link px-2">About</a></li>
        <li><a href="./contact.php" class="nav-link px-2">Contact</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <button type="button" onclick="window.location.href='login.php';" class="btn btn-outline-primary me-2">Login</button>
        <button type="button" onclick="window.location.href='singup.php';" class="btn btn-primary">Sign-up</button>
      </div>
     </header>
    </div>
</body>
</html>