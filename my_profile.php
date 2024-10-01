<?php
session_start();
// Include the database connection file
include("connect.php");

// Check if user is authenticated
if (!isset($_SESSION['valid'])) {
    header("Location: homepage.php");
    exit();
}

// Retrieve user data from the database securely
$user_id = $_SESSION['valid'];
$stmt = $conn->prepare("SELECT fname, lname, email FROM user_data WHERE id = ?");
$stmt->bind_param("i", $user_id);

if ($stmt->execute()) {
    $result = $stmt->get_result();

    // Check if any result was returned
    if ($result->num_rows > 0) {
        $user_data = $result->fetch_assoc();
    } else {
        $user_data = null; // No user found
    }
} else {
    // Log the error or display a message (in production, don't show detailed errors to the user)
    echo "Error executing query: " . $stmt->error;
    $user_data = null;
}

// Close the statement and connection
$stmt->close();
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
        /* My Profile Section */
.my-profile {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 100px;
  background-color: #f7f7f7;
  border: 1px solid #ddd;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.my-profile h2 {
  font-size: 24px;
  margin-bottom: 20px;
}

.my-profile ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.my-profile li {
  margin-bottom: 20px;
}

.my-profile li label {
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
}

.my-profile li input[type="text"], .my-profile li input[type="email"], .my-profile li input[type="password"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.my-profile li input[type="submit"] {
  background-color: #4CAF50;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.my-profile li input[type="submit"]:hover {
  background-color: #3e8e41;
}

/* Responsive Styles */

@media only screen and (max-width: 768px) {
  .my-profile {
    padding: 20px;
  }
  .my-profile h2 {
    font-size: 18px;
  }
  .my-profile li {
    margin-bottom: 15px;
  }
  .my-profile li label {
    margin-bottom: 5px;
  }
  .my-profile li input[type="text"], .my-profile li input[type="email"], .my-profile li input[type="password"] {
    padding: 5px;
  }
  .my-profile li input[type="submit"] {
    padding: 5px 10px;
  }
}

@media only screen and (max-width: 480px) {
  .my-profile {
    padding: 10px;
  }
  .my-profile h2 {
    font-size: 14px;
  }
  .my-profile li {
    margin-bottom: 10px;
  }
  .my-profile li label {
    margin-bottom: 2px;
  }
  .my-profile li input[type="text"], .my-profile li input[type="email"], .my-profile li input[type="password"] {
    padding: 2px;
  }
  .my-profile li input[type="submit"] {
    padding: 2px 5px;
  }
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
        <li class="WebOpen"><a href="my_profile.php">Profile</a></li>
        <li><a href="index.php">Logout</a></li>
      </ul>
      <ul>
        <li class="logo"><a href="homepage.php">Prevail</a></li>
        <li class="hideOnMobile"><a href="service2.php">Services</a></li>
        <li class="hideOnMobile"><a href="Plans2.php">Packages</a></li>
        <li class="hideOnMobile"><a href="AboutUs2.php">About Us</a></li>
        <li class="hideOnMobile"><a href="contact2.php">Contact</a></li>
        <li class="hideOnMobile"><a class="WebOpen" href="my_profile.php">Profile</a></li>
        <li class="hideOnMobile" id="login"><a href="index.php">Logout</a></li>
        <li class="menu-button" onclick=showSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="38px" viewBox="0 -960 960 960" width="38px" fill="#c6dafb"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
      </ul>
    </nav>


    <!-- My Profile Section -->
    <section class="my-profile">
        <div class="profile-container">
            <h2>My Profile</h2>
            <div class="profile-info">
                <?php if ($user_data): ?>
                    <p>First Name: <?php echo htmlspecialchars($user_data['fname']); ?></p>
                    <p>Last Name: <?php echo htmlspecialchars($user_data['lname']); ?></p>
                    <p>Email: <?php echo htmlspecialchars($user_data['email']); ?></p>
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