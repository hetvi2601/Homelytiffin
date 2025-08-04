<?php
include "dbconn.php";
$obj = new tiffinclass();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $status = "Active";  // default status or you can add input field
    $monthly_subscription_fees = floatval($_POST['monthly_subscription_fees']);
    $per_day_fees = floatval($_POST['per_day_fees']);
    $lunch = $_POST['lunch'];
    $dinner = $_POST['dinner'];
    $delivery_charges = floatval($_POST['delivery_charges']);

    // Basic validation (you can extend)
    if ($name && $contact && $address) {
        $obj->addProvider($name, $contact, $address, $status, $monthly_subscription_fees,$per_day_fees, $lunch, $dinner, $delivery_charges);
       // echo "<script>alert('Provider registered successfully!'); window.location.href='login.php';</script>";
       echo "<script>
    localStorage.setItem('isProducerLoggedIn', 'true');
    localStorage.setItem('producerUsername', '".addslashes($name)."');
    alert('Provider registered successfully!');
    window.location.href='producer-dashboard.php';
        </script>";
        exit;
    } else {
        echo "<script>alert('Please fill all required fields.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Provider Registration</title>
    <style>
        /* Same or similar style as customer page
           */
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #a8edea, #fed6e3);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .reg-box {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            width: 350px;
            text-align: center;
        }
        input, select {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 16px;
        }
        button {
            width: 95%;
            padding: 12px;
            background: #4caf50;
            border: none;
            color: white;
            font-size: 18px;
            border-radius: 8px;
            cursor: pointer;
            margin-top: 15px;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background: #388e3c;
        }
        h2 {
            color: #4caf50;
        }
    </style>
</head>
<body>

<div class="reg-box">
    <h2>Provider Registration</h2>
    <form method="post" action="">
        <input type="text" name="name" placeholder="Full Name" required />
        <input type="text" name="contact" placeholder="Mobile Number" required />
        <input type="text" name="address" placeholder="Address" required />
        <input type="number" step="0.01" name="monthly_subscription_fees" placeholder="Monthly Subscription Fees" required />
        <input type="number" step="0.01" name="per_day_fees" placeholder="Per Day Fees" required />
        <input type="text" name="lunch" placeholder="Lunch Description" required />
        <input type="text" name="dinner" placeholder="Dinner Description" required />
        <input type="number" step="0.01" name="delivery_charges" placeholder="Delivery Charges" required />
        <button type="submit">Register</button>
    </form>
</div>

</body>
</html>