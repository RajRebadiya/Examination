<?php
include "config.php";

    if (isset($_REQUEST['update'])) {
        // $id = $_REQUEST['update'];
        // $mobileno = $_POST['mobileno'];
        // $email = $_POST['email'];
        // $password = $_POST['password'];
        // $query = "UPDATE users set mobileno = '$mobileno' , email = '$email' , password = '$password' WHERE id='$id'";
        // $result = mysqli_query($con, $query);
        // if($result){
        //     ?>
        //
        <script>
            //         alert("User Data Update succesfully");
            //         window.location.href = "user_data.php";
            //     </script>
        //
        <?php
        // }
        $id = $_REQUEST['update'];
        $query = "select * from users where id ='$id'";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_array($result);
    
    }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="style.css">
    <title>User data Update</title>
</head>

<body>
    <form action="user_realUpdate.php" method="post">


        <div class="main">
            <section class="signup">
                <div class="container">
                    <div class="signup-content">
                        <div class="signup-form">
                            <h2 class="form-title">Sign up</h2>
                            <form method="POST" class="register-form" id="register-form">
                                <div class="form-group">
                                    <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                    <input type="text" name="username" id="name" value="<?php echo $row['username']; ?>"
                                        placeholder="Username" required />
                                </div>
                                <div class="form-group">
                                    <label for="mobilename"><i class="zmdi zmdi-email"></i></label>
                                    <input type="text" name="mobileno" id="email"
                                        value="<?php echo $row['mobileno']; ?>" placeholder="Mobie No" required />
                                </div>
                                <?php 
                                    $id = $_REQUEST['update']
                                ?>
                                <input type='hidden' name="id" value="<?=$id ?>">
                                <div class="form-group">
                                    <label for="email"><i class="zmdi zmdi-lock"></i></label>
                                    <input type="email" name="email" id="pass" value="<?php echo $row['email']; ?>"
                                        placeholder="Email" required />
                                </div>
                                <div class="form-group">
                                    <label for="password"><i class="zmdi zmdi-lock-outline"></i></label>
                                    <input type="text" name="password" id="re_pass"
                                        value="<?php echo $row['password']; ?>" placeholder="Password" required />
                                </div>


                                <div class="form-group form-button">
                                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                        <div class="signup-image">
                            <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>

                        </div>
                    </div>
                </div>
            </section>
        </div>

    </form>


</body>

</html>