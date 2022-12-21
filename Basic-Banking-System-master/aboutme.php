<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/style.css">

        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>Priyanshi Setia</title>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo">Vishal</a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                        <!-- <li class="nav__item"><a href="#work" class="nav__link">Work</a></li> -->
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title">Hi,<br>I'am <span class="home__title-color">Vishal</span><br>COMP Undergraduate</h1>

                    <a href="#contact" class="button">Contact</a>
                </div>

                <div class="home__social">
                    <a href="https://www.linkedin.com/in/vishal-bhure-18160725a/" class="home__social-icon"><i class='bx bxl-linkedin'></i></a>
                    <!-- <a href="" class="home__social-icon"><i class="fa fa-youtube-play"></i></a>-->
                    <a href="https://github.com/vishalbhure611" class="home__social-icon"><i class='bx bxl-github' ></i></a>
                </div>

                <div class="home__img">    
                    <!-- <img src="img/profile.jpg" alt="" height="350px" width="300px"> -->
                </div>
            </section>

            <!--===== ABOUT =====-->
            <section class="about section " id="about">
                <h2 class="section-title">About</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="img/image.jpeg" alt="">
                    </div>
                    
                    <div>
                        <h2 class="about__subtitle">I'am Vishal</h2>
                        <p class="about__text">Currently persuing BTECH. in computer Enginnering  from DBATU Enginnering College.
                        <br><br>I have keen intrest and knowledge in the feild of web development. I have good coding skills and have learnt programming languages like  C, C++, python. I'm actively looking for a job for web developer or software developer roles.</p>           
                    </div>                                   
                </div>
            </section>

            <!--===== SKILLS =====-->
            <section class="skills section" id="skills">
                <h2 class="section-title">Skills</h2>

                <div class="skills__container bd-grid">          
                    <div>
                        <h2 class="skills__subtitle">Profesional Skills</h2>
                        <p class="skills__text">I have knowledge in the following skills. I am ready to create any product with these skills.
                           Checkout my projectworks at my github profile.
                        </p>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-html5 skills__icon'></i>
                                <span class="skills__name">HTML5</span>
                            </div>
                            <div class="skills__bar skills__html">

                            </div>
                            <div>
                                <span class="skills__percentage">95%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <!-- <i class='bi bi-c-circle' ></i> -->
                                <span class="skills__name">Coding Skills(C/C++/python)</span>
                            </div>
                            <div class="skills__bar skills__html">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">90%</span>
                            </div>
</div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-css3 skills__icon'></i>
                                <span class="skills__name">CSS3</span>
                            </div>
                            <div class="skills__bar skills__css">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">85%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-javascript skills__icon' ></i>
                                <span class="skills__name">JAVASCRIPT</span>
                            </div>
                            <div class="skills__bar skills__js">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">55%</span>
                            </div>
                            
                        </div>
     
                        <div class="skills__data">
                            <div class="skills__names">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAABTklEQVRIS+WW7U3DMBCGn0wAG9ANgAmgG7QTlE4AGxQmgE4ATACdAJigsAEbQCcAvZKNHMtxpJyTVMJ/E99z7335KkY61Uhc9hJ8CBwbI/IBfKdspBQLuAKujFB//Q64iR1IgfXjZSGoN7OOhcRgqf0qDPXmaqwYfA689ASeAq9JL4Am8A54b3HorOV7J/CbcypnewI8ZzrBDL4AjgIP1C6PrmpPgG2Dd2aw8hSHdQPMHFCOHCTgvYDDVPwMqXgJPLheve0LrDyq3/3xLaJQ30ffQh/MoRY4zGHYaio8wVPHDE4V1ydw6ipbIV8MVVzi+Dw3qe5FscBzN0CU66chFOvN1cS6drCm182sODc2c49MJ7AeiNxioDmtEPvpVayqS7yUWcWjLQJSNsrqI7BUq0JL7V3at2Svtm227dWqUsv5W3ViI21gCzR79/+BfwHCfGEfbp0WtgAAAABJRU5ErkJggg=="/>
                                <span class="skills__name">&nbsp&nbsp&nbsp&nbsp&nbspBOOTSTRAP</span>
                            </div>
                            <div class="skills__bar skills__ux">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">75%</span>
                            </div>
                        </div>
                    </div>
                    
                    <div>              
                        <!-- <img src="assets/img/work7.jpg" alt="" class="skills__img"> -->
                    </div>
                </div>
            </section>

           
            <section class="contact section" id="contact">
                <h2 class="section-title">Contact</h2>

                <div class="contact__container bd-grid">
                    <!-- <form action="" class="contact__form">
                        <input type="text" placeholder="Name" class="contact__input">
                        <input type="mail" placeholder="Email" class="contact__input">
                        <textarea name="" id="" cols="0" rows="10" placeholder="Enter your message here" class="contact__input"></textarea> -->
                        <a href="https://github.com/vishalbhure611">
                        <input type="button" value="Github" class="contact__button button" style="background-color:skyblue; border:2px solid black; color:black ; width:500px"> </a> <br> 
                        <a href="https://www.linkedin.com/in/vishal-bhure-18160725a/">
                        <input type="button" value="LinkedIn" class="contact__button button" style="background-color:skyblue ; border:2px solid black; color:black ; width:500px"> </a><br>
                        <a href="mailto:vishalbhure611@gmail.com"><input type="button" value="Send Mail" class="contact__button button" style="background-color:skyblue ; border:2px solid black; color:black ; width:500px"></a>
                        
                      
                    </form>
                </div>
            </section>
        </main>

        <!--===== FOOTER =====-->
        <footer class="footer">
            <p class="footer__title">Vishal Bhure </p>
            <div class="footer__social">
                
            </div>
            <p>&#169; 2022 all right reserved</p>
        </footer>


        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>