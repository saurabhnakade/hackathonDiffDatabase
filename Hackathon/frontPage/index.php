<?php
require_once "../loginf/config.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Financeiva</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  </head>
  <body>
    <nav class="navbar">
      <div class="navbar__container">
        <a href="" id="navbar__logo">Financeiva</a>

        <div class="navbar__toggle" id="mobile-menu">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>

        <ul class="navbar__menu">
          <li class="navbar__item">
            <a href="#home" class="navbar__links" id="home-page">Home</a>
          </li>
          <li class="navbar__item">
            <a href="#about" class="navbar__links" id="about-page">About</a>
          </li>
          <li class="navbar__item">
            <a href="#services" class="navbar__links" id="services-page">Services</a>
          </li>
          <li class="navbar__btn">
            <a href="../loginf/welcome.php" class="button" id="sign-up">SignIn</a>
          </li>
          
            <?php
            if(isset($_SESSION['username'])){?>
              <li>
              <a href="" class="navbar__links">
             <?php echo "Welcome ".$_SESSION['username'];?>
              </a>
              </li>
           <?php }
            ?>
          
        </ul>
      </div>
    </nav>

    <!-- top -->
    <div class="hero" id="home">
      <div class="hero__container">
        <h1 class="hero__heading"><span>An investment in knowledge pays the best interest</span></h1>
        <p class="hero__description">Finance is the future</p>
        <button class="main__btn"><a href="#services">Explore</a></button>
      </div>
    </div>

    <!-- About -->
    <div class="main" id="about">
      <div class="main__container">
        <div class="main__img--container">
          <div class="main__img--card"><img src="currency.jpeg" class="images" alt="" /></div>
        </div>
        <div class="main__content">
          <h1>What do we offer?</h1>
          <h2>We help you learn better</h2>
          <p>High quality curated study resources</p>
          <p>One to One mentorship Sessions</p>
          <button class="main__btn"><a href="#membership">Explore Our Plans</a></button>
        </div>
      </div>
    </div>

    <!-- Services -->
    <div class="services" id="services">
      <h1>Our Services</h1>

      <div class="services__wrapper">
        <div class="services__card">
          <h2>Videos</h2>
          <p>Learn from the Best</p>
          <div class="services__btn"><button onclick="window.location.href='../videoPage/index.html'">Get Started</button></div>
        </div>
        <div class="services__card">
          <h2>Blogs</h2>
          <p>Time to explore</p>
          <div class="services__btn"><button onclick="window.location.href='../blogSite/index.php'">Get Started</button></div>
        </div>
        <div class="services__card">
          <h2>Books</h2>
          <p>The power of reading</p>
          <div class="services__btn"><button onclick="window.location.href='../booksPage/index.html'">Get Started</button></div>
        </div>
        <div class="services__card">
          <h2>Quiz</h2>
          <p>Time to test</p>
          <div class="services__btn"><button onclick="window.location.href='../quiz/index.html'">Get Started</button></div>
        </div>
      </div>
    </div>

    <!-- App -->
    <div class="main" id="">
      <div class="main__container">
        <div class="main__content">
          <h1>Mobile App</h1>
          <h2>Best app to study finance</h2>
          <p>Android & iOS</p>
          <button class="main__btn" onclick="window.location.href='../comingSoonPage/index.html'"><a >Try Now</a></button>
        </div>
        <div class="main__img--container">
          <div class="main__img--card"><img src="coming-soon.jpg" class="images" alt="" /></div>
        </div>
      </div>
    </div>

    <!-- Membership -->
    <div class="services" id="membership">
      <h1>Memberships</h1>

      <div class="services__wrapper--membership">
        <div class="services__card">
          <h2>Free</h2>
          <p>Study material access</p>
          <div class="services__btn"><button onclick="window.location.href='../membershipPage/index.html'">Explore More</button></div>
        </div>
        <div class="services__card">
          <h2>Gold</h2>
          <p>Personal Mentorship</p>
          <div class="services__btn"><button onclick="window.location.href='../membershipPage/index.html'">Explore More</button></div>
        </div>
        <div class="services__card">
          <h2>Silver</h2>
          <p>Full quiz access</p>
          <div class="services__btn"><button onclick="window.location.href='../membershipPage/index.html'">Explore More</button></div>
        </div>
      </div>
    </div>

    <!-- Bot-->
    <div class="main" id="about">
      <div class="main__container">
        <div class="main__img--container">
          <div class="main__img--card"><img src="bot.jpeg" class="images" class="images" alt="" /></div>
        </div>
        <div class="main__content">
          <h1>Discord Fans Assemble</h1>
          <h2>Bot to Keep you Motivated</h2>
          <p>Add our bot to your own discord server now</p>
          <button class="main__btn"><a href="https://discord.com/api/oauth2/authorize?client_id=860793868663652352&permissions=0&scope=bot" target="_blank">Let's Go</a></button>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <div class="footer__container">
      <div class="footer__links">
        <div class="footer__link--wrapper">
          <div class="footer__link--items">
            <h2>About Us</h2>
            <a href="#about">What we offer</a>
            <a href="../comingSoonPage/index.html">Testimonials</a>
            <a href="../comingSoonPage/index.html">Careers</a>
            <a href="../comingSoonPage/index.html">Terms of Service</a>
          </div>
          <div class="footer__link--items">
            <h2>Contact Us</h2>
            <a href="../contactUs/contactUs.php">Contact</a>
            <a href="../contactUs/contactUs.php">Suggestions</a>
            <a href="../contactUs/contactUs.php">Complaints</a>
          </div>
        </div>
        <div class="footer__link--wrapper">
          <div class="footer__link--items">
            <h2>Our Team</h2>
            <a>Saurabh</a>
            <a>Omkar</a>
            <a>Dnyaneshwar</a>
            <a>Sumit</a>
          </div>
          <div class="footer__link--items">
            <h2>Social Media</h2>
            <a href="https://www.instagram.com/" target="_blank">Instagram</a>
            <a href="https://www.facebook.com/" target="_blank">Facebook</a>
            <a href="https://www.youtube.com/" target="_blank">Youtube</a>
            <a href="https://www.twitter.com/" target="_blank">Twitter</a>
          </div>
        </div>
      </div>
      <section class="social__media">
        <div class="social__media--wrap">
          <div id="footer__logo">
            <a href=""></a>
          </div>
          <p class="website__rights">© All rights reserved</p>
          <div class="social__icons">
            <a href="https://www.facebook.com/" class="social__icon--link" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/" class="social__icon--link" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.youtube.com/" class="social__icon--link" target="_blank"><i class="fab fa-youtube"></i></a>
            <a href="https://www.linkedin.com/" class="social__icon--link" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href="https://www.twitter.com/" class="social__icon--link" target="_blank"><i class="fab fa-twitter"></i></a>
          </div>
        </div>
      </section>
    </div>

    <script src="app.js"></script>
  </body>
</html>
