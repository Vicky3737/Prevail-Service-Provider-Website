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


if (isset($_POST['send'])) {
  // Get the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Insert the data into the database
  $sql = "INSERT INTO questions (name,email,message) VALUES ('$name','$email','$message')";
  if (mysqli_query($conn, $sql)) {
    echo "Thank you for submitting your question!";
  } else {
    echo "Error adding question: " . mysqli_error($conn);
  }
}

// Close the database connection
mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Prevail - About Us</title>
    <link rel="stylesheet" href="AboutUs.css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="shortcut icon" href="Img/rho.png" type="image/x-icon">
</head>
<body>
    <!-- NAvigationbar -->
    <nav>
      <ul class="sidebar">
        <li onclick=hideSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="38px" viewBox="0 -960 960 960" width="38px" fill="#000000"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
        <li><a href="index.php">Home</a></li>
        <li><a href="service.php">Services</a></li>
        <li><a href="Plans.php">Packages</a></li>
        <li class="WebOpen"><a href="AboutUs.php">About Us</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
      <ul>
        <li class="logo"><a href="index.php">Prevail</a></li>
        <li class="hideOnMobile"><a href="service.php">Services</a></li>
        <li class="hideOnMobile"><a href="Plans.php">Packages</a></li>
        <li class="hideOnMobile"><a class="WebOpen" href="AboutUs.php">About Us</a></li>
        <li class="hideOnMobile"><a href="contact.php">Contact</a></li>
        <li class="menu-button" onclick=showSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="38px" viewBox="0 -960 960 960" width="38px" fill="#c6dafb"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
      </ul>
    </nav>

    <!-- About us section -->
    <div class="about-main">
        <div class="about-content">
        <h1>"About Us</h1>
          <p> Prevail, we create outstanding digital experiences that bring your vision to life. Our team blends creativity and technical expertise to ensure your brand shines online. From digital marketing to web design and graphics, we focus on innovation and excellence to help you reach your audience and grow your business.
          </p>
        </div>

        <div class="overflow-hidden">
            <img src="./Img/Aboutusmain.jpg" loading="lazy">
        </div>
      </div>

    <!-- OuR mission-->
  <section class="our-mission">
    <div class="mission-img">
        <img src="./Img/v1.jpg" loading="lazy">
    </div>
    <div class="mission-content">
      <h1>"Our Mission</h1>
        <p> Our mission is to craft innovative digital experiences that make your brand stand out. We blend creativity with technical expertise to help you connect with your audience and grow your business.
        </p>
      </div>
    </section>

<!-- Our Team Leader -->
<section class="our-team-leader">
    <div class="container-ol">
      <h2>Meet Our Team Leaders</h2>
      <div class="otl-container">
        <div class="otl-card">
          <div class="otl-image">
            <img src="./Img/Team1.jpg" alt="Team Leader 1" class="rounded-image">
          </div>
          <div class="otl-content">
            <h3>Alex Johnson</h3>
            <p>CEO & Founder</p>
            <p>As CEO & Founder, Alex Johnson leads Prevail with 15 years of expertise in digital marketing and strategic innovation.</p>
          </div>
        </div>
        <div class="otl-card">
          <div class="otl-image">
            <img src="./Img/team2.jpg" alt="Team Leader 2" class="rounded-image">
          </div>
          <div class="otl-content">
            <h3>Maria Thompson</h3>
            <p>Chief Creative Officer</p>
            <p>Maria Thompson, Chief Creative Officer, crafts stunning designs, ensuring brand alignment with over a decade of graphic design experience.</p>
          </div>
        </div>
        <div class="otl-card">
          <div class="otl-image">
            <img src="./Img/Team1.jpg" alt="Team Leader 3" class="rounded-image">
          </div>
          <div class="otl-content">
            <h3>James Parker</h3>
            <p>Chief Technology Officer</p>
            <p>James Parker, Chief Technology Officer, ensures top-tier functionality, leading Prevail's tech operations with extensive web development expertise.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section4 --> 
  <div class="last-section">
    <div class="content-sl">
      <h2>"Make your mark in digital world.</h2>
      <p>Work with us</p>
    </div>
    <div class="img-last">
        <img src="./Img/Team4.jpg" loading="lazy">
    </div>
  </div>

    <!-- Footer -->
    <footer>
        <div class="container-footer">
          <div class="footer-content">
            <div class="footer-form">
              <form method="post" action="#">
              <h2>Have a Question?</h2>
                <input type="text" id="name" name="name" required placeholder="Your Name">
                <input type="email" id="email" name="email" required placeholder="Email">
                <textarea id="message" name="message" required placeholder="Message"></textarea>
                <button type="submit" name="send" id="send">Send</button>
                
              </form>
            </div>
            <div class="footer-info">
              <p>Get in touch with us for any questions or concerns.</p>
              <p>+91 555-555-5555</p>
              <p><a href="prevail@example.com">Prevail@mial.com</a></p>
              <div class="social-icons">
                <a href="#" target="_blank"><img src="./Img/instagram.png" alt="Instagram"></a>
                <a href="#" target="_blank"><img src="./Img/twitter.png" alt="Twitter"></a>
                <a href="#" target="_blank"><img src="./Img/git.png" alt="Github"></a>
              </div>
            </div>
          </div>
        </div>
      </footer>
         <!-- Footer -->
<section class="footer">
  <div class="footer-row">
    <div class="footer-col">
      <h4>Info</h4>
      <ul class="links">
        <li><a href="AboutUs.php">About Us</a></li>
        <li><a href="service.php">Services</a></li>
        <li><a href="Plans.php">Packages</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="feedback.php">Feedback</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>All Services</h4>
      <ul class="links">
        <li><a href="service.php">Digital Marketing</a></li>
        <li><a href="service.php">Web Design & Development</a></li>
        <li><a href="service.php">Graphics Design</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Our Packages</h4>
      <ul class="links">
        <li><a href="Plans.php">Basic Plan</a></li>
        <li><a href="Plans.php">Growth Plan</a></li>
        <li><a href="Plans.php">Enterprise Plan</a></li>
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
    <!-- JavaScript -->
    <script src="index.js"></script>
</body>
</html>