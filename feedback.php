<?php
	include "dbconn.php";
	$obj = new tiffinclass();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Feedback - Healthy Tiffin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%);
      margin: 0;
      padding: 30px;
      color: #333;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    header {
      width: 100%;
      max-width: 1000px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 40px;
    }

    h1 {
      color: #d84315;
      font-weight: 700;
      margin: 0;
    }

    button.back-btn {
      background: #d84315;
      color: white;
      border: none;
      padding: 10px 18px;
      font-size: 16px;
      border-radius: 8px;
      cursor: pointer;
      box-shadow: 0 4px 8px rgba(216, 67, 21, 0.5);
      transition: background-color 0.3s ease;
    }
    button.back-btn:hover {
      background: #a33612;
    }

    .feedback-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
      gap: 30px;
      width: 100%;
      max-width: 1000px;
    }

    .feedback-box {
      background: white;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
      box-sizing: border-box;
      display: flex;
      flex-direction: column;
    }

    .feedback-box h2 {
      color: #bf360c;
      margin-bottom: 20px;
      font-weight: 700;
      font-size: 24px;
      text-align: center;
    }

    label {
      font-weight: 600;
      margin-bottom: 6px;
      display: block;
      color: #5d4037;
    }

    /* Star rating styles */
    .stars {
      display: flex;
      flex-direction: row-reverse;
      justify-content: center;
      margin-bottom: 20px;
      user-select: none;
    }
    .stars input[type="radio"] {
      display: none;
    }
    .stars label {
      font-size: 30px;
      color: #ccc;
      cursor: pointer;
      transition: color 0.2s ease-in-out;
      padding: 0 5px;
    }
    .stars input[type="radio"]:checked ~ label,
    .stars label:hover,
    .stars label:hover ~ label {
      color: #ff5722;
    }

    textarea {
      resize: vertical;
      min-height: 80px;
      padding: 10px;
      font-size: 16px;
      border-radius: 8px;
      border: 1px solid #ccc;
      margin-bottom: 20px;
      font-family: inherit;
      color: #333;
    }

    input[type="text"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border-radius: 8px;
      border: 1px solid #ccc;
      font-size: 16px;
      box-sizing: border-box;
      font-family: inherit;
      color: #333;
    }

    button.submit-btn {
      align-self: center;
      background: #ff5722;
      color: white;
      border: none;
      padding: 12px 25px;
      font-size: 16px;
      border-radius: 8px;
      font-weight: 700;
      cursor: pointer;
      transition: background-color 0.3s ease;
      width: 50%;
      max-width: 200px;
    }
    button.submit-btn:hover {
      background: #e64a19;
    }

    /* Responsive smaller devices */
    @media (max-width: 480px) {
      .feedback-container {
        grid-template-columns: 1fr;
      }
      button.submit-btn {
        width: 100%;
      }
    }

    .message {
      margin-top: 10px;
      color: green;
      font-weight: 600;
      text-align: center;
    }
  </style>
</head>
<body>

  <header>
  <h1>Feedback</h1>
  <button class="back-btn" onclick="goHome()">Back to Home</button>
