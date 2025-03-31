<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personalized</title>
    <!-- Swiper CDN CSS link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <!-- CSS link -->
    <link rel="stylesheet" href="/FitZone/CSS/personalized.css">
</head>

<body>
    <section id="introduction">
        <?php include 'header.php' ?>
        <div class="container introduction-container">
            <div class="introduction-title">
                <h1>Achieve Your Fitness Goals with Personalized Guidance</h1>
            </div>
            <div class="introduction-button ">
                <button class="btn btn-outline-light btn-lg" onclick="location.href='./membership.php'">Get Membership</button>
            </div>
        </div>
    </section>
    <section id="Details">
        <div class="container personalized-details">
            <h1 class="fw-bolder Details-title">Unlock Your Potential with <br>Personalized Fitness</h1>
            <p class="Details-description">At FitZone, we understand that every fitness journey is unique. Our Personalized Fitness Programs are designed
                to cater to your individual needs, goals, and fitness level. Whether you're looking to build strength, improve
                endurance, lose weight, or enhance overall wellness, our expert trainers create customized workout and nutrition
                plans tailored just for you. With dedicated guidance, progress tracking, and a supportive environment, you’ll
                achieve results faster and more effectively. Take control of your fitness journey with a plan that’s built around you!</p>
            <div class="container data">
                <div class="number">
                    <h1>100+</h1>
                    <p>Clients</p>
                </div>
                <div class="number">
                    <h1>1000Kgs</h1>
                    <p>of Fat Loss</p>
                </div>
                <div class="number">
                    <h1>3+</h1>
                    <p>Trainers</p>
                </div>
                <div class="number">
                    <h1>3+</h1>
                    <p>Classes</p>
                </div>
                <div class="number">
                    <h1>30+</h1>
                    <p>Gym Equipments</p>
                </div>
            </div>

        </div>
    </section>
    <section id="features">
        <div class="container features-container">
            <div class="features-title">
                <h1>What We Offer</h1>
            </div>
            <div class="features-items">
                <div class="features-items-row">
                    <div class="features-item">
                        <div class="features-icon">
                            <i class="material-icons">fitness_center</i>
                        </div>
                        <div class="features-details">
                            <h3>Gym Equipment</h3>
                            <p>State-of-the-art machines and tools designed to enhance your workout experience.</p>
                        </div>
                    </div>
                    <div class="features-item">
                        <div class="features-icon">
                            <i class="material-icons">groups</i>
                        </div>
                        <div class="features-details">
                            <h3>Group Classes</h3>
                            <p>Engaging group sessions led by expert instructors to keep you motivated and fit.</p>
                        </div>
                    </div>
                    <div class="features-item">
                        <div class="features-icon">
                            <i class="material-icons">local_dining</i>
                        </div>
                        <div class="features-details">
                            <h3>Nutrition Plan</h3>
                            <p>Tailored meal plans to fuel your body and support your fitness goals.</p>
                        </div>
                    </div>
                    <div class="features-item">
                        <div class="features-icon">
                            <i class="material-icons">workspaces</i>
                        </div>
                        <div class="features-details">
                            <h3>Workshops</h3>
                            <p>Exclusive workshops to improve your skills and knowledge in fitness and wellness.</p>
                        </div>
                    </div>
                </div>
                <div class="features-items-row">
                    <div class="features-item">
                        <div class="features-icon">
                            <i class="material-icons">handshake</i>
                        </div>
                        <div class="features-details">
                            <h3>VIP zones</h3>
                            <p>Private, high-end training zones for a focused and premium workout experience.</p>
                        </div>
                    </div>
                    <div class="features-item">
                        <div class="features-icon">
                            <i class="material-icons">self_improvement</i>
                        </div>
                        <div class="features-details">
                            <h3>Yoga Studio</h3>
                            <p>A serene space offering yoga classes to help improve flexibility, strength, and mindfulness.</p>
                        </div>
                    </div>
                    <div class="features-item">
                        <div class="features-icon">
                            <i class="material-icons">shower</i></i>
                        </div>
                        <div class="features-details">
                            <h3>Washroom</h3>
                            <p>Clean and modern washrooms offering comfort and convenience after every session.</p>
                        </div>
                    </div>
                    <div class="features-item">
                        <div class="features-icon">
                            <i class="material-icons">lock</i>
                        </div>
                        <div class="features-details">
                            <h3>Locker Room</h3>
                            <p>Secure and spacious locker rooms to store your belongings while you train.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="workouts">
        <div class="container workouts-container">
            <div class="workouts-details">
                <h1 class="fw-bolder workouts-title mb-4">Transform Your Fitness with Our Workouts</h1>
                <p>Discover a variety of dynamic workout programs designed to keep you motivated and challenged.
                    Whether you prefer strength training, high-energy cardio, or flexibility-focused routines,
                    we have something for everyone. Our expert-led workouts ensure that every session is engaging,
                    effective, and tailored to your fitness journey. Explore our workout plans and find the perfect fit for your lifestyle!</p>
            </div>
            <div class=" container swiper mt-5">
                <div class="workouts-images card-wrapper">
                    <ul class="workouts-images-list swiper-wrapper p-0">
                        <li class="swiper-slide workouts-image workouts-1">
                            <h2>Mastering Dumbbells</h2>
                            <p>Build strength and endurance with expert-guided dumbbell exercises for all levels.</p>
                        </li>
                        <li class="swiper-slide workouts-image workouts-2">
                            <h2>High-Intensity Cardio</h2>
                            <p>Enhance your stamina and cardiovascular health with expert-guided treadmill & cardio workouts.</p>
                        </li>
                        <li class="swiper-slide workouts-image workouts-3">
                            <h2>Lat Strength</h2>
                            <p>Sculpt a powerful back and improve upper-body strength with precise lat pulldown techniques.</p>
                        </li>
                        <li class="swiper-slide workouts-image workouts-4">
                            <h2>Cable Training</h2>
                            <P>Engage multiple muscle groups with dynamic cable exercises for strength and flexibility.</P>
                        </li>
                        <li class="swiper-slide workouts-image workouts-5">
                            <h2>Strength Mastery</h2>
                            <p>Develop raw power and perfect your technique in squats, bench press, and deadlifts.</p>
                        </li>
                    </ul>
                    <div class="swiper-pagination"></div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </section>
    <section id="how">
        <div class="container how-container">
            <div class="how-title mt-2 mb-2">
                <h1 class="fw-bolder">How it Works?</h1>
            </div>
            <div class="how-description">
                <p>During your sessions, your Personal Trainer is fully dedicated to you, ensuring that every workout is 
                    tailored to your unique fitness level and goals. From the moment you step into the gym, your trainer will assess 
                    your strengths, weaknesses, and preferences to create a customized plan that keeps you motivated and challenged. 
                    Whether you're looking to build muscle, lose weight, or improve overall endurance, your trainer will guide you 
                    through every exercise with expert coaching and real-time feedback.</p>
                <p>With personalized attention, expert guidance, and a results-driven approach, your Personal Trainer is there to support you 
                    every step of the way—helping you unlock your full potential and achieve lasting fitness success.</p>
            </div>
            <div class="how-buttons">
                <button type="button" class="btn btn-outline-primary btn-lg me-2" onclick="location.href='./membership.php'" >Get Membership</button>
                <button type="button" class="btn btn-primary btn-lg" onclick="window.open('https://wa.me/94761894986', '_blank')">Contact us</button>
            </div>
        </div>
    </section>
    <?php include 'footer.php' ?>
    <!-- Swiper JS link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- custom js link -->
     <script src="/FitZone/JS/personalized.js"></script>
</body>

</html>