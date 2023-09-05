<?php
// session_start();
// include 'db.php';

// $id_check=$_SESSION['id'];
// if(!isset($id_check)){
//     header("Location: base.php");
// }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'poppins', sans-serif;
}

body {
    position: relative;
    background: fixed;
    background-color: #FFFFFF;
    background-image: linear-gradient(225deg, #FFFFFF 0%, #6284FF 50%, #FF0000 100%);
    background-position: center;
    background-repeat: no-repeat;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}
::selection{
    color: #ececec;
    background: #00b3ff;
}
div  {
    position: relative;
    background: rgb(242, 243, 247, 1);
    width: 100%;
    max-width: 500px;
    border-radius: 12px;
    box-shadow: -3px 3px 10px -5px rgba(0, 0, 0, 0.5);
    padding: 30px 30px;

}
    </style>
</head>
<body>
<div class="card">
    <h1 class="card-title">Thank You So Much!!</h1>
    <p class="card-text"> Your data has been saved successfully.</p>
    <a href="base.php" class="btn btn-primary">Exit</a>
</div>
</body>
</html>