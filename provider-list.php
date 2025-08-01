<!-- provider-list.php -->
<?php
	include "dbconn.php";
	$obj = new tiffinclass();
?><

!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Provider List - Healthy Tiffin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to right, #ff9a9e, #fad0c4);
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 30px;
    }
    .provider-container {
      background: white;
      padding: 30px;
      border-radius: 15px;
      width: 80%;
      box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
      margin-top: 20px;
    }
    h2 {
      color: #ff5722;
    }
    .provider {
      background: #fff3e0;
      padding: 20px;
      border-radius: 10px;
      margin: 15px 0;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      text-align: center;
    }
    .provider img {
      width: 100%;
      border-radius: 10px;
    }
    .provider h3 {
      color: #ff5722;
      margin-top: 15px;
    }
    .provider p {
      color: #333;
    }
    .btn {
      background: #ff5722;
      color: white;
      padding: 12px 20px;
      border-radius: 8px;
      text-decoration: none;
      display: inline-block;
      margin-top: 10px;
      transition: 0.3s;
    }
    .btn:hover {
      background: #e65100;
    }
  </style>
</head>
<body>

  <div class="provider-container">
    <h2>Our Trusted Providers</h2>

    <!-- Provider 1 -->
    <div class="provider">
      <img src="provider1.jpg" alt="Provider 1" />
      <h3>Fresh Meals</h3>
      <p>Home-cooked meals with the freshest ingredients.</p>
      <a href="#" class="btn">View Provider</a>
    </div>

    <!-- Provider 2 -->
    <div class="provider">
      <img src="provider2.jpg" alt="Provider 2" />
      <h3>Healthy Delights</h3>
      <p>Specializes in vegetarian meals with great taste.</p>
      <a href="#" class="btn">View Provider</
