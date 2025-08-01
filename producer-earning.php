<?php
	include "dbconn.php";
	$obj = new tiffinclass();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Producer Earnings</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
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
      margin-bottom: 30px;
    }
    .earnings-box {
      background: #fff;
      max-width: 700px;
      margin: 0 auto;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }
    .summary {
      display: flex;
      justify-content: space-around;
      margin-bottom: 30px;
      flex-wrap: wrap;
      gap: 20px;
    }
    .summary-item {
      background: #fbe9e7;
      border-radius: 10px;
      padding: 20px 25px;
      flex: 1 1 150px;
      text-align: center;
      box-shadow: 0 4px 8px rgba(191, 54, 12, 0.15);
    }
    .summary-item h2 {
      margin: 0 0 10px 0;
      color: #bf360c;
      font-weight: 700;
      font-size: 26px;
    }
    .summary-item p {
      margin: 0;
      font-weight: 600;
      font-size: 16px;
      color: #6d4c41;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 15px;
    }
    th, td {
      border: 1px solid #ddd;
      padding: 12px 15px;
      text-align: center;
    }
    th {
      background-color: #bf360c;
      color: white;
      font-weight: 600;
    }
    tr:nth-child(even) {
      background-color: #fff3e0;
    }
    tr:hover {
      background-color: #ffe0b2;
    }
    .back-btn {
      margin-top: 25px;
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

  <h1>Producer Earnings Summary</h1>

  <div class="earnings-box">
    <div class="summary">
      <div class="summary-item">
        <h2>₹45,000</h2>
        <p>Total Earnings</p>
      </div>
      <div class="summary-item">
        <h2>₹30,000</h2>
        <p>Payments Received</p>
      </div>
      <div class="summary-item">
        <h2>₹15,000</h2>
        <p>Pending Payments</p>
      </div>
    </div>

    <h3>Recent Transactions</h3>
    <table>
      <thead>
        <tr>
          <th>Date</th>
          <th>Amount (₹)</th>
          <th>Payment Method</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>2025-05-12</td>
          <td>₹5,000</td>
          <td>UPI</td>
          <td>Received</td>
        </tr>
        <tr>
          <td>2025-05-10</td>
          <td>₹10,000</td>
          <td>Net Banking</td>
          <td>Received</td>
        </tr>
        <tr>
          <td>2025-05-08</td>
          <td>₹5,000</td>
          <td>Cash</td>
          <td>Pending</td>
        </tr>
      </tbody>
    </table>

    <div class="back-btn">
      <a href="producer-dashboard.php">← Back to Dashboard</a>
    </div>
  </div>

</body>
</html>
