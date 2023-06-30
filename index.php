
<?php

session_start();
include 'db.php';
if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

  
    if(!empty($email) && !empty($password)){

        $sql=mysqli_query($conn,"SELECT * FROM formdata where email='$email' and password='$password'");
        $row  = mysqli_fetch_array($sql);

        if(is_array($row)){
    
            $_SESSION["id"] = $row['id'];
            $_SESSION["email"]= $row['email'];
            // $_SESSION['otp'] = $row['otp'];

            echo "Success";
    
            header("Location: base.php"); 
        }

        // if($row){
        //     $_SESSION['verification_status']= $row['verification_status'];
        //     if($row['verification_status'] != 'verified'){
        //         header("Location: verify.php");
        //     }
        // }
        else
        {
            echo "Invalid Email ID or Password";
        }
    }
    else{
        echo "All Fields Are Required";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <div class="form">
        <header>
            <img src="pictures/copy.png">
            <h2>Login Form</h2>
        </header>
        <form action="index.php"  method="post">
            <div class="error-text">Error</div>
            <div class="input">
                <label for="email">Email ID</label>
                <input type="email" name="email" placeholder="abcd@gmail.com" required>
            </div> 
            <div class="input">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Password" required>
            </div>   
            <div class="submit">
                <input type="submit" name="login" value="Login Now" class="button">
            </div>
            <div class="link">Not signed up? <a href="register.php">Signup Now</a></div>
        </form>
    </div>
    <!-- <script src="js/login.js"></script> -->
</body>
</html>