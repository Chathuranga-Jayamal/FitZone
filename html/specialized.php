<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Specialized</title>
    <!-- css link -->
    <link rel="stylesheet" href="/FitZone/CSS/specialized.css">
</head>

<body>
    <section id="introduction">
        <?php include 'header.php' ?>
        <div class="container introduction-container">
            <h1>We Tailor Specialized Fitness Programs to Your Needs</h1>
            <button class="btn btn-outline-light btn-lg mt-3" onclick="location.href='./membership.php'">Get Membership</button>
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
                <button class="btn btn-primary">See More</button>
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
            <div class="weight-img-feature gap-5">
                <img class="weight-img" height="600px" width="400px" src="../images/photos/weightloss.jpg" alt="weightloss">
                <div class="weight-feature gap-5">
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
                    </div>
                    <div class="feature-row gap-3">
                        <div class="feature">
                            <i class="material-icons">pending</i>
                            <h4>Progress Tracking</h4>
                            <p>Weight logs, body measurements, and progress reports to keep you motivated and on track toward your goals.</p>
                        </div>
                        <div class="feature">
                            <i class="material-icons">settings_accessibility</i>
                            <h4>Coaching & Support System</h4>
                            <p>Access to fitness experts, trainers, and a supportive community to guide, motivate, and encourage you throughout your journey.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>