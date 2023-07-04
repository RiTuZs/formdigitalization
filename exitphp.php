<?php

session_start();
include_once ('db.php');
$message = "";
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['savenext'])){
// Get the form data
$workPeriodFrom = $_POST['workPeriodFrom'];
$workPeriodTo = $_POST['workPeriodTo'];


$chb1 = $_POST['reason1'];
$primaryLeavingReason =""; 
foreach($chb1 as $chk1)  
   {  
      $primaryLeavingReason .= $chk1." , ";  
   }
$betterarea = $_POST['betterarea'];
$otherreason = $_POST['otherreason'];

$chb2 = $_POST['reason2'];
$triggerMoveon="";  
foreach($chb2 as $chk2)  
   {  
      $triggerMoveon .= $chk2." , ";  
   }
$specify = $_POST['specify'];


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

$chb3 = $_POST['area'];
$AreasofImprovement="";  
foreach($chb3 as $chk3)  
   {  
      $AreasofImprovement .= $chk3." , ";  
   }
$ImprovementComments = $_POST['comment08'];

$chb4= $_POST['offer'];
$NewOffer="";  
foreach($chb4 as $chk4)  
   {  
      $NewOffer .= $chk4." , ";  
   }
$NewOfferComments = $_POST['comment09'];

$chb5= $_POST['Lookfor'];
$LookforComing="";  
foreach($chb5 as $chk5)  
   {  
      $LookforComing .= $chk5." , ";  
   }
$LookforComingComments = $_POST['comment10'];

$chb6= $_POST['satisfyasp'];
$SatisfyingAspect="";  
foreach($chb6 as $chk6)  
   {  
      $SatisfyingAspect .= $chk6." , ";  
   }

$chb7= $_POST['facility'];
$AdditionalFacility="";  
foreach($chb7 as $chk7)  
   {  
      $AdditionalFacility .= $chk7." , ";  
   }

$chb8= $_POST['dissatisfyasp'];
$DissatisfyingAspect="";  
foreach($chb8 as $chk8)  
   {  
      $DissatisfyingAspect .= $chk8." , ";  
   }

$suggestionToImprove = $_POST['suggestion'];

$chb9= $_POST['valuesfound'];
$valuesfound="";  
foreach($chb9 as $chk9)  
   {  
      $valuesfound .= $chk9." , ";  
   }

$chb10= $_POST['success'];
$requireForSucceed="";  
foreach($chb10 as $chk10)  
   {  
      $requireForSucceed .= $chk10." , ";  
   }

$recommend = $_POST['recommend'];
$recommendComments = $_POST['specify1'];

$HRnote = $_POST['HRnote'];

$Interviewer = $_POST['intvname'];
$Signature = $_POST['intvsign'];
$Date = $_POST['intvdate'];

if(!empty($workPeriodFrom) && !empty($workPeriodTo) && !empty($triggerMoveon) && !empty($trainingRating) && !empty($supportRating) && !empty($feedbackRating) && !empty($satisfiedRating) && !empty($facilitiesRating) && !empty($AreasofImprovement) && !empty($NewOffer) && !empty($LookforComing) && !empty($SatisfyingAspect) && !empty($AdditionalFacility) && !empty($DissatisfyingAspect)  && !empty($suggestionToImprove)  && !empty($valuesfound)  && !empty($requireForSucceed)  && !empty($recommend)  && !empty($HRnote)) {

      // Insert the form data into the database
      $query = "INSERT INTO ExitData (workPeriodFrom, workPeriodTo,primaryLeavingReason, betterarea, otherreason, triggerMoveon, specify,  trainingRating, trainingComments, supportRating, supportComments, feedbackRating, feedbackComments, satisfiedRating, satisfiedComments, facilitiesRating, facilitiesComments, AreasofImprovement, ImprovementComments, NewOffer, NewOfferComments, LookforComing, LookforComingComments, SatisfyingAspect, AdditionalFacility, DissatisfyingAspect, suggestionToImprove, valuesfound, requireForSucceed, recommend, recommendComments, HRnote, Interviewer, Signature, Date) VALUES ('$workPeriodFrom' , '$workPeriodTo' , '$primaryLeavingReason' , '$betterarea' , '$otherreason' , '$triggerMoveon', '$specify', '$trainingRating' , '$trainingComments' , '$supportRating' , '$supportComments' , '$feedbackRating' , '$feedbackComments' , '$satisfiedRating' , '$satisfiedComments' , '$facilitiesRating' , '$facilitiesComments' , '$AreasofImprovement' , '$ImprovementComments' , '$NewOffer' , '$NewOfferComments' , '$LookforComing' , '$LookforComingComments' , '$SatisfyingAspect' , '$AdditionalFacility' , '$DissatisfyingAspect' , '$suggestionToImprove' , '$valuesfound', '$requireForSucceed' , '$recommend' , '$recommendComments' , '$HRnote' , '$Interviewer' , '$Signature' , '$Date')";

      $sql=mysqli_query($conn,$query);
   
   
      $message = "Data saved successfully.";
         header("Location: form.php"); 
}
else {
   $message = "All input Fields are Required!";
}


}
mysqli_close($conn);
?>