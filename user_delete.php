<?php
    include "config.php";

    if(isset($_REQUEST['delete'])){
        $id = $_REQUEST['delete'];
        $query1 = "DELETE FROM faculty_data WHERE f_id = $id;";
        $query2 = "DELETE from users where id = '$id'";
    $data = mysqli_query($con, $query1);
        $result = mysqli_query($con, $query2);
        if($result){
            ?>
                <script>
                    alert("User deleted successfully");
                    window.location.href = "user_data.php";
                </script>
            <?php
        }
    }


?>