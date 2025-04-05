  <?php
  session_start();
  ?>

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
    <!-- Google Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- CSS -->
    <link rel="stylesheet" href="/FitZone/header/header.css">


  </head>

  <body>
    <!-- Navigation Bar & Logo-->

    <nav>

      <ul class="slidebar">
        <div class="close-button" onclick=hideSlidebar()>
          <i class="material-icons" style="color: white;">close</i>
        </div>
        <li><a href="../home/home.php">Home</a></li>
        <li><a href="../program/program.php">Program</a></li>
        <li><a href="../membership/membership.php">Membership</a></li>
        <li><a href="../blog/blog.php">Blogs</a></li>
        <li><a href="../about/about.php">About us</a></li>

        <div class="auth-buttons">
          <button type="button" id="login-btn" onclick="window.location.href='../login/login.php';" class="btn btn-outline-primary me-2">Login</button>
          <button type="button" id="signup-btn" onclick="window.location.href='../signup/signup.php';" class="btn btn-primary">Sign-up</button>
          <button type="button " id="account-btn" onclick="window.location.href='../account/account.php';" class="btn btn-primary">Account</button></button>
        </div>
      </ul>

      <ul>
        <div class="menu-button" onclick=showSlidebar()>
          <i class="material-icons" style="font-size: 36px; color: white;">menu</i>
        </div>
        <li class="logo"><a href="../home/home.php">FitZone</a></li>

        <div class="container nav-container">
          <li class="hideOnMobile menu"><a href="../home/home.php">Home</a></li>
          <li class="hideOnMobile menu"><a href="../program/program.php">Program</a></li>
          <li class="hideOnMobile menu"><a href="../membership/membership.php">Membership</a></li>
          <li class="hideOnMobile menu"><a href="../blog/blog.php">Blogs</a></li>
          <li class="hideOnMobile menu"><a href="../about/about.php">About us</a></li>
          <?php if($_SESSION['user_role']=="Admin"):?>
          <li class="hideOnMobile menu"><a href="../admin/Dashboard/dashboard.php">Dashboad</a></li>
          <?php elseif($_SESSION['user_role']=="Manager"):?>
          <li class="hideOnMobile menu">Dashboard</li>
          <?php endif; ?>
        </div>

        <div class="col-md-2 text-end hideOnMobile">
          <?php if (isset($_SESSION['user_id'])): ?>
            <button type="button" id="profile-btn" onclick="window.location.href='../account/account.php';" class="btn btn-outline-light me-3">
              <i class="material-icons menu-account-icon">account_circle</i>
            </button>
          <?php else: ?>
            <button type="button" id="login-btn" onclick="window.location.href='../login/login.php';" class="btn btn-outline-primary me-2">Login</button>
            <button type="button" id="signup-btn" onclick="window.location.href='../signup/signup.php';" class="btn btn-primary">Sign-up</button>
          <?php endif; ?>
        </div>
      </ul>
    </nav>
    <script src="/FitZone/header/header.js"></script>
  </body>

  </html>