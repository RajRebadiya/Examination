<?php
include "config.php";
session_start();
if (isset($_SESSION['username']) || $_SESSION['admin']) {
  $user_id = $_SESSION['id'];
  $_SESSION['id'] = $user_id; 
  // $user_name = $_SESSION['username'];
  // $class_name = $_POST['class_name'];
  // $duration = $_POST['duration'];
  // $exam_type = $_POST['exam_type'];
  // $exam_pettarn = $_POST['exam_pettarn'];
  // $department_name = $_POST['department_name'];

  $serch = "select * from faculty_data where f_id='$user_id'";
  $result = mysqli_query($con, $serch);


} else {
  header("Location:login.php");
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Faculty data
  </title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
    *{

      font-family: Poppins;
      font-size: 17px;
      
    }
    body{
      background-image: url("images/back.jpg");
      background-repeat: no-repeat;
      background-size: cover;
    }
    a:hover{
      background: beige;
      color: #212529 !important; 
    }
  </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Examination Portal</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active outline-success" aria-current="page" href="main.php">Add Entry</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active outline-success" aria-current="page" href="faculty_personal.php">Faculty_Data</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active outline-success" aria-current="page" href="userside_update.php">Manage Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active outline-success" aria-current="page" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="design" style="display:flex; flex-direction:column; justify-content: space-between; height: 100vh;">
  <div class="table-responsive">
    <table class="table  table-dark table-striped ">
      <tbody>
        <th>Data id</th>
        <th>Faculty Name</th>
        <th>Class Name</th>
        <th>Duration</th>
        <th>Exam Type</th>
        <th>Exam Pettarn</th>
        <th>Department Name</th>
        <th>Amount</th>
        <th>Update</th>

        <th>Delete</th>
        <?php
        $rowarray = [];

        while ($rows = mysqli_fetch_assoc($result)) {
          $rowarray[] = $rows;
        }
        foreach ($rowarray as $rows) {
          ?>
          <tr>
            <td>
              <?php echo $rows['data_id'] ?>
            </td>


            <td>
              <?php echo $rows['f_name'] ?>
            </td>


            <td>
              <?php echo $rows['class_name'] ?>
            </td>

            <td>
              <?php echo $rows['duration'] ?>
            </td>


            <td>
              <?php echo $rows['exam_type'] ?>
            </td>
            <td>
              <?php echo $rows['exam_pettarn'] ?>
            </td>


            <td>
              <?php echo $rows['department_name'] ?>
            </td>
            <td>
              <?php echo $rows['amout'] ?>
            </td>
            <td><a href="update_faculty_personal.php?update=<?php echo $rows['data_id']; ?>"><svg
                  xmlns="http://www.w3.org/2000/svg" height="1em"
                  viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                  <style>
                    svg {
                      fill: #ededed
                    }
                  </style>
                  <path
                    d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM155.7 250.2L192 302.1l36.3-51.9c7.6-10.9 22.6-13.5 33.4-5.9s13.5 22.6 5.9 33.4L221.3 344l46.4 66.2c7.6 10.9 5 25.8-5.9 33.4s-25.8 5-33.4-5.9L192 385.8l-36.3 51.9c-7.6 10.9-22.6 13.5-33.4 5.9s-13.5-22.6-5.9-33.4L162.7 344l-46.4-66.2c-7.6-10.9-5-25.8 5.9-33.4s25.8-5 33.4 5.9z" />
                </svg></a></td>
            <td>
              <a class="delete" href="javascript:void(0);" onclick="confirmDelete(<?php echo $rows['data_id']; ?>)">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                  viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                  <style>
                    svg {
                      fill: #ebebeb
                    }
                  </style>
                  <path
                    d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0H284.2c12.1 0 23.2 6.8 28.6 17.7L320 32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 96 0 81.7 0 64S14.3 32 32 32h96l7.2-14.3zM32 128H416V448c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V128zm96 64c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16z" />
                </svg>
              </a>
            </td>

            <script>
              function confirmDelete(dataId) {
                if (confirm("Are you sure you want to delete this data?")) {
                  // User clicked "OK," proceed with deletion
                  window.location.href = "delete_faculty_personal.php?delete=" + dataId;
                }
                // If the user clicked "Cancel," do nothing
              }
            </script>
          </tr>

        
                  <?php
        }
        ?>


      </tbody>
    </table>
  </div>
  <div class="data">
  <div class="table-responsive">
    <table class="table  table-dark table-striped ">
      <tbody>
        <?php
          $totalAmount = 0;
          $totalDuration = 0;
          ?>
          <th colspan='2'>Data id</th>
          
          <th>Total Duration</th>
          <th>Total Amount</th>
          <th>Pdf</th>
          <th>Payment</th>
         
          <?php
            foreach ($rowarray as $rows) {
              ?>
              
          

<?php
 $totalAmount += $rows['amout'];
 $totalDuration += floatval($rows['duration']);
 ?>
 
 <?php
             
          }
 ?>
 <tr>
    <td colspan="2">Total:</td>
    <td><?php echo $totalDuration; ?> Hours</td>
    <td><?php echo $totalAmount; ?> </td>
    <td><button type="button" class='btn btn-danger' onclick="generatePdf()">Generate Pdf</button></td>
    <td><button type="button" class='btn btn-warning' onclick="payment()">Apply for Payment</button></td>
</tr>
<script>
function generatePdf() {
    // You can use AJAX to send a request to the server to generate the PDF
    // For simplicity, I'm redirecting to the PHP script that generates the PDF
    window.location.href = 'pdfGenerate.php';
}
function payment(){
  console.log('lcick')
  window.location.href = 'payment.php';

}

</script>

        
         


      </tbody>
    </table>
  </div>
  </div>
  </div>

 

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>