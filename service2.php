<?php
// Include the database connection file
include("connect.php");

// Check if the form has been submitted
if (isset($_POST['submit'])) {
  // Get the email address from the form
  $email = $_POST['email'];

  // Check if the email address is valid
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Insert the email address into the database
    $sql = "INSERT INTO email (email) VALUES ('$email')";
    if (mysqli_query($conn, $sql)) {
      echo "Hi there! Thank you for subscribing to Prevail. We'll be in touch soon to discuss how we can help you achieve your goals.";
    } else {
      echo "Error adding email address: " . mysqli_error($conn);
    }
  } else {
    echo "Invalid email address!";
  }
}

// Close the database connection
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="service.css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="shortcut icon" href="Img/rho.png" type="image/x-icon">
    <title>Prevail - Services</title>
</head>
<body>
    <!-- NAvigationbar -->
    <nav>
      <ul class="sidebar">
        <li onclick=hideSidebar()><a class="no-hover" href="#"><svg xmlns="http://www.w3.org/2000/svg" height="38px" viewBox="0 -960 960 960" width="38px" fill="#000000"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
        <li><a href="homepage.php" >Home</a></li>
        <li><a class="WebOn" href="service2.php">Services</a></li>
        <li><a href="Plans2.php">Packages</a></li>
        <li><a href="AboutUs2.php">About Us</a></li>
        <li><a href="contact2.php">Contact</a></li>
        <li><a href="index.php">Logout</a></li>
      </ul>
      <ul>
        <li class="logo"><a href="homepage.php">Prevail</a></li>
        <li class="hideOnMobile"><a style="color: #37B7C3;" href="service2.php">Services</a></li>
        <li class="hideOnMobile"><a href="Plans2.php">Packages</a></li>
        <li class="hideOnMobile"><a href="AboutUs2.php">About Us</a></li>
        <li class="hideOnMobile"><a href="contact2.php">Contact</a></li>
        <li class="hideOnMobile" id="login"><a href="index.php">Logout</a></li>
        <li class="menu-button" onclick=showSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="38px" viewBox="0 -960 960 960" width="38px" fill="#c6dafb"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
      </ul>
    </nav>

  <!-- Hero section -->
      <section class="main-container">
        <div class="content-tittle">
          <h2>What We Provide You?</h2>
          <p>We provide expert digital marketing, web development, and graphic design services. Our offerings include SEO, social media management, custom website design, e-commerce solutions, branding, and UI/UX design to <span class="light"> "Help Your Business Thrive Online"</span>.</p>
        </div>
      </section>


      <!-- small box section-->
    <section class="small-box">
      <div class="services-container">
        <div class="service-box">
            <i class="icon">📊</i>
            <h3>Website Development</h3>
        </div>
        <div class="service-box">
            <i class="icon">🎨</i>
            <h3>Graphic Designing</h3>
        </div>
        <div class="service-box">
            <i class="icon">💻</i>
            <h3>UI/UX Web Designing</h3>
        </div>
        <div class="service-box">
            <i class="icon">✏️</i>
            <h3>Sketch Designing</h3>
        </div>
        <div class="service-box">
            <i class="icon">📝</i>
            <h3>SEO & Content Writing</h3>
        </div>
        <div class="service-box">
            <i class="icon">📈</i>
            <h3>Digital Market Planning</h3>
        </div>
        <div class="service-box">
            <i class="icon">📊</i>
            <h3>Business Management</h3>
        </div>
        <div class="service-box">
            <i class="icon">📊</i>
            <h3>Market Data Analyzing</h3>
        </div>
    </div>
    </section>  




<!-- section1 -->
<main>
  <section class="service">
      <div class="service-item">
          <div class="service-content1">
              <div class="service-img">
                  <img class="img-1" src="./Img/DM.jpg" alt="Service 1">
              </div>
              <div class="service-text1 service-text">
                  <h2>1.Digital Marketing</h2>
                    <div class="line"></div>
                  <p>Services include SEO to improve search engine rankings, social media management to grow and engage your audience, content marketing to create compelling content, PPC advertising for effective ad campaigns, and email marketing to design and automate personalized campaigns, all supported by detailed analytics for performance optimization.</p>
              </div>
          </div>
      </div>
      <div class="service-item">
          <div class="service-content2">
              <div class="service-text2 service-text">
                  <h2>2.Web Devlopment</h2>
                  <div class="line"></div>
                  <p>Expertise covers custom website design, secure e-commerce solutions, CMS integration, ongoing website maintenance, and the development of custom web applications.</p>
              </div>
              <div class="service-img">
                <img class="img-2" src="./Img/WD.jpg" alt="Service 2">
            </div>
          </div>
      </div>
      <div class="service-item">
          <div class="service-content3">
              <div class="service-img">
                  <img class="img-3" src="./Img/GD.jpg" alt="Service 3">
              </div>
              <div class="service-text3 service-text">
                  <h2>3.Graphics Design</h2>
                  <div class="line"></div>
                  <p>Services encompass branding with logos and business cards, visually appealing web design, print materials like brochures and flyers, digital graphics for online use, and UI/UX design to ensure an intuitive user experience.</p>
              </div>
          </div>
      </div>
  </section>
</main>



       <!-- Footer -->
<section class="footer">
  <div class="footer-row">
    <div class="footer-col">
      <h4>Info</h4>
      <ul class="links">
        <li><a href="AboutUs2.php">About Us</a></li>
        <li><a href="service2.php">Services</a></li>
        <li><a href="Plans2.php">Packages</a></li>
        <li><a href="contact2.php">Contact</a></li>
        <li><a href="feedback2.php">Feedback</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>All Services</h4>
      <ul class="links">
        <li><a href="service2.php">Digital Marketing</a></li>
        <li><a href="service2.php">Web Design & Development</a></li>
        <li><a href="service2.php">Graphics Design</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Our Packages</h4>
      <ul class="links">
        <li><a href="Plans2.php">Basic Plan</a></li>
        <li><a href="Plans2.php">Growth Plan</a></li>
        <li><a href="Plans2.php">Enterprise Plan</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Stay Connected</h4>
      <p>
        Get expert insights and exclusive content on digital marketing, web development, and graphic design. Subscribe to our newsletter.
      </p>
      </p>
      <form method="post" action="#">
          <input type="email" placeholder="Your email" name="email" id="email" required>
          <button type="submit" name="submit">SUBSCRIBE</button>
        </form>
      <div class="icons">
        <i class="fa-brands fa-facebook-f"></i>
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-linkedin"></i>
        <i class="fa-brands fa-github"></i>
      </div>
    </div>
  </div>
</section>
  
  <!-- Java Scrip -->
<script src="./index.js" ></script>

</body>
</html>