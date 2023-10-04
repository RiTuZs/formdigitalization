<!-- This PHP code processes the onboarding form submission, validates user input, and stores it in a database, providing error handling and redirection upon successful submission. -->


<?php

// Start a new or resume the existing session
session_start();
// Include an external PHP file named 'db.php' for database connection
include_once ('db.php');
// Initialize the message variable
$message = "";
// Check if the database connection failed
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if(isset($_POST['submit'])){
// Get the form data

// Question 1: Get selected checkboxes and concatenate them into a string
$chb1 = $_POST['qn1'];
$primaryjoiningReason =""; 
foreach($chb1 as $chk1)  
   {  
      $primaryjoiningReason .= $chk1." , ";  
   }

// Additional text inputs from Question 1
$betterarea = $_POST['betterarea'];
$otherreason = $_POST['otherreason'];

// Question 2
$previously_employed = $_POST['qn2'];

// Question 3: Get selected checkboxes and concatenate them into a string
$chb2 = $_POST['qn3'];
$IfYtriggerMoveon="";  
foreach($chb2 as $chk2)  
   {  
      $IfYtriggerMoveon .= $chk2." , ";  
   }

// Question 4
$trainingRequire = $_POST['qn4'];
// Question 5
$SupportExpect = $_POST['qn5'];
// Question 6
$HelpfulInformationReceived = $_POST['qn6'];
// Question 7
$expect_timely_feedback = $_POST['qn7'];
// Question 8
$expectTogain = $_POST['qn8'];
// Question 9
$overviewOfSalary = $_POST['qn9'];

// Question 10: Get selected checkboxes and concatenate them into a string
$chb3 = $_POST['qn10'];
$supervisionExpected="";  
foreach($chb3 as $chk3)  
   {  
      $supervisionExpected .= $chk3." , ";  
   }

// Question 11
$satisfyingAspect = $_POST['qn11'];
// Question 12
$AdditionalFacilities = $_POST['qn12'];
// Question 13
$ValuesExpected = $_POST['qn13'];
// Question 14
$overview_of_careerpath_and_progress = $_POST['qn14'];
// Question 15
$see_yourself_5years = $_POST['qn15'];
// Question 16
$contributionByYou_AfterEmployment= $_POST['qn16'];
// Recommendation and Specify from Question 17
$recommend = $_POST['recommend'];
$Specify = $_POST['specify1'];
// Question 18: Notes of Head HR
$HRnote = $_POST['HRnote'];

// Interviewer information
$Interviewer = $_POST['intvname'];
$Signature = $_POST['intvsign'];
$Date = $_POST['intvdate'];

// Check if all required fields are not empty
if(!empty($primaryjoiningReason) && !empty($previously_employed) && !empty($trainingRequire) && !empty($SupportExpect) && !empty($HelpfulInformationReceived) && !empty($expect_timely_feedback) && !empty($expectTogain) && !empty($overviewOfSalary) && !empty($supervisionExpected) && !empty($satisfyingAspect) && !empty($AdditionalFacilities) && !empty($ValuesExpected) && !empty($overview_of_careerpath_and_progress) && !empty($see_yourself_5years)  && !empty($contributionByYou_AfterEmployment)  && !empty($recommend)  && !empty($HRnote)) {

// Insert the form data into the database
$query = "INSERT INTO JoiningData (primaryjoiningReason, betterarea, otherreason, previously_employed, IfYtriggerMoveon, trainingRequire, SupportExpect, HelpfulInformationReceived, expect_timely_feedback, expectTogain, overviewOfSalary, supervisionExpected, satisfyingAspect, AdditionalFacilities, ValuesExpected, overview_of_careerpath_and_progress, see_yourself_5years, contributionByYou_AfterEmployment, recommend, Specify, HRnote, Interviewer, Signature, Date) VALUES ('$primaryjoiningReason', '$betterarea', '$otherreason', '$previously_employed', '$IfYtriggerMoveon', '$trainingRequire', '$SupportExpect', '$HelpfulInformationReceived', '$expect_timely_feedback', '$expectTogain','$overviewOfSalary', '$supervisionExpected', '$satisfyingAspect', '$AdditionalFacilities', '$ValuesExpected', '$overview_of_careerpath_and_progress', '$see_yourself_5years', '$contributionByYou_AfterEmployment', '$recommend', '$Specify' , '$HRnote' , '$Interviewer' , '$Signature' , '$Date')";

$sql=mysqli_query($conn,$query); // Execute the SQL query

// Set a success message and redirect to 'thankyou.php'
$message = "Thank You!! Data saved successfully."; 
header("Location: thankyou.php"); 
}
else {
   // Set an error message if any required fields are empty
   $message = "All input Fields are Required!";
}


}
// Close the database connection
mysqli_close($conn);

?>