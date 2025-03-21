<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="/FitZone/CSS/home.css?v=1.0">
</head>
<body>
    <!-- introduction of the gym-->
    <section id="introduction">
        <!-- Navigation -->
        <?php include 'header.php'?>
        <div class="introduction-container">
         <h3>FitZone Fitness Center</h3>
         <h1>Where Fitness <br> Become Your <br>Lifestyle.</h1>
        <div class="custom-signup">
        <button type="button" onclick="window.location.href='singup.php';" class="btn btn-primary btn-lg">Sign-up</button>
        </div>
        </div>
    </section>
    
    <!-- Overview -->
    <section id="overview">
        <div class="overview-container">
            <div class="overview-title">
                <h1 style="color: white ; font-size: 4rem">PUSH YOUR LIMITS FORWARD</h1>
            </div>
            <div class="overview-body">
              <div class="Modern-equipment overview-card">
                <div class="overview-circle">
                    <img class="overview-icon" height="70" width="70" src="../images/logos/gym.png" alt="gym-equipment">
                </div>
                <h4>Modern Equipment</h4>
                <p>"Upgrade your fitness game with cutting-edge gym equipment, designed for strength, endurance, and peak performance."</p>
              </div>
              <div class="professional-training overview-card">
               <div class="overview-circle">
                 <img class="overview-icon" height="70" width="70" src="../images/logos/muscle.png" alt="muscle">
               </div>
               <h4>Professional Training</h4>
               <p>"Experience elite professional training with expert guidance, advanced techniques, and top-tier fitness programs."</p>
              </div>
              <div class="Healthy-nutrition overview-card">
              <div class="overview-circle">
                <img class="overview-icon" height="70" width="70" src="../images/logos/meal.png" alt="food">
              </div>
              <h4>Healthy Nutrition</h4>
              <p>"Nourish your body with nutritious meals, balanced diets, and expert guidance for a healthy lifestyle."</p>
              </div>
              <div class="Unique-needs overview-card">
              <div class="overview-circle">
                <img class="overview-icon" height="90" width="90" src="../images/logos/heart.png" alt="heart">
              </div>
              <h4>Unique Needs</h4>
              <h6>"Tailor fitness plans to meet your specific fitness goals, whether you're a beginner or an experienced athlete."</h6>
              </div>


            </div>

        </div>
        
    </section>
    <section id="programs">
        <div class="program-container">
            <div class="program-title">
                <h1 style="color: white ; font-size: 4rem">Our Programs 👋</h1>
            </div>
            <div class="Group-program">
                <img class="group-img" src="../images/photos/group2.jpg" alt="group img">
                <div class="group-Details">
                    <h1 style="color: white ; font-size: 3rem;">Group Training Program</h1>
                    <p style="margin-top: 20px; font-size: 1.2rem;">At FitZone Fitness Center, we believe that working out together creates motivation, 
                        energy, and lasting results. Our Group Training Programs are designed to bring people together in a dynamic and supportive 
                        environment, making fitness both effective and enjoyable. </p>
                    <button class="btn btn-outline-primary btn-lg" style="border-color: white; color: white; background-color: black" type="button" onclick="window.location.href='program.php';">👉 Read More</button>
                </div>
            </div>
            <div class="indivisual-program">
                <img class="individual-img" src="../images/photos/individual1.jpg" alt="individual img">
                <div class="individual-Details">
                    <h1 style="color: white ; font-size: 3rem;">Indivisual Training Program</h1>
                    <p style="margin-top: 20px; font-size: 1.2rem;">At FitZone Fitness Center, we understand that individual training is essential for 
                        achieving your fitness goals. Our Indivisual Training Programs offer personalized attention, guidance, and support to help you 
                        reach your full potential.</p>
                    <button class="btn btn-outline-primary btn-lg" style="border-color: white; color: white; background-color: black" type="button" onclick="window.location.href='program.php';">👉 Read More</button>
                </div>
            </div>
        </div>
    </section>
    <section id="reviews">

    </section>
    <section id="faq">

    </section>
 
    <!-- footer -->
    <?php include 'footer.php'?>
</body>
</html>