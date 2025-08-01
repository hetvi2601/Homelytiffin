<?php
include "dbconn.php";
$obj = new tiffinclass();

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $registration_id = 1; // You can replace this with session ID later if needed

    $query = "INSERT INTO helpcenter_tickets (registration_id, subject, description) 
              VALUES (:regid, :subject, :desc)";
    $params = array(
        ':regid' => $registration_id,
        ':subject' => $subject,
        ':desc' => $message
    );
    $obj->insert($query, $params);
    $submitted = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Help Center - Healthy Tiffin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to right, #fdfcfb, #e2d1c3);
      color: #333;
    }

    header {
      background-color: #ff7043;
      padding: 20px;
      text-align: center;
      color: white;
    }

    .container {
      padding: 30px;
      max-width: 1000px;
      margin: auto;
    }

    h2 {
      color: #d84315;
      margin-top: 40px;
    }

    .faq {
      margin-top: 20px;
    }

    .faq-item {
      background: white;
      border-radius: 8px;
      padding: 15px 20px;
      margin-bottom: 15px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .faq-item strong {
      color: #ff5722;
    }

    .contact-form {
      background: #fff;
      padding: 25px;
      margin-top: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    input, textarea {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    button {
      padding: 10px 20px;
      background: #ff5722;
      color: white;
      border: none;
      border-radius: 5px;
      font-weight: bold;
      cursor: pointer;
      margin-top: 10px;
    }

    button:hover {
      background: #e64a19;
    }

    .back-btn {
      margin-top: 30px;
      background: #6d4c41;
    }

    .back-btn:hover {
      background: #4e342e;
    }

    .whatsapp-btn {
      background-color: #25D366;
      margin-top: 15px;
    }

    .whatsapp-btn:hover {
      background-color: #1ebe5b;
    }

    .support {
      margin-top: 30px;
      background: #fbe9e7;
      padding: 20px;
      border-radius: 8px;
    }

    .support h3 {
      color: #bf360c;
    }

    @media (max-width: 600px) {
      .container {
        padding: 15px;
      }
    }

    .success {
      background-color: #e6ffed;
      color: #2e7d32;
      padding: 15px;
      border-radius: 5px;
      margin-bottom: 15px;
      border: 1px solid #2e7d32;
    }
  </style>
</head>
<body>

<header>
  <h1>Help Center</h1>
</header>

<div class="container">

  <?php if (!empty($submitted)) { ?>
    <div class="success">✅ Your message has been submitted successfully!</div>
  <?php } ?>

  <section class="faq">
    <h2>Frequently Asked Questions</h2>

    <div class="faq-item">
      <strong>Q: How do I subscribe to a tiffin plan?</strong>
      <p>A: Log in to your customer account and click on the “Subscription” module to choose your plan.</p>
    </div>

    <div class="faq-item">
      <strong>Q: Can I cancel my subscription anytime?</strong>
      <p>A: Yes, go to your Subscription page and cancel your plan from there.</p>
    </div>

    <div class="faq-item">
      <strong>Q: How do I change my delivery address?</strong>
      <p>A: Update your location in the “Delivery Location” module after logging in.</p>
    </div>
  </section>

  <section class="contact-form">
    <h2>Contact Us</h2>
    <form method="POST">
      <input type="text" name="subject" placeholder="Subject" required>
      <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
      <button type="submit">Submit</button>
    </form>

    <button class="whatsapp-btn" onclick="joinWhatsapp()">Join WhatsApp Group</button>
  </section>

  <section class="support">
    <h3>Support Information</h3>
    <p>Email us at: <a href="mailto:support@healthytiffin.com">support@healthytiffin.com</a></p>
    <p>Call us: +91 98765 43210</p>
    <p>Working hours: 9 AM – 8 PM, Mon – Sat</p>
  </section>

  <button class="back-btn" onclick="goHome()">Back to Home</button>
</div>

<script>
  function goHome() {
    window.location.href = "index.php";
  }

  function joinWhatsapp() {
    window.open("https://chat.whatsapp.com/your-group-invite-link", "_blank");
  }
</script>

</body>
</html>