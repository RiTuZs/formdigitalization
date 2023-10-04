<!-- This code represents an HTML form for verifying a user's account by entering a four-digit OTP (One-Time Password). It includes input fields for OTP and displays error messages as needed. Additionally, there is JavaScript code to manage the OTP input fields. -->


<?php
 include("verifylogic.php"); // Include an external PHP file named 'verifylogic.php'.
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags for character set, compatibility, and viewport -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Page title -->
    <title>Verify</title>

    <!-- Link to external CSS file -->
    <link rel="stylesheet" href="css/verify.css">
    
    <!-- For Error - Link to Bootstrap CSS and JavaScript libraries -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="form">
        <!-- Title and description of the verification form -->
        <h2 id="verify">Verify Your Account</h2>
        <p>We emailed you the four digit otp code to Enter the code below to confirm your email address..</p>

        <!-- Verification form -->
        <form action="verify.php" method="post" autocomplete="off">

        <?php if($message != "") {?>
            <!-- Display an error message if the 'message' variable is not empty -->
            <div class="alert alert-danger alert-dismissible" role="alert">
                <strong>
                    <?php
                        echo $message; // Display the error message.
                    ?>
                </strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php } ?>
            
            <!-- OTP input fields -->
            <div class="otp_code">
                <input type="number" name="otp1" class="otp-field" placeholder="0" min="0" max="9" required onpaste="false">
                <input type="number" name="otp2" class="otp-field" placeholder="0" min="0" max="9" required onpaste="false">
                <input type="number" name="otp3" class="otp-field" placeholder="0" min="0" max="9" required onpaste="false">
                <input type="number" name="otp4" class="otp-field" placeholder="0" min="0" max="9" required onpaste="false">
            </div>
            <!-- Submit button for verification --> 
            <div class="submit">
                <input type="submit" name="verify" value="Verify Now" class="button">
            </div>
        </form>
    </div>

    <!-- JavaScript for handling OTP input -->
    <script>
        const otp = document.querySelectorAll('.otp-field');

        otp[0].focus();

        otp.forEach((field,index) =>{
            field.addEventListener('keydown', (e) => {
                if(e.key >=0 && e.key <=9){
                    otp[index].value = "";
                    setTimeout(() => {
                        otp[index+1].focus();
                    }, 4);
                }
                else if(e.key === 'Backspace'){
                    setTimeout(() => {
                        otp[index-1].focus();
                    }, 4);
                }
            });
        });
    </script>
</body>
</html>