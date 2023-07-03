<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   
   <link rel="stylesheet" href="css/style3.css">
  <link rel="stylesheet" href="css/style.css">
    <title>home</title>
<link rel="stylesheet" href="css/nav.css">
    <!-- custom css file link  -->
   
   
</head>
<body>
<div class="hero-header">
        <div class="wrapper">
            <header>
                <div class="logo">
                    <img src="./image/rayida.png" alt="" srcset="">
                </div>
                <nav>
                    <div class="togglebtn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <ul class="navlinks">
                        <li><a href="">Home</a></li>
                        <li><a href="#">Porforlio </a></li>
                        <li><a href="#">Resume</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="home.php?logout=<?php echo $user_id; ?>">logout</a></li>
                    </ul>
                </nav>
            </header>
       
        </div>
<div class="container">

<div class="profile">
   <?php
      $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
      if($fetch['image'] == ''){
         echo '<img src="images/default-avatar.png">';
      }else{
         echo '<img src="uploaded_img/'.$fetch['image'].'">';
      }
   ?>
   <h3><?php echo $fetch['name']; ?></h3>
   <a href="update_profile.php" class="btn">update profile</a>

</div>
<div class="container">

<div class="profile">
   <?php
      $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
      if($fetch['image'] == ''){
         echo '<img src="images/default-avatar.png">';
      }else{
         echo '<img src="uploaded_img/'.$fetch['image'].'">';
      }
   ?>
   <h3><?php echo $fetch['name']; ?></h3>
   <a href="update_profile.php" class="btn">update profile</a>

</div>
            
</div>

        </div>
<div class="footer">
    <div class="col-1">
        <h3>USEFUL LINKS</h3>
        <a href="#">About </a>
        <a href="#">Services </a>
        <a href="#">Contact</a>
        <a href="#"> Shop</a>
        <a href="#">Blog</a>
    </div>
    <div class="col-2">
        <h3>NEWSLETTER</h3>
        
        <div class="">
            
            <form action="">
                <label for="email">Subcribe Here</label>
                <br>
                <input type="email"  id="email" placeholder="Your email Address" required>
                <br>
              <button type="submit" class="pop" >Submit </button>
              
            </form>
            
            
    </div>
    <div class="col-3">
        <h3>CONTACT</h3>
        <p>No 602,E.A Street <br> Masaka</p>
        <div class="social-icons"> 
        <i class="fab fa-facebook"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-instaram"></i>
        <i class="fab fa-behance"></i>
        </div>
   
    </div>

    <script src="./js/my.js"></script>
    <script src="../js/pop.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.10/typed.min.js"></script>


</div>


</div>

</body>
</html>


