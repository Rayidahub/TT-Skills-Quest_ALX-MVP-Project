<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>

<?php include_once "header.php"; ?>

<div class="wrapper">
    <div class="sidebar">
        <h2>TT-SKills-Quest</h2>
        <ul>
           
            <li><a href="./profile.php"><i class="fas fa-user"></i>Profile</a></li>
            <li><a href="about.php"><i class="fas fa-address-card"></i>About</a></li>
            <li><a href="./index.php"><i class="fas fa-project-diagram"></i>Portfolio</a></li>
            <li><a href="./users.php"><i class="fas fa-map-pin"></i>Logout of chat</a></li>
          
        
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
         <div class="header1"><a href="http://localhost/chat/php/logout.php?logout_id=575541585">Logout</a>
        </div>
        </div>  

        <div class="info" id="first">
         
      </div>
      <div class="info">
        <div> <h1> Welcome to Chat Section </h1> </div>
        <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A sed nobis ut exercitationem atque accusamus sit natus officiis totam blanditiis at eum nemo, nulla et quae eius culpa eveniet voluptatibus repellat illum tenetur, </div>
        <div class="main-chat">
        <div class="photo">
     
        </div>
    </div>
      </div>
    <div class="main-chat">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <img src="php/images/<?php echo $row['img']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
     
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section></div>
    
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
