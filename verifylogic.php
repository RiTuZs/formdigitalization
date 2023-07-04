<?php

session_start();
    include ('db.php');

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }


    $message = "";

    if(isset($_SESSION['id'])){
        header("Location: base.php");
    }
    if(isset($_POST['verify'])){
        // $otp = $_SESSION['otp'];
        $email = $_SESSION['email'];

        // $otp_code = $_POST['otp_code'];
        $otp1 = $_POST['otp1'];
        $otp2 = $_POST['otp2'];
        $otp3 = $_POST['otp3'];
        $otp4 = $_POST['otp4'];
        $session_otp = $_SESSION['otp'];
        $otp = $otp1.$otp2.$otp3.$otp4;

        if($session_otp != $otp){
            $message = "Invalid OTP";
        }
        else{
            mysqli_query($conn, "UPDATE formdata set verification_status = 'Verified' where email = '$email'");
            header("Location: index.php");
        }
    }

?>