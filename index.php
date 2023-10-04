<!-- This PHP script handles user login. It checks for the presence of session variables and handles form submissions. If a user successfully logs in, they are redirected to base.php, and error messages are displayed for various scenarios. -->


<?php

session_start(); // Start a new or resume the existing session.
include 'db.php'; // Include an external PHP file named 'db.php' which presumably contains database connection information.

$message = ""; // Initialize an empty string to store messages.

if(isset($_SESSION['id'])){
    header("Location: base.php"); // If the 'id' session variable is set, redirect to 'base.php'.
}

if(isset($_POST['login'])){
    // If the 'login' POST variable is set (form submission has occurred), execute the following code:

    $email = $_POST['email']; // Get the 'email' value from the form.
    $password = md5($_POST['password']); // Get the 'password' value from the form and hash it using md5.

  
    if(!empty($email) && !empty($password)){
        // If both 'email' and 'password' are not empty, proceed with the following:

        $sql=mysqli_query($conn,"SELECT * FROM formdata where email='$email' and password='$password'");
        // Execute an SQL query to select data from the 'formdata' table where 'email' and 'password' match the provided values.
        $row  = mysqli_fetch_array($sql); // Fetch the result as an array.

        if(is_array($row)){
            // If a matching row is found in the database, proceed with the following:

            $_SESSION["id"] = $row['id']; // Store 'id' in the session.
            $_SESSION["email"]= $row['email']; // Store 'email' in the session.
            $_SESSION['otp'] = $row['otp']; // Store 'otp' in the session.

            // $message = "Success"; // This line is commented out and not used.

            header("Location: base.php"); // Redirect to 'base.php' after successful login.
        }
        else
        {
            $message = "Invalid Email ID or Password"; // Set an error message if no matching row is found.
        }
    }
    else{
        $message = "All Fields Are Required"; // Set an error message if either 'email' or 'password' is empty.
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- HTML head section with metadata and CSS/JS includes -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Page title -->
    <title>Login</title>
    
    <!-- Link to external CSS file -->
    <link rel="stylesheet" href="css/register.css">
        <!-- For Error -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="form">
        <header>
            <!-- Header section with an image and a title -->
            <img src="pictures/copy.png">
            <h2>Login Form</h2>
        </header>
        <form action="index.php"  method="post">
            <!-- A form that sends data to this same PHP script when submitted -->
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

            <!-- Input fields for email and password -->
            <div class="input">
                <label for="email">Email ID</label>
                <input type="email" name="email" placeholder="abcd@gmail.com" required>
            </div> 
            <div class="input">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Password" required>
            </div>   
            <div class="submit">
                <input type="submit" name="login" value="Login Now" class="button"> <!-- Submit button for the form -->
            </div>
            <div class="link">Not signed up? <a href="register.php">Signup Now</a></div> <!-- Link to registration page -->
        </form>
    </div>
</body>
</html>