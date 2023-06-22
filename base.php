<?php

// session_start();
// include 'connector.php';

// $id_check=$_SESSION['id'];
// if(!isset($id_check)){
//     header("Location: index.php");
// }

//if user not login so redirect to login page

    // session_start();
    // include 'db.php';
    // $unique_id = $_SESSION('unique_id');
    // if(empty($unique_id)){
    //     header("Location: login.php");
    // }
    // $qry = mysqli_query($conn, "SELECT *  FROM formdata WHERE unique_id = '{$unique_id}'");
    // if(mysqli_num_rows($qry) > 0) {
    //     $row = mysqli_fetch_assoc($qry);
    //     if($row){
    //         $_SESSION['verification_status'] = $row['verification_status'];
    //         if($row['verification_status'] != 'Verified'){
    //             header("Location: verify.php");
    //         }
    //     }
    // }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C-DAC CINE</title>
</head>
<link rel="stylesheet" href="base.css">
<script src="https://kit.fontawesome.com/c4d89a7412.js" crossorigin="anonymous"></script>
<body>
    <div class="form">
        <header>
            <img class="logo" src="pictures/C-DAC.jpg" alt="CDAC">
            <h1>Centre for Development of Advanced Compunting</h1>
            <a href="logout.php"><button class="logout-btn"><i class="fa-solid fa-power-off"></i></button></a>
        </header>

        <div class="input">
        <a href="joining questionnaire.html" class="onboarding">
            <button class="onb">
                Onboarding Form
                <i class="fa-solid fa-arrow-up-right-from-square"></i> 
            </button>
        </a>
        </div> 
        <br> 
        <div class="input">
            <a href="#" class="exit">
                <button class="ext">
                    Exit Form
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                </button>
            </a>
        </div>   
    </div>

  <script>
    var button = document.querySelector('.onb');

    button.addEventListener('click', function() {
    window.location.href = 'joining questionnaire.html';
    });

    var button = document.querySelector('.ext');

    button.addEventListener('click', function() {
    window.location.href = 'exit.html';
    });

  </script>

</body>
</html>