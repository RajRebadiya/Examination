<?php
include "config.php";
session_start();
if($_SESSION['username'] ){
    if(isset($_REQUEST['delete'])){
        $id = $_REQUEST['delete'];
        $query = "DELETE FROM faculty_data where data_id=$id";
        $result = mysqli_query($con , $query);
        if($result){
           ?>
                 <script>
                    alert("Your Data is Deleted") ;
                    window.location.href = "faculty_personal.php";
                </script>
           <?php
        }

    }
}
if( $_SESSION['admin']){
    if(isset($_REQUEST['delete'])){
        $id = $_REQUEST['delete'];
        $query = "DELETE FROM faculty_data where data_id=$id";
        $result = mysqli_query($con , $query);
        if($result){
           ?>
                 <script>
                    alert("Your Data is Deleted") ;
                    window.location.href = "faculty_all.php";
                </script>
           <?php
        }

    }
}
?> 