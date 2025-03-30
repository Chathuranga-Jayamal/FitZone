<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership</title>
    <link rel="stylesheet" href="/FitZone/CSS/membership.css?v=1.2">
</head>

<body>
    <section id="introduction">
        <?php include 'header.php' ?>
        <div class="container introduction-container">
            <div class="introduction-title">
                <h1>Join With Fitzone</h1>
            </div>
            <div class="introduction-button ">
                <button class="btn btn-outline-light btn-lg me-4" onclick="location.href='./program.php'">choose your program</button>
                <button class="btn btn-primary btn-lg" onclick="window.open('https://wa.me/94761894986', '_blank')" >contact us</button>
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
                        <li><span class="material-icons">task_alt</span> Access to premium fitness classes & workshops</li>
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
        <div class="container personalized-table mt-5 ps-5 pe-5">
            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th>Silver</th>
                        <th>Gold</th>
                        <th>Platinum</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Full access to gym equipment & facilities</td>
                        <td><i class="material-icons">check</i></td>
                        <td><i class="material-icons">check</i></td>
                        <td><i class="material-icons">check</i></td>
                    </tr>
                    <tr>
                        <td>Participation in group fitness classes</td>
                        <td><i class="material-icons">check</i></td>
                        <td><i class="material-icons">check</i></td>
                        <td><i class="material-icons">check</i></td>
                    </tr>
                    <tr>
                        <td>Nutrition plan & guidance</td>
                        <td><i class="material-icons">check</i></td>
                        <td><i class="material-icons">check</i></td>
                        <td><i class="material-icons">check</i></td>
                    </tr>
                    <tr>
                        <td>Washroom and Locker Room Access</td>
                        <td><i class="material-icons">check</i></td>
                        <td><i class="material-icons">check</i></td>
                        <td><i class="material-icons">check</i></td>
                    </tr>
                    <tr>
                        <td>Access to premium fitness classes & workshops</td>
                        <td></td>
                        <td><i class="material-icons">check</i></td>
                        <td><i class="material-icons">check</i></td>
                    </tr>
                    <tr>
                        <td>Monthly body composition analysis</td>
                        <td></td>
                        <td><i class="material-icons">check</td>
                        <td><i class="material-icons">check</i></td>
                    </tr>
                    <tr>
                        <td>Personalized workout adjustments</td>
                        <td></td>
                        <td><i class="material-icons">check</td>
                        <td><i class="material-icons">check</i></td>
                    </tr>
                    <tr>
                        <td>One-on-one personal training sessions (weekly)</td>
                        <td></td>
                        <td></td>
                        <td><i class="material-icons">check</i></td>
                    </tr>
                    <tr>
                        <td>Customized meal & diet consultation</td>
                        <td></td>
                        <td></td>
                        <td><i class="material-icons">check</i></td>
                    </tr>
                    <tr>
                        <td>Exclusive access to VIP training zones</td>
                        <td></td>
                        <td></td>
                        <td><i class="material-icons">check</i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <section class="specialized">
        <div class="container specialized-container">
            <div class="specialized-details col-lg-5 ">
                <div class="specialized-title">
                    <h1 class="fw-bolder">Specialized Membership</h1>
                </div>
                <div class="specialized-description mt-2 mb-2 ">
                    <p>At FitZone, our Specialized Membership programs are designed for those with specific fitness goals in mind. 
                        Whether you're looking to shed extra weight, build muscle mass, or enhance your athletic performance, 
                        we have a program tailored just for you. Each specialized membership provides structured workout plans, expert 
                        guidance, and exclusive access to targeted training resources, ensuring you stay on track to achieve your desired 
                        results. Choose the program that aligns with your goals and unlock your full potential with FitZone!</p>
                </div>
                <div class="specialized-button">
                    <button class="btn btn-primary btn-lg">View more</button>
                </div>
            </div>
            <div class="specialized-image col-lg-5"></div>
        </div>
        <div class="specialized-pricing">
            <div class="wieght-card card">
                <div class="card-title">
                    <h1 class="fw-bold">Weight <br>Loss</h1>
                </div>
                <div class="card-price">
                    <h4 class="currency">Lks</h4>
                    <h1 class="price">10,000</h1>
                </div>
                <p class="per-month">per month</p>
                <div class="card-description">
                    <ul class="feature-list">
                        <li><span class="material-icons">task_alt</span> Customized fat-burning workout plans</li>
                        <li><span class="material-icons">task_alt</span> Nutrition guidance for healthy weight loss</li>
                        <li><span class="material-icons">task_alt</span> Access to group cardio and HIIT classes</li>
                    </ul>
                </div>
                <div class="card-button">
                    <button class="btn btn-outline-primary">Get Started</button>
                </div>
            </div>


            <div class="muscle-card card">
                <div class="card-title">
                    <h1 class="fw-bold">Muscle <br>Building</h1>
                </div>
                <div class="card-price">
                    <h4 class="currency">Lks</h4>
                    <h1 class="price">15,000</h1>
                </div>
                <p class="per-month">per month</p>
                <div class="card-description">
                    <ul class="feature-list">
                        <li><span class="material-icons">task_alt</span> Strength-focused training programs</li>
                        <li><span class="material-icons">task_alt</span> Personalized diet and supplement recommendations</li>
                        <li><span class="material-icons">task_alt</span> Access to advanced weightlifting equipment</li>
                    </ul>
                </div>
                <div class="card-button">
                    <button class="btn btn-primary">Get Started</button>
                </div>
            </div>
            <div class="athletic-card card">
                <div class="card-title">
                    <h1 class="fw-bold">Athletic <br>Training</h1>
                </div>
                <div class="card-price">
                    <h4 class="currency">Lks</h4>
                    <h1 class="price">20,000</h1>
                </div>
                <p class="per-month">per month</p>
                <div class="card-description">
                    <ul class="feature-list">
                        <li><span class="material-icons">task_alt</span> Sport-specific training plans & guidance</li>
                        <li><span class="material-icons">task_alt</span> Agility and endurance conditioning</li>
                        <li><span class="material-icons">task_alt</span> Coaching from professional trainers</li>
                    </ul>
                </div>
                <div class="card-button">
                    <button class="btn btn-outline-primary">Get Started</button>
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer.php'; ?>
</body>

</html>