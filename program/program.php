<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programs</title>
    <link rel="stylesheet" href="./program.css">
</head>

<body>
    <section id="introduction">
        <?php include '../header/header.php'; ?>
        <div class="container introduction-container">
                <h1>Unleash Your Potential and Start Your Fitness Journey Today!</h1>
                <button class="btn btn-outline-light btn-lg mt-3" onclick="location.href='../membership/membership.php'">Get Membership</button>
        </div>
    </section>
    <section id="programs-overview">
        <div class="container">
            <div class="program-overview-container row g-4 align-items-center">
                <div class="program-overview-card card1 col-lg-3 order-lg-1">
                    <img height="50" width="50" src="./logo/weightlifting.png" alt="">
                    <h4 style="font-weight: bold;">Choose Your Program</h4>
                    <p>Choose between group sessions for motivation or one-on-one coaching for a personalized fitness journey.</p>
                    <button type="button" class="btn btn-primary" onclick="location.href='#programs'"> 🡻 See More</button>
                </div>
                <div class="program-overview-card card2 col-lg-3 order-lg-2">
                    <img height="50" width="50" src="./logo/coach.png" alt="">
                    <h4 style="font-weight: bold;">Coaches Who <br> Care</h4>
                    <p>Meet our dedicated coaches who are passionate about helping you reach your fitness goals.</p>
                    <button type="button" class="btn btn-primary" onclick="location.href='#coaches'"> 🡻 See More</button>
                </div>
                <div class="program-overview-card card3 col-lg-3 order-lg-3">
                    <img height="50" width="50" src="./logo/meditation.png" alt="">
                    <h4 style="font-weight: bold;">Level Up With Classes</h4>
                    <p>Explore advanced classes like cardio, strength training, and yoga to boost endurance, flexibility, and power.</p>
                    <button type="button" class="btn btn-primary" onclick="location.href='#classes'"> 🡻 See More</button>
                </div>
            </div>
        </div>
    </section>
   <section id="programs" class="py-5">
    <div class="container text-center mb-5">
        <h1 class="display-4 font-weight-bold">Our Programs</h1>
        <p class="lead text-muted">Discover fitness programs tailored to your needs</p>
    </div>

    <div class="container mb-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="./image/group.jpg" alt="Specialized Fitness Program" class="img-fluid rounded shadow-sm">
            </div>
            <div class="col-lg-6">
                <h2 class="h1 font-weight-bold">Specialized Programs</h2>
                <p class="text-muted">Our specialized programs cater to weight loss, muscle building, and athletic performance, ensuring expert guidance, customized workouts, and a results-driven approach.</p>
                <a href="../specialized/specialized.php" class="btn btn-primary btn-lg">Learn More</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row align-items-center flex-column-reverse flex-lg-row">
            <div class="col-lg-6">
                <h2 class="h1 font-weight-bold">Personalized Program</h2>
                <p class="text-muted">Experience one-on-one training with our personalized programs, designed to help you reach your full potential with professional guidance and tailored fitness plans.</p>
                <a href="../personalized/personalized.php" class="btn btn-primary btn-lg">Learn More</a>
            </div>
            <div class="col-lg-6">
                <img src="./image/individual.jpg" alt="Personalized Training" class="img-fluid rounded shadow-sm">
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
                        <p>Head Coach
                        <p>
                            <button type="button" class="btn btn-primary">👉 Read More</button>
                    </div>
                </div>
                <div class="coach-card card2 order-lg-2">
                    <div class="coach-img-container coach-img-2">
                        <!-- <img src="../images/photos/Coach2.jpg" alt="coach2" class="coach-img img-fluid"> -->
                    </div>
                    <div class="coach-description">
                        <h4>Jane Smith</h4>
                        <p>Muscle Building Specialist
                        <p>
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

    <section id="classes">
        <div class="container class-container">
            <div class="class-logo">
                <!-- <img height="300" width="300" src="../images/photos/yogalogo.jpg" alt="yoga logo"> -->
            </div>
            <div class="class-title mt-2 mb-2">
                <h1 class="fw-bolder">Join Our Classes to Reach Your <br> Full Potential</h1>
            </div>
            <div class="class-description">
                <p>Discover a fitness experience tailored to your needs!
                    Our gym classes offer a perfect blend of cardio workouts to boost endurance,
                    strength training to build muscle and power, and yoga sessions to enhance flexibility and mindfulness.
                    Whether you're a beginner or a seasoned athlete, our expert instructors will guide you toward achieving
                    your fitness goals in a supportive and energetic environment. Join us today and take the first step toward a healthier,
                    stronger you!</p>
            </div>
            <div class="class-buttons">
                <button type="button" class="btn btn-primary btn-lg me-4" onclick="location.href='../class/class.php'">👉 See More</button>
                <button type="button" class="btn btn-outline-primary btn-lg">Register Now</button>
            </div>
        </div>
    </section>

    <?php include '../footer/footer.php' ?>
</body>

</html>