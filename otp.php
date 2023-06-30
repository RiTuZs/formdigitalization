<?php
include_once 'db.php';
session_start();
$otp1 = $_POST['otp1'];
$otp2 = $_POST['otp2'];
$otp3 = $_POST['otp3'];
$otp4 = $_POST['otp4'];
$session_otp = $_SESSION['otp'];
$otp = $otp1.$otp2.$otp3.$otp4;

if(!empty($otp)){

    if($otp == $session_otp){

        $sql = mysqli_query($conn , "SELECT *  FROM formdata WHERE otp = '{$otp}'");
        if(mysqli_num_rows($sql) > 0){
            
            $null_otp = 0;
            $query = mysqli_query($conn, "UPDATE formdata SET `verification_status` = 'Verified' , `otp` = '$null_otp' WHERE id = '{$id}' ");
            if($query){
                $row = mysqli_fetch_assoc($sql);
                if($row){
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['verification_status'] = $row['verification_status'];
                    echo "Success";
                }
            }
        }
    }
    else{
        echo "Wrong OTP!";
    }
}
else{
    echo "Enter OTP";
}

?>