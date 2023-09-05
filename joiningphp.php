<?php

session_start();
include_once ('db.php');
$message = "";
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit'])){
// Get the form data

$chb1 = $_POST['qn1'];
$primaryjoiningReason =""; 
foreach($chb1 as $chk1)  
   {  
      $primaryjoiningReason .= $chk1." , ";  
   }
$betterarea = $_POST['betterarea'];
$otherreason = $_POST['otherreason'];

$previously_employed = $_POST['qn2'];

$chb2 = $_POST['qn3'];
$IfYtriggerMoveon="";  
foreach($chb2 as $chk2)  
   {  
      $IfYtriggerMoveon .= $chk2." , ";  
   }


$trainingRequire = $_POST['qn4'];
$SupportExpect = $_POST['qn5'];

$HelpfulInformationReceived = $_POST['qn6'];
$expect_timely_feedback = $_POST['qn7'];

$expectTogain = $_POST['qn8'];
$overviewOfSalary = $_POST['qn9'];

$chb3 = $_POST['qn10'];
$supervisionExpected="";  
foreach($chb3 as $chk3)  
   {  
      $supervisionExpected .= $chk3." , ";  
   }

$satisfyingAspect = $_POST['qn11'];

$AdditionalFacilities = $_POST['qn12'];
$ValuesExpected = $_POST['qn13'];

$overview_of_careerpath_and_progress = $_POST['qn14'];
$see_yourself_5years = $_POST['qn15'];

$contributionByYou_AfterEmployment= $_POST['qn16'];
$recommend = $_POST['recommend'];
$Specify = $_POST['specify1'];

$HRnote = $_POST['HRnote'];

$Interviewer = $_POST['intvname'];
$Signature = $_POST['intvsign'];
$Date = $_POST['intvdate'];

if(!empty($primaryjoiningReason) && !empty($previously_employed) && !empty($trainingRequire) && !empty($SupportExpect) && !empty($HelpfulInformationReceived) && !empty($expect_timely_feedback) && !empty($expectTogain) && !empty($overviewOfSalary) && !empty($supervisionExpected) && !empty($satisfyingAspect) && !empty($AdditionalFacilities) && !empty($ValuesExpected) && !empty($overview_of_careerpath_and_progress) && !empty($see_yourself_5years)  && !empty($contributionByYou_AfterEmployment)  && !empty($recommend)  && !empty($HRnote)) {

// Insert the form data into the database
$query = "INSERT INTO JoiningData (primaryjoiningReason, betterarea, otherreason, previously_employed, IfYtriggerMoveon, trainingRequire, SupportExpect, HelpfulInformationReceived, expect_timely_feedback, expectTogain, overviewOfSalary, supervisionExpected, satisfyingAspect, AdditionalFacilities, ValuesExpected, overview_of_careerpath_and_progress, see_yourself_5years, contributionByYou_AfterEmployment, recommend, Specify, HRnote, Interviewer, Signature, Date) VALUES ('$primaryjoiningReason', '$betterarea', '$otherreason', '$previously_employed', '$IfYtriggerMoveon', '$trainingRequire', '$SupportExpect', '$HelpfulInformationReceived', '$expect_timely_feedback', '$expectTogain','$overviewOfSalary', '$supervisionExpected', '$satisfyingAspect', '$AdditionalFacilities', '$ValuesExpected', '$overview_of_careerpath_and_progress', '$see_yourself_5years', '$contributionByYou_AfterEmployment', '$recommend', '$Specify' , '$HRnote' , '$Interviewer' , '$Signature' , '$Date')";

$sql=mysqli_query($conn,$query);

$message = "Thank You!! Data saved successfully."; 
header("Location: thankyou.php"); 
}
else {
$message = "All input Fields are Required!";
}


}
mysqli_close($conn);







    




?>