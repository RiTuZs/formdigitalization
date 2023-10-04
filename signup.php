<!-- This PHP code appears to handle user registration, including validation, email verification, and database insertion. It also checks for existing email addresses and sends an OTP (One-Time Password) for verification via email. -->


<?php

session_start(); // Start a new or resume the existing session.
include_once('db.php'); // Include an external PHP file named 'db.php', presumably containing database connection information.
$message = ""; // Initialize an empty string to store messages.

if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        // Check if the database connection fails and terminate with an error message if it does.
    }

$message = ""; 

if(isset($_SESSION['id'])){
    header("Location: base.php"); // If the 'id' session variable is set, redirect to 'base.php'.
}

if(isset($_POST['submit'])) {
    // If the 'submit' POST variable is set (form submission has occurred), execute the following code:

    // Retrieve form data
    $employee_name = $_POST['EmployeeName'];
    $employee_id = $_POST['EmployeeId'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $department = $_POST['department'];
    $designation = $_POST['designation'];
    $work_period_start = $_POST['WorkPeriodStart'];
    $mode_of_employment = $_POST['modeOfEmployment'];
    $password = md5($_POST['password']); // Hash the password using md5 for security.
    $cpassword = md5($_POST['cpassword']);
    $verification_status = '0';

    // Check if all required fields are not empty
    if(!empty($employee_name) && !empty($employee_id) && !empty($email) && !empty($phone) && !empty($department) && !empty($designation) && !empty($work_period_start) && !empty($mode_of_employment) && !empty($password) && !empty($cpassword)) {

        if($password == $cpassword){
            // If password and confirm password match, proceed with the following:

            $user_email = trim($email);
            if(filter_var($email,FILTER_VALIDATE_EMAIL)){
                // Check if the provided email is a valid email address.

                // Check if the email already exists in the database
                $sql1 = mysqli_query($conn,"SELECT email FROM formdata WHERE email='{$email}'");
   
                if(mysqli_num_rows($sql1) > 0){
                    
                    $message = "$email ~ Already Exists";
                }
                else {
                    // Generate a 4-digit OTP (One-Time Password)
                    $otp = rand(1111,9999);     //generate random 4 digits otp
                    $_SESSION['otp'] = $otp;
                    $_SESSION['email'] = $email;

                    // Send an email with the OTP using PHPMailer
                    require "Mail/phpmailer/PHPMailerAutoload.php";
                    $mail = new PHPMailer;
                    
                    // SMTP configuration
                    $mail->isSMTP();
                    $mail->Host='smtp.gmail.com';
                    $mail->Port=587;
                    $mail->SMTPAuth=true;
                    $mail->SMTPSecure='tls';

                    $mail->Username='sukanya.ss.ritu@gmail.com'; //mail id from which you want to send the mail
                    $mail->Password='duiryvzekjtnbmcl'; //generated password for that particular mail 
                    
                    // Email content
                    $mail->setFrom('sukanya.ss.ritu@gmail.com', 'OTP Verification');
                    $mail->addAddress($_POST["email"]);

                    $mail->isHTML(true);
                    $mail->Subject="Your Verify Code";
                    $mail->Body="<p>Dear $employee_name, </p> 
                    <h3>Your verification OTP code is $otp <br></h3>
                    <br><br>
                    <p>With regards,</p>
                    <p>C-DAC CINE.</p>";

                    if(!$mail->send()){
                        $message = "Registration failed, Invalid Email!!";
                    }
                    else {
                        // Insert user data into the database
                        $query = mysqli_query($conn, "INSERT INTO formdata (employee_name, employee_id, email, phone, department, designation, work_period_start, mode_of_employment, password, otp, verification_status) VALUES ('$employee_name', '$employee_id', '$email', '$phone', '$department', '$designation', '$work_period_start', '$mode_of_employment', '$password', '$otp', '$verification_status')");
                        
                        // Redirect to the verification page
                        header("Location: verify.php");
                    }
                                            
                }
            }

            else{
                $message = "$email ~ This is not a valid Email";
            }
                        
        }
        
        else{
            $message = "Password does not match";
        }  
    }
       
    else {
        $message = "All input Fields are Required!";
    }

}

mysqli_close($conn); // Close the database connection.

?>