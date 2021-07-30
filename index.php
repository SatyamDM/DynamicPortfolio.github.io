<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPECTRUM</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <div class="container-fluid">
    <div class="header sticky-top">
        <!--Image Logo-->
        <a href="#" class="logo ">
            <img src="logo.png" ></a>
        <!--Navigation-->
    <nav class="navbar navbar-expand-md navbar-light ">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#project">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#connects">Connect With Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Register</a>
                </li>
            </ul>
        </div>
        </nav>
     </div>  
    </div>
    <br>
    <br>
    <!--About Us-->
    <div class="aboutus reveal" id="about" >
        <div class="row padding">
            <div class="col-lg-6 ">
                <h2>ABOUT US</h2>
                <hr>
                <p><strong>SPECTRUM</strong> ,Technical society of COLLEGE OF ENGINEERING AND TECHNOLOGY, BHUBANESWAR,a place for all technical enthusiasts to learn, discover and innovate new things in the field of Technology and Design. The name of the club " SPECTRUM ", a contribution of our alumni of 2015 batch, is particularly used to describe the characteristic colors of visible light after passing through a prism, similarly students of CET consist of different skills within them and Spectrum acts like a prism, Spectrum recognises their skills helps them to strengthen it.
            <br>
            <p>This club was established by " Bikram Keshari Panda (2015 batch) ".Spectrum got its recognition in the year 2016 and got its workspace, funding and other facilities. Primarily this was his idea to have an electronics society in our college but with the efforts of other members we established two other wings - Software and Design.The other seniors who had their valuable contribution for this initiative were: Ankit Mishra, Zighnesh Biswal, Abhishek Dash, Avinash Nayak, Tapan Kumar Pal, Krutikesh Sahoo, Abhilash Das.</p>
            </div>
            <div class="col-lg-6">
                <img src="About_us.png" class="img-fluid reveal">
            </div>
        </div>
    </div>
    <!--Our Wings-->
    <div class="wings reveal" id="wing">
        <div class="row text-center padding">
            <div class="col-lg-12">
                <div class="wingbox">
                <h2>OUR WINGS</h2>
                <hr>
            </div>
                <br>
                <br>
                <br>
              <p>
                <centre> Our club SPECTRUM is so named as it provides us with different wings emitted by the hardwork from our members, showing homologous transitions between Hardware, Software and Designing.</centre></p>
              <br>
                <p><centre>The HARDWARE team of the Club mainly focuses on VLSI, Embedded Systems and PCB Design. We have developed many projects with implementation and testing of circuits, components, systems, etc.</centre></p>
                <br>
                <p><centre>The SOFTWARE team is continuously striving for growth in the domains of Web Development, App Development, Competitive Programming, Machine Learning and Data Science. Working as a team, inspiring each other we quickly develop viable solutions for a better outcome.</centre></p>
                <br>
                <p><centre>The DESIGN Wing of our Club has proven their creativity in UI/UX Poster Designing. We believe visual communication is a major tool to enhance various creative projects.</centre>
              </p>
            </div>          
        </div>
    </div>
<!--Our Wings Carousel-->
    <div id="slides" class="carousel slide reveal" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#slides" data-slide-to="0" class="active"></li>
            <li data-target="#slides" data-slide-to="1" ></li>
            <li data-target="#slides" data-slide-to="2" ></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active" >
                <img src="hardware.jpg">
                <div class="carousel-caption">
                    <h1 class="display-2">HARDWARE</h1>
                    <h3>VLSI,EMBEDDED SYSTEMS,PCB DESIGN</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="software.jpg">
                <div class="carousel-caption">
                    <h1 class="display-2">SOFTWARE</h1>
                    <h3>WEB DEVELOPMENT,APP DEVELOPMENT,MACHINE LEARNING,COMPETITIVE PROGRAMMING</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="design2.jpg">
                <div class="carousel-caption">
                    <h1 class="display-2">DESIGN</h1>
                    <h3>UI/UX DESIGNING,POSTER DESIGNING</h3>
                </div>
            </div>
        </div>
    </div>
