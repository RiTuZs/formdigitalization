<!-- This PHP code handles form submissions, saves user ratings and feedback to a database, and redirects users to a thank-you page upon successful submission. -->


<?php

// Start a new session or resume the existing session
session_start();

// Include the 'db.php' file to establish a database connection
include_once('db.php');

// Initialize an empty message variable to store messages or errors
$message = "";

// Check if the database connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the 'submit' button of the form was clicked
if(isset($_POST['submit'])){

// Get the form data for each rating aspect
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

// Check if all input fields are not empty
if(!empty($Type_of_work_assigned) && !empty($Fairness_of_workload) && !empty($Salary) && !empty($Work_Environment) && !empty($Career_Progression_path) && !empty($HigherEducation_Policy) && !empty($Subject_Training) && !empty($Behavioural_Training) && !empty($Colleagues) && !empty($Supervision) && !empty($Decision_making) && !empty($Employee_Recognition) && !empty($Work_life_balance) && !empty($Working_Hours_Timings)  && !empty($Fun)  && !empty($Communication)  && !empty($Performance_evaluation)  && !empty($Employee_friendly)  && !empty($Concern_for_quality)  && !empty($Administrative_policies)  && !empty($Ease_of_Administrative_procedures)  && !empty($Overall_Facilities)  && !empty($Rate_CDAC)  && !empty($Feedback)) {

    // Insert the form data into the database
    $query = "INSERT INTO RatingData (Type_of_work_assigned, Fairness_of_workload, Salary, Work_Environment, Career_Progression_path, HigherEducation_Policy, Subject_Training, Behavioural_Training, Colleagues, Supervision, Decision_making, Employee_Recognition, Work_life_balance, Working_Hours_Timings, Fun, Communication, Performance_evaluation, Employee_friendly, Concern_for_quality, Administrative_policies, Ease_of_Administrative_procedures, Overall_Facilities, Rate_CDAC, Feedback) VALUES ('$Type_of_work_assigned', '$Fairness_of_workload', '$Salary', '$Work_Environment', '$Career_Progression_path', '$HigherEducation_Policy', '$Subject_Training', '$Behavioural_Training', '$Colleagues', '$Supervision', '$Decision_making', '$Employee_Recognition', '$Work_life_balance', '$Working_Hours_Timings','$Fun', '$Communication', '$Performance_evaluation', '$Employee_friendly', '$Concern_for_quality', '$Administrative_policies', '$Ease_of_Administrative_procedures', '$Overall_Facilities', '$Rate_CDAC', '$Feedback')";

    // Execute the SQL query
    $sql=mysqli_query($conn,$query);

    // Set a success message
    $message = "Thank You!! Data saved successfully.";
    
    // Redirect to a 'thankyou.php' page after successful submission
    header("Location: thankyou.php"); 
}
else {
    // Set an error message if any input fields are empty
    $message = "All input Fields are Required!";
}
    
}


// Close the database connection
mysqli_close($conn);
?>
