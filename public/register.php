<!-- register.php -->
<?php
	include "dbconn.php";
	$obj = new tiffinclass();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Register - Healthy Tiffin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to right, #fbc2eb, #a6c1ee);
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
    .container {
      text-align: center;
      background: white;
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
      max-width: 700px;
      width: 90%;
    }
    h1 {
      color: #e65100;
      margin-bottom: 30px;
    }
    .roles {
      display: flex;
      justify-content: center;
      gap: 30px;
      flex-wrap: wrap;
    }
    .role-card {
      background: #fff8e1;
      border-radius: 15px;
      padding: 20px;
      width: 220px;
      cursor: pointer;
      transition: 0.3s ease;
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    }
    .role-card:hover {
      transform: scale(1.05);
      background: #ffe082;
    }
    .role-card i {
      font-size: 40px;
      color: #ff6f00;
      margin-bottom: 15px;
    }
    .role-card h2 {
      color: #ff6f00;
      margin: 10px 0;
    }
    .role-card img {
      width: 80px;
      height: 80px;
      object-fit: contain;
      margin-top: 10px;
    }
    p {
      font-size: 14px;
      color: #555;
    }
  </style>
</head>
<body>

  <div class="container">
    <h1>Register As</h1>
    <div class="roles">
      <!-- Customer -->
      <div class="role-card" onclick="window.location.href='customer-login.php'">
        <i class="fas fa-user"></i>
        <h2>Customer</h2>
        <img src="https://cdn-icons-png.flaticon.com/512/847/847969.png" alt="Customer Icon"/>
        <p>Order meals, track delivery, and manage your plan.</p>
      </div>
      
      <!-- Producer -->
      <div class="role-card" onclick="window.location.href='producer-login.php'">
        <i class="fas fa-store"></i>
        <h2>Producer</h2>
        <img src="https://cdn-icons-png.flaticon.com/512/2921/2921822.png" alt="Provider Icon"/>
        <p>Accept orders, upload menus, manage customers.</p>
      </div>
    </div>
  </div>

</body>
</html>
