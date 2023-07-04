<?php
 include_once ("joiningphp.php"); 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Onboarding_Form</title>
          <!-- For Error -->
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <link rel="stylesheet" href="css/joining.css">
  <!-- <link rel="stylesheet" href="css/form.css"> -->
  <body>
    <div>
        <img src="pictures/copy.png"> 
      <h1><u>Onboarding Questionnaire</u></h1>
      <?php if($message != "") {?>

<div class="alert alert-danger alert-dismissible" role="alert">
    <strong>
        <?php
            echo $message;
        ?>
    </strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php } ?>
      <form action="joining.php" method="post">
      <p>
          1. What is your primary reason for joining C-DAC ? (You may tick more
          than one reason)
        </p>
        <!-- <form> -->
          <!-- <label>Job Preferences:</label><br /> -->
          <input
            type="checkbox" id="job_profile" name="qn1[]" value="attractive_Jobprofile" />
          <label for="job_profile">a. Attractive Job profile</label><br />
          <input
            type="checkbox"
            id="job_location"
            name="qn1[]"
            value="convenient_location"
          />
          <label for="job_location">b. Convenient Job location</label><br />
    
          <input
            type="checkbox"
            id="salary-structure"
            name="qn1[]"
            value="attractive_salary"
          />
          <label for="salary-structure">c. Attractive Salary Structure</label><br />
    
          <input
            type="checkbox"
            id="org-credibility"
            name="qn1[]"
            value="credibility_fame"
          />
          <label for="org-credibility">d. Organization's credibility/fame</label> <br>

        <label for="Better area of work (specify)">e. Better area of work (specify)</label>
        <input
        type="text"
        id="Better area of work (specify)" 
        name="betterarea"
        placeholder="Type Here"/> 

        <label for="Any other reasons.(Please specify)">f. Any other reasons: (Please specify)</label>
        <input
        type="text"
        id="Any other reasons.(Please specify)" 
        name="otherreason"
        placeholder="Type Here"/>

        <p>2.	Have you been previously employed?</p>
        <!-- <form> -->
          <input type="radio" id="yes" name="qn2" value="yes"/>
          <label for="yes">yes</label>
            <input type="radio" id="no" name="qn2" value="no"/>
          <label for="no">no</label> 
        <!-- </form> -->
  
      <p>3.	If your answer to the previous question was Yes, what triggered your decision to start looking for new jobs to move on ? (You may tick more than one reason)</p>
      <!-- <form> -->
          <label>
            <input type="checkbox" name="qn3[]" value="friends_colleague_job_move">
            a. Your friends/Colleague's job move
          </label>
          <br>
          <label>
            <input type="checkbox" name="qn3[]" value="lack_of_appreciation_of_intellectual_inputs">
            b. Lack of appreciation of intellectual inputs
          </label>
          <br>
          <label>
            <input type="checkbox" name="qn3[]" value="monotonous_profile">
            c. Monotonous profile
          </label>
          <br>
          <label>
            <input type="checkbox" name="qn3[]" value="lack_of_recognition_of_good_performance">
            d. Lack of recognition of good performance
          </label>
          <br>
          <label>
            <input type="checkbox" name="qn3[]" value="certain_jobs_taken_away">
            e. Certain jobs, in which you were interested, were taken away from you
          </label>
          <br>
          <label>
            <input type="checkbox" name="qn3[]" value="lack_of_support_at_critical_times">
            f. Lack of support at critical times
          </label>
        <!-- </form> -->
          <p>4.	What amount of training do you think you will require to do your job effectively?</p>
          <input
          type="text"
          id="question-4" 
          name="qn4"
          value=""
          placeholder="Type Here"
        />
          <p>5.	How much support do you expect to receive from your superiors and peers to do your job efficiently?</p>  
          <input
          type="text"
          id="question-5" 
          name="qn5"
          value=""
          placeholder="Type Here"
        />
          <p>6.	Have you received helpful information regarding our products/services, organization history at the time of induction ?</p>
          <input
          type="text"
          id="question-6" 
          name="qn6"
          value=""
          placeholder="Type Here"
        />
          <p>7.	Do you expect to receive sufficient and timely feedback about your performance/job from your superiors?</p>
          <input
          type="text"
          id="question-7" 
          name="qn7"
          value=""
          placeholder="Type Here"
        />
          <p>8.	What do you expect to gain from C-DAC's performance review process ?</p>
          <input
          type="text"
          id="question-8" 
          name="qn8"
          value=""
          placeholder="Type Here"
        />
        <p>9. Do you believe you have been given a proper overview of the Salary, benefits and overall payment structure ?</p>
        <input
        type="text"
        id="question-9" 
        name="qn9"
        value=""
        placeholder="Type Here"
      />
        <p>10.	What are your expectations from the kind of supervision that you shall receive here ?</p>
        <!-- <form> -->
          <input type="checkbox" id="impartial" name="qn10[]" value="impartial_Leadership">
          <label for="impartial">a. Impartial leadership</label><br>
      
          <input type="checkbox" id="area" name="qn10[]" value="Knowledge_in_area_of_work">
          <label for="area">b. Knowledge in the area of work</label><br>
      
          <input type="checkbox" id="support" name="qn10[]" value="guidance_support">
          <label for="support">c. Guidance/Support on the job</label><br>
      
          <input type="checkbox" id="compassionate" name="qn10[]" value="Empathetic_compassionate">
          <label for="compassionate">d. Empathetic and compassionate</label><br>
      
          <input type="checkbox" id="less" name="qn10[]" value="lessControlling_supervision">
          <label for="less">e. Less controlling and supervision</label><br>
        <!-- </form> -->
  
        <p>11.	What do you feel shall be the most satisfying aspects about working at C-DAC ?</p>
        <input
        type="text"
        id="question-11" 
        name="qn11"
        value=""
        placeholder="Type Here"/>

        <p>12.	What additional facilities will you appreciate in C-DAC ?</p>
        <input
        type="text"
        id="question-12" 
        name="qn12"
        value=""
        placeholder="Type Here"/>

        <p>13.	What values do you expect to find in C-DAC ?</p>
        <input
        type="text"
        id="question-13" 
        name="qn13"
        value=""
        placeholder="Type Here"
      />
        <p>14.	Do you believe you have been given an overview of your career path and progress in this organization ?</p>
        <input
        type="text"
        id="question-14" 
        name="qn14"
        value=""
        placeholder="Type Here"
      />
        <p>15.	Where do you see yourself 5 years from now ?</p>
        <input
        type="text"
        id="question-15" 
        name="qn15"
        value=""
        placeholder="Type Here"/>
        <p>16.	 What value addition/contribution do you think you can give C-DAC after your employment here ?</p>
        <input
        type="text"
        id="question-16" 
        name="qn16"
        value=""
        placeholder="Type Here"/>
      <p>17.	Would you recommend working in C-DAC to your friends ?</p>
      <!-- <form action=""> -->
        <input type="radio" id="myradio" name="recommend" value="yes">
        <label for="myradio">a. Yes</label>
        <br>
        <input type="radio" id="myradio2" name="recommend" value="no">
        <label for="myradio2">b. No</label>
        <br>
        <input type="radio" id="myradio3" name="recommend" value="maybe">
        <label for="myradio3">c. May Be</label>
      <!-- </form> --> <br>
        <label for="Please specify">Please specify</label>
        <input
          type="text"
          id="Please specify" 
          name="specify1"
          value="" placeholder="Type Here"/>

        <p>18.	Notes of Head HR :</p>
        <textarea name="HRnote" id="question-18" type="text" placeholder=" NOTES:  " rows="10" cols="97"></textarea>
      <!-- </form> -->
  <br><br>
  <h2><u>Interview taken by -</u></h2>
  <!-- <form class="Interview"> -->
    <label>Name:</label>
    <input
    type="text"
    id="intvname" 
    name="intvname"
    value=""
  />
    <label>Signature:</label>
    <input
    type="text"
    id="intvsign" 
    name="intvsign"
    value=""
  />
  <label>Date:</label>
  <input
  type="date" id="intvdate" name="intvdate" value=""/>
  
  <input type="submit" value="Submit" class="button" name="submit">
      </form>
    </div>
  </body>
</html>
