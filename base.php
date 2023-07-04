<?php

session_start();
include_once ('db.php');

$id_check=$_SESSION['id'];
if(!isset($id_check)){
    header("Location: index.php");
}

    $qry = mysqli_query($conn, "SELECT *  FROM formdata WHERE id = '{$id_check}'");
    if(mysqli_num_rows($qry) > 0) {
        $row = mysqli_fetch_assoc($qry);
        if($row){
            $_SESSION['verification_status'] = $row['verification_status'];
            if($row['verification_status'] != 'Verified'){
                header("Location: verify.php");
            }
        }
    }

    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C-DAC CINE</title>
</head>
<link rel="stylesheet" href="css/base.css">
<script src="https://kit.fontawesome.com/c4d89a7412.js" crossorigin="anonymous"></script>
        <!-- For Error -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
<body>
    <div class="form">
        <header>
            <img class="logo" src="pictures/C-DAC.jpg" alt="CDAC">
            <h1>Centre for Development of Advanced Compunting</h1>
            <a href="logout.php"><button class="logout-btn"><i class="fa-solid fa-power-off"></i></button></a>
        </header>

        <div class="input">
        <a href="joining.php" class="onboarding">
            <button class="onb">
                Onboarding Form
                <i class="fa-solid fa-arrow-up-right-from-square"></i> 
            </button>
        </a>
        </div> 
        <br> 
        <div class="input">
            <a href="exit.php" class="exit">
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
    window.location.href = 'joining questionnaire.php';
    });

    var button = document.querySelector('.ext');

    button.addEventListener('click', function() {
    window.location.href = 'exit.php';
    });

  </script>

</body>
</html>