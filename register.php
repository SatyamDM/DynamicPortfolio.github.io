<?php
session_start();

 include 'connect.php';

if (isset($_POST['submit'])){
    //Recognizing all the inputs and connecting them with the database
    $fullname= mysqli_real_escape_string($conn,$_POST['fullname']);
    $email=  mysqli_real_escape_string($conn,$_POST['email']);
    $phone= mysqli_real_escape_string($conn, $_POST['phone']);
    $year= mysqli_real_escape_string($conn, $_POST['year']);
    $branch= mysqli_real_escape_string($conn, $_POST['branch']);
    $domain= mysqli_real_escape_string($conn, $_POST['domain']);
    $password=  mysqli_real_escape_string($conn,$_POST['password']);
    $confirmpassword=  mysqli_real_escape_string($conn,$_POST['confirmpassword']);

    //Hashing the password to protect it from hackers
    $passw= password_hash($password, PASSWORD_BCRYPT);
    $cpassw= password_hash($confirmpassword, PASSWORD_BCRYPT);


    //Checking if the email exists in the database before or not by creating a query
    $emquery="select * from  registration where email='$email' ";
    $sqlquery= mysqli_query($conn,$emquery);
    //Checking the number of rows if the same email exists or not
    $emcount=mysqli_num_rows($sqlquery);

    if($emcount > 0){
        ?>
        <script>
          alert ("Email-ID already exists");
       </script>
       <?php 
       
    }
    else{
        if($password === $confirmpassword){

        //Inserting the values into the database
        $insertquery="INSERT INTO registration(fullname, email, phone, year , branch, domain, password , confirmpassword) VALUES ('$fullname','$email','$phone','$year','$branch','$domain','$passw','$cpassw')";

        $iquery=mysqli_query($conn,$insertquery);
        }
        else{
            ?>
            <script>
              alert ("Passwords do not match");
           </script>
           <?php 
        }
    }
    header("Location: login.php"); 
    exit();

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register to Spectrum,CET-B</title>
    <link rel="stylesheet" href="register.css">
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="left ">
            <section class="copy">
                <h1>REGISTER TO Spectrum,CET-B</h1>
                
                <h5>The Electronics Club of  CET-B,Don't miss the chance to join it.</h5>
                

            </section>

        </div>
        <div class="right">
            <form action="register.php" method="POST">
                <section class="copy">
                    <h2>Sign Up</h2>
                    <hr>
                    <div class="login-container ">
                        <p>Already a Member? <a href="login.php"><strong>Sign In</strong></a></p>
                    </div>
                </section>
                <div class="input-container name ">
                    <label for="fullname">Full Name</label>
                      <input type="text" id="fullname" name="fullname" placeholder="Enter your Full Name" required>
                </div>
               
                <div class="input-container email ">
                    <label for="email">E-Mail ID</label>
                      <input type="email" id="email" name="email" placeholder="Enter your E-Mail ID" required>
                </div>
                <div class="input-container phone ">
                    <label for="phone">Mobile Number</label>
                      <input type="phone" id="phone" name="phone" placeholder="Enter your Mobile Number" required>
                </div>
                <div class="input-container year ">
                    <label for="year">Year</label>
                     <select class="select" name="year">
                        <option disabled selected>Select Your Year</option>
                         <option value="first">First</option>
                         <option value="second">Second</option>
                         <option value="third">Third</option>
                         <option value="fourth">Fourth</option>
                     </select>
                </div>
                <div class="input-container branch ">
                    <label for="branch">Branch</label>
                     <select class="select" name="branch">
                        <option disabled selected>Select Your Branch</option>
                         <option value="barch">B.Arch</option>
                         <option value="bt">Biotechnology</option>
                         <option value="civil">Civil Engineering</option>
                         <option value="cse">Computer Science Engineering</option>
                         <option value="cmc">Computer Science and Application (MCA)</option>
                         <option value="ee">Electrical Engineering</option>
                         <option value="eie">Electronics and Instrumentation Engineering</option>
                         <option value="fat">Fashion and Apparel Technology </option>
                         <option value="it">Information Technology</option>
                         <option value="me">Mechanical Engineering</option>
                         <option value="te">Textile Engineering</option>
                         <option value="bplan">B.Planning</option>
                         <option value="mh">Mathematics and Humanities</option>
                         <option value="phy">Physics</option>
                         <option value="chem">Chemistry</option>
                     </select>
                </div>
                <div class="input-container domain ">
                    <label for="domain">Domain</label>
                     <select class="select" name="domain">
                        <option disabled selected>Select Your Domain</option>
                         <option value="hard">Hardware</option>
                         <option value="soft">Software</option>
                         <option value="des">Design</option>
                         
                     </select>
                </div>
                <div class="input-container password ">
                    <label for="password">Password</label>
                      <input type="password" id="password" name="password" placeholder="Must be at least 8 characters" required> 
                      
                </div>
                <div class="input-container confirmpassword ">
                    <label for="cpassword">Confirm Password</label>
                      <input type="password" id="confirmpassword" name="confirmpassword" placeholder="Must be the same as password entered" required>
                </div>
                <div class="input-container cta ">
                    <label for="checkbox-container">
                        <input type="checkbox">
                        <span class="checkmark"></span>
                        I have agreed to the Terms and Conditions
                    </label>
                </div>
                      <button class="signup-btn " type="submit" name="submit" >Sign Up</button>
                



            </form>
 
           

        </div>
</div>

    
</body>
</html>