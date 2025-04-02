<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class</title>
    <!-- css link -->
    <link rel="stylesheet" href="./class.css?v=1.1">
</head>

<body>
    <section id="introduction">
        <?php include '../header/header.php' ?>
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
    <section id="cardio-section">
        <div class="container cardio-details-container">
            <h1>Ignite Your Energy with Cardio Workouts!</h1>
            <p>Looking to boost your endurance, burn calories, and feel unstoppable? Our Cardio classes are designed to get your
                heart racing and energy soaring! Whether you're sprinting, cycling, or dancing to the beat, these high-intensity
                sessions will improve your stamina, strengthen your heart, and help you break through fitness plateaus.</p>
            <p>With expert trainers guiding you through dynamic movements, you'll experience an exciting mix of exercises that
                keep workouts fun and effective. Whether you're a beginner or a seasoned fitness enthusiast, our Cardio sessions
                adapt to your pace and push you toward your goals. Get ready to sweat, challenge yourself, and leave each class
                feeling stronger and more energized than ever!</p>
            <div class="btn-container">
                <button class="btn btn-primary btn-lg me-3" onclick="location.href=''">Rgister Now</button>
                <button class="btn btn-outline-primary btn-lg" onclick="location.href='../membership/membership.php'">Get Membership</button>
            </div>
        </div>
        <div class="container cardio-features-container">
            <img width="350px" height="auto" src="./image/cardio.jpg" alt="cardio">
            <div class="cardio-features">
                <div class="cardio-features-row">
                    <div class="cardio-feature">
                        <i class="material-icons">fitness_center</i>
                        <h3>Cutting-Edge Equipment</h3>
                        <p>Our gym offers high-quality treadmills, ellipticals, and rowing machines to enhance your cardio sessions.</p>
                    </div>
                    <div class="cardio-feature">
                        <i class="material-icons">person</i>
                        <h3>Expert-Led Training</h3>
                        <p>Certified trainers guide you through every session, ensuring proper technique and motivation to reach your fitness goals.</p>
                    </div>
                </div>
                <div class="cardio-features-row">
                    <div class="cardio-feature">
                        <i class="material-icons">edit_document</i>
                        <h3>Personalized Training Plans</h3>
                        <p>Whether you're a beginner or a pro, our expert trainers tailor workouts to match your fitness level and goals.</p>
                    </div>
                    <div class="cardio-feature">
                        <i class="material-icons">local_fire_department</i>
                        <h3>Endurance & Fat-Burning Focus</h3>
                        <p>Our cardio classes are designed to maximize fat burn, improve stamina, and boost overall cardiovascular health.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="yoga-section">
        <div class="container yoga-container">
            <div class="yoga-details">
                <h1>Find Your Balance with Yoga!</h1>
                <p>Looking to strengthen your body, calm your mind, and improve flexibility? Our Yoga classes offer the perfect 
                    escape from daily stress while helping you build core strength, enhance mobility, and find inner peace. 
                    With expert instructors guiding you through every movement, our sessions cater to all levels, from beginners 
                    to advanced practitioners. Whether you're flowing through poses, holding deep stretches, or practicing mindful 
                    breathing, each class is designed to leave you feeling refreshed and rejuvenated. Step onto the mat, take a 
                    deep breath, and discover the power of mindful movement!</p>

                <button class="btn btn-outline-primary btn-lg" onclick="location.href=''">Rgister Now</button>
            </div>
            <img width="600px" height="auto" src="./image/yoga.jpg" alt="yoga-img">
        </div>
        <div class="container yoga-features mt-5">
            <div class="yoga-feature">
                <i class="material-icons">compost</i>
                <h2>Comfortable Environment</h2>
                <p>Our peaceful, well-designed studio provides a calming atmosphere, allowing you to fully immerse yourself in your 
                    practice and unwind from daily stress.</p>
            </div>
            <div class="yoga-feature">
                <i class="material-icons">person_2</i>
                <h2>Excellent Guidance</h2>
                <p>Our experienced yoga instructors offer personalized support, ensuring proper technique and alignment while 
                    helping you progress at your own pace.</p>
            </div>
            <div class="yoga-feature">
                <i class="material-icons">language</i>
                <h2>Online Sessions Available </h2>
                <p>Can’t make it to the gym? Join our virtual yoga classes from the comfort of your home and stay consistent 
                    with your practice anytime, anywhere.</p>
            </div>
        </div>
    </section>

</body>

</html>