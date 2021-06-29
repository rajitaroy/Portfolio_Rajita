<?php
// Initialize the session
session_start();
require_once('db_connection.php');
//$conn = mysqli_connect("localhost","root","","portfolio");
$conn = mysqli_connect("remotemysql.com","bwdVjv2xHE","hofhBDePT7","bwdVjv2xHE");
// Check if the user is logged in, if not then redirect him to login page
// if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//     header("location: index.php");
//     exit;
// }
$query = "SELECT * FROM contact";  
$result = mysqli_query($conn, $query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rajita's Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/laptop-coding.png">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>

    <nav class="navbar">
        <div class="max-width">
            <div class="logo">
            <a href="#">Portfo<span>lio</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#projects" class="menu-btn">Projects</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, my name is</div>
                <div class="text-2">Rajita Roy</div>
                <div class="text-3">And I'm a <span class="typing"></span></div>
            <a href="#contact">Hire me</a></div>
            </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="img/IMG-20201011-WA0016.jpg" alt="">
                </div>
                <div class="column right">
                    <div class="text">I'm Rajita and I'm a <span class="typing-2"></span></div>
                    <p>I'm Rajita Roy, currently pursuing Computer Engineering under Savitribai Phule Pune University and studying in third year. I'll be graduating in 2022. Passionate about web development and Data science, I'd like you to give a read to this portfolio to know me better.</p>
                    <a href="CV_Rajita Roy.pdf">Download CV</a>
                </div>
            </div>
        </div>
    </section>


    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My creative skills & experiences.</div>
                    <p>To check more of my skills, please download my <a href = "#about">CV</a></p>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>Java</span>
                            <span>70%</span>
                        </div>
                        <div class="line java"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                        <span>PHP</span>
                        <span>80%</span>
                    </div>
                    <div class="line php"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>Python</span>
                        <span>85%</span>
                    </div>
                    <div class="line python"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>AngularJS</span>
                        <span>20%</span>
                    </div>
                    <div class="line angular"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>ReactJS</span>
                        <span>35%</span>
                    </div>
                    <div class="line react"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>Statistics and Machine Learning</span>
                        <span>50%</span>
                    </div>
                    <div class="line ds"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>MySQL</span>
                        <span>65%</span>
                    </div>
                    <div class="line sql"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>MongoDB</span>
                        <span>50%</span>
                    </div>
                    <div class="line mongo"></div>
                </div>
            </div>
        </div>
    </div>

</section>

    <!-- projects section start -->
    <section class="projects" id="projects">
        <div class="max-width">
            <h2 class="title">My Projects</h2>
            <div class="projects-content">
    
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">Netflix Analysis Dashboard</div>
                        <p>Charts on best Movies and TV shows based on a variety of categorical comparisons.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">Intranet Mailing System</div>
                        <p>Mailing Sytem that works on local network and can be used within organisations, for safe-keeping.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text">Diabetes Prediction System</div>
                        <p>Web Application to predict if one has Diabetes based on certain medical records of an individual.</p>
                    </div>
                    </div>
                <h4><br>For more projects and details, please download my <a href = "#about">CV</a>.</h4><br>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>Please find any suitable social platform below to get in touch with me.</p>
                        <div class="icons">
                            <div class="row">
                                <i class="fas fa-envelope"></i>
                                    <div class="info">
                                        <div class="head">E-Mail</div>
                                        <div class="sub-title"></div>
                                        <a href='https://www.gmail.com'>royrajita6@gmail.com</a>
                                    </div>
                                </div>
                            <div class="row">
                                <i class="fab fa-instagram-square"></i>
                                <div class="info">
                                    <div class="head">Instagram</div>
                                    <div class="sub-title"></div>
                                    <a href='https://www.instagram.com/rajita._roy/'>rajita._roy</a>
                                </div>
                            </div>
                            <div class="row">
                                <i class="fab fa-twitter"></i>
                                <div class="info">
                                    <div class="head">Twitter</div>
                                    <div class="sub-title"></div>
                                    <a href='https://twitter.com/RajitaRoy1'>RajitaRoy1</a>
                                </div>
                            </div>
                            <div class="row">
                                <i class="fab fa-linkedin"></i>
                                <div class="info">
                                    <div class="head">LinkedIn</div>
                                    <div class="sub-title">
                                        <a href='https://www.linkedin.com/in/rajita-roy-5b4907200/'>rajita-roy</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <i class="fab fa-github"></i>
                                <div class="info">
                                    <div class="head">GitHub</div>
                                    <div class="sub-title">
                                        <a href='https://github.com/rajitaroy'>rajitaroy</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column right">
                        <div class="text">Message me</div>
                        <form method="POST" action="insert.php">
                        <!-- <form action="#"> -->
                        <div class="fields">
                            <div class="field name">
                                
                                <input type="text" name = "name" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input type="email" name = "email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" name = "subject" placeholder="Subject" required>
                        </div>
                        <div class="field">
                            <input type="text" name = "message" placeholder="Message.." required></input>
                        </div>
                        <div class="button">
                            <button type="submit">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</section>

    <!-- footer section start -->
    <footer>
        <span>Created By <a href="#">Rajita-Roy</a> | <span class="far fa-copyright"></span> 2021 All rights reserved.</span>
    </footer>

<script src="script.js"></script>
</body>
</html>
