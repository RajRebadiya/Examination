<?php
include 'config.php';
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $mobileno = $_POST['mobileno'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    if ($password == $cpassword) {
        $insert_query = mysqli_query($con, "INSERT INTO `users` (`username`, `mobileno`, `email`, `password`, `cpassword`) VALUES ('$username', '$mobileno', '$email', '$password', '$cpassword')");
        if ($insert_query) {
?>
            <script>
                alert('You Have Successfully Registered');
                window.location.href = "login.php";
            </script>

        <?php

        } else {
        ?>
            <script>
                alert('not insert ');
                windows.location = 'login.php';
            </script>

        <?php
        }
    } else {
        ?>
        <script>
            alert("Your password and Confirm password are not same")
        </script>
<?php
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Registration Page</title>
    <style>
        .error-message {
            color: red;
        }
    </style>
</head>

<body>
    <div class="main">
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="username" placeholder="Username">
                                <span id="username-error" class="error-message"></span>
                            </div>
                            <div class="form-group">
                                <label for="mobileno"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="mobileno" id="mobileno" placeholder="Mobile No">
                                <span id="mobileno-error" class="error-message"></span>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-lock"></i></label>
                                <input type="email" name="email" id="email" placeholder="Email">
                                <span id="email-error" class="error-message"></span>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password">
                                <span id="password-error" class="error-message"></span>
                            </div>
                            <div class="form-group">
                                <label for="cpassword"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password">
                                <span id="cpassword-error" class="error-message"></span>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term">
                                <label for="agree-term" style="margin-left: 0px;" class="label-agree-term"><span><span></span></span>I agree all statements in <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <button type="submit" name="submit" class="btn btn-primary">Sign in</button>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link">I am already a member</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        document.getElementById("register-form").addEventListener("submit", function(event) {
            var username = document.getElementById("username").value;
            var mobileno = document.getElementById("mobileno").value;
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var cpassword = document.getElementById("cpassword").value;
            var isValid = true;

            // Validate username
            if (username.length < 3) {
                document.getElementById("username-error").innerHTML = "Username must be at least 3 characters";
                isValid = false;
            } else {
                document.getElementById("username-error").innerHTML = "";
            }

            // Validate mobileno
            if (!/^\d{10}$/.test(mobileno)) {
                document.getElementById("mobileno-error").innerHTML = "Invalid mobile number";
                isValid = false;
            } else {
                document.getElementById("mobileno-error").innerHTML = "";
            }

            // Validate email
            if (!/^\S+@\S+\.\S+$/.test(email)) {
                document.getElementById("email-error").innerHTML = "Invalid email address";
                isValid = false;
            } else {
                document.getElementById("email-error").innerHTML = "";
            }

            // Validate password
            if (password.length < 6) {
                document.getElementById("password-error").innerHTML = "Password must be at least 6 characters";
                isValid = false;
            } else {
                document.getElementById("password-error").innerHTML = "";
            }

            // Validate confirm password
            if (password !== cpassword) {
                document.getElementById("cpassword-error").innerHTML = "Passwords do not match";
                isValid = false;
            } else {
                document.getElementById("cpassword-error").innerHTML = "";
            }

            // Prevent form submission if validation fails
            if (!isValid) {
                event.preventDefault();
            }
        });
    </script>
</body>

</html>