<?php
	include "dbconn.php";
	$obj = new tiffinclass();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Producer Menu</title>
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
    }
    .menu-box {
      background: #fff;
      max-width: 700px;
      margin: 30px auto;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }
    label {
      font-weight: 600;
      display: block;
      margin-top: 15px;
    }
    input[type="text"], input[type="number"], textarea {
      width: 100%;
      padding: 10px;
      margin-top: 8px;
      border-radius: 8px;
      border: 1px solid #ccc;
      font-size: 16px;
      resize: vertical;
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
      margin-top: 25px;
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

  <h1>Manage Menu</h1>

  <div class="menu-box">
    <label for="dishName">Dish Name:</label>
    <input type="text" id="dishName" placeholder="Enter dish name" />

    <label for="dishDesc">Description:</label>
    <textarea id="dishDesc" rows="4" placeholder="Describe the dish"></textarea>

    <label for="price">Price (₹):</label>
    <input type="number" id="price" placeholder="Enter price" min="0" />

    <button onclick="addDish()">Add Dish</button>

    <div class="back-btn">
      <a href="producer-dashboard.php">← Back to Dashboard</a>
    </div>
  </div>

  <script>
    function addDish() {
      const name = document.getElementById('dishName').value.trim();
      const desc = document.getElementById('dishDesc').value.trim();
      const price = document.getElementById('price').value.trim();

      if (!name || !desc || !price) {
        alert('Please fill in all fields.');
        return;
      }

      alert(`Dish Added:\nName: ${name}\nDescription: ${desc}\nPrice: ₹${price}`);
      // Clear inputs after adding
      document.getElementById('dishName').value = '';
      document.getElementById('dishDesc').value = '';
      document.getElementById('price').value = '';
    }
  </script>

</body>
</html>
