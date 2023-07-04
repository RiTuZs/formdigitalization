<?php

session_start();
include_once ('db.php');
$message = "";
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit'])){

// Get the form data
$Type_of_work_assigned = $_POST['r2c'];
$Fairness_of_workload = $_POST['r3c'];
$Salary = $_POST['r4c'];
$Work_Environment = $_POST['r5c'];
$Career_Progression_path = $_POST['r6c'];
$HigherEducation_Policy = $_POST['r7c'];
$Subject_Training = $_POST['r8c'];
$Behavioural_Training = $_POST['r9c'];
$Colleagues = $_POST['r10c'];
$Supervision = $_POST['r11c'];
$Decision_making  = $_POST['r12c'];
$Employee_Recognition = $_POST['r13c'];
$Work_life_balance = $_POST['r14c'];
$Working_Hours_Timings = $_POST['r15c'];
$Fun = $_POST['r16c'];
$Communication= $_POST['r17c'];
$Performance_evaluation = $_POST['r18c'];
$Employee_friendly = $_POST['r19c'];
$Concern_for_quality  = $_POST['r20c'];
$Administrative_policies = $_POST['r21c'];
$Ease_of_Administrative_procedures = $_POST['r22c'];
$Overall_Facilities = $_POST['r23c'];
$Rate_CDAC = $_POST['r24c'];
$Feedback = $_POST['feedback'];

// if(!empty($Type_of_work_assigned) && !empty($Fairness_of_workload) && !empty($Salary) && !empty($Work_Environment) && !empty($Career_Progression_path) && !empty($HigherEducation_Policy) && !empty($Subject_Training) && !empty($Behavioural_Training) && !empty($Colleagues) && !empty($Supervision) && !empty($Decision_making) && !empty($Employee_Recognition) && !empty($Work_life_balance) && !empty($Working_Hours_Timings)  && !empty($Fun)  && !empty($Communication)  && !empty($Performance_evaluation)  && !empty($Employee_friendly)  && !empty($Concern_for_quality)  && !empty($Administrative_policies)  && !empty($Ease_of_Administrative_procedures)  && !empty($Overall_Facilities)  && !empty($Rate_CDAC)  && !empty($Feedback)) {

    // Insert the form data into the database
    $query = "INSERT INTO RatingData (Type_of_work_assigned, Fairness_of_workload, Salary, Work_Environment, Career_Progression_path, HigherEducation_Policy, Subject_Training, Behavioural_Training, Colleagues, Supervision, Decision_making, Employee_Recognition, Work_life_balance, Working_Hours_Timings, Fun, Communication, Performance_evaluation, Employee_friendly, Concern_for_quality, Administrative_policies, Ease_of_Administrative_procedures, Overall_Facilities, Rate_CDAC, Feedback) VALUES ('$Type_of_work_assigned', '$Fairness_of_workload', '$Salary', '$Work_Environment', '$Career_Progression_path', '$HigherEducation_Policy', '$Subject_Training', '$Behavioural_Training', '$Colleagues', '$Supervision', '$Decision_making', '$Employee_Recognition', '$Work_life_balance', '$Working_Hours_Timings','$Fun', '$Communication', '$Performance_evaluation', '$Employee_friendly', '$Concern_for_quality', '$Administrative_policies', '$Ease_of_Administrative_procedures', '$Overall_Facilities', '$Rate_CDAC', '$Feedback')";

    $sql=mysqli_query($conn,$query);


    $message = "Thank You!! Data saved successfully.";
// }
// else {
//  $message = "All input Fields are Required!";
// }
    
}


mysqli_close($conn);
?>