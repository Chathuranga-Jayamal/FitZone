<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programs</title>
    <link rel="stylesheet" href="/FitZone/CSS/program.css?v=1.1">
</head>

<body>
    <section id="introduction">
      <div class="container col-lg-12 align-items-center">
      <?php include 'header.php'; ?>
        <div class="introduction-container">
            <h1>Your Fitness, Your Way</h1>
            <h3>👇 Find the RIGHT Program.</h3>
        </div>
      </div>
    </section>
    <section id="programs-overview">
      <div div class="container">
      <div class="program-overview-container row g-4 align-items-center">
            <div class="program-overview-card card1 col-lg-3 order-lg-1">
                <img height="70" width="70" src="../images/logos/weightlifting.png" alt="">
                <h2 style="font-weight: bold;">Choose Your Program</h2>
                <p>Choose between group sessions for motivation or one-on-one coaching for a personalized fitness journey.</p>
                <button type="button" class="btn btn-primary" onclick="location.href='#programs'"> 🡻 See More</button>
            </div>
            <div class="program-overview-card card2 col-lg-3 order-lg-2">
                <img height="70" width="70" src="../images/logos/coach.png" alt="">
                <h2 style="font-weight: bold;">Coaches Who <br> Care</h2>
                <p>Meet our dedicated coaches who are passionate about helping you reach your fitness goals.</p>
                <button type="button" class="btn btn-primary"> 🡻 See More</button>
            </div>
            <div class="program-overview-card card3 col-lg-3 order-lg-3">
                <img height="70" width="70" src="../images/logos/meditation.png" alt="">
                <h2 style="font-weight: bold;">Level Up With Classes</h2>
                <p>Explore advanced classes like cardio, strength training, and yoga to boost endurance, flexibility, and power.</p>
                <button type="button" class="btn btn-primary"> 🡻 See More</button>
            </div>
        </div>
      </div>
    </section>
    <section id="programs">
        <div class="container">
            <div class="program-title">
                <h1>Our Programs</h1>
            </div>
            <div class="group-program row g-5 align-items-center">
                <div class=" col-lg-6 order-lg-1">
                    <img src="../images/photos/group2.jpg" alt="Group Fitness Program" class="group-img img-fluid">
                </div>
                <div class="group-details col-lg-6 order-lg-2">
                    <div class="group-details">
                        <div class="group-title">
                            <h2>Group Program</h2>
                        </div>
                        <div class="group-description">
                            <p>At FitZone Fitness Center, we believe that working out together creates motivation, 
                            energy, and lasting results. Our Group Training Programs are designed to bring people together in a dynamic and supportive 
                            environment, making fitness both effective and enjoyable.</p>
                        </div>
                        <div>
                            <a href="program.php" class="btn btn-outline-primary btn-lg">👉 Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
</body>

</html>