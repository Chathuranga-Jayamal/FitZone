<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Specialized</title>
    <!-- Swiper CDN CSS link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <!-- css link -->
    <link rel="stylesheet" href="./specialized.css">
</head>

<body>
    <section id="introduction">
        <?php include '../header/header.php' ?>
        <div class="container introduction-container">
            <h1>We Tailor Specialized Fitness Programs to Your Needs</h1>
            <button class="btn btn-outline-light btn-lg mt-3" onclick="location.href='../membership/membership.php'">Get Membership</button>
        </div>
    </section>
    <section id="options">
        <div class="container options-container mt-5">
            <div class="weight-loss options-item col-sm-10 col-md-5 col-lg-3">
                <h4>Weight Loss</h4>
                <p>We offer tailored programs to help you lose weight and improve your overall wellness.</p>
                <button class="btn btn-outline-primary" onclick="location.href='#weight-section'">See More</button>
            </div>
            <div class="muscle-build options-item col-sm-10 col-md-5 col-lg-3">
                <h4>Muscle Building</h4>
                <p>We create programs to help you build muscle and improve your strength and endurance.</p>
                <button class="btn btn-primary" onclick="location.href='#muscle-section'">See More</button>
            </div>
            <div class="athletic-training options-item col-sm-10 col-md-5 col-lg-3">
                <h4>Athletic Training</h4>
                <p>We offer programs to help you improve your athletic performance and overall fitness.</p>
                <button class="btn btn-outline-primary">See More</button>
            </div>
        </div>
    </section>
    <section id="weight-section">
        <div class="container weight-container">
            <div class="weight-details">
                <h1>Slim Down, Live Strong!</h1>
                <p>Our Weight Loss Program is designed to help you achieve sustainable and long-lasting results through a
                    combination of structured workouts, personalized nutrition guidance, and expert coaching. Whether you're looking
                    to drop a few pounds or undergo a complete transformation, our program focuses on safe and effective fat loss
                    while maintaining muscle tone and overall wellness.</p>

                <p>With a tailored fitness plan, progress tracking, and ongoing motivation, you'll build healthier habits and stay
                    committed to your goals. Join us and take the first step toward a stronger, leaner, and more confident you!</p>
            </div>
            <div class="container feature-container gap-3 mt-5">
                <div class="feature-row gap-3">
                    <div class="feature">
                        <i class="material-icons">fitness_center</i>
                        <h4>Personalized Workout Plans</h4>
                        <p>Tailored exercise routines designed to maximize fat burning while preserving muscle, ensuring sustainable weight loss.</p>
                    </div>
                    <div class="feature">
                        <i class="material-icons">local_dining</i>
                        <h4>Expert Nutrition Guidance</h4>
                        <p>Customized meal plans and nutritional advice to fuel your body efficiently and promote healthy weight loss.</p>
                    </div>
                    <div class="feature">
                        <i class="material-icons">widgets</i>
                        <h4>Exclusive Member Perks</h4>
                        <p>JGain access to special discounts on supplements, fitness gear, and exclusive member-only workout sessions or classes.</p>
                    </div>
                </div>
                <div class="feature-row gap-3">
                    <div class="feature">
                        <i class="material-icons">data_exploration</i>
                        <h4>Progress Tracking</h4>
                        <p>Weight logs, body measurements, and progress reports to keep you motivated and on track toward your goals.</p>
                    </div>
                    <div class="feature">
                        <i class="material-icons">settings_accessibility</i>
                        <h4>Coaching & Support System</h4>
                        <p>Access to fitness experts, trainers, and a supportive community to guide, motivate, and encourage you throughout your journey.</p>
                    </div>
                    <div class="feature">
                        <i class="material-icons">schedule</i>
                        <h4>24/7 Gym Access & Support</h4>
                        <p>Enjoy round-the-clock access to our state-of-the-art gym facilities, along with on-demand virtual support from trainers to keep you on track anytime, anywhere.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="muscle-section">
        <div class="container muscle-container gap-3">
            <div class="muscle-details">
                <h1>Build Your Muscles & Dominate Your Gains</h1>
                <p> Unleash your full potential with our Build Your Muscles & Dominate Your Gains program. Whether you're just starting out or a seasoned lifter, this program is crafted to take your muscle-building journey to the next level. With expertly designed workouts, personalized routines, and proven techniques, you'll build strength, improve endurance, and sculpt the physique you've always wanted. Get ready to push past your limits and see real, lasting results!</p>
                <p>Our program combines cutting-edge exercises with a strategic approach to muscle growth, ensuring every workout counts. From detailed step-by-step instructions to progressive training plans, you'll have everything you need to accelerate your gains and achieve your goals. Join now and start transforming your body with a plan that’s tailored to maximize your muscle-building potential. It’s time to dominate your gains!</p>
            </div>
            <div class="muscle-img">
                <img height="500px" src="./image/muscle.png" alt="muscle-img">
            </div>
        </div>
        <div class="container feacher-container mt-5">
            <div class="feature-row gap-3">
                <div class="feature">
                    <i class="material-icons">fitness_center</i>
                    <h4>Strength Training Equipment</h4>
                    <p>A variety of free weights, machines, and resistance tools designed to help you build strength and muscle effectively.</p>
                </div>
                <div class="feature">
                    <i class="material-icons">where_to_vote</i>
                    <h4>Dedicated Weightlifting Areas</h4>
                    <p>Specialized spaces with squat racks and platforms, perfect for focused and safe heavy lifting.</p>
                </div>
                <div class="feature">
                    <i class="material-icons">restaurant</i>
                    <h4>Nutrition and Supplement Support</h4>
                    <p>Guidance on proper nutrition and access to protein shakes and supplements to fuel muscle growth and recovery.</p>
                </div>
            </div>
        </div>
    </section>

    <?php include '../footer/footer.php' ?>
    <!-- Swiper JS link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- custom js link -->
    <script src="/FitZone/JS/swiper.js"></script>
</body>

</html>