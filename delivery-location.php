<?php
	include "dbconn.php";
	$obj = new tiffinclass();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Delivery Location</title>
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
   p{
 color: black;

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
      margin-top: 20px;
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

    #location {
      margin-top: 20px;
      font-size: 18px;
      color: #4e342e;
    }
  </style>
</head>
<body>

  <h1>Delivery Location</h1>

  <div class="container">
    <p >Click below to allow location access so we can deliver your tiffin precisely!</p>

    <button class="btn" onclick="getLocation()">Allow Location Access</button>
    <div id="location"></div>

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

    function getLocation() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
      } else {
        document.getElementById("location").innerText = "Geolocation is not supported by this browser.";
      }
    }

    function showPosition(position) {
      document.getElementById("location").innerText =
        "Latitude: " + position.coords.latitude +
        "\nLongitude: " + position.coords.longitude;
    }

    function showError(error) {
      switch(error.code) {
        case error.PERMISSION_DENIED:
          document.getElementById("location").innerText = "User denied the request for Geolocation.";
          break;
        case error.POSITION_UNAVAILABLE:
          document.getElementById("location").innerText = "Location information is unavailable.";
          break;
        case error.TIMEOUT:
          document.getElementById("location").innerText = "The request to get user location timed out.";
          break;
        case error.UNKNOWN_ERROR:
          document.getElementById("location").innerText = "An unknown error occurred.";
          break;
      }
    }
  </script>

</body>
</html>

