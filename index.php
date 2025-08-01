<!-- index.php -->
<?php
	include "dbconn.php";
	$obj = new tiffinclass();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Healthy Tiffin - Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to right, #ff9a9e, #fad0c4);
      color: #333;
    }
    header {
      background: #ff7043;
      padding: 20px;
      color: white;
      text-align: center;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }
    header h1 {
      margin: 0;
      font-size: 32px;
    }
    nav {
      text-align: center;
      background: #fff3e0;
      padding: 10px;
    }
    nav a {
      margin: 10px;
      text-decoration: none;
      color: #ff5722;
      font-weight: bold;
      font-size: 18px;
    }
    nav a:hover {
      text-decoration: underline;
    }
    .hero {
      text-align: center;
      padding: 60px 20px;
    }
    .hero h2 {
      font-size: 36px;
      color: #e65100;
    }
    .hero p {
      font-size: 20px;
      max-width: 700px;
      margin: auto;
      margin-bottom: 20px;
    }
    .cta-buttons {
      margin-top: 30px;
    }
    .cta-buttons a {
      display: inline-block;
      background: #ff7043;
      color: white;
      padding: 15px 30px;
      border-radius: 8px;
      text-decoration: none;
      margin: 10px;
      font-size: 18px;
      box-shadow: 0 6px 15px rgba(0,0,0,0.2);
      transition: 0.3s ease;
    }
    .cta-buttons a:hover {
      background: #ff5722;
    }
    footer {
      background: #fff;
      padding: 20px;
      text-align: center;
      color: #888;
    }
  </style>
</head>
<body>

  <header>
    <h1>Healthy Tiffin Services</h1>
    <p><i class="fas fa-utensils"></i> Get Home Food at Your Doorstep</p>
  </header>

  <nav>
    <a href="index.php">Home</a>
    <a href="register.php">Register</a>
    <a href="customer-login.php">Login</a>
    <a href="help.php">Help Center</a>
    <a href="feedback.php">Feedback</a>
    <a href="faqs.php">FAQs</a>
  </nav>

  <div class="hero">
    <h2>We Provide Best: Eat Healthy and Stay Healthy</h2>
    <p>Home-cooked and fresh tiffin service. Say goodbye to cooking hassles with our reliable and affordable meals. 
       Bringing you the joy of homemade food through our tiffin service. Ordering healthy food is now easier!</p>

    <img src="images/lunch.jpg" alt="Lunch" width="20%" height="180px">
    <img src="images/tiffin.jpg" alt="Dinner" width="20%" height="180px">
    
    <div class="cta-buttons">
      <a href="register.php"><i class="fas fa-user-plus"></i> Get Started</a>
     <!-- <a href="login-customer.php"><i class="fas fa-sign-in-alt"></i> Login</a>-->
    </div>
  </div>

  <footer>
    &copy; 2025 Healthy Tiffin Service. All rights reserved.
  </footer>

</body>
</html>
