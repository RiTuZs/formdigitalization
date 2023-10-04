<!-- This PHP code handles the verification process by checking the entered OTP against the one stored in the session. If they match, it updates the verification status in the database and redirects to 'index.php'. -->


<?php

session_start(); // Start a new or resume the existing session.
include('db.php'); // Include an external PHP file named 'db.php' for database connection.

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    // Check if the database connection fails and terminate with an error message if it does.
}


$message = ""; // Initialize an empty string to store messages.

if(isset($_SESSION['id'])){
    header("Location: base.php");
    // If the 'id' session variable is set, redirect to 'base.php'.
}

if(isset($_POST['verify'])){
    // Check if the 'verify' POST variable is set (form submission has occurred):
    
    $email = $_SESSION['email']; // Retrieve the email from the session.
    $otp1 = $_POST['otp1']; // Retrieve the first digit of OTP from the form.
    $otp2 = $_POST['otp2']; // Retrieve the second digit of OTP from the form.
    $otp3 = $_POST['otp3']; // Retrieve the third digit of OTP from the form.
    $otp4 = $_POST['otp4']; // Retrieve the fourth digit of OTP from the form.
    $session_otp = $_SESSION['otp']; // Retrieve the OTP from the session.
    $otp = $otp1.$otp2.$otp3.$otp4; // Combine the individual OTP digits.

    if($session_otp != $otp){
        // If the entered OTP does not match the one stored in the session, display an error message.
        $message = "Invalid OTP";
    }
    else{
        // If the entered OTP matches the one stored in the session, update verification status and redirect.
        mysqli_query($conn, "UPDATE formdata set verification_status = 'Verified' where email = '$email'");
        header("Location: index.php"); // Redirect to 'index.php'.
    }
}

mysqli_close($conn); // Close the database connection.

?>