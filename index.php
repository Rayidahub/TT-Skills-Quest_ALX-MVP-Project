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
    <link rel="stylesheet" href="./css/html.css">
    <link rel="stylesheet" href="/css/footer.css">
    <title>My Portfolio</title>
    <!-- Font aweasome cdn font icon css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
    <div class="hero-header" id="back">
        <div class="wrapper">
            <header>
                <div class="logo">
                   <img src="./image/rayida.png" alt="log">
                   <!-- <i class="fa-solid fa-a">R</i>
                    <div class="logo-text">Raymond Gaius</div>-->
                </div>
                <nav>
                    <div class="togglebtn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <ul class="navlinks">
                        <li><a href="">Home</a></li>
                        <li><a href="#">Porforlio</a></li>
                        <li><a href="#Feature Section">Feature Section</a></li>
                       
                        <li><a href="#About-me">About</a></li>
                        <li><a href="login.php">Sign In</a></li>
                        <li><a href="register.php">Sign Up</a></li>
                    </ul>
                </nav>
            </header>
            <div class="container">
                <div class="hero-pic1">
                    <img src="./image/cover page.png" alt="profile pic">
                </div>
                
            </div>

            <div class="container2">
               
                <div class="hero-text">
                 
                    <h1 id="topic">TT-SKILLS-QUEST</h1>
                    <h5><span class="input"> CONNECT WITH PEERS</span></h5>
                    <p id="text0"><b>The proposed project aims to revolutionize the way individuals manage and present their professional skills and achievements.  Users can  display and update their career milestones, the project seeks to empower individuals to take ownership of their professional development.
                    <br>
                    <br>
                        In today's competitive job market, it's essential for individuals to not only possess the necessary skills but also effectively communicate and showcase their expertise. This project will enable users to highlight their skills, certifications, projects, and other accomplishments in a visually appealing and user-friendly manner. By providing a centralized platform for career documentation, 
                        
                                       <br>
                   <br>
                        Furthermore, the project emphasizes the significance of connectivity in the context of job search. In today's digital age, the power of networking and leveraging connections cannot be understated. By harnessing the platform's networking capabilities, users can tap into a vast pool of opportunities, gaining access to job openings, mentorship possibilities, and industry insights. The project aims to equip users with the necessary tools and resources to maximize their job search efforts, ultimately increasing their chances of securing fulfilling employment.
                    <br>
                    <br>
                        Overall, this project aims to empower individuals to actively manage and present their professional journey, foster meaningful connections within a supportive community, and harness the power of networking to excel ur their career endeavors.</p>
                        <div class="btn-group">
                        <a href="register.php" class="btn active"> Get Started</a>
                        <a href="https://wa.link/bk7bne" class="btn">Let's Build This Together</a>
                    </div>
                   
                </div>
                
            </div>
            <div class="Feature_section" id="Feature Section">

                
                <div class="hero-text">
                   
                   
                    <h1 id="feature">Feature Section</h1>
              
              
            
                </div></div>
            <div class="Feature_section1" id="Feature Section">

                <div class="hero-pic">
                    <img src="./image/myteam.jpg" alt="profile pic">
                </div>
                <div class="hero-pic">
                    <img src="./image/myteam2.jpg" alt="profile pic">
                </div>
                <div class="hero-text">
                   
                   
                 
                    <h5><span class="input"> TEAM WORK</span></h5>
              
                    <p id="text0">The Team Collaboration feature enables seamless communication and collaboration among team members. Teams can stay connected and work together efficiently. Whether you're working on a project, brainstorming ideas, or coordinating tasks, this feature fosters a productive and collaborative environment, promoting teamwork and achieving shared </p>
                    
                 
                </div>
            </div>
            <div class="Feature_section2">
                <div class="hero-pic">
                    <img src="./image/user1.png" alt="profile pic">
                </div>
                <div class="hero-pic">
                    <img src="./image/me.png" alt="profile pic">
                </div>
                <div class="hero-text">
                    <h5><span class="input"> INTERACTIVE PORTFOLIO BUILDER</span></h5>
                   
                    <p id="text0">The Interactive Portfolio Builder is a powerful tool that enables you to create a visually stunning portfolio to impress your audience. With an intuitive interface, you can easily customize the layout, You can showcase your work in a captivating way. Add images, videos, and descriptions to each project, and create a seamless browsing experience for anyone viewing your portfolio.</p>
                    
                </div>
            </div>
            <div class="Feature_section3">
                <div class="hero-pic">
                    <img src="./image/fd.png" alt="profile pic">
                </div>
                <div class="hero-pic">
                    <img src="./image/fd1.png" alt="profile pic">
                </div>
                <div class="hero-text">
                  
                    <h5><span class="input"> COLLABORATION AND FEEDBACK</span></h5>
                   
                    <p id="text0">Collaboration and Feedback are essential for growth and improvement. My platform provides a built-in collaboration and feedback feature, allowing you to connect with clients, collaborators, or mentors easily. You can share your work, gather feedback, and have discussions all within the platform. This streamlined communication process ensures efficient collaboration and helps you refine your skills based on valuable input from others.</p>
                </div>
            </div>
            <div class="About-me0" id="About-me">
               

                <div class="hero-text">
                    <h1 id="feature" id="About-me">About Section </h1>
              
                    
                    </div>
                </div>
          
            <div class="About-me" >
                <div class="my-pic">
                    <img src="./image/1.png" alt="profile pic">
                </div>

                <div class="hero-text">
                    <h5>Hi I'am <span class="input">Frontend Developer</span></h5>
                    <h1 id="sub">Raymond Gaius</h1>
                    <p >Hello, I am a Frontend Software developer. I have passion for solving-probelm  and enjoy collaborating with others to develop creative solutions. I'm excited about the opportunity to contribute my skills to a team and learn from experienced developers like "You"  in order to grow in my career.</p>
                        
                    <div class="social">
                        <h5> <span>Lets Connect</span> </h5>
                        <a href="https://facebook.com/raymond.yidawi/"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.linkedin.com/in/rayida-tech/"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://github.com/Rayidahub"><i class="fa-brands fa-github"></i></a>
                        <a href="https://web.facebook.com/profile.php?id=100064934226981"><i  class="fa-brands fa-facebook"> </i>page</a>
                    </div>
                    
                </div>
            </div>
            <div class="About-me1" id="About-me">
                

                <div class="hero-text">
                    
                    <h1 id="sub">Inspiration of the project</h1>
                    <p id="text">My inspiration for building a web application to allow users to showcase their skills can stem from various sources and motivations. Here are a few potential inspirations that may resonate with you:
                        
                        <br><br>

                        1. Empowering Individuals: You may be driven by a desire to empower individuals and provide them with a platform to showcase their unique talents and skills. By creating a web application that allows users to showcase their abilities, you aim to give them a voice and an opportunity to be recognized for their expertise.
                        <br><br>
                        2. Fostering Collaboration: Building a web application that encourages users to share their skills can foster a sense of collaboration and community. You may be inspired by the idea of creating an online space where like-minded individuals can connect, learn from each other, and collaborate on projects.
                        <br><br>
                        3. Promoting Personal Branding: Many professionals and freelancers rely on personal branding to differentiate themselves in the job market. Your motivation could be to develop a platform that enables users to effectively showcase their skills, work samples, and achievements. By providing tools and features for personal branding, you aim to help individuals stand out and attract opportunities.
                        <br><br>
                        4. Supporting Skill Development: Your inspiration could lie in creating a web application that not only showcases skills but also facilitates skill development. You may envision a platform that offers resources, tutorials, and feedback mechanisms to help users enhance their abilities and grow in their chosen fields.
                        <br><br>
                        5. Addressing a Gap in the Market: Your motivation might stem from identifying a gap in the existing market. If you feel that there is a lack of user-friendly platforms for individuals to showcase their skills effectively, you can be inspired to fill that void and provide a solution that meets the needs of both users and potential employers or clients.
                        <br><br>
                        6. Personal Experience: Your own journey as a professional in the industry might be a significant inspiration. If you have faced challenges in showcasing your skills or securing opportunities, you may be driven by a desire to create a platform that overcomes those obstacles and makes the process smoother for others.
                        </p>
                        
                    <div class="btn-group">
                        <a href="https://drive.google.com/file/d/1CpEsmkclByprRFU7HccHQ4DlYjLn6peF/view?usp=sharing" class="btn active"> Download CV</a>
                        <a href="https://wa.link/bk7bne" class="btn">Let's Chat</a>
                        <a href="https://github.com/Rayidahub/TT-Skills-Quest_ALX-MVP-Project" class="btn">GitHub Project</a>
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
                          <button type="submit" class="pop" > Submit</button>
                          
                        </form>
                        
                    </div>  
                </div>
                <div class="col-1">
                    <h3>NAVIGATION LINKS</h3>
                     <H2>Address:</H2>
                     <p></p>   
                    <a href="#back">Go Up</a>
                </div>
                </div>
                <div class="footer2">
                  
                  <h1 id="last-line"> Copyright@ Rayida Tech 2023   </h1>
                  
                    </div>
        </div>
    </div>
    

    <script src="./js/my.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.10/typed.min.js"></script>
</body>
</html>   