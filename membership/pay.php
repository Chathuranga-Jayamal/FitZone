<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pay</title>
    <link rel="stylesheet" href="./pay.css">
</head>
<body>
    <?php include '../header/header.php';
    session_start();
    //error and success message
    $error_message = isset($_GET['error']) ? htmlspecialchars($_GET['error']) : '';
    $success_message = isset($_GET['success']) ? htmlspecialchars($_GET['success']) : '';

    if (isset($_SESSION['user_id'])) {
        $user_fname = $_SESSION['user_fname'] ? $_SESSION['user_fname'] : '';
        $user_lname = $_SESSION['user_lname'] ? $_SESSION['user_lname'] : '';
        $user_email = $_SESSION['user_email'] ? $_SESSION['user_email'] : '';
    }else{
       session_destroy();
       header("Location: /FitZone/login/login.php");
       exit();
    }

    $membershipID = $_GET['membershipID'];
    switch ($membershipID) {
        case '1':
            $membership = $_SESSION['silverMembership'];
            $price = $_SESSION['silverDiscountPrice'];
            $duration = $_SESSION['silverDuration'];
            break;
        case '2':
            $membership = $_SESSION['goldMembership'];
            $price = $_SESSION['goldDiscountPrice'];
            $duration = $_SESSION['goldDuration'];
            break;
        case '3':
            $membership = $_SESSION['platinumMembership'];
            $price = $_SESSION['platinumDiscountPrice'];
            $duration = $_SESSION['platinumDuration'];
            break;
        case '4':
            $membership = $_SESSION['weightlossMembership'];
            $price = $_SESSION['weightlossDiscountPrice'];
            $duration = $_SESSION['weightlossDuration'];
            break;
        case '5':
            $membership = $_SESSION['muscleMembership'];
            $price = $_SESSION['muscleDiscountPrice'];
            $duration = $_SESSION['muscleDuration'];
            break;
        case '6':
            $membership = $_SESSION['athleticMembership'];
            $price = $_SESSION['athleticDiscountPrice'];
            $duration = $_SESSION['athleticDuration'];
            break;    
        default:
            echo 'Membership Error';
    }
    ?>    
    <div class="body-container">
        <div class="form-container">
            <h1>Get your Membership</h1>
            <div class="form-item-container mt-5">
                <form name="registrationForm" class="registration-form" method="post" onsubmit="return validate_form();" action="./payadd.php">

                    <div class="form-item">
                        <label for="membership">Membership:</label>
                        <input type="text" id="membership" name="membership" class="input-box" value="<?php echo htmlspecialchars($membership) ?>" readonly>
                    </div>
                    <div class="form-item">
                        <label for="price">Price:</label>
                        <input type="text" id="price" name="price" class="input-box" value="<?php echo htmlspecialchars($price) ?>" readonly>
                    </div>
                    <div class="form-item">
                        <label for="duration">Duration:</label>
                        <input type="text" id="duration" name="duration" value="<?php echo htmlspecialchars($duration) ?>" class="input-box" readonly>
                    </div>                 
                    <div class="form-item">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($user_fname . " " . $user_lname) ?>" class="input-box" readonly>
                    </div>
                    <div class="form-item">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user_email) ?>" class="input-box" readonly>
                    </div>
                    <!-- error-message -->
                     <p id="success-message" class="success-message"><?php echo $success_message;?></p>
                    <p id="error-message" class="error-message"><?php echo $error_message; ?></p>
                    <div class="button-group">
                        <button name="submit" class="btn btn-primary btn-lg me-5 mt-4" type="submit">Pay Now</button>
                        <button name="goBack" class="btn btn-outline-primary btn-lg mt-4" onclick="location.href='./membership.php'">Go back</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>