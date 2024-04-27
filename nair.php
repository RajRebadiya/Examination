<?php
include "config.php";
session_start();
if (isset($_SESSION['username']) || $_SESSION['admin']) {
  $user_id = @$_SESSION['id'];
  $_SESSION['id'] = $user_id;

  // Query to fetch total duration and total amount from faculty_data
  $total_query = "SELECT SUM(fd.duration) AS total_duration, SUM(fd.amout) AS total_amount
                    FROM faculty_data fd
                    INNER JOIN users u ON fd.f_id = u.id
                    WHERE fd.f_id = '$user_id'";
  $total_result = mysqli_query($con, $total_query);

  if ($total_result) {
    $total_row = mysqli_fetch_assoc($total_result);
    $total_duration = $total_row['total_duration'];
    $total_amount = $total_row['total_amount'];
  } else {
    // Handle query errors
    $total_duration = 0;
    $total_amount = 0;
  }

  // Query to fetch data from both tables
  $search_query = "SELECT fd.duration, fd.amout, u.username, u.mobileno, u.email
                     FROM faculty_data fd
                     INNER JOIN users u ON fd.f_id = u.id
                     WHERE fd.f_id = '$user_id'";
  $result = mysqli_query($con, $search_query);

  if (!$result) {
    // Handle query error
    die("Error: " . mysqli_error($con));
  }
} else {
  header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>

<head>
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="adminStyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap      .min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
  <style>
    * {
      color: white;
    }

    body {
      background-image: url("images/back.jpg");
      background-repeat: no-repeat;
      background-size: cover;

    }

    .black {
      background-color: black;
    }

    h3 {
      color: black !important;
    }
  </style>

</head>

<body>
  <?php include 'nav_2.php' ?>


  <center>
    <h3><b style="color: black;">Payment Approve List</b></h3>
  </center><BR>
  <table class="table table-bordered col-md-12 black">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>M_no</th>
        <th>Email</th>
        <th>Total Duration</th>
        <th>Total Amount</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

      <?php

      $query = "SELECT * FROM  users WHERE status = 'pending' ORDER BY id ASC";
      $result = mysqli_query($con, $query);
      while ($row = mysqli_fetch_array($result)) {

      ?>


    <tbody>
      <tr>
        <th scope="row"><?php echo $row['id']; ?></th>
        <td><?php echo $row['username']; ?></td>
        <td><?php echo $row['mobileno']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $total_duration; ?></td>
        <td><?php echo $total_amount; ?></td>


        <td><?php echo $row['status']; ?></td>
        <td>
          <form action="nair.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
            <input type="hidden" name="amount" value="<?php echo $row['amout']; ?>" />
            <input type="submit" name="approve" value="approve" class="btn btn-primary col-md-4">
            <h5 class="col-md-1"></h5>
            <input type="submit" name="delete" value="delete" class="btn btn-danger col-md-4">

          </form>
        </td>
      </tr>

    </tbody>
  <?php } ?>
  </table>




  <?php
  if (isset($_POST['approve'])) {
  ?>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
      $(document).ready(function() {
        var apiKey = "rzp_test_lVsUx6MAAvBtfx";
        var options = {
          "key": apiKey,
          "amount": <?php echo $total_amount * 100; ?>, // Change this to the actual amount
          "currency": "INR",
          "name": "Examination Remuneration System",
          "description": "Training & Services",
          "image": "https://www.shutterstock.com/image-vector/vector-icon-illustration-digital-media-260nw-1177024894.jpg",
          "theme": {
            "color": "#d15919"
          },
          "handler": function(response) {
            alert("Payment successful. Thank you!");
            var id = "<?php echo $_POST['id']; ?>";
            $.ajax({
              url: "update_status.php",
              type: "POST",
              data: {
                id: id
              },
              success: function(data) {
                console.log(data); // For debugging
                window.location.href = "payment.php";
              },
              error: function(xhr, status, error) {
                console.error(xhr.responseText);
                alert("Error updating user status. Please contact support.");
              }
            });
          }
        };
        var rzp = new Razorpay(options);
        rzp.open();
      });
    </script>
  <?php
  }
  ?>


  <?php
  if (isset($_POST['delete'])) {

    $id = $_POST['id'];
    $select = "DELETE  FROM air  WHERE id = '$id' ";
    $resut = mysqli_query($con, $select);
    header("location:air.php");
  }

  ?>






  <!-- ================================================================== -->




  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp


</body>

</html>