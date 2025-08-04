<!-- faqs.php -->
<?php
	include "dbconn.php";
	$obj = new tiffinclass();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>FAQs - Healthy Tiffin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <style>
    body {
      background: linear-gradient(to right, #ffefba, #ffffff);
      font-family: Arial, sans-serif;
      padding: 40px;
    }
    .faq-container {
      max-width: 800px;
      background: white;
      padding: 30px;
      border-radius: 10px;
      margin: auto;
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    h2 {
      text-align: center;
      color: #ff9800;
    }
    .faq-item {
      margin-bottom: 20px;
    }
    .faq-question {
      font-weight: bold;
      color: #333;
    }
    .faq-answer {
      color: #555;
      margin-top: 5px;
    }
  </style>
</head>
<body>

  <div class="faq-container">
    <h2>Frequently Asked Questions</h2>

    <div class="faq-item">
      <div class="faq-question">Is food vegetarian or non-vegetarian?</div>
      <div class="faq-answer">We offer only vegetarian food.</div>
    </div>

    <div class="faq-item">
      <div class="faq-question">How do I track my tiffin delivery?</div>
      <div class="faq-answer">Use the "Delivery Status" page to see the status of your order.</div>
    </div>

    <div class="faq-item">
      <div class="faq-question">What are the delivery timings?</div>
      <div class="faq-answer">Deliveries are made between 11:30 AM and 1:00 PM every day.</div>
    </div>
  </div>

</body>
</html>
