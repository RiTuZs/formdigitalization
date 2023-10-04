<!-- This code checks the user's verification status and redirects them accordingly. If the verification status is not 'Verified', the user is redirected to the 'verify.php' page. Otherwise, it displays a basic user interface with options to navigate to different forms. -->



<?php

session_start(); // Start a new or resume the existing session.
include_once('db.php'); // Include an external PHP file named 'db.php' for database connection.

$id_check = $_SESSION['id']; // Retrieve the 'id' from the session.
if (!isset($id_check)) {
    header("Location: index.php"); // If 'id' is not set, redirect to 'index.php'.
}

    $qry = mysqli_query($conn, "SELECT *  FROM formdata WHERE id = '{$id_check}'");
    // Execute a SQL query to fetch user data based on 'id'.

    if(mysqli_num_rows($qry) > 0) {
        $row = mysqli_fetch_assoc($qry); 
        if($row){
            $_SESSION['verification_status'] = $row['verification_status'];
            // Store the verification status in the session.

            if($row['verification_status'] != 'Verified'){
                header("Location: verify.php");
                // If verification status is not 'Verified', redirect to 'verify.php'.
            }
        }
    }

    // mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags for character set, compatibility, and viewport -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Page title -->
    <title>C-DAC CINE</title>
</head>

<!-- Link to external CSS file -->
<link rel="stylesheet" href="css/base.css">
<script src="https://kit.fontawesome.com/c4d89a7412.js" crossorigin="anonymous"></script>

<body>
    <div class="form">
        <!-- Header section -->
        <header>
            <!-- Logo image -->
            <img class="logo" src="pictures/C-DAC.jpg" alt="CDAC">
            <!-- Page title -->
            <h1>Centre for Development of Advanced Compunting</h1>
            <!-- Logout button -->
            <a href="logout.php"><button class="logout-btn"><i class="fa-solid fa-power-off"></i></button></a>
        </header>

        <!-- Onboarding and Exit Form sections -->
        <div class="input">
            <!-- Link to the onboarding form -->
            <a href="joining.php" class="onboarding">
                <!-- Button for onboarding form -->
                <button class="onb">
                    Onboarding Form
                    <!-- Right arrow icon -->
                    <i class="fa-solid fa-arrow-up-right-from-square"></i> 
                </button>
            </a>
        </div> 
        <br> 
        <div class="input">
            <!-- Link to the exit form -->
            <a href="exit.php" class="exit">
                <!-- Button for exit form -->
                <button class="ext">
                    Exit Form
                    <!-- Right arrow icon -->
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                </button>
            </a>
        </div>   
    </div>

    <!-- JavaScript section for handling button clicks -->
    <script>
        // Select the onboarding button
        var onboardingButton = document.querySelector('.onb');

        // Add a click event listener to the onboarding button
        onboardingButton.addEventListener('click', function() {
            // Redirect to the onboarding questionnaire page
            window.location.href = 'joining questionnaire.php';
        });

        // Select the exit button
        var exitButton = document.querySelector('.ext');

        // Add a click event listener to the exit button
        exitButton.addEventListener('click', function() {
            // Redirect to the exit form page
            window.location.href = 'exit.php';
        });

    </script>

</body>
</html>