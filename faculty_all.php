<?php
include "config.php";
session_start();
if ($_SESSION['admin']) {
  // $user_id = $_SESSION['id'];
  // $user_name = $_SESSION['username'];
  // $class_name = $_POST['class_name'];
  // $duration = $_POST['duration'];
  // $exam_type = $_POST['exam_type'];
  // $exam_pettarn = $_POST['exam_pettarn'];
  // $department_name = $_POST['department_name'];

  $serch = "select * from faculty_data";
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
    *{

      font-family: Poppins;
      font-size: 17px;
    }
    a:hover{
      background: beige;
      color: #212529 !important; 
    }
  </style>
</head>

<body>

  
  <div class="table-responsive">
    <table class="table  table-dark table-striped ">
      <tbody>
        <th>Faculty id</th>
        <th>Faculty Name</th>
        <th>Class Name</th>
        <th>Duration</th>
        <th>Exam Type</th>
        <th>Exam Pettarn</th>
        <th>Department Name</th>
        <th>Amount</th>
        <th>Delete</th>
        <th>Update</th>
        <?php
        while ($rows = mysqli_fetch_assoc($result)) {
          ?>
          <tr>
            <td>
              <?php echo $rows['f_id'] ?>
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