<?php
include 'connect.php';

if (isset($_POST['signup'])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];

  // Check if email already exists in user_data table
  $checkEmail = "SELECT * FROM user_data WHERE email = '$email'";
  $result = $conn->query($checkEmail);

  if ($result->num_rows > 0) {
    $error = "Email already exists";
  } else {
    // Insert data into user_data table
    $insertQuery = "INSERT INTO user_data (fname, lname, email, password, confirm_password) VALUES ('$fname', '$lname', '$email', '$password', '$confirm_password')";
    if ($conn->query($insertQuery) === TRUE) {
      header("location: login.php");
    } else {
      echo "Error: " . $conn->error;
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Prevail</title>
    <link rel="stylesheet" href="signup.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="shortcut icon" href="Img/rho.png" type="image/x-icon">
  </head>
  <body>
    <!-- NAvigationbar -->
    <nav>
      <ul class="sidebar">
        <li onclick=hideSidebar()><a class="no-hover" href="#"><svg xmlns="http://www.w3.org/2000/svg" height="38px" viewBox="0 -960 960 960" width="38px" fill="#000000"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="service.php">Services</a></li>
        <li><a href="Plans.php">Packages</a></li>
        <li><a href="AboutUs.php">About Us</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="Login.php">Login</a></li>
        <li><a style="color: #071952"; class="on-signup" href="signup.php">Sign Up</a></li>
      </ul>
      <ul>
        <li class="logo"><a href="index.php">Prevail</a></li>
        <li class="hideOnMobile"><a href="service.php">Services</a></li>
        <li class="hideOnMobile"><a href="Plans.php">Packages</a></li>
        <li class="hideOnMobile"><a href="AboutUs.php">About Us</a></li>
        <li class="hideOnMobile"><a href="contact.php">Contact</a></li>
        <li class="hideOnMobile"><a style="text-decoration: underline;" href="Login.php">Login</a></li>
        <li class="menu-button" onclick=showSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="38px" viewBox="0 -960 960 960" width="38px" fill="#c6dafb"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
      </ul>
    </nav>
    <!--Form-->
    <section class="signup">
      <div class="container">
        <div class="box">
          <div class="left-side">
            <h1>Welcome to Prevail</h1>
            <p>Transform your online presence with our expert digital marketing, web development, and web designing services. Our team is dedicated to helping you succeed in the digital landscape.</p>
            <img src="Img/Open Peeps - Bust.png" alt="Image" class="img-responsive" />
          </div>
          <div class="right-side">


            <form class="form" method="post">

              <p class="title">Sign up </p>
              <p class="message">Welcome to Prevail.Com </p>
              <div class="flex">
                <label>
                  <input required="" placeholder="First Name" type="text" class="input"  name="fname" id="fname">
                </label>

                <label>
                  <input required="" placeholder="Last Name" type="text" class="input"  name="lname" id="lname">
                </label>
              </div>  

              <label>
                <input required="" placeholder="Enter Your Email" type="email" class="input" name="email" id="email">
              </label> 

              <label>
                <input placeholder="Create Password" class="input" name="password" id="password">
              </label>
              <label>
                <input placeholder="Confirm Password" class="input" name="confirm_password">
              </label>
              <input type="submit" class="submit" value="Sign Up" name="signup">
              <?php if (isset($error)) { ?>
                <p style="color: red;"><?php echo $error; ?></p>
              <?php } ?>
              <p class="signin">Already have an account ? <a href="Login.php">Login</a> </p>
              <!--<p class="Options">----- Or Sign Up with -----</p>
              <button class="google"><svg class="glogo" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="30px" height="30px"><path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"/><path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"/><path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"/><path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"/></svg><p class="gtext">Signup with Google</p></button>-->
            </form>
          </div>
        </div>
      </div>
    </section>
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


