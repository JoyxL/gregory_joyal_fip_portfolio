<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Fustat:wght@200..800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/ScrollTrigger.min.js"></script>

    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <link href="css/grid.css" rel="stylesheet" type="text/css" />
    <title>Joyal - Animator/Graphics Designer</title>

    <?php
//connect to the running database server and the specific database
require_once('includes/connect.php');



//create a query to run in SQL
$query = 'SELECT projects.id AS projects, pic1 FROM projects,media WHERE project_id = projects.id ORDER BY title DESC';


//run the query to get back the content
$results = mysqli_query($connect,$query);

?>

  </head>

  <body>
    <header class="sticky">
      <h1 class="hidden">Joyal - Animator/Graphics Designer</h1>
      <div class="logo">
        <img id="logo" src="images/logo.svg" alt="jg_logo" />
      </div>
      <nav>
        <button class="hamburger" id="hamburger">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </button>
        <div class="nav-menu" id="nav-menu">
          <ul class="nav-list">
            <li id="HOME"><a href="#home">HOME</a></li>
            <li id="PORTFOLIO"><a href="#portfolio">PORTFOLIO</a></li>
            <li id="ABOUT"><a href="#about">ABOUT</a></li>
            <li id="CONTACT"><a href="#contact">CONTACT</a></li>
        </ul>
        </div>
      </nav>
    </header>
 
    <main>
      <section class="container" id="home">
        <div class="hero_text"><h1>HI, I AM JOYAL</h1></div>
        <div class="hero_test_sub"><h1> ANIMATOR / GRAPHICS DESIGNER</h1></div>
        <div>
            < img src="images/hero_image.png"class="hero_image" alt="hero img">
        </div>
      </section>
      <section class="about_section" id="about">
        <div class="about"><h1> ABOUT</h1></div>
        <br>
        <p class="about_p">
          As an Animator and Graphic Designer, I’m passionate about bringing ideas to life through dynamic visuals and storytelling. With a deep love for both motion and design, I specialize in creating captivating, thoughtful designs that resonate with audiences and spark emotional connections. My work blends creativity with purpose, transforming concepts into powerful visual narratives that inspire, engage, and communicate. I’m an Animator and Graphic Designer with a passion for bringing ideas to life through motion and visuals. I love combining creativity with storytelling to create designs that not only look good but also make people feel something. My goal is to create work that connects with audiences on a deeper level, transforming concepts into visual experiences that inspire, engage, and communicate.

          When I dive into a project, I take a collaborative and thoughtful approach. I start by truly understanding the vision, goals, and values behind the idea, ensuring that every design decision supports the core message. I work closely with clients, listening to their needs and adding my own creative touch to elevate the concept. Whether I’m brainstorming, sketching, or polishing the final details, I’m always focused on creating designs that are not only visually captivating but also meaningful and effective. My aim is to craft experiences that leave a lasting impression and truly resonate with the audience
        </p>
      </section>
       
                
              
      </section>
      <section class="service_container">          
              <div class="">
                <h1 class="title">MY SERVICE</h1>
                <div class="services">
                  <div class="service-box">
                    <h2>POSTER DESIGN</h2>
                    <p>I create bold and impactful visuals that communicate messages clearly and creatively. I focus on design that grabs attention and leaves a lasting impression.</p>
                  </div>
                  <div class="service-box">
                    <h2>VIDEO EDITING</h2>
                    <p>I bring stories to life by blending visuals, sound, and emotion. I focus on creating engaging content that captures attention and delivers impact.</p>
                  </div>
                  <div class="service-box">
                    <h2>ANIMATING</h2>
                    <p>I bring ideas to life through motion and creativity, crafting engaging stories that captivate and inspire.</p>
                  </div>
                  <div class="service-box">
                    <h2>MOTION DESIGNING</h2>
                    <p>I create dynamic visuals that tell compelling stories, blending design and animation to engage and inspire.</p>
                  </div>
                </div>
              </div>
       </section>
       <br class="br">
    <section class="port-section" id="portfolio">
      <h1 class="port-h1">PORTFOLIOS</h1>
      <div class="portfolio-grid">
        <a href="port_html_1.html" class="portfolio-link">
          <div class="portfolio-item">
            <php? 
            echo'<img src="images/portfolio.svg" alt="Posters">
            <div class="overlay">
              <span>POSTERS</span>
            </div>
          </div>
        </a>
        <a href="port_html_2.html" class="portfolio-link">
          <div class="portfolio-item">
            <img src="images/portfolio 2.svg" alt="Posters">
            <div class="overlay">
              <span>3D</span>
            </div>
          </div>
        </a>
        <a href="port_html_3.html" class="portfolio-link">
          <div class="portfolio-item">
            <img src="images/portfolio 3.svg" alt="Posters">
            <div class="overlay">
              <span>MOTION DESIGN</span>
            </div>
          </div>
        </a>
        <a href="port_html_4.html" class="portfolio-link">
          <div class="portfolio-item">
            <img src="images/portfolio 4.svg" alt="Posters">
            <div class="overlay">
              <span>VIDEO EDITING</span>
            </div>
          </div>
        </a>
    </div>
      
    </section>
    <br class="br">
  <hr>
    
    
  <section>
    <div class="video-container">
      <video onclick="playVideo(event)" src="video/demo_reel.mp4" id="main-video"></video>
      <div class="video-controls">
          <button onclick="playVideo(event)"><i class="fa fa-play"></i><i class="fa fa-pause"></i></button>
          <button onclick="rewindVideo(event)"><i class="fa fa-fast-backward"></i></button>
          
          </div>
         
      </div>
  </div>
  
  <div class="softwares-container">
    <h2 class="softwares-title">SOFTWARES</h2>
    <div class="softwares-icons">
      <div class="software-icon xd">
        <img src="images/Icon corebrands-adobe-xd.svg" alt="Adobe XD">
        <p class="software-name">Xd</p>
      </div>
      <div class="software-icon ai">
        <img src="images/Icon corebrands-adobe-illustrator.svg" alt="Adobe Illustrator">
        <p class="software-name">Ai</p>
      </div>
      <div class="software-icon ae">
        <img src="images/Icon corebrands-adobe-after-effects.svg" alt="Adobe After Effects">
        <p class="software-name">Ae</p>
      </div>
      <div class="software-icon ps">
        <img src="images/Icon corebrands-adobe-photoshop.svg" alt="Adobe Photoshop">
        <p class="software-name">Ps</p>
      </div>
      <div class="software-icon c4d">
        <img src="images/file.svg" alt="Cinema 4D">
        <p class="software-name">C4D</p>
      </div>
    </div>
  </div>
  <br class="br">
  <hr>
  <div class="contact-container" id="contact">
    <div class="header-section">
      <h2 class="title-heading">CONTACT ME</h2>
      <div class="info-details">
        <p>joyalgregory665@gmail.com</p>
        <p>(382) 882 1685</p>
      </div>
    </div>
    <div class="form-section">
      <div class="form-left-column">
        <input type="text" class="input-field" placeholder="Your Name*" />
        <input type="email" class="input-field" placeholder="E-Mail*" />
        <input type="text" class="input-field" placeholder="Subject*" />
      </div>
      <div class="form-right-column">
        <textarea class="message-box" placeholder="Your message*"></textarea>
      </div>
    </div>
    <div class="submit-section">
      <button type="submit" class="submit-button">Send Message</button>
    </div>
    <div class="social-links">
      <a href="https://www.instagram.com/gregory_joyal/profilecard/?igsh=MTF1OHBmMXk2bGh1Mg==" target="_blank">
          <img src="images/Icon akar-instagram-fill.svg" alt="Instagram" class="icon-item" />
      </a>
      <a href="https://www.facebook.com/share/182LdetbtC/" target="_blank">
          <img src="images/Icon akar-facebook-fill.svg" alt="Facebook" class="icon-item" />
      </a>
      <a href="https://www.twitter.com/yourprofile" target="_blank">
          <img src="images/Icon simple-x.svg" alt="Twitter" class="icon-item" />
      </a>
      <a href="https://www.linkedin.com/in/joyal-gregory-33b2052a0?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank">
          <img src="images/Icon akar-linkedin-fill.svg" alt="LinkedIn" class="icon-item" />
      </a>
    </div>
