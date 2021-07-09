<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="UTF-8">
    <link rel="icon" href="logo.png" type="image/png">
	<meta name="viewport"
	content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="/font-awesome/css/font-awesome.css">
</head>
<body>

	<!-- Navbar Section -->
	<nav class="navbar">
        <div class="navbar__container">
            <div class="navbar__toggle" id="mobile-menu">
                <span class="bar"></span> 
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="navbar__menu">
                <li class="navbar__item">
                    <a href="#home" class="navbar__links" id="home-page">HOME</a>
                </li>
                <li class="navbar__item">
                    <a href="#about" class="navbar__links" id="about-page">ABOUT</a>
                </li>
                <li class="navbar__item">
                    <a href="#expirience" class="navbar__links" id="expirience-page">SEMINARS</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section-->
    <div class="hero" id="home">
        <div class="hero__container">
            <div class="text" style="font-size: 30px; margin-top: -5%; color: white">MY PORTFOLIO</div>
            <br>
            <div class="social__icons">
                <a href="https://www.facebook.com/matrixemo21/" class="social__icons--link" target="_blank">
                <i class="fa fa-facebook fa-2x"></i></a>
                <a href="https://www.instagram.com/matrix_yow/" class="social__icons--link">
                <i class="fa fa-instagram fa-2x"></i></a>
                <a href="https://www.youtube.com/channel/UChxeJ6dlQD259uRZ6pLT3cQ" class="social__icons--link">
                <i class="fa fa-youtube fa-2x"></i></a>
                <a href="https://twitter.com/matrix_yow" class="social__icons--link">
                <i class="fa fa-twitter fa-2x"></i></a>
            </div>
            <br>
            <div class="btn">
                <a href="#about"><span>MY DETAILS</span></a>
            </div>
        </div>
    </div>

    <!-- About SEction-->
    <div class="main" id="about">
        <div class="main__container">
            
            <img src="profile.jpg" style="border-radius: 50%; height: 300px">
            
            <div class="main__content">
                <div class="text" style="color: white;">About Me</div>
                <br>
                <h3 style="font-size: 35px; color: black;">Jerome Patotoy</h3>
                <br>
                <h4> 
                &nbsp;&nbsp;&nbsp;&nbsp; Currently, I am a student in the Institute of Technology at the Polytechnic University of the Philippines. &nbsp;I am now enrolled in the Diploma in Information and Communication Technology program as a third-year student (DICT).  
                <br><br>
                &nbsp;&nbsp;&nbsp;&nbsp;This webpage was made to demonstrate my abilities and what I've learnt. In addition, I've included all of the webinars that I've attended on this page.
                </h4>
                <br>
                    
                
            </div>
        </div>
    </div>


    <!-- Features Section-->
    <div class="main" id="expirience">
        <div class="text" style="text-align: center; color: white;">SEMINARS</div><br><br>
            
            <div style="text-align: center;">
                <a style="color: white; font-size: 20px;" href="img/c1.png" target="popup" onclick="window.open('img/c1.png','popup','width=600,height=600'); return false;">“Get the Job: Ace that Interview”</a>
            </div> <br>
            <div style="text-align: center;">
                <a style="color: white; font-size: 20px;" href="img/c2.png" target="popup" onclick="window.open('img/c2.png','popup','width=600,height=600'); return false;">“Dealing with Work Stress during Pandemic”</a>
            </div> <br>
            <div style="text-align: center;">
                <a style="color: white; font-size: 20px;" href="img/c3.png" target="popup" onclick="window.open('img/c3.png','popup','width=600,height=600'); return false;">“How I became a Front-End Developer at 15 mins in the middle of a Pandemic”</a>
            </div> <br>
            <div style="text-align: center;">
               <a style="color: white; font-size: 20px;" href="img/c4.png" target="popup" onclick="window.open('img/c4.png','popup','width=600,height=600'); return false;">“How to Build a Portfolio Website in Webflow for Design Students (No Code)”</a>
            </div> <br>
            <div style="text-align: center;">
                <a style="color: white; font-size: 20px;" href="img/c5.png" target="popup" onclick="window.open('img/c5.png','popup','width=600,height=600'); return false;">“JavaScript HTML DOM (Create Webpages using JavaScript”</a>
            </div> <br>
            <div style="text-align: center;">
                <a style="color: white; font-size: 20px;" href="img/c6.png" target="popup" onclick="window.open('img/c6.png','popup','width=600,height=600'); return false;">“How to Write Winning Proposals fo Designers”</a>
            </div> <br>
            <div style="text-align: center;">
                <a style="color: white; font-size: 20px;" href="img/c7.png" target="popup" onclick="window.open('img/c7.png','popup','width=600,height=600'); return false;">“CCNA Introduction and Technical Seminar”</a>
            </div> <br>
            <div style="text-align: center;">
                <a style="color: white; font-size: 20px;" href="img/c8.png" target="popup" onclick="window.open('img/c8.png','popup','width=600,height=600'); return false;">“Data Science Topics and College Research Projects”</a>
            </div> <br>
            <div style="text-align: center;">
                <a style="color: white; font-size: 20px;" href="img/c9.png" target="popup" onclick="window.open('img/c9.png','popup','width=600,height=600'); return false;">“Work Place Communication”</a>
            </div> <br>
            <div style="text-align: center;">
                <a style="color: white; font-size: 20px;" href="img/c10.png" target="popup" onclick="window.open('img/c10.png','popup','width=600,height=600'); return false;">“Receiving and Responding to Workplace Communication”</a>
            
        </div>
    </div>

 
    <script src="app.js"></script>
</body>
</html>
