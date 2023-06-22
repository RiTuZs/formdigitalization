<?php

// require_once('db.php'); //this is the file containing the database connection code
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// if(isset($_POST['submit'])) {
//     // $employee_name = $_POST['employee_name'];
//     // $employee_id = $_POST['employee_id'];
//     // $email = $_POST['email'];
//     // $phone = $_POST['phone'];
//     // $department = $_POST['department'];
//     // $designation = $_POST['designation'];
//     // $work_period_start = $_POST['work_period_start'];
//     // $mode_of_employment = $_POST['mode_of_employment'];    
//     // $password = $_POST['password'];
//     // $verification_status = '0';

//     $employee_name = $_POST['EmployeeName'];
//     $employee_id = $_POST['EmployeeId'];
//     $email = $_POST['email'];
//     $phone = $_POST['phone'];
//     $department = $_POST['department'];
//     $designation = $_POST['designation'];
//     $work_period_start = $_POST['WorkPeriodStart'];
//     $mode_of_employment = $_POST['modeOfEmployment'];
//     $password = $_POST['password'];   //md5 give security to the password 
//     $cpassword = $_POST['cpassword'];
//     $verification_status = '0';

//     $query = "INSERT INTO formdata (employee_name, employee_id, email, phone, department, designation, work_period_start, mode_of_employment, password, otp, verification_status) VALUES ('$employee_name', '$employee_id', '$email', '$phone', '$department', '$designation', '$work_period_start', '$mode_of_employment', '$password', '{$verification_status})";

//     // $query = "INSERT INTO formdata (employee_name, employee_id, email, phone, department, designation, work_period_start, mode_of_employment, password, otp, verification_status) VALUES ('$employee_name', '$employee_id', '$email', '$phone', '$department', '$designation', '$work_period_start', '$mode_of_employment', '$password', {$otp}', '{$verification_status})";

//     $sql=mysqli_query($conn,$query);


//     echo "Record added successfully.";
// }

// mysqli_close($conn);



session_start();
include_once 'db.php';

if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
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
    $role = 'user';
    $verification_status = '0';

    //checking field are not empty
    if(!empty($employee_name) && !empty($employee_id) && !empty($email) && !empty($phone) && !empty($department) && !empty($designation) && !empty($work_period_start) && !empty($mode_of_employment) && !empty($password) && !empty($cpassword)) {

        if($password == $cpassword){

            // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            if(filter_var($email,FILTER_VALIDATE_EMAIL)){
                //checking email is already exists!
                $sql = mysqli_query($conn,"SELECT email FROM formdata WHERE email='{$email}'");
                if(mysqli_num_rows($sql) > 0){
                    echo "$email ~ Already Exists";
                }
                else {
                    $random_id = rand(time(),10000000);   //create a user unique id
                    $otp = mt_rand(1111,9999);     //creating 4 digits otp

                    //insert data into table
                    $query = mysqli_query($conn,"INSERT INTO formdata (employee_name, employee_id, email, phone, department, designation, work_period_start, mode_of_employment, password, otp, verification_status) VALUES ('{$employee_name}', '{$employee_id}', '{$email}', '{$phone}', '{$department}', '{$designation}', '{$work_period_start}', '{$mode_of_employment}', '{$password}', '{$otp}', '{$verification_status}')");
                    // $insertResult=mysqli_query($conn,$query);
                    if($query){
                        $sql2 = mysqli_query($conn , "SELECT * FROM formdata WHERE email = '{$email}'");
                        if (mysqli_num_rows($sql2)>0){
                            $row = mysqli_fetch_assoc($sql3);   //fetching data
                            $_SESSION['unique_id'] = $row['unique_id'];
                            $_SESSION['email'] = $row['email'];
                            $_SESSION['otp'] = $row['otp'];

                            //lets start mail function
                            //smtp configuration
                            
                            if($otp){
                                $reciever = $email;
                                $subject = "From: $employee_name <$email>";
                                $body = "Name "." $employee_name \n Email "." $email \n "." $otp";
                                $sender = "From: sukanya.ss.ritu@gmail.com";   //email sender name make sure write your email you can put the xampp mail file

                                if(mail($reciever,$subject,$body,$sender)){
                                    echo "Success";
                                }
                                else{
                                    echo "Email Problem!" . mysqli_error($conn);
                                }
                            }
                        //email function end
                        }
                    }
                    else {
                        echo "Something Went Wrong!";
                    }
                                            
                }
            }
            else{
                echo "$email ~ This is not a valid Email";
            }
            
                    
        }
        
        else{
            echo "Password does not match";
        }  
    }
        //if email is valid
    
        
    else {
        echo "All input Fields are Required!";
    }

    echo "Record added successfully.";
}

mysqli_close($conn);

?>