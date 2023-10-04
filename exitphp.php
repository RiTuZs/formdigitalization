<!-- This PHP code starts a new session or resumes an existing session, includes a 'db.php' file for database connection, and initializes a message variable. It then checks if the database connection is successful and processes form data when the 'savenext' button is pressed. It extracts data from the form, processes checkboxes, ratings, and comments, and inserts the collected data into a database table named 'ExitData'. If all required fields are filled, it inserts the data and sets a success message. If not, it sets an error message. Finally, it closes the database connection. -->

<?php

// Start a new session or resume the existing session
session_start();

// Include the 'db.php' file for database connection
include_once('db.php');

// Initialize the message variable
$message = "";

// Check if the database connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the 'savenext' button is pressed
if(isset($_POST['savenext'])){
// Get the form data
$workPeriodFrom = $_POST['workPeriodFrom'];
$workPeriodTo = $_POST['workPeriodTo'];

 // Get selected checkboxes and concatenate them into a string
$chb1 = $_POST['reason1'];
$primaryLeavingReason =""; 
foreach($chb1 as $chk1)  
   {  
      $primaryLeavingReason .= $chk1." , ";  
   }
$betterarea = $_POST['betterarea'];
$otherreason = $_POST['otherreason'];

// Get selected checkboxes and concatenate them into a string
$chb2 = $_POST['reason2'];
$triggerMoveon="";  
foreach($chb2 as $chk2)  
   {  
      $triggerMoveon .= $chk2." , ";  
   }
$specify = $_POST['specify'];

// Get ratings and comments for various questions
$trainingRating = $_POST['qn3'];
$trainingComments = $_POST['comment03'];

$supportRating = $_POST['qn4'];
$supportComments = $_POST['comment04'];

$feedbackRating = $_POST['qn5'];
$feedbackComments = $_POST['comment05'];

$satisfiedRating = $_POST['qn6'];
$satisfiedComments = $_POST['comment06'];

$facilitiesRating = $_POST['qn7'];
$facilitiesComments = $_POST['comment07'];

// Get selected checkboxes and concatenate them into a string
$chb3 = $_POST['area'];
$AreasofImprovement="";  
foreach($chb3 as $chk3)  
   {  
      $AreasofImprovement .= $chk3." , ";  
   }
$ImprovementComments = $_POST['comment08'];

// Get selected checkboxes and concatenate them into a string
$chb4= $_POST['offer'];
$NewOffer="";  
foreach($chb4 as $chk4)  
   {  
      $NewOffer .= $chk4." , ";  
   }
$NewOfferComments = $_POST['comment09'];

//Get selected checkboxes and concatenate them into a string
$chb5= $_POST['Lookfor'];
$LookforComing="";  
foreach($chb5 as $chk5)  
   {  
      $LookforComing .= $chk5." , ";  
   }
$LookforComingComments = $_POST['comment10'];

//Get selected checkboxes and concatenate them into a string
$chb6= $_POST['satisfyasp'];
$SatisfyingAspect="";  
foreach($chb6 as $chk6)  
   {  
      $SatisfyingAspect .= $chk6." , ";  
   }

//Get selected checkboxes and concatenate them into a string
$chb7= $_POST['facility'];
$AdditionalFacility="";  
foreach($chb7 as $chk7)  
   {  
      $AdditionalFacility .= $chk7." , ";  
   }

//Get selected checkboxes and concatenate them into a string
$chb8= $_POST['dissatisfyasp'];
$DissatisfyingAspect="";  
foreach($chb8 as $chk8)  
   {  
      $DissatisfyingAspect .= $chk8." , ";  
   }

$suggestionToImprove = $_POST['suggestion'];

//Get selected checkboxes and concatenate them into a string
$chb9= $_POST['valuesfound'];
$valuesfound="";  
foreach($chb9 as $chk9)  
   {  
      $valuesfound .= $chk9." , ";  
   }

//Get selected checkboxes and concatenate them into a string
$chb10= $_POST['success'];
$requireForSucceed="";  
foreach($chb10 as $chk10)  
   {  
      $requireForSucceed .= $chk10." , ";  
   }

// Get recommendation and comments
$recommend = $_POST['recommend'];
$recommendComments = $_POST['specify1'];

// Get HR notes
$HRnote = $_POST['HRnote'];

// Get interviewer information
$Interviewer = $_POST['intvname'];
$Signature = $_POST['intvsign'];
$Date = $_POST['intvdate'];

// Check if all required fields are filled
if(!empty($workPeriodFrom) && !empty($workPeriodTo) && !empty($triggerMoveon) && !empty($trainingRating) && !empty($supportRating) && !empty($feedbackRating) && !empty($satisfiedRating) && !empty($facilitiesRating) && !empty($AreasofImprovement) && !empty($NewOffer) && !empty($LookforComing) && !empty($SatisfyingAspect) && !empty($AdditionalFacility) && !empty($DissatisfyingAspect)  && !empty($suggestionToImprove)  && !empty($valuesfound)  && !empty($requireForSucceed)  && !empty($recommend)  && !empty($HRnote)) {

      // Insert the form data into the database
      $query = "INSERT INTO ExitData (workPeriodFrom, workPeriodTo,primaryLeavingReason, betterarea, otherreason, triggerMoveon, specify,  trainingRating, trainingComments, supportRating, supportComments, feedbackRating, feedbackComments, satisfiedRating, satisfiedComments, facilitiesRating, facilitiesComments, AreasofImprovement, ImprovementComments, NewOffer, NewOfferComments, LookforComing, LookforComingComments, SatisfyingAspect, AdditionalFacility, DissatisfyingAspect, suggestionToImprove, valuesfound, requireForSucceed, recommend, recommendComments, HRnote, Interviewer, Signature, Date) VALUES ('$workPeriodFrom' , '$workPeriodTo' , '$primaryLeavingReason' , '$betterarea' , '$otherreason' , '$triggerMoveon', '$specify', '$trainingRating' , '$trainingComments' , '$supportRating' , '$supportComments' , '$feedbackRating' , '$feedbackComments' , '$satisfiedRating' , '$satisfiedComments' , '$facilitiesRating' , '$facilitiesComments' , '$AreasofImprovement' , '$ImprovementComments' , '$NewOffer' , '$NewOfferComments' , '$LookforComing' , '$LookforComingComments' , '$SatisfyingAspect' , '$AdditionalFacility' , '$DissatisfyingAspect' , '$suggestionToImprove' , '$valuesfound', '$requireForSucceed' , '$recommend' , '$recommendComments' , '$HRnote' , '$Interviewer' , '$Signature' , '$Date')";

      $sql=mysqli_query($conn,$query); // Execute the SQL query
   
      // Set a success message and redirect to 'form.php'
      $message = "Data saved successfully.";
         header("Location: form.php"); 
}
else {
   // Set an error message if required fields are not filled
   $message = "All input Fields are Required!";
}


}

// Close the database connection
mysqli_close($conn);
?>