</div>



  </div>

    </main>
    <footer class="unique-footer-container">
      <div class="footer-top-section">
        <div class="footer-info">
          <p class="footer-location">London / Canada</p>
          <p class="footer-email">joyalgregory665@gmail.com</p>
          <p class="footer-phone">(382) 882 1685</p>
          <div class="footer-social-icons">
            <img src="images/Icon akar-instagram-fill.svg" alt="Instagram" class="social-icon" />
            <img src="images/Icon akar-facebook-fill.svg" alt="Facebook" class="social-icon" />
            <a href="https://www.twitter.com/yourprofile" target="_blank">
              <img src="images/Icon simple-x.svg" alt="Twitter" class="social-icon" /></a>
            <a href="https://www.linkedin.com/in/joyal-gregory-33b2052a0?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank">
              <img src="images/Icon akar-linkedin-fill.svg" alt="LinkedIn" class="social-icon" /></a>
          </div>
        </div>
        <button class="footer-button">Let's Work Together</button>
        <div class="footer-nav-links">
          <a href="#home" class="footer-link">HOME</a>
          <a href="#contact" class="footer-link">CONTACT</a>
          <a href="#portfolio" class="footer-link">PORTFOLIO</a>
          <a href="#about" class="footer-link">ABOUT</a>
        </div>
        <div class="footer-logo">
          <img src="images/logo.svg" alt="Logo" class="footer-logo-image" />
        </div>
      </div>
      <div class="footer-bottom-section">
        <p class="footer-copyright">
          © 2024 Joyal Gregory. All Rights Reserved.
        </p>
      </div>
    </footer>
    <script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>