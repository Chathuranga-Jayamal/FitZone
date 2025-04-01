<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class</title>
    <!-- css link -->
     <link rel="stylesheet" href="./class.css">
</head>
<body>
    <section id="introduction">
        <?php include '../header/header.php'?>
        <div class="container introduction-container">
            <h1>Customized Fitness Classes Designed for You!</h1>
            <button class="btn btn-outline-light btn-lg mt-3" onclick="location.href='../membership/membership.php'">Get Membership</button>
        </div>
    </section>
    <section id="overview">
        <div class="container overview-container">
            <div class="cardio class-container">
                <i class="material-icons">favorite</i>
                <h1>Cardio Class</h1>
                <p>We design high-energy cardio programs to boost your endurance, burn calories, and improve heart health.</p>
                <button class="btn btn-primary" onclick="location.href='#cardio-section' ">See more</button>
            </div>
            <div class="yoga class-container">
               <i class="material-icons">self_improvement</i>
                <h1>Yoga Class</h1>
                <p>Our yoga sessions help you enhance flexibility, reduce stress, and achieve a balanced mind and body.</p>
                <button class="btn btn-outline-primary" onclick="location.href='#yoga-section' ">See more</button>
            </div>
            <div class="strength-training class-container">
                <i class="material-icons">model_training</i>
                <h1>Strength Training</h1>
                <p>We create programs to help you build muscle, increase strength, and improve overall endurance.</p>
                <button class="btn btn-primary" onclick="location.href='#strength-section' ">See more</button>
            </div>
        </div>
    </section>
    
</body>
</html>