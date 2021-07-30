 <?php
session_start();

include 'connect.php';

if (isset($_POST['submit'])){
   //Recognizing all the inputs and connecting them with the database
   $name= mysqli_real_escape_string($conn,$_POST['name']);
   $emailid=  mysqli_real_escape_string($conn,$_POST['emailid']);
   $phonenum= mysqli_real_escape_string($conn, $_POST['phonenum']);
   $collname= mysqli_real_escape_string($conn, $_POST['collname']);
   $byear= mysqli_real_escape_string($conn, $_POST['byear']);
   $cbranch= mysqli_real_escape_string($conn, $_POST['cbranch']);
   $role= mysqli_real_escape_string($conn, $_POST['role']);
   $bio=  mysqli_real_escape_string($conn,$_POST['bio']);
   $techskills= $_POST['techskills'] ;
   $chk="";
   foreach($techskills as $chk1){
       $chk.=$chk1;
   }
   $matname=  mysqli_real_escape_string($conn,$_POST['matname']);
   $matper=  mysqli_real_escape_string($conn,$_POST['matper']);
   $intername=  mysqli_real_escape_string($conn,$_POST['intername']);
   $interper=  mysqli_real_escape_string($conn,$_POST['interper']);
   $gradname=  mysqli_real_escape_string($conn,$_POST['gradname']);
   $gradper=  mysqli_real_escape_string($conn,$_POST['gradper']);
   $projone=  mysqli_real_escape_string($conn,$_POST['projone']);
   $projonegit=  mysqli_real_escape_string($conn,$_POST['projonegit']);
   $projtwo=  mysqli_real_escape_string($conn,$_POST['projtwo']);
   $projtwogit=  mysqli_real_escape_string($conn,$_POST['projtwogit']);
   $projthr=  mysqli_real_escape_string($conn,$_POST['projthr']);
   $projthrgit=  mysqli_real_escape_string($conn,$_POST['projthrgit']);
   $facebook=  mysqli_real_escape_string($conn,$_POST['facebook']);
   $insta=  mysqli_real_escape_string($conn,$_POST['insta']);
   $linkedin=  mysqli_real_escape_string($conn,$_POST['linkedin']);
   $github=  mysqli_real_escape_string($conn,$_POST['github']);

   $insquery= "INSERT INTO portfolioform(name, emailid, phonenum, collname, byear, cbranch, role, bio, techskills, matname, matper, intername, interper, gradname, gradper, projone, projonegit, projtwo, projtwogit, projthr, projthrgit, facebook, insta, linkedin, github) VALUES ('$name','$emailid','$phonenum','$collname','$byear','$cbranch','$role','$bio','$chk','$matname','$matper','$intername','$interper','$gradname','$gradper','$projone','$projonegit','$projtwo','$projtwogit','$projthr','$projthrgit','$facebook','$insta','$linkedin','$github')";
   $inquery=mysqli_query($conn,$insquery);

   if($inquery){
    ?>
    <script>
    alert("Submitted Successfully");
    </script>
    
    <?php
    ;
    ?>
    <script>location.replace("portfolio.php")</script>
    <?php
    }else{
        ?>
        <script>
    alert("Submission Not Successful");
    </script>
    <?php
     }
}
if(isset($_POST['submit'])){
    $emailid = $_POST['emailid'];        
    $email_s = "select * from portfolioform where emailid = '$emailid' ";
    $newquery = mysqli_query($conn,$email_s);

    $email_c = mysqli_num_rows($newquery);

    if($email_c){
        $email_passs = mysqli_fetch_assoc($newquery);

        $_SESSION['name'] = $email_passs['name'];
       $_SESSION['emailid'] = $email_passs['emailid'];
       $_SESSION['phonenum'] = $email_passs['phonenum'];
       $_SESSION['collname'] = $email_passs['collname'];
       $_SESSION['byear'] = $email_passs['byear'];
       $_SESSION['cbranch'] = $email_passs['cbranch'];
       $_SESSION['role'] = $email_passs['role'];
       $_SESSION['bio'] = $email_passs['bio'];
       $_SESSION['techskills'] = $email_passs['techskills'];
       $_SESSION['matname'] = $email_passs['matname'];
       $_SESSION['matper'] = $email_passs['matper'];
       $_SESSION['intername'] = $email_passs['intername'];
       $_SESSION['interper'] = $email_passs['interper'];
       $_SESSION['gradname'] = $email_passs['gradname'];
       $_SESSION['gradper'] = $email_passs['gradper'];
       $_SESSION['projone'] = $email_passs['projone'];
       $_SESSION['projonegit'] = $email_passs['projonegit'];
       $_SESSION['projtwo'] = $email_passs['projtwo'];
       $_SESSION['projtwogit'] = $email_passs['projtwogit'];
       $_SESSION['projthr'] = $email_passs['projthr'];
       $_SESSION['projthrgit'] = $email_passs['projthrgit'];
       $_SESSION['facebook'] = $email_passs['facebook'];
       $_SESSION['insta'] = $email_passs['insta'];
       $_SESSION['linkedin'] = $email_passs['linkedin'];
       $_SESSION['github'] = $email_passs['github'];

    }
    else{

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Details Form</title>
    <link rel="stylesheet" href="details.css">
</head>
<body>
    <div class="container">
        <!--Personal Details Section-->
        <form id="form1" method="POST">
            <h3>PERSONAL DETAILS</h3>
            <div class="input-container name ">
                <label for="name">Full Name</label>
                  <input type="text" id="name" name="name" placeholder="Enter your Full Name" required>
            </div>
           
            <div class="input-container emailid ">
                <label for="emailid">E-Mail ID</label>
                  <input type="email" id="emailid" name="emailid" placeholder="Enter your E-Mail ID" required>
            </div>
            <div class="input-container phonenum ">
                <label for="phonenum">Mobile Number</label>
                  <input type="phone" id="phonenum" name="phonenum" placeholder="Enter your Mobile Number" required>
            </div>
            <div class="input-container collname ">
                <label for="college">College Name</label>
                  <input type="text" id="collname" name="collname" placeholder="Enter your College Name" required>
            </div>
            <div class="input-container byear ">
                <label for="byear">Year</label>
                 <select class="select" name="byear">
                    <option disabled selected>Select Your Year</option>
                     <option value="first">First</option>
                     <option value="second">Second</option>
                     <option value="third">Third</option>
                     <option value="fourth">Fourth</option>
                 </select>
            </div>
            <div class="input-container cbranch ">
                <label for="cbranch">Branch</label>
                 <select class="select" name="cbranch">
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
            <div class="input-container role ">
                <label for="role">Role</label>
                 <select class="select" name="role">
                    <option disabled selected>Select Your Role</option>
                     <option value="fewd">Front-End Web Developer</option>
                     <option value="bewd">Back-End Web Developer</option>
                     <option value="fswd">Full Stack Web Developer</option> 
                 </select>
            </div>
            <div class="input-container bio">
                <label for="bio">Bio</label>
                <textarea id="bio" name="bio" rows="10"  cols="40" placeholder="Enter your bio in 50 words"></textarea>
            </div>
            <!--Skills-->
            <h3>SKILLS</h3>
          <h5>Technical Skills</h5>
          <div class="input-container checkbox">
            <input type="checkbox" id="html" name="techskills[]" value="HTML">HTML <br />
            <input type="checkbox" id="css" name="techskills[]" value="CSS">CSS <br />
            <input type="checkbox" id="js" name="techskills[]"value="JS">JavaScript <br />
            <input type="checkbox" id="bs" name="techskills[]" value="BOOTSTRAP">Bootstrap <br />
            <input type="checkbox" id="rjs" name="techskills[]" value="REACTJS">ReactJS <br />
            <input type="checkbox" id="njs" name="techskills[]" value="NODEJS">NodeJS <br />
            <input type="checkbox" id="mdb" name="techskills[]" value="MONGODB">MongoDB <br />
            <input type="checkbox" id="php" name="techskills[]" value="PHP">PHP <br />
            <input type="checkbox" id="mysql" name="techskills[]" value="MYSQL">MySQL <br />
          </div>
              <!--Qualfications-->
              <h3>QUALIFICATIONS</h3>
         <h5>MATRICULATION</h5>
         <div class="input-container matname ">
             <label for="matname">Institute Name</label>
              <input type="text" id="matname" name="matname" placeholder="Enter your Institute Name" required>
         </div>
         <div class="input-container matper ">
             <label for="matper">Percentage</label>
              <input type="number" id="matper" name="matper" min="1" max="100" placeholder="Enter your Percentage" required>
         </div>
          <h5>INTERMEDIATE</h5>
           <div class="input-container intername ">
              <label for="intername">Institute Name</label>
              <input type="text" id="intername" name="intername" placeholder="Enter your Institute Name" required>
            </div>
           <div class="input-container interper ">
              <label for="interper">Percentage</label>
              <input type="number" id="interper" name="interper" min="1" max="100" placeholder="Enter your Percentage" required>
           </div>
          <h5>GRADUATION</h5>
          <div class="input-container gradname ">
             <label for="gradname">Institute Name</label>
              <input type="text" id="gradname" name="gradname" placeholder="Enter your Institute Name" required>
          </div>
         <div class="input-container gradper ">
             <label for="gradper">CGPA</label>
              <input type="number" id="gradper" name="gradper" min="0" max="10" placeholder="Enter your CGPA" required>
         </div>
          <!--Projects-->
      
          <h3>PROJECTS</h3>
          <h5>PROJECT-1</h5>
          <div class="input-container projone ">
             <label for="projone">Project Name</label>
             <input type="text" id="projone" name="projone" placeholder="Enter your Project Name" required>
          </div>
           <div class="input-container projonegit ">
              <label for="projonegit">Github Link</label>
              <input type="text" id="projonegit" name="projonegit" placeholder="Enter the Github Link" required>
           </div>
          <h5>PROJECT-2</h5>
          <div class="input-container projtwo ">
              <label for="projtwo">Project Name</label>
              <input type="text" id="projtwo" name="projtwo" placeholder="Enter your Project Name" required>
           </div>
           <div class="input-container projtwogit ">
               <label for="projtwogit">Github Link</label>
               <input type="text" id="projtwogit" name="projtwogit" placeholder="Enter the Github Link" required>
           </div>
           <h5>PROJECT-3</h5>
           <div class="input-container projthr ">
               <label for="projthr">Project Name</label>
               <input type="text" id="projthr" name="projthr" placeholder="Enter your Project Name" required>
           </div>
          <div class="input-container projthrgit ">
             <label for="projthrgit">Github Link</label>
             <input type="text" id="projthrgit" name="projthrgit" placeholder="Enter the Github Link" required>
          </div>
           
          <!--Social Media Links-->
     
          <h3>SOCIAL MEDIA LINKS</h3>
           <div class="input-container facebook">
                <label for="facebook">Facebook</label>
                <input type="text" id="facebook" name="facebook" placeholder="Enter your Facebook Handle" required>
          </div>
          <div class="input-container insta">
               <label for="insta">Instagram</label>
               <input type="text" id="insta" name="insta" placeholder="Enter your Instagram Handle" required>
          </div>
         <div class="input-container linkedin ">
              <label for="linkedin">LinkedIn</label>
              <input type="text" id="linkedin" name="linkedin" placeholder="Enter your LinkedIn Handle" required>
         </div>
          <div class="input-container github ">
               <label for="github">Github</label>
               <input type="text" id="github" name="github" placeholder="Enter your GitHub Handle" required>
          </div>
          <div class="btn-box">
              <button class="signup-btn " type="submit" name="submit" >Submit</button>
          </div>

        </form>
    </div>
   
</body>
</html>