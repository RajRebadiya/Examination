<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
   <title>Animated Sidebar Menu | CodingLab</title> 
    <link rel="stylesheet" href="adminStyle.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <style>
              *{

                font-family: Poppins;
                font-size: 17px;
              }
              body{
                background-image: url("images/back.jpg");
      background-repeat: no-repeat;
      background-size: cover;
              }
              a:hover{
      background: beige;
      color: #212529 !important; 
    }
  </style>
  </head>
  <body>
  <?php include 'nav_2.php'?> 
    <div class="wrapper">
      <input type="checkbox" id="btn" hidden>
      <label for="btn" class="menu-btn">
        <i class="fas fa-bars"></i>
        <i class="fas fa-times"></i>
      </label>
      <nav id="sidebar">
        <div class="title">Admin Panel</div>
        <ul class="list-items">
          <li><a href="index.php"><i class="fas fa-home"></i>Home</a></li>
          <li><a href="user_data.php"><i class="fas fa-sliders-h"></i>User's Data</a></li>
          <li><a href="faculty_all.php"><i class="fas fa-address-book"></i>Faculty Data</a></li>
          <li><a href="nair.php"><i class="fas fa-stream"></i>Payment</a></li>
          <li><a href="admin.php"><i class="fas fa-user"></i>Admin</a></li>
          <li><a href="logout.php"><i class="fas fa-globe-asia"></i>Logout</a></li>
          <!-- <li><a href="#"><i class="fas fa-envelope"></i>Contact us</a></li> -->
          <div class="icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-github"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </div>
        </ul>
      </nav>
    </div>
    
  </body>
</html>