<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FitZone Home</title>
    <link rel="stylesheet" href="./home.css" />
    <!-- swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
</head>

<body>

    <!-- Hero Section -->
    <section id="hero">
        <?php include '../header/header.php' ?>
        <div class="container hero-content">
            <h3>FitZone Fitness Center</h3>
            <h1>Where Fitness<br>Become Your<br>Lifestyle</h1>
            <?php
            if (!isset($_SESSION['user_id'])) {
                echo '<button class="btn btn-outline-light btn-lg" onclick="window.location.href=\'../signup/signup.php\';">Sign-up</button>';
            }
            ?>

        </div>
    </section>

    <!-- Push Your Limits -->
    <section id="push-limits">
        <div class="container">
            <div class="features-details">
                <h1>Push Your Limits Forward</h1>
                <p class="section-description">
                    Step into a world of health, strength, and transformation at FitZone Fitness Center, where your fitness journey begins!
                    Nestled in the heart of Kurunegala, our state-of-the-art gym is designed to inspire and empower everyone, from beginners to seasoned athletes.
                    With cutting-edge equipment, a variety of dynamic group classes like yoga, cardio, and strength training, and personalized training sessions
                    led by certified trainers, we’ve got everything you need to crush your goals. Explore our flexible membership plans, dive into expert nutrition
                    counseling, and join a vibrant community that celebrates every milestone. Ready to transform your life? Discover FitZone today – sign up, sweat,
                    and succeed!
                </p>
            </div>

            <div class="features-row">
                <div class="feature-box">
                    <i class="material-icons">fitness_center</i>
                    <h4>Modern Equipment</h4>
                    <p>Upgrade your fitness game with cutting-edge gym equipment, designed for strength, endurance, and peak performance.</p>
                </div>
                <div class="feature-box">
                    <i class="material-icons">add_reaction</i>
                    <h4>Professional Training</h4>
                    <p>Experience elite professional training with expert guidance, advanced techniques, and top-tier fitness programs.</p>
                </div>
                <div class="feature-box">
                    <i class="material-icons">apps</i>
                    <h4>Optimized Performance</h4>
                    <p>Craft your perfect workout with personalized training programs, guided by certified experts to boost strength, stamina, and results.</p>
                </div>
            </div>

            <div class="features-row">
                <div class="feature-box">
                    <i class="material-icons">diversity_2</i>
                    <h4>Sweat, Smile, Succeed</h4>
                    <p>Join the energy of our dynamic group classes from heart-pumping cardio to zen yoga flows, designed to ignite your passion and power your progress.</p>
                </div>
                <div class="feature-box">
                    <i class="material-icons">local_dining</i>
                    <h4>Healthy Nutrition</h4>
                    <p>Nourish your body with nutritious meals, balanced diets, and expert guidance for a healthy lifestyle.</p>
                </div>
                <div class="feature-box">
                    <i class="material-icons">check_circle</i>
                    <h4>Unique Needs</h4>
                    <p>Tailor fitness plans to meet your specific fitness goals, whether you're a beginner or an experienced athlete.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Value Section -->
    <section id="value">
        <div class="container value-section">
            <div class="value-text">
                <h1>Best Value for Your Money.</h1>
                <p>At FitZone Fitness Center, your fitness journey is ours to fuel – with Personalized Training tailored just for you and Specialized
                    Programs designed for weight loss, muscle building, or athletic prowess, guided by certified trainers to maximize every move; plus,
                    dynamic group classes like calming Yoga to center your mind, heart-pumping Cardio to boost endurance, and intense Strength Training
                    to sculpt your power, all crafted to inspire, challenge, and transform you in a vibrant community that thrives on progress!</p>
                <button class="btn btn-outline-primary btn-lg mt-2">Learn More</button>
            </div>
            <div class="value-image">
                <img width="550px" height="auto" src="./image/gym.jpg" alt="gym-img">
            </div>
        </div>
    </section>

    <!-- Options Section -->
    <section id="options">
        <div class="container options-container mt-5">
            <div class="weight-loss options-item col-sm-10 col-md-5 col-lg-3">
                <h4>Personalized Programs</h4>
                <p>We offer tailored programs to help you achieve your unique goals and elevate your fitness journey with expert guidance.</p>
                <button class="btn btn-outline-primary btn-lg" onclick="location.href='../personalized/personalized.php'">See More</button>
            </div>
            <div class="muscle-build options-item col-sm-10 col-md-5 col-lg-3">
                <h4>Specialized Programs</h4>
                <p>We provide focused programs to help you lose weight, build muscle, or boost athletic performance with proven results.</p>
                <button class="btn btn-primary btn-lg" onclick="location.href='../specialized/specialized.php'">See More</button>
            </div>
            <div class="athletic-training options-item col-sm-10 col-md-5 col-lg-3">
                <h4>Level up Classes</h4>
                <p>We deliver energizing classes like yoga, cardio, and strength training to enhance your wellness and power up your routine.</p>
                <button class="btn btn-outline-primary btn-lg" onclick="location.href='../class/class.php'">See More</button>
            </div>
        </div>
    </section>


    <!-- Testimonials Section -->
    <section id="coaches">
        <div class="container coach-main-container">
            <div class="coach-title">
                <h1>Meet Our Coaches</h1>
                <p>Our certified trainers at FitZone Fitness Center are here to push you forward! With expertise in personalized coaching and
                    specialties like weight loss, muscle building, and athletic training, they’re dedicated to helping you smash your goals with
                    passion and precision.</p>
            </div>

            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php
                    include "../database/connection.php";
                    $query = "SELECT TrainerID, FirstName, LastName, Role, ImageURL FROM Trainer WHERE Status = 'Active'";
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
                        echo '      <button type="button" class="btn btn-primary" onclick="location.href=\'../Trainer/Trainer.php?id=' . htmlspecialchars($row['TrainerID']) . '\'">👉 Read More</button>';
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

    <!-- reviews -->
    <section id="reviews">
        <div class="container testimonials-container">
            <div class="testimonial-card">
                <h2 class="customer-name">Priya Fernando</h2>
                <div class="star-rating">⭐⭐⭐⭐⭐</div>
                <p class="testimonial-text">"FitZone has been a game-changer for me! The personalized training helped me shed 10 kilos in just three months, and the trainers are so motivating. The gym's vibe is unbeatable - clean, modern, and full of energy. Highly recommend!"</p>
            </div>

            <div class="testimonial-card">
                <h2 class="customer-name">Nimal Perera</h2>
                <div class="star-rating">⭐⭐⭐⭐⭐</div>
                <p class="testimonial-text">"I joined for the strength training classes, and wow, I've never felt stronger! The equipment is top-notch, and the staff really know their stuff. FitZone makes every workout fun and worth it - 5 stars from me!"</p>
            </div>

            <div class="testimonial-card">
                <h2 class="customer-name">Ayesha Silva</h2>
                <div class="star-rating">⭐⭐⭐⭐⭐</div>
                <p class="testimonial-text">"The yoga classes at FitZone are my happy place! The instructors are amazing, and I love how they cater to all levels. Plus, the specialized muscle-building program I started is already showing results. Best gym in Kurunegala!"</p>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq">
        <div class="container faq-container">
            <h1>Frequently Asked Questions</h1>
            <div class="faq-grid">
                <div class="faq-item">
                    <h4>What membership options does FitZone offer?</h4>
                    <p>We provide a range of plans to suit your needs – from basic access to premium packages that include personalized
                        training and nutrition counseling. Check out our Membership page for pricing and details!</p>
                </div>
                <div class="faq-item">
                    <h4>Are the trainers certified?</h4>
                    <p>Absolutely! All our trainers are fully certified, with expertise in areas like weight loss, muscle building, and athletic performance,
                        ensuring you get top-notch guidance.</p>
                </div>
                <div class="faq-item">
                    <h4>Do I need to book classes in advance?</h4>
                    <p>Yes, we recommend booking your spot for group classes like yoga, cardio, and strength training through our web app to secure your
                        place – it’s quick and easy!</p>
                </div>
                <div class="faq-item">
                    <h4>Can beginners join FitZone?</h4>
                    <p>Of course! Whether you’re new to fitness or a pro, our programs and classes are designed for all levels, with trainers ready to support
                        you every step of the way.</p>
                </div>
            </div>
        </div>
    </section>

    <?php include '../footer/footer.php' ?>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
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