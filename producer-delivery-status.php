<?php
	include "dbconn.php";
	$obj = new tiffinclass();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Producer Delivery Status</title>
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
    .status-box {
      background: #fff;
      max-width: 800px;
      margin: 0 auto;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
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
    .status-delivered {
      color: green;
      font-weight: 700;
    }
    .status-inprogress {
      color: orange;
      font-weight: 700;
    }
    .status-pending {
      color: #bf360c;
      font-weight: 700;
    }
  </style>
</head>
<body>

  <h1>Delivery Status</h1>

  <div class="status-box">
    <table>
      <thead>
        <tr>
          <th>Order ID</th>
          <th>Customer</th>
          <th>Delivery Date</th>
          <th>Status</th>
          <th>Remarks</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>ORD1234</td>
          <td>Rahul Sharma</td>
          <td>2025-05-14</td>
          <td class="status-delivered">Delivered</td>
          <td>On time</td>
        </tr>
        <tr>
          <td>ORD1235</td>
          <td>Priya Singh</td>
          <td>2025-05-15</td>
          <td class="status-inprogress">In Progress</td>
          <td>Expected today</td>
        </tr>
        <tr>
          <td>ORD1236</td>
          <td>Arjun Mehta</td>
          <td>2025-05-16</td>
          <td class="status-pending">Pending</td>
          <td>Waiting for confirmation</td>
        </tr>
      </tbody>
    </table>

    <div class="back-btn">
      <a href="producer-dashboard.php">← Back to Dashboard</a>
    </div>
  </div>

</body>
</html>
