<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="css/main.css">

    
<?php
require_once('includes/connect.php');

$query = 'SELECT * FROM projects, media WHERE project_id = projects.id AND media.id ='.$_GET['id'];

$results = mysqli_query($connect,$query);

$row = mysqli_fetch_assoc($results);

?>
</head>
<body>

<header class="sticky">
        <h1 class="hidden">portfolio page</h1>
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
              <li id="HOME"><a href="index.html#home">HOME</a></li>
              <li id="PORTFOLIO"><a href="index.html#portfolio">PORTFOLIO</a></li>
              <li id="ABOUT"><a href="index.html#about">ABOUT</a></li>
              <li id="CONTACT"><a href="index.html#contact">CONTACT</a></li>
          </ul>
          </div>
        </nav>
   </header>
<main>

  <div class="case-study">
    <h1 class="orangeh1">Orange Panda Poster Series</h1>
    <h2 class="orangeh2">Objective</h2>
    <p>Design six sleek posters for "Orange Panda" to promote its innovative audio products, targeting young tech enthusiasts.</p>
    
    <h2 class="orangeh2">Approach</h2>
    <ul>
      <li><strong>Inspiration:</strong> Futuristic designs, minimalist layouts, and thin typography.</li>
      <li><strong>Color Palette:</strong> Black for sophistication, orange for vibrancy.</li>
      <li><strong>Typography:</strong> Clean bunya fonts for modern appeal.</li>
      <li><strong>Imagery:</strong> Dynamic product renders highlighting the earbuds' premium quality.</li>
      <li><strong>Message:</strong> Taglines like "Escape the noise, embrace the music."</li>
    </ul>
    
    <h2>Tools</h2>
    <p>Adobe Photoshop, Illustrator, and cinema4D for 3D renders and design execution.</p>
    
    <h2>Outcome</h2>
    <p>A cohesive and visually striking poster series that effectively conveys the brand's futuristic identity and resonates with the target audience.</p>
  </div>
      <div class="poster-grid">
        <div class="poster"><img src="images/earbuds_poster1.svg" alt="Poster 1"></div>
        <div class="poster"><img src="images/earbuds_poster2.svg" alt="Poster 2"></div>
        <div class="poster"><img src="images/earbuds_poster3.svg" alt="Poster 3"></div>
        <div class="poster"><img src="images/earbuds_poster4.svg" alt="Poster 4"></div>
        <div class="poster"><img src="images/earbuds_poster5.svg" alt="Poster 5"></div>
        <div class="poster"><img src="images/earbuds_poster6.svg" alt="Poster 6"></div>
      </div>
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
  </main>
   
</body>
</html>