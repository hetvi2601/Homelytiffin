<?php
	include "dbconn.php";
	$obj = new tiffinclass();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Producer Dashboard</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #d2f8d2 0%, #a1c4fd 100%);
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
      color: #2e7d32;
      font-weight: 700;
    }

    button.logout {
      background: #2e7d32;
      color: white;
      border: none;
      padding: 10px 18px;
      font-size: 16px;
      border-radius: 8px;
      cursor: pointer;
      box-shadow: 0 4px 8px rgba(46, 125, 50, 0.4);
      transition: background-color 0.3s ease;
    }

    button.logout:hover {
      background: #1b5e20;
    }

    .welcome {
      font-size: 20px;
      margin-bottom: 25px;
      color: #2e7d32;
    }

    .modules {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
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
      color: #1b5e20;
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
      color: #66bb6a;
    }
  </style>
</head>
<body>

  <header>
    <h1>Producer Dashboard</h1>
    <button class="logout" onclick="logout()">Logout</button>
  </header>

  <div class="welcome" id="welcomeText">Welcome, Producer!</div>

  <div class="modules">
    <div class="module-card" onclick="navigateTo('producer-subscription.php')">
      <div class="module-icon">📦</div>
      Subscription List
    </div>
    <div class="module-card" onclick="navigateTo('producer-menu.php')">
      <div class="module-icon">📋</div>
      Manage Menu
    </div>
    <div class="module-card" onclick="navigateTo('producer-orders.php')">
      <div class="module-icon">🧾</div>
       View Orders
    </div>
    <div class="module-card" onclick="navigateTo('producer-earning.php')">
      <div class="module-icon">💰</div>
      Earnings Of Provider
    </div>
    <div class="module-card" onclick="navigateTo('producer-delivery-status.php')">
      <div class="module-icon">🚚</div>
      Delivery Satatus
    </div>
  </div>

  <script>
    // Login check
    if (localStorage.getItem('isProducerLoggedIn') !== 'true') 
    {
      alert('Please login first!');
      window.location.href = 'producer-login.php';
    } 
    else 
    {
      const username = localStorage.getItem('producerUsername') || 'Producer';
      document.getElementById('welcomeText').textContent = `Welcome, ${username}!`;
    }

    function navigateTo(page) {
      window.location.href = page;
    }
    function logout() {
      localStorage.removeItem('isProducerLoggedIn');
      localStorage.removeItem('producerUsername');
      alert('Logged out successfully');
      window.location.href = 'producer-login.php';
    }
  </script>

</body>
</html>
