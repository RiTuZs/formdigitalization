<?php

session_start();
include_once ('db.php');
$message = "";

if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

$message = ""; 

if(isset($_SESSION['id'])){
    header("Location: base.php");
}

if(isset($_POST['submit'])) {
    $employee_name = $_POST['EmployeeName'];
    $employee_id = $_POST['EmployeeId'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $department = $_POST['department'];
    $designation = $_POST['designation'];
    $work_period_start = $_POST['WorkPeriodStart'];
    $mode_of_employment = $_POST['modeOfEmployment'];
    $password = md5($_POST['password']);   //md5 give security to the password 
    $cpassword = md5($_POST['cpassword']);
    $verification_status = '0';

    //checking field are not empty
    if(!empty($employee_name) && !empty($employee_id) && !empty($email) && !empty($phone) && !empty($department) && !empty($designation) && !empty($work_period_start) && !empty($mode_of_employment) && !empty($password) && !empty($cpassword)) {

        if($password == $cpassword){

            $user_email = trim($email);
            if(filter_var($email,FILTER_VALIDATE_EMAIL)){

                //checking email is already exists!
                $sql1 = mysqli_query($conn,"SELECT email FROM formdata WHERE email='{$email}'");
   
                if(mysqli_num_rows($sql1) > 0){
                    
                    $message = "$email ~ Already Exists";
                }
                else {
                    $otp = rand(1111,9999);     //creating 4 digits otp
                    $_SESSION['otp'] = $otp;
                    $_SESSION['email'] = $email;
                    require "Mail/phpmailer/PHPMailerAutoload.php";
                    $mail = new PHPMailer;

                    $mail->isSMTP();
                    $mail->Host='smtp.gmail.com';
                    $mail->Port=587;
                    $mail->SMTPAuth=true;
                    $mail->SMTPSecure='tls';

                    $mail->Username='sukanya.ss.ritu@gmail.com';
                    $mail->Password='duiryvzekjtnbmcl';

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
                        $query = mysqli_query($conn, "INSERT INTO formdata (employee_name, employee_id, email, phone, department, designation, work_period_start, mode_of_employment, password, otp, verification_status) VALUES ('$employee_name', '$employee_id', '$email', '$phone', '$department', '$designation', '$work_period_start', '$mode_of_employment', '$password', '$otp', '$verification_status')");
                        
                        // $message = "Something Went Wrong!";

                        header("Location: verify.php");
                    }
                                            
                }
                // echo "Record added successfully.";
            }
            
            else{
                $message = "$email ~ This is not a valid Email";
            }
            
                    
        }
        
        else{
            $message = "Password does not match";
        }  
    }
        // if email is valid
    
        
    else {
        $message = "All input Fields are Required!";
    }

    // $message = "Record added successfully.";
}

mysqli_close($conn);

?>