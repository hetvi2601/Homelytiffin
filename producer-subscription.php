<?php
	include "dbconn.php";
	$obj = new tiffinclass();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Producer Subscription</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 30px;
      background: linear-gradient(120deg, #ffecd2 0%, #fcb69f 100%);
      color: #4e342e;
    }
    h1 {
      text-align: center;
      color: #bf360c;
    }
    .subscription-box {
      background: #fff;
      max-width: 600px;
      margin: 30px auto;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }
    label {
      font-weight: 600;
    }
    select, input[type="text"], input[type="number"] {
      width: 100%;
      padding: 10px;
      margin-top: 10px;
      margin-bottom: 20px;
      border-radius: 8px;
      border: 1px solid #ccc;
      font-size: 16px;
    }
    button {
      background-color: #bf360c;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 8px;
      font-weight: bold;
      font-size: 16px;
      cursor: pointer;
      width: 100%;
      transition: background 0.3s ease;
    }
    button:hover {
      background-color: #a12d0a;
    }
    .back-btn {
      margin-top: 20px;
      text-align: center;
    }
    .back-btn a {
      color: #bf360c;
      text-decoration: none;
      font-weight: 600;
    }
  </style>
</head>
<body>

  <h1>Manage Your Subscription</h1>

  <div class="subscription-box">
    <label for="plan">Choose Plan:</label>
    <select id="plan">
      <option value="basic">Basic - ₹1000/month</option>
      <option value="standard">Standard - ₹1500/month</option>
      <option value="premium">Premium - ₹2000/month</option>
    </select>

    <label for="customers">Expected Customers:</label>
    <input type="number" id="customers" placeholder="Enter number of customers">

    <label for="notes">Notes:</label>
    <input type="text" id="notes" placeholder="Any specific preferences?">

    <button onclick="submitSubscription()">Submit</button>

    <div class="back-btn">
      <a href="producer-dashboard.php">← Back to Dashboard</a>
    </div>
  </div>

  <script>
    function submitSubscription() {
      const plan = document.getElementById("plan").value;
      const customers = document.getElementById("customers").value;
      const notes = document.getElementById("notes").value;

      if (!customers) {
        alert("Please enter number of customers.");
        return;
      }

      alert(`Subscription Submitted!\nPlan: ${plan}\nCustomers: ${customers}\nNotes: ${notes}`);
    }
  </script>

</body>
</html>
