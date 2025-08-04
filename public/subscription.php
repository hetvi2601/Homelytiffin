<?php
	include "dbconn.php";
	$obj = new tiffinclass();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Subscription Plans - Healthy Tiffin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to right, #e3ffe7, #d9e7ff);
      padding: 40px 20px;
    }

    h2 {
      text-align: center;
      color: #2e7d32;
      margin-bottom: 30px;
    }

    .plans {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
    }

    .plan-card {
      background: white;
      width: 300px;
      border-radius: 15px;
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
      padding: 25px;
      text-align: center;
      transition: transform 0.2s;
    }

    .plan-card:hover {
      transform: scale(1.05);
    }

    .plan-title {
      font-size: 22px;
      font-weight: bold;
      color: #4caf50;
      margin-bottom: 10px;
    }

    .plan-price {
      font-size: 28px;
      color: #1b5e20;
      margin-bottom: 20px;
    }

    .plan-details {
      font-size: 16px;
      color: #555;
      margin-bottom: 20px;
    }

    .subscribe-btn {
      background-color: #43a047;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
    }

    .subscribe-btn:hover {
      background-color: #2e7d32;
    }
 h1 {
      color: #e65100;
      text-align: center;
      margin-bottom: 30px;
    }

.container {
      background: #fff3e0;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 6px 16px rgba(0,0,0,0.2);
      max-width: 600px;
      margin: 0 auto;
      text-align: center;
    }

  .btn {
      margin-top: 30px;
      padding: 12px 24px;
      background-color: #e65100;
      color: white;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-size: 16px;
      box-shadow: 0 4px 10px rgba(230,81,0,0.4);
    }
    .btn:hover {
      background-color: #bf360c;
    }

  </style>
</head>
<body>

  <!-- Login Check -->
  <script>
    if (localStorage.getItem("isCustomerLoggedIn") !== "true") {
      alert("Please login first!");
      window.location.href = "customer-login.php";
    }
  </script>

  <h2>Choose Your Subscription Plan</h2>

  <div class="plans">
    <!-- Daily Plan -->
    <div class="plan-card">
      <div class="plan-title">Daily Plan</div>
      <div class="plan-price">₹99/day</div>
      <div class="plan-details">Includes 1 meal per day<br>Free delivery</div>
      <button class="subscribe-btn" onclick="subscribe('Daily')">Subscribe Now</button>
    </div>

    <!-- Weekly Plan -->
    <div class="plan-card">
      <div class="plan-title">Weekly Plan</div>
      <div class="plan-price">₹649/week</div>
      <div class="plan-details">7 meals included<br>Save ₹44 compared to daily plan</div>
      <button class="subscribe-btn" onclick="subscribe('Weekly')">Subscribe Now</button>
    </div>

    <!-- Monthly Plan -->
    <div class="plan-card">
      <div class="plan-title">Monthly Plan</div>
      <div class="plan-price">₹2499/month</div>
      <div class="plan-details">30 meals included<br>Save ₹471 compared to daily plan</div>
      <button class="subscribe-btn" onclick="subscribe('Monthly')">Subscribe Now</button>
    </div>

  </div>
 <button class="btn" onclick="goBack()">Back to Dashboard</button>

 <h1>Subscription Plans</h1>

  <div class="container">
    <p>Choose from flexible daily, weekly, or monthly meal plans.</p>
    <p>Affordable pricing with healthy, homemade food.</p>

    <button class="btn" onclick="goBack()">Back to Dashboard</button>
  </div>

 <!-- <script>
    function subscribe(plan) {
      alert("You selected the " + plan + " plan!");
      // Redirect to payment or confirmation
      window.location.href = "payment.php";
    }
</script>-->
 <script> 
    // Login check
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