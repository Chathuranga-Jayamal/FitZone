<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./CSS/home.css">
</head>
<body>
    <!-- introduction of the gym-->
    <section id="introduction">
        <!-- Navigation -->
        <?php include 'header.php'?>
        <div class="introduction-container">
         <h3>FitZone Fitness Center</h3>
         <h1>Where Fitness <br> Become Your <br>Lifestyle.</h1>
        <div class="custom-signup">
        <button type="button" onclick="window.location.href='singup.php';" class="btn btn-primary btn-lg">Sign-up</button>
        </div>
        </div>

    </section>
    <section id="overview">
        <div class="overview-container">
        <h5>"FitZone Fitness Center brings you expert training, 
        <br>top-notch equipment, and dynamic workout programs. 
        <br>From personal training to group classes,<br> everything is designed to help you stay strong and motivated.
        <br> Sign up, train smarter, and reach your fitness goals with ease."</h5>
        </div>
        <div class="overview-img-container">
        <img class="overview-img2 background-overview-img" src="./png/image/body1.png" alt="">
        <img class="overview-img3 background-overview-img" src="./png/image/body3.png" alt="">
        <img class="overview-img1"  src="./png/image/body5.png" alt="">
        </div>
    </section>
    <section id="programs">

    </section>
    <section id="reviews">

    </section>
    <section id="faq">

    </section>
 
    <!-- footer -->
    <?php include 'footer.php'?>
</body>
</html>