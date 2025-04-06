<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programs</title>
    <link rel="stylesheet" href="./program.css">
    <!-- swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
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
            <h1 class="display-4 font-weight-bold text-primary">Our Programs</h1>
            <p class="lead text-muted">Achieve your fitness goals with expert-designed programs tailored to suit your needs and lifestyle.</p>
        </div>

        <div class="container mb-5">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="./image/group.jpg" alt="Specialized Fitness Program" class="img-fluid rounded shadow-lg">
                </div>
                <div class="col-lg-6">
                    <h2 class="h1 font-weight-bold text-dark">Specialized Programs</h2>
                    <p class="text-muted">Our specialized programs are designed for individuals who want a focused approach to fitness. Whether you're aiming for weight loss, muscle building, or enhanced athletic performance, our expert trainers will provide you with a structured plan. Each program includes detailed workout routines, nutritional advice, and progress tracking to keep you motivated.</p>
                    <a href="../specialized/specialized.php" class="btn btn-gradient btn-lg mt-3">Learn More</a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row align-items-center flex-column-reverse flex-lg-row">
                <div class="col-lg-6">
                    <h2 class="h1 font-weight-bold text-dark">Personalized Program</h2>
                    <p class="text-muted">Experience the power of one-on-one training with our personalized programs. Our dedicated trainers will work closely with you to develop a fitness plan tailored to your specific needs, fitness level, and goals. With continuous support, personalized workouts, and real-time adjustments, we ensure you stay on track to reach your full potential.</p>
                    <a href="../personalized/personalized.php" class="btn btn-gradient btn-lg mt-3">Learn More</a>
                </div>
                <div class="col-lg-6">
                    <img src="./image/individual.jpg" alt="Personalized Training" class="img-fluid rounded shadow-lg">
                </div>
            </div>
        </div>
    </section>
    <section id="coaches">
        <div class="container coach-main-container">
            <div class="coach-title">
                <h1>Meet Our Coaches</h1>
            </div>

            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php
                    include "../database/connection.php";
                    $query = "SELECT FirstName, LastName, Role, ImageURL FROM Trainer WHERE Status = 'Active'";
                    $result = $conn->query($query);

                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="swiper-slide">';
                        echo '  <div class="coach-card">';
                        echo '    <div class="coach-img-container">';
                        echo '      <img src="./image/' . htmlspecialchars($row['ImageURL']) . '" alt="' . htmlspecialchars($row['FirstName'] . ' ' . $row['LastName']) . '" class="coach-img img-fluid">';
                        echo '    </div>';
                        echo '    <div class="coach-description">';
                        echo '      <h4>' . htmlspecialchars($row['FirstName'] . ' ' . $row['LastName']) . '</h4>';
                        echo '      <p>' . htmlspecialchars($row['Role']) . '</p>';
                        echo '      <button type="button" class="btn btn-primary">👉 Read More</button>';
                        echo '    </div>';
                        echo '  </div>';
                        echo '</div>';
                    }

                    $conn->close();
                    ?>

                </div>

                <!-- Swiper Controls -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
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
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- Your custom JS (fix the typo) -->
    <!-- <script src="./program.js"></script> -->

    <!-- Or include inline -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const swiper = new Swiper(".mySwiper", {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                breakpoints: {
                    768: {
                        slidesPerView: 2,
                    },
                    1024: {
                        slidesPerView: 3,
                    },
                },
            });
        });
    </script>


</body>

</html>