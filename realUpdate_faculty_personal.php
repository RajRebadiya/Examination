<?php
include "config.php";
session_start();
if (isset($_SESSION['username'])) {
    if (isset($_POST['update'])) {
        $id = $_POST['data_id'];
        echo $id;
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
                   alert("Your Data is Update From user side!");
                   window.location.href = "faculty_personal.php";
                </script>
            <?php
        }
    }
 }else{
    //header("Location:login.php");
}
if (isset($_SESSION['admin'])) {
    if (isset($_POST['update'])) {
        $id = $_POST['data_id'];
        echo $id;
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
                   alert("Your Data is Update From admin side!");
                   window.location.href = "faculty_all.php";
                </script>
            <?php
        }
    }
 }else{
    //header("Location:admin.php");
}
?>