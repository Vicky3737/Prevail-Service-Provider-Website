<?php
// Include the database connection file
include 'connect.php';

// Check if the form is submitted
if (isset($_POST['submit'])) {
  // Store the user's input in variables
  $full_name = $_POST['full_name'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip_code = $_POST['zip_code'];
  $card_name = $_POST['card_name'];
  $credit_card_number = $_POST['credit_card_number'];
  $exp_month = $_POST['exp_month'];
  $exp_year = $_POST['exp_year'];
  $cvv = $_POST['cvv'];
  $monthly_plan = $_POST['monthly_plan'];

  // Insert the data into the database
  $query = "INSERT INTO payment (full_name, email, address, city, state, zip_code, card_name, credit_card_number, exp_month, exp_year, cvv, monthly_plan)
            VALUES ('$full_name', '$email', '$address', '$city', '$state', '$zip_code', '$card_name', '$credit_card_number', '$exp_month', '$exp_year', '$cvv', '$monthly_plan')";
    
    if (mysqli_query($conn, $query)) {
        header('Location: success.php'); // Redirect to Payment_success.php
        exit;
      } else {
        echo "Error: " . mysqli_error($conn);
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
    <title>Prevail - Payment</title>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="payment.css">
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
        <li><a href="AboutUs.php">About Us</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="index.php">Logout</a></li>
      </ul>
      <ul>
        <li class="logo"><a href="index.php">Prevail</a></li>
        <li class="hideOnMobile"><a href="service.php">Services</a></li>
        <li class="hideOnMobile"><a href="Plans.php">Packages</a></li>
        <li class="hideOnMobile"><a href="AboutUs.php">About Us</a></li>
        <li class="hideOnMobile"><a href="contact.php">Contact</a></li>
        <li class="hideOnMobile" id="login"><a href="index.php">Logout</a></li>
        <li class="menu-button" onclick=showSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="38px" viewBox="0 -960 960 960" width="38px" fill="#c6dafb"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
      </ul>
    </nav>

  <!-- Section 3 -->
  <div class="container">

    <form class="full-form" method="post" >

        <div class="row">

            <div class="col">
                <h3 class="title">Billing Address</h3>

                <div class="inputBox">
                    <label for="full_name">Full Name:</label>
                    <input type="text" id="full_name" name="full_name" placeholder="Enter your full name" required>
                </div>

                <div class="inputBox">
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" placeholder="Enter email address" required>
                </div>

                <div class="inputBox">
                    <label for="address">Address:</label>
                    <input type="text" id="address" name="address" placeholder="Enter address" required>
                </div>

                <div class="inputBox">
                    <label for="city">City:</label>
                    <input type="text" id="city" name="city" placeholder="Enter city" required>
                </div>

                <div class="flex">

                    <div class="inputBox">
                        <label for="state">State:</label>
                        <input type="text" id="state" name="state" placeholder="Enter state" required>
                    </div>

                    <div class="inputBox">
                        <label for="zip_code">Zip Code:</label>
                        <input type="number" id="zip_code" name="zip_code" placeholder="123 456" required>
                    </div>

                </div>

            </div>
            <div class="col">
                <h3 class="title">Payment</h3>

                <div class="inputBox">
                    <label for="name">Card Accepted:</label>
                    <img src="Img/card-img.png" alt="">
                </div>

                <div class="inputBox">
                    <label for="cardName">Name On Card:</label>
                    <input type="text" id="cardName" name="card_name" placeholder="Enter card name" required>
                </div>

                <div class="inputBox">
                    <label for="cardNum">Credit Card Number:</label>
                    <input type="text" id="cardNum" name="credit_card_number" placeholder="1111-2222-3333-4444" maxlength="19" required>
                </div>

                <div class="inputBox">
                    <label for="">Exp Month:</label>
                    <select name="exp_month" id="exp_month">
                        <option value="">Choose month</option>
                        <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
                    </select>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <label for="">Exp Year:</label>
                        <select name="exp_year" id="exp_year">
                            <option value="">Choose Year</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                        </select>
                    </div>

                    <div class="inputBox">
                        <label for="cvv">CVV</label>
                        <input type="number" id="cvv" name="cvv" placeholder="1234" required>
                    </div>
                </div>

            </div>

        </div>
          <h3>Monthly Plan</h3>
          <div class="itemall">
            <div>
              <p>Basic Plan: </p>
              <p>Growth Plan: </p>
              <p>Enterprise Plan: </p>
            </div>
            <div class="price">
              <input type="radio" class="select-box" name="monthly_plan" id="basic-plan" value="Basic Plan"> $500.00<br>
              <input type="radio" class="select-box" name="monthly_plan" id="growth-plan" value="Growth Plan"> $1500.00<br>
              <input type="radio" class="select-box" name="monthly_plan" id="enterprise-plan" value="Enterprise Plan"> $5000.00<br>
            </div>
          </div>
          <div class="buttons">
              <button name="" id="" class="cancel_btn" onclick="location.href='Plans2.php'">Cancel</button>
              <button name="submit" id="" class="submit_btn">Proceed to Checkout</button>
          </div>
    </form>

  </div>
   
    <!-- JavaScript -->
    <script>
      var cardNumInput = document.querySelector('#cardNum')

      cardNumInput.addEventListener('keyup', () => {
          let cNumber = cardNumInput.value
          cNumber = cNumber.replace(/\s/g, "")

          if(Number(cNumber)){
              cNumber = cNumber.match(/.{1,4}/g)
              cNumber = cNumber.join(" ")
              cardNumInput.value = cNumber
          }
      })
    </script>
    <script src="index.js"></script> 
</body>
</html>