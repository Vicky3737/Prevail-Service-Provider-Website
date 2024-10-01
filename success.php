<?php
session_start();
// Include the database connection file
include("connect.php");
if(!isset($_SESSION['valid'])){
    header("Location: homepage.php");
   }


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


// Retrieve user data from the database
$user_id = $_SESSION['valid'];
$sql = "SELECT * FROM user_data WHERE id = '$user_id'";
$result = mysqli_query($conn, $sql);
$user_data = mysqli_fetch_assoc($result);


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
    <style>
      .container {
        background-color: #FFFFFF;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.35);
        text-align: center;
        padding: 50px;
        width: 400px;
        align-items: center;
        justify-content: center;
        box-sizing: border-box;
        margin: auto;
        margin-top: 100px;
        margin-bottom: 100px;
      }

      .checkmark {
        background-color: #071952;
        border-radius: 50%;
        width: 60px;
        height: 60px;
        display: flex;
        justify-content: center;
        align-items: center;
        position: absolute;
        top: -30px;
        left: calc(50% - 30px);
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      }

      .checkmark i {
        color: #FFFFFF;
        font-size: 36px;
      }

      h1 {
        font-size: 24px;
        color: #333333;
        margin: 40px 0 10px;
        font-weight: 600;
      }

      p {
        font-size: 16px;
        color: #666666;
        margin: 0 0 20px;
      }

      .button {
        background-color: #071952;
        color: #FFFFFF;
        border: none;
        border-radius: 5px;
        padding: 12px 20px;
        font-size: 16px;
        cursor: pointer;
        box-shadow: 4px 4px rgba(0, 0, 0, 0.1);
        width: 100%;
      }

      .button:hover {
        transform: scale(1.05); /* add a slight scale effect on hover */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* add a subtle box shadow on hover */
        transition: 0.3s;
      }
        
    </style>
</head>
<body>
    <!-- NAvigationbar -->
    <nav>
      <ul class="sidebar">
        <li onclick=hideSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="38px" viewBox="0 -960 960 960" width="38px" fill="#000000"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
        <li><a href="homepage.php">Home</a></li>
        <li><a href="service2.php">Services</a></li>
        <li><a href="Plans2.php">Packages</a></li>
        <li ><a href="AboutUs2.php">About Us</a></li>
        <li><a href="contact2.php">Contact</a></li>
        <li><a href="my_profile.php">Profile</a></li>
        <li><a href="index.php">Logout</a></li>
      </ul>
      <ul>
        <li class="logo"><a href="homepage.php">Prevail</a></li>
        <li class="hideOnMobile"><a href="service2.php">Services</a></li>
        <li class="hideOnMobile"><a href="Plans2.php">Packages</a></li>
        <li class="hideOnMobile"><a href="AboutUs2.php">About Us</a></li>
        <li class="hideOnMobile"><a href="contact2.php">Contact</a></li>
        <li class="hideOnMobile"><a href="my_profile.php">Profile</a></li>
        <li class="hideOnMobile" id="login"><a href="index.php">Logout</a></li>
        <li class="menu-button" onclick=showSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="38px" viewBox="0 -960 960 960" width="38px" fill="#c6dafb"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
      </ul>
    </nav>

    <!--thank you-->
    <div class="container">
      <h1>Thank You!</h1>
      <p>You have successfully purchased our plan. We're excited to help you achieve your goals. Our team will be in touch with you soon to discuss the next steps.</p>
      <button class="button" onclick="location.href='homepage.php'">OK</button>
  </div>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
   
         <!-- Footer -->
<section class="footer">
  <div class="footer-row">
    <div class="footer-col">
      <h4>Info</h4>
      <ul class="links">
        <li><a href="AboutUs.php">About Us</a></li>
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