<br>
<br>
<br>
    <!--Projects-->
      <div class="projects reveal" id="project">
        <div class="row welcome text-center">
            <div class="col-12">
                <div class="projectbox">
                <h2 class="display-4">PROJECTS</h2>
                <hr>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <!--Cards1-->
    <div class="cards1 reveal">
        <div class="row padding">
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="bhavna.jpg">
                    <div class="card-body">
                        <h4 class="card-title"><b>BHAAVANA</b></h4>
                        <p class="card-text">Device helps physically imapired people to understand the emotions of the person they are talking to</p>
                        <a href="#" class="btn btn-outline-secondary">GITHUB LINK</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="smart.jpg">
                    <div class="card-body">
                        <h4 class="card-title"><b>SMART TOILET FOR SENIOR PATIENTS AND CITIZENS</b></h4>
                        <p class="card-text">A semi automated toilet that is designed for the elderly people and the patients. This toilet helps them defecate and urinate with ease and reduces the filthy labour for the hospital authorities. The use of embedded microcontroller Arduino Mega 2560 makes the system smart.</p>
                        <a href="#" class="btn btn-outline-secondary">GITHUB LINK</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="bot.jpg">
                    <div class="card-body">
                        <h4 class="card-title"><b>SUPPLY BOT</b></h4>
                        <p class="card-text">Robots help to deliver food and medicine aid in flood scenarios to the affected people in remote areas. Semi finalist at IIT bombay, Eyantra competition 2019-20.</p>
                        <a href="#" class="btn btn-outline-secondary">GITHUB LINK</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
     <!--Cards2-->
    <div class="cards2 reveal">
     <div class="row padding">
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="scene.jpg">
                <div class="card-body">
                    <h4 class="card-title"><b>Ultrasonic Radar Based Horn System</b></h4>
                    <p class="card-text">It is a noiseless horn system for the vehicles to communicate with each other using ultrasonic waves.</p>
                    <a href="#" class="btn btn-outline-secondary">GITHUB LINK</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="friendly_medico.jpg">
                <div class="card-body">
                    <h4 class="card-title"><b>FRIENDLY-MEDICO</b></h4>
                    <p class="card-text">In this pandemic not everyone of us have the courage to go to hospitals and check our own reports.this app will take some short details and keep it in a database. In future it can be used by medicals to get the health data of a person and if any issue is found by the doctor they can directly contact them and problems can be solved over phones.</p>
                    <a href="#" class="btn btn-outline-secondary">GITHUB LINK</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="lap.jpg">
                <div class="card-body">
                    <h4 class="card-title"><b>Extractive-Text-Summarization</b></h4>
                    <p class="card-text">A simple python program which can find the most important sentences in a paragraph and can give them as the output. Quite useful for the tasks of reading short summaries of news articles and such. Unlike machine learning models, this doesn't train but rather uses a graph based approach to rank the sentences based on their cosine similarities and give the desired output as a result.</p>
                    <a href="#" class="btn btn-outline-secondary">GITHUB LINK</a>
                </div>
            </div>
        </div>

    </div>
</div>
    <hr>
    <br>
    <br>
    <br>
    <!--Connect-->
    <div class="connect reveal" id="connects">
        <div class="row text-center padding">
            <div class="col-12">
                <div class="connectbox">
                    <h2>CONNECT</h2>
                    <hr>
                </div>
                
                
            </div>
            <div class="col-12 social padding">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-github"></i></a>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        window.addEventListener('scroll',reveal);
    
        function reveal(){
            var reveals = document.querySelectorAll('.reveal');
            for (var i=0;i<reveals.length;i++){
                var windowheight=window.innerHeight;
                var revealtop=reveals[i].getBoundingClientRect().top;
                var revealpoint=150;
    
                if(revealtop < windowheight - revealpoint){
                    reveals[i].classList.add('active');
                }
                else{
                    reveals[i].classList.remove('active');
                }
                
            }
        }
    </script>
    <!--Footer-->
    <footer >
      
          <div class="row text-center">
              <div class="col-md-3">
                  <h4 >SPECTRUM</h4>
                  <hr class="light">
                  <p>SPECTRUM a place for all technical enthusiasts to learn, discover and innovate new things in the field of Technology and Design.</p>
              </div>
              <div class="col-md-3">
                <h4>WINGS</h4>
                <hr class="light">
                <p>HARDWARE</p>
                <br>
                <p>SOFTWARE</p>
                <br>
                <p>DESIGN</p>
                <br>
                
            </div>
            <div class="col-md-3">
                <h4 >USEFUL LINKS</h4>
                <hr class="light" >
                <a href="#header"><p>HOME</p></a>
                <br>
                <a href="#about"><p>ABOUT US</p></a>
                <br>
                <a href="#project"><p>PROJECTS</p></a>
                <br>
                <a href="#connect"><p>CONNECT</p></a>
                <br>
                
            </div>
            <div class="col-md-3">
                <h4 >CONTACTS</h4>
                <hr class="light">
                <p> College Of Engineering And Technology, Ghatikia, Bhubaneswar - 751003</p>
                <br>
                <p>spectrumclub.cetb@gmail.com</p>
                <br>
                <p>+91-8249063374</p>
                <br>
            </div>
            <div class="col-12">
                <hr class="light-100">
                <h5>&copy;spectrumcet.com</h5>
                <br>
                <h6>Designed by Web Team Spectrum</h6>
            </div>
          </div>
      
    </footer>
 
    
    
   

</body>
</html>