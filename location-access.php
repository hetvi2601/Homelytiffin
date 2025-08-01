<!--<!-- location-access.php -->
<?php
	include "dbconn.php";
	$obj = new tiffinclass();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Location Access - Healthy Tiffin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <style>
    body {
      background: linear-gradient(to right, #89f7fe, #66a6ff);
      font-family: 'Segoe UI', sans-serif;
      text-align: center;
      padding: 50px;
      color: #fff;
    }
    .box {
      background: white;
      color: #333;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 6px 12px rgba(0,0,0,0.2);
      display: inline-block;
    }
    button {
      margin-top: 20px;
      padding: 12px 20px;
      border: none;
      background-color: #00c9ff;
      color: white;
      font-size: 16px;
      border-radius: 8px;
      cursor: pointer;
    }
    button:hover {
      background-color: #2196f3;
    }
    #location {
      margin-top: 20px;
      color: #444;
    }
  </style>
</head>
<body>

  <div class="box">
    <h2>Allow Location Access</h2>
    <p>We use your location to show tiffin delivery availability in your area.</p>
    <button onclick="getLocation()">Allow Access</button>
    <div id="location"></div>
  </div>

  <script>
    function getLocation() {
      const locBox = document.getElementById('location');
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
          (position) => {
            locBox.innerHTML = "Latitude: " + position.coords.latitude +
                               "<br>Longitude: " + position.coords.longitude;
          },
          () => {
            locBox.innerHTML = "Location access denied.";
          }
        );
      } else {
        locBox.innerHTML = "Geolocation is not supported by this browser.";
      }
    }
    if(localStorage.getItem('isCustomerLoggedIn') !== 'true') {
      alert('Please login first!');
      window.location.href = 'customer-login.php';
    }

    function goBack() {
      window.location.href = 'customer-dashboard.php';
    }
  
  </script>

</body>
</html>-->
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
    <p>Click below to allow location access so we can deliver your tiffin precisely!</p>

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

