<?php
include "config.php";
session_start();
if (isset($_SESSION['username']) || $_SESSION['admin']) {
    $user_id = $_SESSION['id'];
    // Fetch user data
    $search = "SELECT * FROM users WHERE id='$user_id'";
    $result = mysqli_query($con, $search);
    $row = mysqli_fetch_assoc($result);
    $username = $row['username'];
    // Fetch payment status (assuming it's a column in the users table)
    $payment_status = $row['status'];
} else {
    header("Location: login.php");
    exit;
}

// Check if Razorpay has redirected back with a payment success status
if (isset($_GET['payment_success']) && $_GET['payment_success'] == 'true') {
    // Display a success message for payment approval
    $payment_status = 'approved'; // Update payment status to approved
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-image: url("images/back.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .alert-container {
            margin-top: 20px;
        }

        .alert-success {
            color: green;
        }

        .alert-danger {
            color: red;
        }

        /* Initially hide the payment result */
        #payment-result {
            display: none;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4" style="color: brown;">Payment Details</h1>
        <div class="table-responsive">
            <!-- Display payment details here -->
        </div>
        <!-- Button to show payment result -->
        <div class="mt-3">
            <button id="check-payment-btn" class="btn btn-success" style="background-color: brown;">Check Your Payment Status</button>
        </div>
        <!-- Payment result section -->
        <div id="payment-result" class="alert-container">
            <?php if ($payment_status === 'approved') : ?>
                <h3 class="alert-success">Your payment has been approved. Collect Your Payment From the College.</h3>
            <?php elseif ($payment_status === 'pending') : ?>
                <h3 class="alert-danger">Your payment is pending.</h3>
            <?php endif; ?>
        </div>
    </div>

    <script>
        document.getElementById('check-payment-btn').addEventListener('click', function() {
            var paymentResult = document.getElementById('payment-result');
            paymentResult.style.display = 'block'; // Show the payment result
        });
    </script>
</body>

</html>
