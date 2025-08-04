<?php
	include "dbconn.php";
	$obj = new tiffinclass();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Customer Dashboard</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%);
      margin: 0;
      padding: 30px;
      color: #333;
    }
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 40px;
    }
    h1 {
      color: #d84315;
      font-weight: 700;
    }
    button.logout {
      background: #d84315;
      color: white;
      border: none;
      padding: 10px 18px;
      font-size: 16px;
      border-radius: 8px;
      cursor: pointer;
      box-shadow: 0 4px 8px rgba(216, 67, 21, 0.5);
      transition: background-color 0.3s ease;
    }
    button.logout:hover {
      background: #a33612;
    }
    .welcome {
      font-size: 20px;
      margin-bottom: 25px;
      color: #5d4037;
    }
    .modules {
      display: grid;
      grid-template-columns: repeat(auto-fit,minmax(200px,1fr));
      gap: 25px;
    }
    .module-card {
      background: white;
      padding: 30px 20px;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
      text-align: center;
      cursor: pointer;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      color: #bf360c;
      font-weight: 600;
      font-size: 18px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      user-select: none;
    }
    .module-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 12px 30px rgba(0,0,0,0.15);
    }
    .module-icon {
      font-size: 48px;
      margin-bottom: 12px;
      color: #ff7043;
    }
  </style>
</head>
<body>

  <header>
    <h1>Tiffin Service Dashboard</h1>
    <button class="logout" id="logoutBtn">Logout</button>
  </header>

  <div class="welcome" id="welcomeText">Welcome, Customer!</div>

  <div class="modules">
    <div class="module-card" onclick="navigateTo('subscription.php')">
      <div class="module-icon">📦</div>
      Subscription
    </div>
    <div class="module-card" onclick="navigateTo('menu.php')">
      <div class="module-icon">🍽️</div>
      Menu
    </div>
    <div class="module-card" onclick="navigateTo('payment.php')">
      <div class="module-icon">💳</div>
      Payment
    </div>
    <div class="module-card" onclick="navigateTo('delivery-status.php')">
      <div class="module-icon">🚚</div>
      Delivery Status
    </div>
    <div class="module-card" onclick="navigateTo('delivery-location.php')">
      <div class="module-icon">📍</div>
      Delivery Location
    </div>
  </div>

  <script>
    // Check login status, else redirect to login
    if(localStorage.getItem('isCustomerLoggedIn') !== 'true') {
      alert('Please login first!');
      window.location.href = 'customer-login.php';
    } else {
      const username = localStorage.getItem('customerUsername') || 'Customer';
      document.getElementById('welcomeText').textContent = `Welcome, ${username}!`;
    }

    function navigateTo(page) {
      window.location.href = page;
    }

    document.getElementById('logoutBtn').addEventListener('click', function() {
      localStorage.removeItem('isCustomerLoggedIn');
      localStorage.removeItem('customerUsername');
      alert('Logged out successfully');
      window.location.href = 'customer-login.php';
    });
  </script>

</body>
</html>
