<?php
include 'config.php';
session_start();
if($_SESSION['username']){
    if (isset($_POST['sub'])) {
        $f_id = $_SESSION['id'];
        $f_name = $_SESSION['username'];
        $class_name = $_POST['class_name'];
        $duration = $_POST['duration'];
        $exam_type = $_POST['exam_type'];
        $amout;
        $exam_pettarn = $_POST['exam_pettarn'];
        $department_name = $_POST['department_name'];
        if($duration=="1 Hour"){
            $amout = 100;
        }
        else if($duration=="2 Hour"){
            $amout = 200;
        }
        else if($duration=="3 Hour"){
            $amout = 300;
        }
    
        $insert_query = "INSERT INTO `faculty_data` (`f_id` ,`f_name`, `class_name`, `duration`, `exam_type`, `exam_pettarn`, `department_name` , `amout`) VALUES ('$f_id',' $f_name ', ' $class_name', ' $duration', ' $exam_type', ' $exam_pettarn', '  $department_name' , '$amout')";
    
        $result = mysqli_query($con, $insert_query);
    
        if($result){
            ?>
                <script>
                    alert("Your record has succesfully inserted");
                    window.location.href = "faculty_personal.php";
                </script>
                
            <?php
        }
        else{
            ?>
                <script>
                    alert("Your record has succesfully not inserted");
                </script>
            <?php
        }
    }
}
else{
    header("location:login.php");
}

?>

