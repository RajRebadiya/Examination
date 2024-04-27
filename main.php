<?php
session_start();
if (isset($_SESSION['username'])) {

} else {
  header("location: http://localhost/Examination/login.php");

}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="style.css"> -->
    
    

  <title>Main Page</title>
  <style>
    *{

      font-family: Poppins;
      font-size: 17px;
      
    }
    /* .cen{
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      border: 2px solid black;
      margin-top: 6%;
    } */
    body{
        /* background : beige; */
      background-image: url("images/back.jpg");
      background-repeat: no-repeat;
      background-size: cover;
    }
    .main {
        max-width: 500px;
        box-shadow: 0px 0px 12px 0px rgba(0, 0, 0, 0.3);
        margin: 30px auto;
        padding: 20px;
        background: transparent;
    }

    .main label{
        display : none;
    }
    .main select {
        width: 100%;
        padding: 10px;
        background: white;
        margin: 3px;
        border: 1px solid #212529;
        border-radius: 4px;
        cursor: pointer;
    }
    .main select:hover {
        box-shadow: 0px 0px 4px 0px rgba(0, 0, 0, 0.3);
    }
    @media screen and ( max-width : 600px ) {
        .main {
            max-width : unset;
            width : 80%;
        }
    }
    @media screen and (max-width: 576px) {
      .main {
        width: 80%;
      }
    }
    nav{
      background: white;
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

  <div class="main">
    <form action="faculty_data.php" method="post">
      <div class=" cen">
        <div class="">

          <label for="" class="marg" >Class Name:</label>
          <select aria-label="Default select example" class="" name="class_name">
            <option selected>Class Name</option>
            <option value="F-1">F-1</option>
            <option value="F-2">F-2</option>
            <option value="F-3">F-3</option>
            <option value="F-4">F-4</option>
            <option value="F-5">F-5</option>
            <option value="S-1">S-1</option>
            <option value="S-2">S-2</option>
            <option value="S-3">S-3</option>
            <option value="S-4">S-4</option>
            <option value="S-5">S-5</option>
            <option value="T-1">T-1</option>
            <option value="T-2">T-2</option>
            <option value="T-3">T-3</option>
            <option value="T-4">T-4</option>
            <option value="T-5">T-5</option>

          </select><br>
        </div>
        <div class="">
          <label for="" class="" >Duration:</label>
          <select aria-label="Default select example" class="col-md-2" name="duration">
            <option selected>Duration</option>
            <option value="1 Hour">1 Hour</option>
            <option value="2 Hour">2 Hour</option>
            <option value="3 Hour">3 Hour</option>
          </select><br>
        </div>
        <div class="">
          <label for="" class="" >Exam type:</label>
          <select aria-label="Default select example" class="col-md-2"  name="exam_type">
            <option selected>Exam type</option>
            <option value="Regular">Regular</option>
            <option value="ATKT">ATKT</option>
            <option value="Mid sem">Mid sem</option>

          </select><br>
        </div>
        <div class="">
          <label for="" class="" >Exam Pettarn:</label>
          <select aria-label="Default select example" class="col-md-2"  name="exam_pettarn">
            <option selected>Exam pettarn</option>
            <option value="Prectical">Prectical</option>
            <option value="Theory">Theory</option>

          </select><br>
        </div>
        <div class="">
          <label for=""  class="" name="department_name">Department Name:</label>
            <select name="department_name" class="col-md-2" >
            <option selected>Department Name</option>
            <option value="BCA">BCA</option>
            <option value="BSC CS">BSC CS</option>
            <option value="BSC CHE">BSC CHE</option>
            <option value="BSC MB">BSC MB</option>
            <option value="BSC PHY">BSC PHY</option>

          </select><br>
        </div>
      </div>
      <div class="col-12">
        <button type="submit" name='sub' class="btn btn-primary btn-sm mt-2">Submit Data</button>
      </div>
    </form>
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



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>