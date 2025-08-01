<?php
include "dbconn.php";
$obj = new tiffinclass();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $user_id = $_POST['user_id'];
    $user_password = password_hash($_POST['user_password'], PASSWORD_DEFAULT); // hash password
    $status = "Active";  // default status

    // Basic validation (you can extend it)
    if ($name && $contact && $address && $user_id && $_POST['user_password']) {
        $obj->addRegistration($name, $contact, $address, $user_id, $user_password, $status);
       // echo "<script>alert('Customer Logged-in successfully!'); window.location.href='login.php';</script>";
       echo "<script>
    localStorage.setItem('isCustomerLoggedIn', 'true');
    localStorage.setItem('customerUsername', '$name');
    alert('Customer Logged-in successfully!');
    window.location.href='customer-dashboard.php';
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
    <title>Login</title>
    <style>
        /* Add your styling here, or reuse from previous */
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
        input {
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
        h1 {
            color: #4caf50;
        }
    </style>
</head>
<body>

<div class="reg-box">
    <h1>Login</h1>
    <form method="post" action="">
        <input type="text" name="name" placeholder="Full Name" required />
        <input type="text" name="contact" placeholder="Mobile Number" required />
        <input type="text" name="address" placeholder="Address" required />
        <input type="text" name="user_id" placeholder="Username" required />
        <input type="password" name="user_password" placeholder="Password" required />
        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>