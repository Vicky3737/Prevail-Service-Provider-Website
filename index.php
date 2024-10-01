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
    <title>Prevail</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="shortcut icon" href="Img/rho.png" type="image/x-icon">
    <!--<style>
      @keyframes appear{
        from{
          opacity: 0;
          scale: 0.2;
        }
        to{
          opacity: 1;
          scale: 1;
        }
      }
      .service-box1,.service-box2,.service-box3{
        animation: appear 3s linear;
        animation-timeline: view();
        animation-range: entry 0% cover 40%;
      }
    </style>-->
  </head>
  <body>
    <!-- Navigation bar -->
    <nav>
      <ul class="sidebar">
        <li onclick=hideSidebar()><a class="no-hover" href="#"><svg xmlns="http://www.w3.org/2000/svg" height="38px" viewBox="0 -960 960 960" width="38px" fill="#000000"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
        <li><a style="color: #071952"; href="index.php" class="active">Home</a></li>
        <li><a href="service.php">Services</a></li>
        <li><a href="Plans.php">Packages</a></li>
        <li><a href="AboutUs.php">About Us</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="Login.php">Login</a></li>
        <li><a href="signup.php">Sign Up</a></li>
      </ul>
      <ul>
        <li class="logo"><a href="index.php">Prevail</a></li>
        <li class="hideOnMobile"><a href="service.php">Services</a></li>
        <li class="hideOnMobile"><a href="Plans.php">Packages</a></li>
        <li class="hideOnMobile"><a href="AboutUs.php">About Us</a></li>
        <li class="hideOnMobile"><a href="contact.php">Contact</a></li>
        <li class="hideOnMobile" id="login"><a href="Login.php">Login</a></li>
        <li class="hideOnMobile" id="signup"><a href="signup.php">Sign Up</a></li>
        <li class="menu-button" onclick=showSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="38px" viewBox="0 -960 960 960" width="38px" fill="#c6dafb"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
      </ul>
    </nav>

    <!-- Hero Section  -->
    <section class="hero">
      <div class="hero-content">
        <h1>"Crafting Digital Experiences That Inspire"</h1>
        <p>
          From Strategy to Execution, We Bring Your Vision to Life with Our
          Creative and Technical Expertise.
        </p>
        <a href="AboutUs.php" class="learn-more">Learn More</a>
      </div>
      <div class="hero-image">
        <img src="./Img/heroimgbg.png" alt="Hero Image" />
      </div>
    </section>


    <!-- Our Services -->
    <section class="services">
      <h2>What We Offer</h2>
      <div class="container-Box">
        <div class="service-box1">
          <img src="./Img/content-marketing.png" alt="Service1 Image">
          <h3>Digital Marketing</h3>
          <p>
            We help you reach your target audience and grow your business
            through strategic online marketing.
          </p>
        </div>
        <div class="service-box2">
          <img src="./Img/responsive.png" alt="Service2 Image">
          <h3>Web Design & Development</h3>
          <p>
            Our team creates stunning and functional websites to enhance your
            online presence.
          </p>
        </div>
        <div class="service-box3">
          <img src="./Img/digital-art.png" alt="Service3 Image">
          <h3>Graphics Design</h3>
          <p>
            We deliver eye-catching graphics to effectively communicate your
            brand's message.
          </p>
        </div>
      </div>
    </section>


<!-- Section3 -->
 <section class="section3">
<div class="container">
  <div class="image-section">
    <div class="image-box">
      <p class="img-text-1">Grow your presence.</p>
        <img src="./Img/Sec3-img1.jpg" alt="Image1">
    </div>
    <div class="image-box">
        <img src="./Img/Sec3-img2.jpg" alt="Image2">
        <p class="img-text-2">We'll help put your company on the map,through websites and social platforms.</p>
    </div>
  </div>
</section>

<!--satisfaction-section -->
<div class="satisfaction-section">
  <h1>Our Clients' Satisfaction is Our Top Priority</h1>
  <div class="stats-container">
      <div class="stat-box">
          <img src="./Img/World.png" alt="Icon 1">
          <h2>140+</h2>
          <p>Countries Served</p>
      </div>
      <div class="stat-box">
          <img src="./Img/customer-satisfaction.png" alt="Icon 2">
          <h2>23,000+</h2>
          <p>Clients Served</p>
      </div>
      <div class="stat-box">
        <img src="./Img/good-feedback.png" alt="Icon 3">
        <h2>4.5/5</h2>
        <p>Client Ratings</p>
      </div>
  </div>
</div>

<!-- Testimonial Section  -->
<section class="testimonials">
  <div class="testimonial-box">
      <p class="testimonial-quote">"</p>
      <h3>Prevail helped me take my business to the next level...</h3>
      <p>I was blown away by the professionalism and expertise of the Prevail team. They helped me develop a stunning website and implemented a digital marketing strategy that has increased my online presence and driven real results for my business.</p>
      <div class="testimonial-rating">
          <span>★★★★★</span>
      </div>
      <p class="testimonial-author">Emily R.</p>
      <p class="testimonial-role">Founder, Emily's Boutique</p>
  </div>

  <div class="testimonial-box">
      <p class="testimonial-quote">"</p>
      <h3>The Prevail team is incredibly talented and easy to work with...</h3>
      <p>I've worked with several web development and digital marketing agencies in the past, but none have compared to Prevail. Their team is knowledgeable, responsive, and dedicated to delivering high-quality results. I couldn't be happier with the work they've done for me.</p>
      <div class="testimonial-rating">
          <span>★★★★★</span>
      </div>
      <p class="testimonial-author">David K.</p>
      <p class="testimonial-role">CEO, DK Enterprises</p>
  </div>

  <div class="testimonial-box">
      <p class="testimonial-quote">"</p>
      <h3>Prevail's graphic design services are top-notch...</h3>
      <p>I needed a logo and branding materials for my new startup, and Prevail delivered. Their designers are creative, attentive, and willing to go the extra mile to ensure that you're completely satisfied with the final product. I highly recommend them to anyone looking for exceptional graphic design services.</p>
      <div class="testimonial-rating">
          <span>★★★★★</span>
      </div>
      <p class="testimonial-author">Sarah T.</p>
      <p class="testimonial-role">Founder, GreenCycle</p>
  </div>
</section>


<!-- Our Pakage -->
<section class="planes">
  <div class="packages">
    <h2>Our Packages</h2>
    <p>Choose from our affordable and customizable digital marketing packages.</p>
  </div>
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
            <button class="buy-plan" onclick="location.href='Login.php'">
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
        <button class="buy-plan" onclick="location.href='Login.php'">
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
        <button class="buy-plan" onclick="location.href='Login.php'">
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
<!-- Java Scrip -->
<script>
  function showSidebar(){
    const sidebar = document.querySelector('.sidebar')
    sidebar.style.display = 'flex'

}
function hideSidebar(){
    const sidebar = document.querySelector('.sidebar')
    sidebar.style.display = 'none'
}
</script>
  </body>
</html>
