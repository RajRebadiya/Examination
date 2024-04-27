<?php
include "config.php";

session_start();

if (isset($_SESSION['username'])) {
  include "config.php";
  $username = $_SESSION['username'];
  
  $search_query = mysqli_query($con, "SELECT * FROM users where username='$username'");

} else {
  header("location: http://localhost/Examination/admin.php");

}





?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Feculty Data</title>
  <style>
    *{

      font-family: Poppins;
      font-size: 17px;
    }
    a:hover{
      background: beige;
      color: #212529 !important; 
    }
    body{
      background-image: url("images/back.jpg");
      background-repeat: no-repeat;
      background-size: cover;
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

  <div class="table-responsive main">
    <table class="table  table-dark table-striped ">
      <tbody>
        <th>id</th>
        <th>Faculty Name</th>
        <th>Mobile No</th>
        <th>Email</th>
        <th>Password</th>
        <th>Date and Time</th>
        <th>Update</th>
        <?php
        while ($rows = mysqli_fetch_assoc($search_query)) {
          ?>
          <tr>
            <td>
              <?php echo $rows['id'] ?>
            </td>


            <td>
              <?php echo $rows['username'] ?>
            </td>


            <td>
              <?php echo $rows['mobileno'] ?>
            </td>


            <td>
              <?php echo $rows['email'] ?>
            </td>
            <td>
              <?php echo $rows['password'] ?>
            </td>


            <td>
              <?php echo $rows['date'] ?>
            </td>

            <td><a href="user_update.php?update=<?php echo $rows['id']; ?>"><svg xmlns="http://www.w3.org/2000/svg"
                  height="1em"
                  viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                  <style>
                    svg {
                      fill: #ededed
                    }
                  </style>
                  <path
                    d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM155.7 250.2L192 302.1l36.3-51.9c7.6-10.9 22.6-13.5 33.4-5.9s13.5 22.6 5.9 33.4L221.3 344l46.4 66.2c7.6 10.9 5 25.8-5.9 33.4s-25.8 5-33.4-5.9L192 385.8l-36.3 51.9c-7.6 10.9-22.6 13.5-33.4 5.9s-13.5-22.6-5.9-33.4L162.7 344l-46.4-66.2c-7.6-10.9-5-25.8 5.9-33.4s25.8-5 33.4 5.9z" />
                </svg></a></td>
          </tr>
          <?php
        }
        ?>


      </tbody>
    </table>
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