<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership</title>
    <link rel="stylesheet" href="/FitZone/CSS/membership.css?v=1.0">
</head>
<body>
    <section id="introduction">
      <?php include 'header.php'?>
        <div class="container introduction-container">
            <div class="introduction-title">
                <h1>Join With Fitzone</h1>
            </div>
            <div class="introduction-button ">
                <button class="btn btn-outline-light btn-lg me-4" onclick="location.href='./program.php'">choose your program</button>
                <button class="btn btn-primary btn-lg">contact us</button>
            </div>
        </div>
    </section>
    <section class="personalized">
        <div class="container personalized-details mt-5 mb-4">
            <div class="personalized-title">
            <h1 class="fw-bolder mb-4">Personalized Membership</h1>
            </div>
            <div class="personalized-description">
            <p>At FitZone, we understand that every fitness journey is unique, which is why we offer our Personalized Membership 
                packages designed to cater to your individual goals. Whether you're just starting out, looking to level up your 
                routine, or aiming for elite performance, we have the perfect plan for you. Choose from Silver, Gold, and 
                Platinum memberships, each offering exclusive benefits tailored to match your fitness aspirations. 
                From state-of-the-art gym access to personalized training guidance and premium amenities, our Personalized 
                Memberships ensure you get the most out of your FitZone experience. Take the first step towards your fitness goals today!</p>
            </div>
        </div>
        <div class="personalized-pricing">
        <div class="silver-card card">
    <div class="card-title">
        <h1 class="fw-bold">Silver</h1>
    </div>
    <div class="card-price">
        <h4 class="currency">Lks</h4>
        <h1 class="price">8,000</h1>
    </div>
    <p class="per-month">per month</p>
    <div class="card-description">
        <ul class="feature-list">
            <li><span class="material-icons">task_alt</span> Full access to gym equipment & facilities</li>
            <li><span class="material-icons">task_alt</span> Participation in group fitness classes</li>
            <li><span class="material-icons">task_alt</span> Basic nutrition guidance & workout plan</li>
            <li><span class="material-icons">task_alt</span> Locker Room Access</li>
        </ul>
    </div>
    <div class="card-button">
        <button class="btn btn-outline-primary">Get Started</button>
    </div>
</div>
       

            <div class="gold-card card">
            <div class="card-title">
            <h1 class="fw-bold">Gold</h1>
        </div>
        <div class="card-price">
            <h4 class="currency">Lks</h4>
            <h1 class="price">10,000</h1>
        </div>
        <p class="per-month">per month</p>
        <div class="card-description">
            <ul class="feature-list">
                <li><span class="material-icons">task_alt</span> Everything in Silver Plan +</li>
                <li><span class="material-icons">task_alt</span> Access to premium fitness workshops</li>
                <li><span class="material-icons">task_alt</span> Monthly body composition analysis</li>
                <li><span class="material-icons">task_alt</span> Personalized workout adjustments</li>
            </ul>
        </div>
        <div class="card-button">
            <button class="btn btn-primary">Get Started</button>
        </div>
            </div>
            <div class="platinum-card card">
            <div class="card-title">
            <h1 class="fw-bold">Platinum</h1>
        </div>
        <div class="card-price">
            <h4 class="currency">Lks</h4>
            <h1 class="price">12,000</h1>
        </div>
        <p class="per-month">per month</p>
        <div class="card-description">
            <ul class="feature-list">
                <li><span class="material-icons">task_alt</span> Everything in Gold Plan +</li>
                <li><span class="material-icons">task_alt</span> One-on-one personal training sessions (weekly)</li>
                <li><span class="material-icons">task_alt</span> Customized meal & diet consultation</li>
                <li><span class="material-icons">task_alt</span> Exclusive access to VIP training zones</li>
            </ul>
        </div>
        <div class="card-button">
            <button class="btn btn-outline-primary">Get Started</button>
        </div>
            </div>
        </div>
        </div>
    </section>
</body>
</html>