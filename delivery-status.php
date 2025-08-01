<?php
	include "dbconn.php";
	$obj = new tiffinclass();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Delivery Status</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(120deg, #ffe0b2, #ffccbc);
      padding: 40px;
      margin: 0;
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

    .status-box {
      font-size: 20px;
      padding: 20px;
      margin: 20px auto;
      border-radius: 10px;
      background-color: #ffe082;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
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

  <h1>Delivery Status</h1>

  <div class="container">
    <div class="status-box">
      🚚 Your tiffin is <strong>on the way</strong> and will arrive by <strong>12:30 PM</strong>.
    </div>

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

