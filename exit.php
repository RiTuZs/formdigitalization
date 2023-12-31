<!-- This PHP code snippet includes an external PHP file named 'exitphp.php' and presents an HTML form for an exit interview questionnaire with various questions and rating scales. It also handles error messages and displays them using Bootstrap alerts. Upon form submission, it sends the data to the 'exit.php' script for processing. -->


<?php
// Include an external PHP file named 'exitphp.php' for additional functionality
 include_once ("exitphp.php"); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags for character set, compatibility, and viewport -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Page title -->
    <title>Exit Form Part-01</title>

            <!-- For Error -->
            <!-- Include Bootstrap CSS and JavaScript for styling and functionality -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<!-- Include custom CSS from 'exit.css' for styling -->
<link rel="stylesheet" href="css/exit.css">

<body>
    <div>
        <!-- Display an image and the title of the exit interview -->
        <img src="pictures/copy.png"> 
        <h1><u>Exit Interview Questionnaire</u></h1>
        <?php if($message != "") {?>
            <!-- Display an alert message if 'message' variable is not empty -->
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
        
<!-- Create a form for the exit interview -->
        <form action="exit.php" method="post">
        <div class="class01">
            <!-- Input fields for 'Work Period From' and 'Work Period To' -->
            <label for="workPeriodFrom"><b>Work Period From:</b></label>
            <input type="date" id="workPeriodFrom" name="workPeriodFrom">

            <label for="workPeriodTo"><b>Work Period To: </b></label>
            <input type="date" id="workPeriodTo" name="workPeriodTo"><br>
        </div>
            <br>
            <!-- Question 1: -->
            <p name="q1">1. What is your primary reason for leaving? (You may tick more than one also)
            </p>
                <input type="checkbox" id="location" name="reason1[]" value="Better_location">
                <label for="location">a. Choosing a better location</label><br>        
                <input type="checkbox" id="orgBrand" name="reason1[]" value="Better_Organization">
                <label for="orgBrand">b. Moving to a better organisation/brand</label><br>

                <input type="checkbox" id="boss" name="reason1[]" value="Leaving_boss">
                <label for="boss">c. Leaving the boss and not the company</label><br>

                <input type="checkbox" id="salary" name="reason1[]" value="Better_salary">
                <label for="salary">d. Better salary</label><br>

                <input type="checkbox" id="profile" name="reason1[]" value="Better_profile">
                <label for="profile">e. Better profile</label><br>

                <label for="workArea">f. Choosing the better area of work (Please specify)</label>
                <input type="text" id="workArea" name="betterarea" value="" placeholder="Type Here">

                <label for="Any other reasons.(Please specify)">Any other reasons: (Please specify)</label>
                <input
                type="text"
                id="other" 
                name="otherreason"
                placeholder="Type Here"/>
                
                <!-- Question 2 -->
                <p name="q2">2. What triggered your decision to start looking for options to move on? (You may tick more than one
                    also)
                </p>
                        <input type="checkbox" id="friends" name="reason2[]" value="friendsMove">
                        <label for="friends">a. Your friends/colleague job move</label><br>

                        <input type="checkbox" id="interestedJobs" name="reason2[]" value="interestedJobs">
                        <label for="interestedJobs">b. Certain jobs, in which you were interested, was taken away from
                            you</label><br>

                        <input type="checkbox" id="lackAppreciation" name="reason2[]" value="lackAppreciation">
                        <label for="lackAppreciation">c. Lack of appreciation / credit / recognition for specific work done by
                            you</label><br>

                        <input type="checkbox" id="lackSupport" name="reason2[]" value="lackSupport">
                        <label for="lackSupport">d. Lack of support at critical times</label><br>

                        <input type="checkbox" id="lackIntellectual" name="reason2[]" value="lackAppreciationofIntellectual">
                        <label for="lackIntellectual">e. Lack of appreciation of intellectual inputs</label><br>

                        <input type="checkbox" id="monotonousProfile" name="reason2[]" value="MonotonousProfile">
                        <label for="monotonousProfile">f. Monotonous profile</label><br>

                        <label for="other">Please specify:</label>
                        <input type="text" id="otherSpec" name="specify" placeholder="Type Here">
                        
                <!-- Question 3 -->
                <p name="q3">3. Have you received training to do your job effectively? On rating scale, 5 measures most and 1 is least.</p>
                            <legend>Please rate:</legend>
                            <input type="radio" id="star1" name="qn3" value="1" />
                            <label for="star1" title="1 star"> 1</label>
                            <input type="radio" id="star2" name="qn3" value="2" />
                            <label for="star2" title="2 stars">2</label>
                            <input type="radio" id="star3" name="qn3" value="3" /><label for="star3" title="3 stars"> 3</label>
                            <input type="radio" id="star4" name="qn3" value="4" /><label for="star4" title="4 stars">4</label>
                            <input type="radio" id="star5" name="qn3" value="5" /><label for="star5" title="5 stars">5</label>
                        <br>
                        <label>Comments:</label>
                        <input type="text" id="comment01" name="comment03" placeholder="Type Here">
                        
                <!-- Question 4 -->
                <p name="q4">4. Have you received adequate support to do your job? On rating scale, 5 measures most and 1 is least.</p>
                            <legend>Please rate:</legend>
                            <input type="radio" id="star01" name="qn4" value="1" /><label for="star01"
                                title="1 star">1 </label>
                            <input type="radio" id="star02" name="qn4" value="2" /><label for="star02"
                                title="2 stars">2 </label>
                            <input type="radio" id="star03" name="qn4" value="3" /><label for="star03"
                                title="3 stars">3 </label>
                            <input type="radio" id="star04" name="qn4" value="4" /><label for="star04"
                                title="4 stars">4 </label>
                            <input type="radio" id="star05" name="qn4" value="5" /><label for="star05"
                                title="5 stars">5 </label>
                        <br>
                        <label>Comments:</label>
                        <input type="text" id="comment02" name="comment04" placeholder="Type Here"><br>
                        
                <!-- Question 5 -->
                <p name="q5">5. Have you received sufficient and timely feedback about your performance/job from your Superiors? On rating scale, 5 measures most and 1 is least.</p>
                            <legend>Please rate:</legend>
                            <input type="radio" id="star001" name="qn5" value="1" /><label for="star001"
                                title="1 star">1 </label>
                            <input type="radio" id="star002" name="qn5" value="2" /><label for="star002"
                                title="2 stars">2 </label>
                            <input type="radio" id="star003" name="qn5" value="3" /><label for="star003"
                                title="3 stars">3 </label>
                            <input type="radio" id="star004" name="qn5" value="4" /><label for="star004"
                                title="4 stars">4 </label>
                            <input type="radio" id="star005" name="qn5" value="5" /><label for="star005"
                                title="5 stars">5 </label>
                        <br>
                        <label>Comments:</label>
                        <input type="text" id="comment03" name="comment05" placeholder="Type Here">
                        
                <!-- Question 6 -->
                <p name="q6">6. Are you satisfied with C-DAC performance review process? On rating scale, 5 measures most and 1 is least.</p>
                            <legend>Please rate:</legend>
                            <input type="radio" id="star0001" name="qn6" value="1" /><label for="star0001"
                                title="1 star">1 </label>
                            <input type="radio" id="star0002" name="qn6" value="2" /><label for="star0002"
                                title="2 stars">2 </label>
                            <input type="radio" id="star0003" name="qn6" value="3" /><label for="star0003"
                                title="3 stars">3 </label>
                            <input type="radio" id="star0004" name="qn6" value="4" /><label for="star0004"
                                title="4 stars">4 </label>
                            <input type="radio" id="star0005" name="qn6" value="5" /><label for="star0005"
                                title="5 stars">5 </label>
                        <br>
                        <label>Comments:</label>
                        <input type="text" id="comment04" name="comment06" placeholder="Type Here">
                        
                <!-- Question 7 -->
                <p name="q7">7. Are you happy with your pay, benifits and other facilities? On rating scale, 5 measures most and 1 is least. </p>
                            <legend>Please rate:</legend>
                            <input type="radio" id="star00001" name="qn7" value="1" /><label for="star00001"
                                title="1 star">1 </label>
                            <input type="radio" id="star00002" name="qn7" value="2" /><label for="star00002"
                                title="2 stars">2 </label>
                            <input type="radio" id="star00003" name="qn7" value="3" /><label for="star00003"
                                title="3 stars">3 </label>
                            <input type="radio" id="star00004" name="qn7" value="4" /><label for="star00004"
                                title="4 stars">4 </label>
                            <input type="radio" id="star00005" name="qn7" value="5" /><label for="star00005"
                                title="5 stars">5 </label>
                        <br>
                        <label>Comments:</label>
                        <input type="text" id="comment04" name="comment07" placeholder="Type Here">
                        
                <!-- Question 8 -->
                <p name="q8">8. What is the area(s) of improvement for your supervisor(s)?</p>
                        <label>
                            <input type="checkbox" name="area[]" value="impartial_leadership">
                            a. Impartial leadership
                        </label>
                        <br>
                        <label>
                            <input type="checkbox" name="area[]" value="knowledge_work">
                            b. Knowledge in the area of work
                        </label>
                        <br>
                        <label>
                            <input type="checkbox" name="area[]" value="guidance_support">
                            c. Guidance/support on the job
                        </label>
                        <br>
                        <label>
                            <input type="checkbox" name="area[]" value="supervision_control">
                            d. Supervision and control
                        </label><br>
                        <label>Comments:</label>
                        <input type="text" id="comment05" name="comment08" placeholder="Type Here">
                        
                <!-- Question 9 -->
                <p name="q9">9. What does your new company offer that C-DAC doesn't?</p>
                        <label>
                            <input type="checkbox" name="offer[]" value="advanced_technology">
                            a. Advanced technology
                        </label>
                        <br>
                        <label>
                            <input type="checkbox" name="offer[]" value="foreign_trips">
                            b. Foreign trips
                        </label>
                        <br>
                        <label>
                            <input type="checkbox" name="offer[]" value="WFH_Flexiblility">
                            c. Work from Home / flexible working hours
                        </label>
                        <br>
                        <label>
                            <input type="checkbox" name="offer[]" value="better_career_prospects">
                            d. Better career prospects
                        </label>
                        <br>
                        <label>
                            <input type="checkbox" name="offer[]" value="social_security_benefits">
                            e. Social Security benefits (medical, insurance, pension etc.)
                        </label><br>
                        <label>Comments:</label>
                        <input type="text" id="comment06" name="comment09" placeholder="Type Here">
                        
                <!-- Question 10 -->
                <p name="q10">10. What would you look for in C-DAC, if you consider coming back at a later stage?</p>
                        <label>
                            <input type="checkbox" name="Lookfor[]" value="better_salary">
                            a. Better salary
                        </label>
                        <br>
                        <label>
                            <input type="checkbox" name="Lookfor[]" value="technology_choice">
                            b. Opportunity to work on technology of your choice
                        </label>
                        <br>
                        <label>
                            <input type="checkbox" name="Lookfor[]" value="better_career_prospects">
                            c. Better career prospects
                        </label>
                        <br>
                        <label>
                            <input type="checkbox" name="Lookfor[]" value="better_leadership">
                            d. Better leadership
                        </label><br>
                        <label>Please Specify:</label>
                        <input type="text" id="comment07" name="comment10" placeholder="Type Here">

                <!-- Question 11 -->
                <p name="q11">11. What was the top three most satisfying aspects about C-DAC?</p>
                        <label>a.</label>
                        <input type="text" id="blank01" name="satisfyasp[]">
                        <label>b.</label>
                        <input type="text" id="blank02" name="satisfyasp[]">
                        <label>c.</label>
                        <input type="text" id="blank03" name="satisfyasp[]">

                <!-- Question 12 -->
                <p name="q12">12. What additional facilities you would have appreciated in C-DAC?</p>
                        <label>a.</label>
                        <input type="text" id="blank001" name="facility[]">
                        <label>b.</label>
                        <input type="text" id="blank002" name="facility[]">
                        <label>c.</label>
                        <input type="text" id="blank003" name="facility[]">

                <!-- Question 13 -->
                <p name="q13">13. What was the top three most dissatisfying aspects about C-DAC?</p>
                        <label>a.</label>
                        <input type="text" id="blank0001" name="dissatisfyasp[]">
                        <label>b.</label>
                        <input type="text" id="blank0002" name="dissatisfyasp[]">
                        <label>c.</label>
                        <input type="text" id="blank0003" name="dissatisfyasp[]">

                <!-- Question 14 -->
                <p name="q14">14. What would you suggest to improve in C-DAC?</p>
                    <input type="text" id="employee-name" name="suggestion" placeholder="Type Here"/>

                <!-- Question 15 -->
                <p name="q15">15. What are the values you found in C-DAC?</p>
                        <label>a.</label>
                        <input type="text" id="blank00001" name="valuesfound[]">
                        <label>b.</label>
                        <input type="text" id="blank00002" name="valuesfound[]">
                        <label>c.</label>
                        <input type="text" id="blank00003" name="valuesfound[]">

                <!-- Question 16 -->
                <p name="q16">16. Based on your experience, what do you think are required for an employee to succeed in C-DAC?
                    </p>
                        <label>a.</label>
                        <input type="text" id="blank000001" name="success[]">
                        <label>b.</label>
                        <input type="text" id="blank000002" name="success[]">
                        <label>c.</label>
                        <input type="text" id="blank000003" name="success[]">

                <!-- Question 17 -->
                <p name="q17">17. Would you recommend C-DAC to your friends?</p>
                        <label for="yes">
                            <input type="radio" id="yes" name="recommend" value="yes">
                            Yes
                        </label>
                        
                        <label for="no">
                            <input type="radio" id="no" name="recommend" value="no">
                            No
                        </label>
                        
                        <label for="maybe">
                            <input type="radio" id="maybe" name="recommend" value="maybe">
                            Maybe
                        </label> <br>
                        <label>Please Specify:</label>
                        <input type="text" id="comment08" name="specify1" placeholder="Type Here">
                <!-- Question 18 -->
                <p name="q18">18.	Notes of Head HR :</p>
                    <textarea name="HRnote" id="question-18" type="text" placeholder=" NOTES:  " rows="10" cols="97"></textarea>
                    <br><br>
                    
                    <!-- Interviewer information -->
                    <h2><u>Exit Interview taken by -</u></h2>
                    <label>Name:</label>
                    <input
                    type="text"
                    id="intvname" 
                    name="intvname"
                    value=""
                    placeholder="Name"
                  />
                    <label>Signature:</label>
                    <input
                    type="text"
                    id="intvsign" 
                    name="intvsign"
                    value=""
                    placeholder="Signature"
                  />
                  <label>Date:</label>
                  <input
                  type="date" id="intvdate" name="intvdate" value=""/>
                  
            <!-- Submit button to save the form -->
            <input type="submit" name="savenext" value="Save & Next" class="button" >
        </form>
                    
    </div>
</body>

</html>
