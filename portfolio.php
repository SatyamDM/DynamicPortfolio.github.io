<?php 
session_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="portfolio.css">
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <!--Header and Navigation-->
    <section id="header">
        <div class="header container">
            <div class="nav-bar">
                <div class="brand">
                    <a href="#hed"><h1><span>P</span>ORTFOLIO</h1></a>
                </div>
                <div class="nav-list">
                    <div class="hamburger"><div class="bar"></div></div>
                    <ul>
                        <li><a href="#hed" data-after="HOME">HOME</a></li>
                        <li><a href="#about" data-after="ABOUT">ABOUT</a</li>
                        <li><a href="#skills" data-after="SKILLS">SKILLS</a</li>
                        <li><a href="#projects" data-after="PROJECTS">PROJECTS</a</li>
                        <li><a href="#footer" data-after="CONTACT">CONTACT</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Head Section-->
    <section id="hed">
        <div class="hed container">
            <div>
                <h1>Hello,<span></span></h1>
                <h1>I am<span></span></h1>
                <h1><?php echo $_SESSION['name']?><span></span></h1>
                <a href="#" type="button" class="cta">Portfolio</a>
            </div>
        </div>
    </section>
<!--About Me-->
<section id="about">
    <div class="about container">
        <div class="column-right">
            <h1 class="section-title">ABOUT <span>ME</span></h1>
            <h4>Full Name: <?php echo $_SESSION['name']?>   </h4>
            <h4>Email-ID:  <?php echo $_SESSION['emailid']?>   </h4>
            <h4>Phone Number:  <?php echo $_SESSION['phonenum']?> </h4>
            <h4>College Name:   <?php echo $_SESSION['collname']?> </h4>
            <h4>Year:   <?php echo $_SESSION['byear']?> </h4>
            <h4>Branch:  <?php echo $_SESSION['cbranch']?>  </h4>
            <h4>Role:  <?php echo $_SESSION['role']?> </h4>
            <h4>Bio:  <?php echo $_SESSION['bio']?> </h4>
        </div>
    </div>
</section>
<!--Skills and Qualifications Section-->
<section id="skills">
    <div class="skills container">
        <div class="skills-header">
            <h1 class="section-title">SK<span>I</span>LLS</h1>
            <h4 class="section-title" > <?php echo $_SESSION['techskills']?> </h4>

        </div>
    </div>
</section>
<section id="qualifications">
    <div class="qualifications container">
        <div class="qualifications-header">
            <h1 class="section-title">QUALIF<span>I</span>CATIONS</h1>
       
            <h2 class="section-title">MATRICULATION</h2>
            <hr>
            <h2>Institute Name:   <?php echo $_SESSION['matname']?> </h2>
            <h2>Percentage:   <?php echo $_SESSION['matper']?> </h2>
            <br>
            <h2 class="section-title">INTERMEDIATE</h2>
            <hr>
            <h2>Institute Name:   <?php echo $_SESSION['intername']?> </h2>
            <h2>Percentage:   <?php echo $_SESSION['interper']?> </h2>
            <br>
            <h2 class="section-title">GRADUATION</h2>
            <hr>
            <h2>Institute Name:   <?php echo $_SESSION['gradname']?> </h2>
            <h2>CGPA:   <?php echo $_SESSION['gradper']?> </h2>
        </div>


        
    </div>
</section>

<!--Projects Section-->
<section id="projects">
    <div class="projects container">
        <div class="projects-header">
            <h1 class="section-title">RECENT <span>PROJECTS</span></h1>
        </div>
        <div class="all-projects">
            <div class="project-item">
                <div class="project-info">
                    <h1><?php echo $_SESSION['projone']?></h1>
                    <h2>Github Link:  <?php echo $_SESSION['projonegit']?>                                  </h2>
                </div>
                <div class="project-img">
                    <img src="projectitem.jpg" alt="img">

                </div>
            </div>
            
         <div class="project-item">
              <div class="project-info">
                <h1><?php echo $_SESSION['projtwo']?></h1>
            <h2>Github Link:    <?php echo $_SESSION['projtwogit']?>                                </h2>
               </div>
               <div class="project-img">
                <img src="projectitem.jpg" alt="img">

               </div>
             </div>
        

          <div class="project-item">
          <div class="project-info">
            <h1><?php echo $_SESSION['projthr']?></h1>
          <h2>Github Link:  <?php echo $_SESSION['projthrgit']?>                                  </h2>
          </div>
          <div class="project-img">
            <img src="projectitem.jpg" alt="img">

          </div>
         </div>
        </div>
</section>



<!--Footer Section-->
<section id="footer">
    <div class="footer container">
        <div class="name">
            <h1 class="section-title">CONTACT <span>ME</span></h1>
        </div>
        <div class="socialmedia-icons">
            <a href="<?php echo $_SESSION['facebook']?> "><i class="fab fa-facebook"></i></a>
            <a href="<?php echo $_SESSION['insta']?> "><i class="fab fa-instagram"></i></a>
            <a href="<?php echo $_SESSION['linkedin']?> "><i class="fab fa-linkedin"></i></a> 
            <a href="<?php echo $_SESSION['github']?> "><i class="fab fa-github"></i></a>
        </div>
        <hr>
        <p>Copyright,&copy;2021 All Rights Reserved</p>
    </div>
</section>
<script src="app.js"></script>
</body>
</html>