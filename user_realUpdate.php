<?php
include "config.php";

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $mobileno = $_POST['mobileno'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "UPDATE `users` SET `username`='$username',`mobileno`='$mobileno',`email`='$email',`password`='$password' WHERE  `id`='$id'";
    $result = mysqli_query($con, $query);
    if($result){
         ?>
    
    <script>
                alert("User Data Update succesfully");
                window.location.href = "userside_update.php";
            </script>
    
    <?php
     }
  
}
?>
