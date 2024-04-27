<?php
include "config.php";
session_start();
if ( isset($_SESSION['username'])) {
    if (isset($_REQUEST['update'])) {
        $id = $_REQUEST['update'];
        $query = "select * from faculty_data where data_id = '$id'";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_array($result);
    }
}else if ( isset($_SESSION['admin'])) {
    if (isset($_REQUEST['update'])) {
        $id = $_REQUEST['update'];
        $query = "select * from faculty_data where data_id = '$id'";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_array($result);
    }
}
if(isset($_POST['update'])) {
    if($_SESSION['username']){
        $id = $_POST['data_id'];
        //echo $id;
        $class_name = $_POST['class_name'];
        $duration = $_POST['duration'];
        $exam_type = $_POST['exam_type'];
        $exam_pettarn = $_POST['exam_pettarn'];
        $department_name = $_POST['department_name'];
        $query = "update faculty_data set exam_pettarn = '$exam_pettarn' , class_name = '$class_name' , duration = '$duration' , exam_type = '$exam_type' , department_name = '$department_name' where data_id = '$id'";
        $result = mysqli_query($con, $query);
        if($result){
            ?>
                <script>
                   alert("Your Data is Update!");
                   window.location.href = "faculty_personal.php";
                </script>
            <?php
        }
    }
        
    else{
        //header("Location:login.php");
    }
}
if(isset($_POST['update'])) {
    if($_SESSION['admin']){
        $id = $_POST['data_id'];
        //echo $id;
        $class_name = $_POST['class_name'];
        $duration = $_POST['duration'];
        $exam_type = $_POST['exam_type'];
        $exam_pettarn = $_POST['exam_pettarn'];
        $department_name = $_POST['department_name'];
        $query = "update faculty_data set exam_pettarn = '$exam_pettarn' , class_name = '$class_name' , duration = '$duration' , exam_type = '$exam_type' , department_name = '$department_name' where data_id = '$id'";
        $result = mysqli_query($con, $query);
        if($result){
            ?>
                <script>
                   alert("Your Data is Update!");
                   window.location.href = "faculty_all.php";
                </script>
            <?php
        }
    }
        
    else{
        header("Location:login.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>faculty Data update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
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
    nav{
      background: white;
    }
    a:hover{
      background: beige;
      color: #212529 !important; 
    }
  </style>

    <!-- Main css -->
    
</head>

<body>
    <div class="main">
    <form action="realUpdate_faculty_personal.php" method="post">
        <div class="m-auto">
            <!-- <div class="row m-auto my-2">
                <label for="" class="col-2 col-md-1">Faculty Name       :</label>
                <select aria-label="Default select example" class="col-6 col-md-2" name="f_name">
                    <option selected>Faculty Name</option>
                    <option value="Eeva Medam">Eeva Medam</option>
                    <option value="Khushbu Medam">Khushbu Medam</option>
                    <option value="Bharat Sir">Bharat Sir</option>
                </select><br>
            </div> -->
            <div class="row m-auto my-2">

                <label for="" class="col-6 col-md-1">Class Name :</label>
                <select aria-label="Default select example" class="col-6 col-md-2" name="class_name">
                    <option  selected><?php echo $row['class_name']; ?></option>
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
            <?php
            $id = $_REQUEST['update'];
            ?>
            <input type="hidden" name="data_id" value="<?=$id ?>">
            <div class="row m-auto my-2">
                <label for="" class="col-6 col-md-1">Duration :</label>
                <select aria-label="Default select example" class="col-md-2" name="duration">
                    <option selected><?php echo $row['duration']; ?></option>
                    <option value="1 Hour">1 Hour</option>
                    <option value="2 Hour">2 Hour</option>
                    <option value="3 Hour">3 Hour</option>
                </select><br>
            </div>
            <div class="row m-auto my-2">
                <label for="" class="col-6 col-md-1">Exam type :</label>
                <select aria-label="Default select example" class="col-md-2" name="exam_type">
                    <option selected><?php echo $row['exam_type']; ?></option>
                    <option value="Regular" >Regular</option>
                    <option value="ATKT">ATKT</option>
                    <option value="Mid sem">Mid sem</option>

                </select><br>
            </div>
            <div class="row m-auto my-2">
                <label for="" class="col-6 col-md-1">Exam pettarn :</label>
                <select aria-label="Default select example" class="col-md-2" name="exam_pettarn">
                    <option selected><?php echo $row['exam_pettarn']; ?></option>
                    <option value="Prectical">Prectical</option>
                    <option value="Theory">Theory</option>

                </select><br>
            </div>
            <div class="row m-auto my-2">
                <label for="" class="col-6 col-md-1">DepartmentName :</label>
                <select aria-label="Default select example" class="col-md-2" name="department_name">
                    <option name="department_name" selected><?php echo $row['department_name']; ?></option>
                    <option value="BCA">BCA</option>
                    <option value="BSC CS">BSC CS</option>
                    <option value="BSC CHE">BSC CHE</option>
                    <option value="BSC MB">BSC MB</option>
                    <option value="BSC PHY">BSC PHY</option>

                </select><br>
            </div>
        </div>
        <div class="col-12">
            <button type="submit" name='update' class="btn btn-success btn-md mt-2">Update</button>
        </div>
    </form>

    </div>
    
</body>

</html>
