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
  $sql = "INSERT INTO feedback (name,email,message) VALUES ('$name','$email','$message')";
  if (mysqli_query($conn, $sql)) {
    echo "Thank you for giving feedback!";
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
    <title>Prevail - Feedback</title>
    <link rel="stylesheet" href="feedback.css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="shortcut icon" href="Img/rho.png" type="image/x-icon">
</head>
<body>
    <!-- NAvigationbar -->
    <nav>
      <ul class="sidebar">
        <li onclick=hideSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="38px" viewBox="0 -960 960 960" width="38px" fill="#000000"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
        <li><a href="homepage.php">Home</a></li>
        <li><a href="service2.php">Services</a></li>
        <li><a href="Plans2.php">Packages</a></li>
        <li><a href="AboutUs2.php">About Us</a></li>
        <li><a href="contact2.php">Contact</a></li>
      </ul>
      <ul>
        <li class="logo"><a href="homepage.php">Prevail</a></li>
        <li class="hideOnMobile"><a href="service2.php">Services</a></li>
        <li class="hideOnMobile"><a href="Plans2.php">Packages</a></li>
        <li class="hideOnMobile"><a href="AboutUs2.php">About Us</a></li>
        <li class="hideOnMobile"><a href="contact2.php">Contact</a></li>
        <li class="menu-button" onclick=showSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="38px" viewBox="0 -960 960 960" width="38px" fill="#c6dafb"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
      </ul>
    </nav>

    <!-- Section 3 -->
    <Section class="section3">
      <div class="container-footer">
        <form class="footer-form" method="post" action="">
            <h2>Feedback</h2>
            <input type="text" id="name" name="name" required placeholder="Your Name">
            <input type="email" id="email" name="email" required placeholder="Email">
            <textarea id="message" name="message" required placeholder="Share Your Feedback"></textarea>
            <button type="submit" name="send" id="send">Send</button>
        </form>
      </div>
    </Section>

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