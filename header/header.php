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
          <button type="button" onclick="window.location.href='../login/login.php';" class="btn btn-outline-primary me-2">Login</button>
          <button type="button" onclick="window.location.href='../signup/signup.php';" class="btn btn-primary">Sign-up</button>
        </div>
      </ul>

      <ul >
        <div class="menu-button" onclick=showSlidebar()>
          <i class="material-icons" style="font-size: 36px; color: white;">menu</i>
        </div>
        <li class="logo"><a href="../home/home.php">FitZone</a></li>
        
        <div class="container nav-container">
        <li class="hideOnMobile menu" ><a href="../home/home.php">Home</a></li>
        <li class="hideOnMobile menu"><a href="../program/program.php">Program</a></li>
        <li class="hideOnMobile menu"><a href="../membership/membership.php">Membership</a></li>
        <li class="hideOnMobile menu"><a href="../blog/blog.php">Blogs</a></li>
        <li class="hideOnMobile menu"><a href="../about/about.php">About us</a></li>
        </div>

        <div class="col-md-2 text-end hideOnMobile">
          <button type="button" onclick="window.location.href='../login/login.php';" class="btn btn-outline-primary me-2">Login</button>
          <button type="button" onclick="window.location.href='../signup/signup.php';" class="btn btn-primary">Sign-up</button>
        </div>
      </ul>
      </nav>

      <script>
        function showSlidebar(){
          const slidebar = document.querySelector('.slidebar');
          slidebar.style.display = 'flex'
        }

        function hideSlidebar(){
          const slidebar =document.querySelector(".slidebar");
          slidebar.style.display = 'none';
        }
      </script>
    
    
</body>
</html>