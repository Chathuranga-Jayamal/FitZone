<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programs</title>
    <link rel="stylesheet" href="/FitZone/CSS/program.css?v=1.4">
</head>

<body>
    <section id="introduction">
    <?php include 'header.php'; ?>
      <div class="container col-lg-12 align-items-center">
        <div class="introduction-container">
            <h1>Your Fitness, Your Way</h1>
        </div>
      </div>
    </section>
    <section id="programs-overview">
      <div class="container">
      <div class="program-overview-container row g-4 align-items-center">
            <div class="program-overview-card card1 col-lg-3 order-lg-1">
                <img height="50" width="50" src="../images/logos/weightlifting.png" alt="">
                <h4 style="font-weight: bold;">Choose Your Program</h4>
                <p>Choose between group sessions for motivation or one-on-one coaching for a personalized fitness journey.</p>
                <button type="button" class="btn btn-primary" onclick="location.href='#programs'"> 🡻 See More</button>
            </div>
            <div class="program-overview-card card2 col-lg-3 order-lg-2">
                <img height="50" width="50" src="../images/logos/coach.png" alt="">
                <h4 style="font-weight: bold;">Coaches Who <br> Care</h4>
                <p>Meet our dedicated coaches who are passionate about helping you reach your fitness goals.</p>
                <button type="button" class="btn btn-primary" onclick="location.href='#coaches'"> 🡻 See More</button>
            </div>
            <div class="program-overview-card card3 col-lg-3 order-lg-3">
                <img height="50" width="50" src="../images/logos/meditation.png" alt="">
                <h4 style="font-weight: bold;">Level Up With Classes</h4>
                <p>Explore advanced classes like cardio, strength training, and yoga to boost endurance, flexibility, and power.</p>
                <button type="button" class="btn btn-primary"> 🡻 See More</button>
            </div>
        </div>
      </div>
    </section>
    <section id="programs">
            <div class="program-title">
                <h1>Our Programs</h1>
            </div>
        <div class="container mb-5">
            <div class="group-program row align-items-center ">
                <div class=" col-lg-6 order-lg-1 mt-0 mb-0">
                    <img src="../images/photos/group2.jpg" alt="Group Fitness Program" class="group-img img-fluid">
                </div>
                <div class="group-details col-lg-6 order-lg-2 mt-0">
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
        <div class="container">
        <div class="individual-program row align-items-center">
            <div class="individual-img col-lg-6 order-lg-2 ">
                <img src="../images/photos/individual1.jpg" alt="individual img" class="individual-img img-fluid">
            </div>
            <div class="individual-details col-lg-6 order-lg-1 mt-0 mb-0">
                <div class="individual-title">
                    <h2>Individual Program</h2>
                </div>
                <div class="individual-description">
                    <p>At FitZone Fitness Center, we understand that individual training is essential for 
                        achieving your fitness goals. Our Indivisual Training Programs offer personalized attention, guidance, and support to help you 
                        reach your full potential.</p>
                </div>
                <div>
                    <a href="program.php" class="btn btn-outline-primary btn-lg">👉 Read More</a>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section id="coaches">
        <div class="container coach-main-container">
        <div class="coach-title">
            <h1>Meet Our Coaches</h1>
        </div>
        <div class="coach-container mt-0 mb-0">
            <div class="coach-card card1 order-lg-1 ">
                <div class="coach-img-container coach-img-1">
                <!-- <img src="../images/photos/Coach1.jpg" alt="coach1" class="coach-img img-fluid"> -->
                </div>
                <div class="coach-description">
                <h4>John Doe</h4>
                <p>Head Coach<p>
                <button type="button" class="btn btn-primary">👉 Read More</button>
                </div>
            </div>
            <div class="coach-card card2 order-lg-2">
                <div class="coach-img-container coach-img-2">
                <!-- <img src="../images/photos/Coach2.jpg" alt="coach2" class="coach-img img-fluid"> -->
                </div>
                <div class="coach-description">
                <h4>Jane Smith</h4>
                <p>Muscle Building Specialist<p>
                <button type="button" class="btn btn-primary">👉 Read More</button>
                </div>
            </div>
            <div class="coach-card card3 order-lg-3">
                <div class="coach-img-container coach-img-3">
                <!-- <img src="../images/photos/Coach3.jpg" alt="coach3" class="coach-img img-fluid"> -->
                </div>
                <div class="coach-description">
                <h4>Michael Johnson</h4>
                <p>Fat loss Specialist</p>
                <button type="button" class="btn btn-primary">👉 Read More</button>
                </div>
            </div>

        </div>
        </div>

    </section>

    
</body>

</html>