<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<?php

include 'php/config.php';

$user_id = $_SESSION['unique_id'];

if(isset($_POST['update_profile'])){

   $update_name = mysqli_real_escape_string($conn, $_POST['update_name']);
   $update_email = mysqli_real_escape_string($conn, $_POST['update_email']);
   $update_about = mysqli_real_escape_string($conn, $_POST['update_about']);
  


   mysqli_query($conn, "UPDATE `users` SET fname = '$update_name'  WHERE unique_id = {$_SESSION['unique_id']}");
   mysqli_query($conn, "UPDATE `users` SET  email = '$update_email' WHERE unique_id = {$_SESSION['unique_id']}");
   mysqli_query($conn, "UPDATE `users` SET  about = '$update_about' WHERE unique_id = {$_SESSION['unique_id']}");
 
   $old_pass = $_POST['old_pass'];
   $update_pass = mysqli_real_escape_string($conn, md5($_POST['update_pass']));
   $new_pass = mysqli_real_escape_string($conn, md5($_POST['new_pass']));
   $confirm_pass = mysqli_real_escape_string($conn, md5($_POST['confirm_pass']));

   if(!empty($update_pass) || !empty($new_pass) || !empty($confirm_pass)){
      if($update_pass != $old_pass){
         $message[] = 'old password not matched!';
      }elseif($new_pass != $confirm_pass){
         $message[] = 'confirm password not matched!';
      }else{
         mysqli_query($conn, "UPDATE `users` SET password = '$confirm_pass' WHERE unique_id = {$_SESSION['unique_id']}");
         $message[] = 'password updated successfully!';
      }
   }



}

?><?php include_once "header.php"; ?>

<div class="wrapper">
    <div class="sidebar">
        <h2>TT-SKills-Quest</h2>
        <ul>
          
            <li><a href="./profile.php"><i class="fas fa-user"></i>Profile</a></li>
            <li><a href="about.php"><i class="fas fa-address-card"></i>About</a></li>
            <li><a href="index.php"><i class="fas fa-project-diagram"></i>Portfolio</a></li>
           
            <li><a href="./chatsec.php"><i class="fas fa-map-pin" ></i>Chat Now</a></li>
          
        
        </ul> 
        <div class="social_media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div class="main_content">
        <div class="header">
         <img src="./image/rayida.png" alt="" srcset="" class="img"> 
         <div class="header1"><a href="http://localhost/chat/php/logout.php?logout_id=575541585">Logout</a></div>
        </div>  

        <div class="info" id="first">
        
      </div>
      <div class="info">
        <div> <h1>Edit Your Profile </h1> </div>
        <div><p>Feel free to make Chagnges to your your file details . <P>Use the edit button to Update the About section of your profile, Some features are skill under process. |When faced with setbacks or failures, motivated individuals are more likely to bounce back, learn from their experiences, and try again.</P> </div>
        <div class="main-chat">
        <div class="photo">
        <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
            

          ?>
          <img id="img" src="php/images/<?php echo $row['img']; ?>" alt="">
              <span id="h3"> Welcome Back, <?php echo $row['fname']. " " . $row['lname'] ?></span>
              <br>
              <span id="h3"> About Me: <?php  echo $row['about'] ?></span>  
        </div>
    </div>
      </div>
      <div class="info">
    
        <div class="update-profile">
                                                                  
                                                                  <?php
                                                                     $select = mysqli_query($conn, "SELECT * FROM `users` WHERE unique_id = {$_SESSION['unique_id']}");
                                                                     if(mysqli_num_rows($select) > 0){
                                                                        $fetch = mysqli_fetch_assoc($select);
                                                                     }
                                                                  ?>
                                                               
                                                                  <form action="" method="post" enctype="multipart/form-data">
                                                                     <?php
                                                                       
                                                                     ?>
                                                                     <div class="flex">
                                                                        <div class="inputBox">
                                                                           <span>Userame :</span>
                                                                           <input type="text" name="update_name" value="<?php echo $fetch['fname']; ?>" class="box">
                                                                           
                                                                           <span>Your email :</span>
                                                                           <input type="email" name="update_email" value="<?php echo $fetch['email']; ?>" class="box">
                                                                           <span>Tell Us About You :</span>
                                                                           <input type="" name="update_about" value="<?php echo $fetch['about']; ?>" class="box">
                                                                        </div>
                                                                        <div class="inputBox">
                                                                           <input type="hidden" name="old_pass" value="<?php echo $fetch['password']; ?>">
                                                                           <span>Old password :</span>
                                                                           <input type="password" name="update_pass" placeholder="enter previous password" class="box">
                                                                           <span>New password :</span>
                                                                           <input type="password" name="new_pass" placeholder="enter new password" class="box">
                                                                           <span>Confirm password :</span>
                                                                           <input type="password" name="confirm_pass" placeholder="confirm new password" class="box">
                                                                        </div>
                                                                     </div>
                                                                     <input type="submit" value="update profile" name="update_profile" class="btn">
                                                                     <a href="home.php" class="delete-btn">go back</a>
                                                                  </form>
                                                               
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
        
        
    </div>
    <div class="col-1">
        <h3>USEFUL LINKS</h3>
        <a href="#">About </a>
        <a href="#">Services </a>
        <a href="#">Contact</a>
        <a href="#"> Shop</a>
        <a href="#">Blog</a>
    </div>
   
    </div>
    <div class="footer2">
                  
                  <h1 id="last-line"> Copyright@ Rayida Tech 2023   </h1>
                  
                    </div>
                  </div>
</div>

  <script src="javascript/users.js"></script>


</html>
