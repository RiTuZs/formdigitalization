<?php
 include_once ("formphp.php"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exit Form Part-02</title>
  <link rel="stylesheet" href="css/form.css">
<!-- <script src="JS/exitform.js"></script> -->
        <!-- For Error -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
</head> 
<body>
  <div class="form">
    <form action="form.php" method="post">
    <img src="pictures/copy.png">
      <h2>Please rate the following aspects of C-DAC: </h2>

    <table>
      <thead>
        <tr>
          <th><b>(On rating scale, 5 measures most and 1 is least)</b></th>
          <th><b>1</b></th>
          <th><b>2</b></th>
          <th><b>3</b></th>
          <th><b>4</b></th>
          <th><b>5</b></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Type of work assigned/performed</td>
          <td><input type="radio" name="r2c" value="1"></td>
          <td><input type="radio" name="r2c" value="2"></td>
          <td><input type="radio" name="r2c" value="3"></td>
          <td><input type="radio" name="r2c" value="4"></td>
          <td><input type="radio" name="r2c" value="5"></td>
        </tr>
        <tr>
          <td>Fairness/Quantum of workload</td>
          <td><input type="radio" name="r3c" value="1"></td>
          <td><input type="radio" name="r3c" value="2"></td>
          <td><input type="radio" name="r3c" value="3"></td>
          <td><input type="radio" name="r3c" value="4"></td>
          <td><input type="radio" name="r3c" value="5"></td>
        </tr>
          <td>Salary</td>
          <td><input type="radio" name="r4c" value="1"></td>
          <td><input type="radio" name="r4c" value="2"></td>
          <td><input type="radio" name="r4c" value="3"></td>
          <td><input type="radio" name="r4c" value="4"></td>
          <td><input type="radio" name="r4c" value="5"></td>
        </tr>
        <tr>
          <td>Work Environment (Station, equipment's, hygiene, other facilities etc.) </td>
          <td><input type="radio" name="r5c" value="1"></td>
          <td><input type="radio" name="r5c" value="2"></td>
          <td><input type="radio" name="r5c" value="3"></td>
          <td><input type="radio" name="r5c" value="4"></td>
          <td><input type="radio" name="r5c" value="5"></td>
        </tr>
        <tr>
          <td>Career Progression path/Opportunities</td>
          <td><input type="radio" name="r6c" value="1"></td>
          <td><input type="radio" name="r6c" value="2"></td>
          <td><input type="radio" name="r6c" value="3"></td>
          <td><input type="radio" name="r6c" value="4"></td>
          <td><input type="radio" name="r6c" value="5"></td>
        </tr>
        <tr>
          <td>Higher Education Policy</td>
          <td><input type="radio" name="r7c" value="1"></td>
          <td><input type="radio" name="r7c" value="2"></td>
          <td><input type="radio" name="r7c" value="3"></td>
          <td><input type="radio" name="r7c" value="4"></td>
          <td><input type="radio" name="r7c" value="5"></td>
        </tr>      <tr>
          <td>Subject Training</td>
          <td><input type="radio" name="r8c" value="1"></td>
          <td><input type="radio" name="r8c" value="2"></td>
          <td><input type="radio" name="r8c" value="3"></td>
          <td><input type="radio" name="r8c" value="4"></td>
          <td><input type="radio" name="r8c" value="5"></td>
        </tr>
        <tr>
          <td>Behavioural Training</td>
          <td><input type="radio" name="r9c" value="1"></td>
          <td><input type="radio" name="r9c" value="2"></td>
          <td><input type="radio" name="r9c" value="3"></td>
          <td><input type="radio" name="r9c" value="4"></td>
          <td><input type="radio" name="r9c" value="5"></td>
        </tr>
        <tr>
          <td>Colleagues</td>
          <td><input type="radio" name="r10c" value="1"></td>
          <td><input type="radio" name="r10c" value="2"></td>
          <td><input type="radio" name="r10c" value="3"></td>
          <td><input type="radio" name="r10c" value="4"></td>
          <td><input type="radio" name="r10c" value="5"></td>
        </tr>
        <tr>
          <td>Supervision</td>
          <td><input type="radio" name="r11c" value="1"></td>
          <td><input type="radio" name="r11c" value="2"></td>
          <td><input type="radio" name="r11c" value="3"></td>
          <td><input type="radio" name="r11c" value="4"></td>
          <td><input type="radio" name="r11c" value="5"></td>
        </tr>
        <tr>
          <td>Decision making </td>
          <td><input type="radio" name="r12c" value="1"></td>
          <td><input type="radio" name="r12c" value="2"></td>
          <td><input type="radio" name="r12c" value="3"></td>
          <td><input type="radio" name="r12c" value="4"></td>
          <td><input type="radio" name="r12c" value="5"></td>
        </tr>
        <tr>
          <td>Employee Recognition</td>
          <td><input type="radio" name="r13c" value="1"></td>
          <td><input type="radio" name="r13c" value="2"></td>
          <td><input type="radio" name="r13c" value="3"></td>
          <td><input type="radio" name="r13c" value="4"></td>
          <td><input type="radio" name="r13c" value="5"></td>
        </tr>
        <tr>
          <td>Work-life balance</td>
          <td><input type="radio" name="r14c" value="1"></td>
          <td><input type="radio" name="r14c" value="2"></td>
          <td><input type="radio" name="r14c" value="3"></td>
          <td><input type="radio" name="r14c" value="4"></td>
          <td><input type="radio" name="r14c" value="5"></td>
        </tr>
        <tr>
          <td>Working Hours/Timings</td>
          <td><input type="radio" name="r15c" value="1"></td>
          <td><input type="radio" name="r15c" value="2"></td>
          <td><input type="radio" name="r15c" value="3"></td>
          <td><input type="radio" name="r15c" value="4"></td>
          <td><input type="radio" name="r15c" value="5"></td>
        </tr>
        <tr>
          <td>Fun at work place</td>
          <td><input type="radio" name="r16c" value="1"></td>
          <td><input type="radio" name="r16c" value="2"></td>
          <td><input type="radio" name="r16c" value="3"></td>
          <td><input type="radio" name="r16c" value="4"></td>
          <td><input type="radio" name="r16c" value="5"></td>
        </tr>
        <tr>
          <td>Communication between management and employees</td>
          <td><input type="radio" name="r17c" value="1"></td>
          <td><input type="radio" name="r17c" value="2"></td>
          <td><input type="radio" name="r17c" value="3"></td>
          <td><input type="radio" name="r17c" value="4"></td>
          <td><input type="radio" name="r17c" value="5"></td>
        </tr>
        <tr>
          <td>Performance evaluation</td>
          <td><input type="radio" name="r18c" value="1"></td>
          <td><input type="radio" name="r18c" value="2"></td>
          <td><input type="radio" name="r18c" value="3"></td>
          <td><input type="radio" name="r18c" value="4"></td>
          <td><input type="radio" name="r18c" value="5"></td>
        </tr>      <tr>
          <td>Employee friendly </td>
          <td><input type="radio" name="r19c" value="1"></td>
          <td><input type="radio" name="r19c" value="2"></td>
          <td><input type="radio" name="r19c" value="3"></td>
          <td><input type="radio" name="r19c" value="4"></td>
          <td><input type="radio" name="r19c" value="5"></td>
        </tr>
        <tr>
          <td>Concern for quality </td>
          <td><input type="radio" name="r20c" value="1"></td>
          <td><input type="radio" name="r20c" value="2"></td>
          <td><input type="radio" name="r20c" value="3"></td>
          <td><input type="radio" name="r20c" value="4"></td>
          <td><input type="radio" name="r20c" value="5"></td>
        </tr>
        <tr>
          <td>HR-Administrative policies</td>
          <td><input type="radio" name="r21c" value="1"></td>
          <td><input type="radio" name="r21c" value="2"></td>
          <td><input type="radio" name="r21c" value="3"></td>
          <td><input type="radio" name="r21c" value="4"></td>
          <td><input type="radio" name="r21c" value="5"></td>
        </tr>
        <tr>
          <td>Ease of Administrative procedures</td>
          <td><input type="radio" name="r22c" value="1"></td>
          <td><input type="radio" name="r22c" value="2"></td>
          <td><input type="radio" name="r22c" value="3"></td>
          <td><input type="radio" name="r22c" value="4"></td>
          <td><input type="radio" name="r22c" value="5"></td>
        </tr>
        <tr>
          <td>Overall Facilities (Canteen, Transport etc.,)</td>
          <td><input type="radio" name="r23c" value="1"></td>
          <td><input type="radio" name="r23c" value="2"></td>
          <td><input type="radio" name="r23c" value="3"></td>
          <td><input type="radio" name="r23c" value="4"></td>
          <td><input type="radio" name="r23c" value="5"></td>
        </tr>
        <tr>
          <td>Rate C-DAC as a great place to work?</td>
          <td><input type="radio" name="r24c" value="1"></td>
          <td><input type="radio" name="r24c" value="2"></td>
          <td><input type="radio" name="r24c" value="3"></td>
          <td><input type="radio" name="r24c" value="4"></td>
          <td><input type="radio" name="r24c" value="5"></td>
        </tr>      
      </tbody>
    </table>
    <div class="feedback">
      <label class="feedback">Any other comments/feedback:</label>
      <input type="text" id="comment09" name="feedback" value="" placeholder="Type Here"><br>  
    </div>
    <input type="submit" name="submit" value="Submit" class="button">
  </form>    
  </div>
</body>
</html>

  