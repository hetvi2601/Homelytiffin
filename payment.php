<?php
	include "dbconn.php";
	$obj = new tiffinclass();
?>

<!DOCTYPE html>
<html>
  <body>
    <script>
      if(localStorage.getItem('isCustomerLoggedIn') !== 'true')
      {
        alert('Please login first!');
        window.location.href = 'customer-login.php';
      }
      function goBack()
      {
        window.location.href = 'customer-dashboard.php';
      }
    </script>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Payment</title>
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

    .payment-option {
      margin: 20px 0;
      padding: 20px;
      background-color: #ffe0b2;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      cursor: pointer;
      transition: transform 0.2s;
    }

    .payment-option:hover {
      transform: scale(1.02);
      background-color: #ffcc80;
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

  <h1>Choose Payment Method</h1>

  <div class="container">
    <div class="payment-option" onclick="selectPayment('UPI')">UPI</div>
    <div class="payment-option" onclick="selectPayment('Net Banking')">Net Banking</div>
    <div class="payment-option" onclick="selectPayment('Cash on Delivery')">Cash on Delivery</div>

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

    function selectPayment(method) {
      alert("You selected: " + method + " as your payment method.");
      // You can redirect or process payment here
    }
  </script>

</body>
</html>

