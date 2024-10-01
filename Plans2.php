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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Prevail - Packages</title>
    <link rel="stylesheet" href="Plans.css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="shortcut icon" href="Img/rho.png" type="image/x-icon">
</head>
<body>
    <!-- NAvigationbar -->
    <nav>
      <ul class="sidebar">
        <li onclick=hideSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="38px" viewBox="0 -960 960 960" width="38px" fill="#000000"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
        <li><a href="homepage.php">Home</a></li>
        <li><a href="service2.php">Services</a></li>
        <li class="WebOpen"><a href="Plans2.php">Packages</a></li>
        <li><a href="AboutUs2.php">About Us</a></li>
        <li><a href="contact2.php">Contact</a></li>
        <li><a href="index.php">Logout</a></li>
      </ul>
      <ul>
        <li class="logo"><a href="homepage.php">Prevail</a></li>
        <li class="hideOnMobile"><a href="service2.php">Services</a></li>
        <li class="hideOnMobile"><a class="WebOpen" href="Plans2.php">Packages</a></li>
        <li class="hideOnMobile"><a href="AboutUs2.php">About Us</a></li>
        <li class="hideOnMobile"><a href="contact2.php">Contact</a></li>
        <li class="hideOnMobile" id="login"><a href="index.php">Logout</a></li>
        <li class="menu-button" onclick=showSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="38px" viewBox="0 -960 960 960" width="38px" fill="#c6dafb"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
      </ul>
    </nav>
<!-- Hero section -->
<section class="main-container">
    <div class="content-tittle">
      <h2>Our Packages</h2>
      <p>Choose from our affordable and customizable digital marketing packages.</p>
    </div>
  </section>

<!-- Our Pakage -->
<section class="planes">
    <div class="planes-card">
      <div class="card">
            <div class="content">
              <div class="title">Basic Plan</div>
              <div class="price">$500/month</div>
                <div class="description">
                  <p class="Key-fectures">Key Features:</p>
                  <p>• Basic website design and development</p>
                  <p>• Social media setup and management (limited platforms)</p>
                  <p>• Search engine optimization (SEO) basics</p>
                  <p>• Email marketing setup</p>
                  <p>• Basic graphic design services (logo, business cards)</p>
                </div>
            </div>
            <button class="buy-plan" onclick="location.href='payment2.php'">
                Buy now
              </button>
        </div>
        <div class="card">
          <div class="content">
            <div class="title">Growth Plan</div>
            <div class="price">$1500/month</div>
            <div class="description">
              <p class="Key-fectures">Key Features:</p>
              <p>• Advanced website design and development (responsive design, e-commerce integration)</p>
              <p>• Comprehensive social media management</p>
              <p>• In-depth SEO and content marketing</p>
              <p>• Email marketing automation</p>
              <p>• Professional graphic design services</p>
            </div>
          </div>
          <button class="buy-plan" onclick="location.href='payment2.php'">
              Buy now
            </button>
      </div>
      <div class="card">
        <div class="content">
          <div class="title">Enterprise Plan</div>
          <div class="price">$5000/month</div>
          <div class="description">
            <p class="Key-fectures">Key Features:</p>
                  <p>• Custom website and application development</p>
                  <p>• Data-driven digital marketing strategies</p>
                  <p>• Advanced SEO and PPC campaigns</p>
                  <p>• Email marketing with CRM integration</p>
                  <p>• Full-service graphic design and branding</p>
                  <p>• Dedicated account manager</p>
          </div>
        </div>
          <button class="buy-plan" onclick="location.href='payment2.php'">
            Buy now
          </button>
        </div> 
      </div>
    </section>

    
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

    <!-- JavaScript -->
    <script src="index.js"></script>  
</body>
</html>