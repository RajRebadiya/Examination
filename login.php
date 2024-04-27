<?php
include 'config.php';
session_start();
if (isset($_SESSION['username'])) {
    session_unset();
    session_destroy();
    header("location: http://localhost/Examination/login.php");
} else {
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $user_check_query = mysqli_query($con, "select * from users where username='$username' and password='$password'");
        // $rows = mysqli_num_rows($user_check_query);

        if (mysqli_num_rows($user_check_query) > 0) {
            while ($rows = mysqli_fetch_array($user_check_query)) {
                session_start();

                $_SESSION['username'] = $rows['username'];
                $_SESSION['password'] = $rows['password'];
                $_SESSION['id'] = $rows['id'];


                header("location: http://localhost/Examination/main.php");
            }
        } else {
?>
            <script>
                alert('user not exit');
            </script>
<?php
        }
    }
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->



    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="collapse navbar-collapse">
        <nav>
            <ul class="nav navbar-nav navbar-nav-first">
                <li><a href="home.php" class="smoothScroll">Home</a></li>
                <li><a href="#about" class="smoothScroll">About</a></li>
                <li><a href="#team" class="smoothScroll">Our Teachers</a></li>
                <li><a href="login.php" class="smoothScroll">Login</a></li>
                <li><a href="#testimonial" class="smoothScroll">Reviews</a></li>
                <li><a href="#contact" class="smoothScroll">Contact</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><i class="fa fa-phone"></i> +65 2244 1100</a></li>
            </ul>
        </nav>
    </div>

    <div class="main">

        <!-- Sign up form -->


        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin.jpg" alt="sing up image"></figure>
                        <a href="register.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="your_name" placeholder="Username" required />
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="your_pass" placeholder="Password" required />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" style="
    margin-left: 0px;
" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <button type="submit" name="login" class="btn btn-primary">Login Now</button>
                            </div>
                        </form>
                        <!-- <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="register.php" style="color: #3b5998;"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="register.php" style="color: #1da1f2;"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="register.php" style="color: #db4437;"><i class="fab fa-google"></i></a></li>
                            </ul>


                        </div> -->
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>