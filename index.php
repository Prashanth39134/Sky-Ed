<?php
<<<<<<< HEAD
?>
=======
>>>>>>> efdaf5c0a09592701e0b08782077f27173390461
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="assets/css/styles.css">

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>ABHI</title>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo">Prashanth</a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                        <li class="nav__item"><a href="login.html" class="nav__link"><b>Student</b></a></li>
                        <li class="nav__item"><a href="tlogin.html" class="nav__link"><b>Teacher</b></a></li>

                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home" id="home">
                <div class="home__container bd-grid">
                    <h1 class="home__title"><span>HOLLA <br>!</span></h1>

                    <div class="home__scroll">
                        <a href="#about" class="home__scroll-link"><i class='bx bx-up-arrow-alt' ></i>Scroll down</a>


                    </div>

                    <img src="assets/img/perfil.png" alt="" class="home__img">
                </div>
            </section>

            <!--===== ABOUT =====-->
            <section class="about section" id="about">
                <h2 class="section-title">About</h2>

                <div class="about__container bd-grid ">
                    <div class="about__img">
                        <img src="assets/img/ram.png" style="height: fit-content; background-color: antiquewhite; width: auto;">
                    </div>

                    <div>
                        <h2 class="about__subtitle">I'am Prashanth</h2>
                        <span class="about__profession">Web designer & Tutor </span>
                        <p class="about__text">Hello,Amigos I have been tutoring for 10 years now and it's truly been one of the most rewarding experiences of my life. I've helped so many students achieve their academic goals year after year and I know that YOU are more than capable of doing the same with the right help.</p>

                        <div class="about__social">
                            <a href="#" class="about__social-icon"><i class='bx bxl-linkedin' ></i></a>

                        </div>
                    </div>
                </div>
            </section>

            <!--===== SKILLS =====-->
            <section class="skills section" id="skills">
                <h2 class="section-title">Skills</h2>

                <div class="skills__container bd-grid">
                    <div class="skills__box">
                        <h3 class="skills__subtitle">Development</h3>
                        <span class="skills__name">Html</span>
                        <span class="skills__name">Css</span>
                        <span class="skills__name">Javascript</span>
                        <span class="skills__name">Scss</span>
                        <span class="skills__name">React</span>
                        <span class="skills__name">Vue</span>

                        <h3 class="skills__subtitle">Design</h3>
                        <span class="skills__name">Figma</span>
                        <span class="skills__name">Adobe XD</span>
                        <span class="skills__name">Photoshop</span>
                    </div>

                    <div class="skills__img">
                        <img src="assets/img/skill.jpg" alt="">
                    </div>
                </div>
            </section>

            <!--===== PORTFOLIO
            <section class="portfolio section" id="portfolio">
                <h2 class="section-title">Courses</h2>

                <div class="portfolio__container bd-grid">
                    <div class="portfolio__img">
                        <img src="assets/img/work1.jpg" alt="">

                        <div class="portfolio__link">
                            <a href="c.html" class="portfolio__link-name">View details</a>
                        </div>
                    </div>
                    <div class="portfolio__img">
                        <img src="assets/img/work2.jpg" alt="">

                        <div class="portfolio__link">
                            <a href="java.html" class="portfolio__link-name">View details</a>
                        </div>
                    </div>
                    <div class="portfolio__img">
                        <img src="assets/img/work3.jpg" alt="">

                        <div class="portfolio__link">
                            <a href="py.html" class="portfolio__link-name">View details</a>
                        </div>
                    </div>

                </div>
            </section>=====-->

            <!--===== CONTACT =====-->
            <section class="contact section" id="contact">
                <h2 class="section-title">Contact</h2>

                <div class="contact__container bd-grid">
                    <div class="contact__info">
                        <h3 class="contact__subtitle">E-MAIL</h3>
                        <span class="contact__text">abhimannyu.gmail.com</span>

                        <h3 class="contact__subtitle">PHONE</h3>
                        <span class="contact__text">+91 628-167-6651</span>

                        <h3 class="contact__subtitle">ADDRESS</h3>
                        <span class="contact__text">INDIA</span>
                    </div>

                    <form action="" class="contact__form">
                        <div class="contact__inputs">
                            <input type="text" placeholder="Name" class="contact__input">
                            <input type="mail" placeholder="Email" class="contact__input">
                        </div>

                        <textarea name="" id="" cols="0" rows="10" class="contact__input"></textarea>

                        <input type="submit" value="Submit" class="contact__button">
                    </form>
                </div>
            </section>
        </main>



        <!--===== FOOTER =====-->
        <footer class="footer section">
            <div class="footer__container bd-grid">
                <div class="footer__data">
                    <h2 class="footer__title">PRASHANTH</h2>
                    <p class="footer__text">This is my personal website</p>
                </div>

                <div class="footer__data">
                    <h2 class="footer__title">EXPLORE</h2>
                    <ul>
                        <li><a href="#home" class="footer__link">Home</a></li>
                        <li><a href="#about" class="footer__link">About</a></li>
                        <li><a href="#skills" class="footer__link">Skills</a></li>
                        <!--<li><a href="#portfolio" class="footer__link">Portfolio</a></li>-->
                        <li><a href="#Contact" class="footer__link">Contact</a></li>
                    </ul>
                </div>

                <div class="footer__data">
                    <h2 class="footer__title">FOLLOW</h2>
                    <a href="#" class="footer__social"><i class='bx bxl-facebook' ></i></a>
                    <a href="https://www.instagram.com/master__0318/?utm_source=qr" class="footer__social"><i class='bx bxl-instagram' ></i></a>

                </div>


            </div>
        </footer>

        <!--===== SCROLL REVEAL =====
        <script src="https://unpkg.com/scrollreveal"></script>-->

        <!--===== MAIN JS =====-->
        <!--<script src="assets/js/main.js"></script>-->
    </body>
</html>
<<<<<<< HEAD
=======
?>
>>>>>>> efdaf5c0a09592701e0b08782077f27173390461
