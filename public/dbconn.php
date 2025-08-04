<?php
class tiffinclass
{
    private $con;

    function __construct()
    {
        $this->con = new PDO('mysql:host=localhost;dbname=tifiin', 'root', '');
        $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    // ===== registration_master =====
    function addRegistration($name, $contact, $address, $user_id, $user_password, $status)
    {
        $qry = "INSERT INTO registration_master (name, contact, address, user_id, user_password, status)
                VALUES ('$name', '$contact', '$address', '$user_id', '$user_password', '$status')";
        $this->con->prepare($qry)->execute();
    }
    function getAllRegistrations() { return $this->con->query("SELECT * FROM registration_master")->fetchAll(); }
    function getSingleRegistration($id) { return $this->con->query("SELECT * FROM registration_master WHERE registration_id = $id")->fetch(); }
    function updateRegistration($id, $name, $contact, $address, $user_id, $user_password, $status)
    {
        $qry = "UPDATE registration_master SET name='$name', contact='$contact', address='$address',
                user_id='$user_id', user_password='$user_password', status='$status'
                WHERE registration_id = $id";
        $this->con->prepare($qry)->execute();
    }
    function deleteRegistration($id) { $this->con->prepare("DELETE FROM registration_master WHERE registration_id = $id")->execute(); }

    // ===== provider_master =====
    function addProvider($name, $contact, $address, $status, $monthly, $daily, $lunch, $dinner, $delivery)
    {
        $qry = "INSERT INTO provider_master (name, contact, address, status, monthly_subscription_fees, per_day_fees, lunch, dinner, delivery_charges)
                VALUES ('$name', '$contact', '$address', '$status', $monthly, $daily, '$lunch', '$dinner', $delivery)";
        $this->con->prepare($qry)->execute();
    }
    function getAllProviders() { return $this->con->query("SELECT * FROM provider_master")->fetchAll(); }
    function getSingleProvider($id) { return $this->con->query("SELECT * FROM provider_master WHERE provider_id = $id")->fetch(); }
    function updateProvider($id, $name, $contact, $address, $status, $monthly, $daily, $lunch, $dinner, $delivery)
    {
        $qry = "UPDATE provider_master SET name='$name', contact='$contact', address='$address', status='$status',
                monthly_subscription_fees=$monthly, per_day_fees=$daily, lunch='$lunch', dinner='$dinner',
                delivery_charges=$delivery WHERE provider_id = $id";
        $this->con->prepare($qry)->execute();
    }
    function deleteProvider($id) { $this->con->prepare("DELETE FROM provider_master WHERE provider_id = $id")->execute(); }

    // ===== subscription_master =====
    function addSubscription($start_date, $duration, $reg_id, $prov_id, $lunch, $dinner, $price, $type)
    {
        $qry = "INSERT INTO subscription_master (subscription_start_date, subscription_duration, registration_id, provider_id, lunch, dinner, subscription_price, subscription_type)
                VALUES ('$start_date', $duration, $reg_id, $prov_id, '$lunch', '$dinner', $price, '$type')";
        $this->con->prepare($qry)->execute();
    }
    function getAllSubscriptions() { return $this->con->query("SELECT * FROM subscription_master")->fetchAll(); }
    function getSingleSubscription($id) { return $this->con->query("SELECT * FROM subscription_master WHERE sub_id = $id")->fetch(); }
    function updateSubscription($id, $start_date, $duration, $reg_id, $prov_id, $lunch, $dinner, $price, $type)
    {
        $qry = "UPDATE subscription_master SET subscription_start_date='$start_date', subscription_duration=$duration,
                registration_id=$reg_id, provider_id=$prov_id, lunch='$lunch', dinner='$dinner',
                subscription_price=$price, subscription_type='$type' WHERE sub_id = $id";
        $this->con->prepare($qry)->execute();
    }
    function deleteSubscription($id) { $this->con->prepare("DELETE FROM subscription_master WHERE sub_id = $id")->execute(); }

    // ===== subscription_payment_status =====
    function addPayment($sub_id, $payment_date, $amount)
    {
        $qry = "INSERT INTO subscription_payment_status (subscription_id, payment_date, amount)
                VALUES ($sub_id, '$payment_date', $amount)";
        $this->con->prepare($qry)->execute();
    }
    function getAllPayments() { return $this->con->query("SELECT * FROM subscription_payment_status")->fetchAll(); }
    function deletePayment($id) { $this->con->prepare("DELETE FROM subscription_payment_status WHERE payment_id = $id")->execute(); }

    // ===== menu_master =====
    function addMenu($description, $type)
    {
        $qry = "INSERT INTO menu_master (menu_description, menu_type)
                VALUES ('$description', '$type')";
        $this->con->prepare($qry)->execute();
    }
    function getAllMenus() { return $this->con->query("SELECT * FROM menu_master")->fetchAll(); }
    function deleteMenu($id) { $this->con->prepare("DELETE FROM menu_master WHERE menu_id = $id")->execute(); }

    // ===== provider_menu_details =====
    function addProviderMenuDetail($provider_id, $menu_id, $day)
    {
        $qry = "INSERT INTO provider_menu_details (provider_id, menu_id, day)
                VALUES ($provider_id, $menu_id, '$day')";
        $this->con->prepare($qry)->execute();
    }
    function getAllProviderMenus() { return $this->con->query("SELECT * FROM provider_menu_details")->fetchAll(); }
    function deleteProviderMenu($provider_id, $menu_id, $day)
    {
        $qry = "DELETE FROM provider_menu_details WHERE provider_id = $provider_id AND menu_id = $menu_id AND day = '$day'";
        $this->con->prepare($qry)->execute();
    }

    // ===== delivery_status =====
    function addDeliveryStatus($date, $sub_id, $status)
    {
        $qry = "INSERT INTO delivery_status (delivery_date, subscription_id, status)
                VALUES ('$date', $sub_id, '$status')";
        $this->con->prepare($qry)->execute();
    }
    function getAllDeliveries() { return $this->con->query("SELECT * FROM delivery_status")->fetchAll(); }
    function deleteDelivery($id) { $this->con->prepare("DELETE FROM delivery_status WHERE delivery_id = $id")->execute(); }

    // ===== feedback_master =====
    function addFeedback($reg_id, $prov_id, $sub_id, $rating, $comments)
    {
        $qry = "INSERT INTO feedback_master (registration_id, provider_id, sub_id, rating, comments)
                VALUES ($reg_id, $prov_id, $sub_id, $rating, '$comments')";
        $this->con->prepare($qry)->execute();
    }
    function getAllFeedbacks() { return $this->con->query("SELECT * FROM feedback_master")->fetchAll(); }
    function deleteFeedback($id) { $this->con->prepare("DELETE FROM feedback_master WHERE feedback_id = $id")->execute(); }

    // ===== helpcenter_tickets =====
    function addTicket($reg_id, $subject, $desc)
    {
        $qry = "INSERT INTO helpcenter_tickets (registration_id, subject, description)
                VALUES ($reg_id, '$subject', '$desc')";
        $this->con->prepare($qry)->execute();
    }
    function getAllTickets() { return $this->con->query("SELECT * FROM helpcenter_tickets")->fetchAll(); }
    function updateTicketStatus($id, $status)
    {
        $qry = "UPDATE helpcenter_tickets SET status='$status' WHERE ticket_id = $id";
        $this->con->prepare($qry)->execute();
    }
    function deleteTicket($id) { $this->con->prepare("DELETE FROM helpcenter_tickets WHERE ticket_id = $id")->execute(); }

    // ===== faq_master =====
    function addFAQ($question, $answer, $category)
    {
        $qry = "INSERT INTO faq_master (question, answer, category)
                VALUES ('$question', '$answer', '$category')";
        $this->con->prepare($qry)->execute();
    }
    function getAllFAQs() { return $this->con->query("SELECT * FROM faq_master")->fetchAll(); }
    function updateFAQStatus($id, $status)
    {
        $qry = "UPDATE faq_master SET status='$status' WHERE faq_id = $id";
        $this->con->prepare($qry)->execute();
    }
    function deleteFAQ($id) { $this->con->prepare("DELETE FROM faq_master WHERE faq_id = $id")->execute(); }
}
?>