</header>
  <div class="feedback-container">

    <form class="feedback-box" id="providerFeedbackForm">
      <h2>Provider Service Feedback</h2>
      <label for="providerName">Provider Name</label>
      <input type="text" id="providerName" name="providerName" placeholder="Enter provider name" required />

      <label>Rate Provider</label>
      <div class="stars" role="radiogroup" aria-label="Provider rating">
        <input type="radio" id="provider-star5" name="providerRating" value="5" required /><label for="provider-star5" title="5 stars">★</label>
        <input type="radio" id="provider-star4" name="providerRating" value="4" /><label for="provider-star4" title="4 stars">★</label>
        <input type="radio" id="provider-star3" name="providerRating" value="3" /><label for="provider-star3" title="3 stars">★</label>
        <input type="radio" id="provider-star2" name="providerRating" value="2" /><label for="provider-star2" title="2 stars">★</label>
        <input type="radio" id="provider-star1" name="providerRating" value="1" /><label for="provider-star1" title="1 star">★</label>
      </div>

      <label for="providerComments">Comments (optional)</label>
      <textarea id="providerComments" name="providerComments" placeholder="Add any comments..."></textarea>

      <button type="submit" class="submit-btn">Submit Feedback</button>
      <div class="message" id="providerMsg"></div>
    </form>

    <form class="feedback-box" id="websiteFeedbackForm">
      <h2>Website Service Feedback</h2>
      <label for="websiteName">Your Name</label>
      <input type="text" id="websiteName" name="websiteName" placeholder="Enter your name" required />

      <label>Rate Website</label>
      <div class="stars" role="radiogroup" aria-label="Website rating">
        <input type="radio" id="website-star5" name="websiteRating" value="5" required /><label for="website-star5" title="5 stars">★</label>
        <input type="radio" id="website-star4" name="websiteRating" value="4" /><label for="website-star4" title="4 stars">★</label>
        <input type="radio" id="website-star3" name="websiteRating" value="3" /><label for="website-star3" title="3 stars">★</label>
        <input type="radio" id="website-star2" name="websiteRating" value="2" /><label for="website-star2" title="2 stars">★</label>
        <input type="radio" id="website-star1" name="websiteRating" value="1" /><label for="website-star1" title="1 star">★</label>
      </div>

      <label for="websiteComments">Comments (optional)</label>
      <textarea id="websiteComments" name="websiteComments" placeholder="Add any comments..."></textarea>

      <button type="submit" class="submit-btn">Submit Feedback</button>
      <div class="message" id="websiteMsg"></div>
    </form>

  </div>

  <script>
  
  function goHome() {
    window.location.href = 'index.php'; // Redirect to home page
  }

  

    // Provider feedback form submit handler
    document.getElementById('providerFeedbackForm').addEventListener('submit', function(e) {
      e.preventDefault();

      const providerName = document.getElementById('providerName').value.trim();
      const ratingElems = document.getElementsByName('providerRating');
      const comments = document.getElementById('providerComments').value.trim();
      const msgElem = document.getElementById('providerMsg');

      let rating = null;
      for(const r of ratingElems) {
        if(r.checked) {
          rating = r.value;
          break;
        }
      }

      if(providerName && rating) {
        // Simulate saving feedback
        msgElem.textContent = `Thank you for rating provider ${providerName} with ${rating} star(s)!`;
        msgElem.style.color = 'green';

        // Clear inputs
        this.reset();

        // Remove message after 4 seconds
        setTimeout(() => msgElem.textContent = '', 4000);
      } else {
        msgElem.textContent = 'Please enter provider name and select a rating.';
        msgElem.style.color = 'red';
      }
    });

    // Website feedback form submit handler
    document.getElementById('websiteFeedbackForm').addEventListener('submit', function(e) {
      e.preventDefault();

      const yourName = document.getElementById('websiteName').value.trim();
      const ratingElems = document.getElementsByName('websiteRating');
      const comments = document.getElementById('websiteComments').value.trim();
      const msgElem = document.getElementById('websiteMsg');

      let rating = null;
      for(const r of ratingElems) {
        if(r.checked) {
          rating = r.value;
          break;
        }
      }

      if(yourName && rating) {
        // Simulate saving feedback
        msgElem.textContent = `Thank you for rating the website with ${rating} star(s), ${yourName}!`;
        msgElem.style.color = 'green';

        // Clear inputs
        this.reset();

        // Remove message after 4 seconds
        setTimeout(() => msgElem.textContent = '', 4000);
      } else {
        msgElem.textContent = 'Please enter your name and select a rating.';
        msgElem.style.color = 'red';
      }
    });
  </script>

</body>
</html>
