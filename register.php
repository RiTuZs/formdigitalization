<?php
 include ("signup.php"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="register.css">
    <script src="https://kit.fontawesome.com/c4d89a7412.js" crossorigin="anonymous"></script>

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
</head>
<body>
    <div class="form">
        <form action="" method="post" enctype="multipart/form-data">
            <img src="pictures/copy.png">
                <h2>Signup Form</h2>
            <!-- <div class="header">
                <img src="/pictures/copy.png">
                <h2>Signup Form</h2>
            </div> -->
            <div class="error-text">Error</div>
            <div class="grid-details">
                <!-- <div id="d" style="position:center; width:50px; height:50px"> -->
                <div class="input">
                    <label for="employee-name">Employee's Name: *</label>
                    <input type="text" id="employee-name" name="EmployeeName" placeholder=" Your Name" required/>
                </div>

                <!-- <div class="input">
                    <label>First Name</label>
                    <input type="text" name="fname" placeholder="First Name" required pattern="[a-zA-Z'-'\s]">
                </div>
                <div class="input">
                    <label>Last Name</label>
                    <input type="text" name="lname" placeholder="Last Name" required pattern="[a-zA-Z'-'\s]">
                </div> -->

                <div class="input">
                    <label for="employee-id">Employee ID: </label>
                    <input type="text" id="employee-id" name="EmployeeId" placeholder=" Your ID" />
                </div>

                <div class="input">
                    <label for="email">Email ID (Personal): *</label>
                    <input type="email" id="email" name="email" placeholder="abcd@gmail.com" required>
                </div>
            
                <div class="input">
                    <label for="phone">Phone Number: *</label>
                    <input type="phone" name="phone" placeholder="Phone Number" required pattern="[0-9]{11}" oninvalid="this.setCustomValidity('Enter 11 Digits Number')" oninput="this.setCustomValidity('')" >
                </div>  
    
                <div class="input">               
                    <label for="department-group">Department/Group: *</label>
                    <input type="text" id="department-group" name="department" placeholder=" Department" required/>
                </div>
            
                <div class="input">        
                    <label for="designation">Designation: *</label>
                    <input type="text" id="designation" name="designation" placeholder="Designation" required/><br />
                </div>

                <div class="input">   
                    <label for="work-period-start">Work Period - Start From: *</label>
                    <input type="date" id="work-period-start" name="WorkPeriodStart" required/>
                </div>

                <div class="dropdown">
                    <label for="mode-of-employment">Mode of Employment: *</label>
                    <select id="mode-of-employment" name="modeOfEmployment" required>
                        <option value="select">---Select the mode-of-employment---</option>
                        <option value="full-time">R</option>
                        <option value="part-time">CC</option>
                        <option value="contractor">GBC</option>
                        <option value="intern">COCP</option>
                    </select>
                </div>
                <br>
            <!-- </div> -->

                <!-- <input type="submit" value="Submit" /> -->
                
            <!-- <div class="grid-details"> -->
                <div class="input" >
                    <label for="password">Password: *</label>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="input">
                    <label for="cpassword">Confirm Password: *</label>
                    <input type="password" name="cpassword" placeholder="Confirm Password" required>
                </div>    
            </div>
            
            <!-- <div class="profile-img">
                <div class="file-upload">
                    <input type="file" id="image-preview" name="image" class="file-input" oninvalid="this.setCustomValidity('Select an Profile image')" oninput="this.setCustomValidity('')">
                    <i class="fas fa-user-edit"></i>
                </div>
            </div> -->
            
            <div class="submit">
                <input type="submit" name="submit" value="Signup Now" class="button">
            </div>    

            <div class="link">Already signed up? <a href="index.php"> Login Now </a></div>
        </form>
    </div>
    <script src="register.js"></script>
</body>
</html>