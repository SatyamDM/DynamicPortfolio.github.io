<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In to Spectrum,CET-B</title>
    <link rel="stylesheet" href="login.css">
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <?php
    include 'connect.php';

    if (isset($_POST['submit'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        //Checking if email exists under the database
        $emailsrch="select * from registration where email= '$email' ";
        $query=mysqli_query($conn,$emailsrch);

        $emailcount=mysqli_num_rows($query);

        if($emailcount){
            $email_passw=mysqli_fetch_assoc($query);
            $db_passw= $email_passw['password'];
            $passw_dec= password_verify($password,$db_passw);

            if($passw_dec){
                ?>
             <script>
               alert ("Login Successful");
              
            </script>
            <?php 
              header("Location: forms.php"); 
              exit();
            }
            else{
                ?>
                <script>
                  alert ("Password Incorrect");
               </script>
               <?php 
            }
        }
        else{
            ?>
           <script>
             alert ("Invalid Email-ID");
           </script>
           <?php 
        }
    }
    ?>



    <div class="container">
        <div class="left">
            <section class="copy">
                <h1>LOGIN TO SPECTRUM,CET-B</h1>
                
                <h5>The Electronics Club of  CET-B,Don't miss the chance to join it.</h5>

            </section>

        </div>
        <div class="right">
            <form action="" method="POST">
                <section class="copy">
                    <h2>Log In</h2>
                    <hr>
                    <div class="login-container">
                        <p>New to Spectrum,CET-B?<a href="register.php"><strong>Register Here</strong></a></p>
                    </div>
                </section>
                
                <div class="input-container email">
                    <label for="email">E-Mail ID</label>
                      <input type="email" id="email" name="email" placeholder="Enter your E-Mail ID" required>
                </div>
               
                
                
                <div class="input-container password">
                    <label for="password">Password</label>
                      <input type="password" id="password" name="password" placeholder="Must be at least 8 characters" required>
                      
                </div>
                 <button type="submit"  name="submit" class="login-btn">Log In</button>
                



            </form>
            
        </div>
</div>
    
</body>
</html>