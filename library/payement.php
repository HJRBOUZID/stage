<?php
session_start();
include('includes/config.php');

if(strlen($_SESSION['login']) == 0) {
    header('location:index.php');
    exit();
}

if(isset($_POST['submit'])) {
    $paymentMethod = $_POST['payment_method'];
    // Here you can process the payment based on the selected method
    // For example, you can redirect to PayPal payment page if PayPal is selected
    if($paymentMethod == 'paypal') {
        header('location:paypal_payment.php');
        exit();
    } elseif($paymentMethod == 'credit_card') {
        // Redirect to credit card payment page
        header('location:credit_card_payment.php');
        exit();
    } elseif($paymentMethod == 'remote') {
        // Redirect to remote payment page
        header('location:remote_payment.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Payment</title>
    <!-- Include CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>
<body>
    <!-- Include Header -->
    <?php include('includes/header.php'); ?>

    <div class="content-wrapper">
        <div class="container">
            <h1>Payment</h1>
            <form method="post" action="">
                <label>Select Payment Method:</label>
                <select name="payment_method">
                    <option value="paypal">PayPal</option>
                    <option value="credit_card">Carte Bancaire</option>
                    <option value="remote">A Distance</option>
                </select>
                <input type="submit" name="submit" value="Proceed to Payment">
            </form>
        </div>
    </div>

    <!-- Include Footer -->
    <?php include('includes/footer.php'); ?>

    <!-- Include JavaScript -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
