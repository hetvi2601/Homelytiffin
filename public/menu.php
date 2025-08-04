<!-- menu.php -->
<?php
	include "dbconn.php";
	$obj = new tiffinclass();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Menu - Healthy Tiffin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to right, #ff9a9e, #fad0c4);
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 30px;
    }
    .menu-container {
      background: white;
      padding: 30px;
      border-radius: 15px;
      width: 80%;
      box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
      margin-top: 20px;
    }
    h2 {
      color: #ff5722;
    }
    .meal {
      background: #fff3e0;
      padding: 20px;
      border-radius: 10px;
      margin: 15px 0;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      text-align: center;
    }
    .meal img {
      width: 100%;
      border-radius: 10px;
    }
    .meal h3 {
      color: #ff5722;
      margin-top: 15px;
    }
    .meal p {
      color: #333;
    }
    .btn {
      background: #ff5722;
      color: white;
      padding: 12px 20px;
      border-radius: 8px;
      text-decoration: none;
      display: inline-block;
      margin-top: 10px;
      transition: 0.3s;
    }
    .btn:hover {
      background: #e65100;
    }
 .container {
      background: #fff3e0;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 6px 16px rgba(0,0,0,0.2);
      max-width: 700px;
      margin: 0 auto;
      text-align: center;
    }

  </style>
</head>
<body>

  <div class="menu-container">
    <h2>Our Delicious Menu</h2>

    <!-- Meal 1 -->
    <div class="meal">
      <img src="meal1.jpg" alt="Meal 1" />
      <h3>Vegetarian Delight</h3>
      <p>₹200 per meal. Fresh and tasty vegetarian options.</p>
      <a href="#" class="btn">Order Now</a>
    </div>

    <!-- Meal 2 -->
    <div class="meal">
      <img src="meal2.jpg" alt="Meal 2" />
      <h3>Chicken Curry</h3>
      <p>₹250 per meal. Spicy and flavorful chicken curry.</p>
      <a href="#" class="btn">Order Now</a>
    </div>

    <!-- Meal 3 -->
    <div class="meal">
      <img src="meal3.jpg" alt="Meal 3" />
      <h3>Pasta Primavera</h3>
      <p>₹300 per meal. Creamy pasta with fresh vegetables.</p>
      <a href="#" class="btn">Order Now</a>
    </div>
  </div>
  <button class="btn" onclick="goBack()">Back to Dashboard</button>

 <h1>Tiffin Menu</h1>

  <div class="container">
    <div class="menu-item">🍛 Dal Tadka + Rice + Roti + Salad</div>
    <div class="menu-item">🍲 Paneer Butter Masala + Naan</div>
    <div class="menu-item">🥘 Mix Veg + Chapati + Curd</div>
    <div class="menu-item">🍽️ Chole Bhature + Pickle</div>
    <div class="menu-item">🥗 Veg Pulao + Raita</div>

    <button class="btn" onclick="goBack()">Back to Dashboard</button>
  </div>

 


<script>
    if(localStorage.getItem('isCustomerLoggedIn') !== 'true') {
      alert('Please login first!');
      window.location.href = 'customer-login.php';
    }

    function goBack() {
      window.location.href = 'customer-dashboard.php';
    }
  </script>

</body>
</html>