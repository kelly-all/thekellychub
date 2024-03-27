<?php
include 'dbconnect.php';
if(isset($_POST['btn-signup']))
{
   $name = mysqli_real_escape_string($con, $_POST['name']); 
   $email = mysqli_real_escape_string($con, $_POST['email']); 
   $subject = mysqli_real_escape_string($con, $_POST['subject']); 
   $message = mysqli_real_escape_string($con, $_POST['message']); 



    $stmt = $con->prepare("INSERT INTO portfolio(name, email, subject, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    // Execute the statement
    $stmt->execute();

    // Check for errors
    if ($stmt->errno) {
    echo "Error: " . $stmt->error;
} else {
    $msg = "<font>Thanks for the message, i'll get back to you!</font>";
}

// Close the statement
$stmt->close();
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelly</title>
    <link rel="stylesheet" href="style.css">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    
    <style>
        pre[class*="language-"] {
            font-size: 0.8em;
        }
        </style>
</head>
<body>

<div id="header">
    <div class="container">
    <nav>
        <h1 class="logo"><span style="color: #2f6e0f;">K</span>elly</h1>
        <ul id="sideMenu">

            <li><a href="#">Home</a></li>
            <li><a href="#intro">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#portfolio">Portoflio</a></li>
            <li><a href="#hire">Contact</a></li>
            <!-- <i class="fas fa-times"></i> -->
            <i class="fas fa-times navbar-toggler-icon" onclick="closeMenu()"></i>
        </ul>
        <!-- <i class="fas fa-bars"></i> -->
    <i class="fas fa-bars navbar-toggler-icon" onclick="openMenu()"></i>
    </nav>
    <div class="header-text">
        <h5>HEY THERE</h5>
        <h1>KENNETH TOCHUKWU</h1>
        <p>FRONT-END DEVELOPER</p>
      <a href="#profile"><center><button class="center" id="btn">MORE ABOUT ME</button></center></a>
    </div>
</div>
</div>

<!-- -------------------introduction---------------------- -->
<div id="intro">
<div class="container">
    <h1 class="title">Introduction</h1>
    <h1 class="sub-title" style="color: #808080;">Let me introduce myself.</h1>
    <p class="titlehead">Welcome to my portfolio!, im kelly, Explore my work showcasing a blend of creativity and technical expertise. From sleek web designs to robust applications, I craft solutions that marry functionality with elegance. Check out some of my work in the Portfolio section.</p>    
    </div>
</div>
</div>
<!-- <span>🚀</span> -->


<!-------------------about---------------------->
<div id="about">
    <div class="container">
        <div class="row">
            <div class="about-col-1">
                <img src="profile.png" alt="">
            </div>
            <div class="about-col-2">
                <h1 class="sub-title">My Credential</h1>
                <p style="margin-top: 10px; word-spacing: 2px; letter-spacing: 1px; line-height: 25px;">Cultivating digital excellence, my portfolio showcases a proven track record in Html5/Css3, Javascript, Php, UI/UX, Bootstrap, SQL Server and PHP development, crafting optimized databases, precise queries, and dynamic website & applications for a seamless fusion of form and function.
                    
                </p>

                <div class="tap-titles">
                    <p class="tab-links active-link" onclick="openTab('skills')">Skills</p>
                    <p class="tab-links" onclick="openTab('experiance')">Experiance</p>                                                            
                    <p class="tab-links" onclick="openTab('education')">Education</p>                                                            
                </div>
                <div class="tab-contents active-tab" id="skills">
                    
                    <ul>
                        <li><span>HTML5</span><br>Designing Design Interfaces</li>
                        <!-- <li><span>CSS3</span><br>Css3 Design Interfaces</li> -->
                        <!-- <li><span>BOOTSTRAP</span><br>Bootstrap Design Interfaces</li> -->
                        <li><span>JAVASCRIPT</span><br>Javascript Development</li>
                        <li><span>SQL</span><br>Sql Server Development</li>
                        <li><a href="#profile" style="color: #808080; font-weight: 600;">More&darr;</a></li>
                        <!-- <li><span>FIGMA</span><br>Figma Designs & Prototype</li>
                        <li><span>PHP</span><br>Php Development</li> -->
                    </ul>
                </div>

                <div class="tab-contents" id="experiance">

                    <ul>
                        <li><span>2023 - current</span><br>Sql server And Php Dev at REX Technologies</li>
                        <li><span>2022 - Current</span><br>Web Developer at REX Technologies</li>                        
                        <li><span>2019 - 2020</span><br>Team Lead at Treasurelink LLC</li>
                    </ul>
                </div>

                <div class="tab-contents" id="education">
                
                    <ul>
                        <li><span>2023</span><br>Php Development and Web Hosting & Management at REX Technologies.</li>
                        <li><span>2021</span> <br>Responsive Web Design at Aptech Computer Education.</li>
                        <li><span>2018</span><br>Degree ICT Program at Treasurelink LLC.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row" id="profile">
            <div class="col-6">
            <div class="intro">
            <h2 class="sub-title">PROFILE</h2>
            <p>Highly skilled and creative professional specializing in web development. Proficient in HTML, CSS, JavaScript, Php and other modern web technologies. Experienced in building responsive and visually appealing websites and web applications. Detail-oriented and dedicated to delivering exceptional user experiences. Passionate about staying updated with the latest industry trends and implementing cutting-edge solutions. A collaborative team player with excellent problem-solving abilities.</p>
            <div>
                <h1 class="title">FULLNAME:</h1>
                <p>Kenneth Tochukwu Junior</p>
            </div>
            <div>
                <h1 class="title">BIRTH DATE:</h1>
                <p>March 17, 2005</p>
            </div>  
            <div>
                <h1 class="title">JOB:</h1>
                <p>Freelancer, Frontend Developer</p>
            </div>
            <div>
                <h1 class="title">WEBSITE:</h1>
                <p>Null</p>
            </div>
            <div>
                <h1 class="title">EMAIL:</h1>
                <p>kellycurtti@gmail.com</p>
            </div>
        </div>
    </div>

        <div class="col-6">
            <div class="intro">
            <h2 class="sub-title">SKILLS</h2>
            <p>Extensive expertise in HTML, CSS, JavaScript, Php and other modern web technologies, with a solid understanding of modern web frameworks. Proficient in developing responsive and user-friendly websites and web applications. Experienced in front-end development, including UI/UX design and optimization.</p>

            <!--SKILLS PROGRESS BAR-->
            <div class="col-sm" style="margin-top: 45px;">
            <h3 class="title" style="margin-bottom: 10px;">HTML5</h3>
            <div class="progress" style="height:20px;">
                <div class="progress-bar bg-white progress-bar-animated progress-bar-striped" style="width: 90%;" aria-valuemax="100" aria-valuemin="0"><span>90%</span>
                </div>
            </div>
            </div>
            <div class="col-sm" style="margin-top: 45px;">
            <h3 class="title" style="margin-bottom: 10px;">CSS3</h3>
            <div class="progress" style="height:20px;">
                <div class="progress-bar bg-white progress-bar-animated progress-bar-striped" style="width: 85%;" aria-valuemax="100" aria-valuemin="0"><span>85%</span>
                </div>
            </div>
            </div>
            <div class="col-sm" style="margin-top: 45px;">
            <h3 class="title" style="margin-bottom: 10px;">BOOTSTRAP</h3>
            <div class="progress" style="height:20px;">
                <div class="progress-bar bg-white progress-bar-animated progress-bar-striped" style="width: 90%;" aria-valuemax="100" aria-valuemin="0"><span>90%</span>
                </div>
            </div>
            </div>
            <div class="col-sm" style="margin-top: 45px;">
            <h3 class="title" style="margin-bottom: 10px;">JAVASCRIPT</h3>
            <div class="progress" style="height:20px;">
                <div class="progress-bar bg-white progress-bar-animated progress-bar-striped" style="width: 75%;" aria-valuemax="100" aria-valuemin="0"><span>75%</span>
                </div>
            </div>
            </div>
            <div class="col-sm" style="margin-top: 45px;">
            <h3 class="title" style="margin-bottom: 10px;">UI/UX</h3>
            <div class="progress" style="height:20px;">
                <div class="progress-bar bg-white progress-bar-animated progress-bar-striped" style="width: 85%;" aria-valuemax="100" aria-valuemin="0"><span>85%</span>
                </div>
            </div>
            </div>
            <div class="col-sm" style="margin-top: 45px;">
            <h3 class="title" style="margin-bottom: 10px;">SQL SERVER</h3>
            <div class="progress" style="height:20px;">
                <div class="progress-bar bg-white progress-bar-animated progress-bar-striped" style="width: 85%;" aria-valuemax="100" aria-valuemin="0"><span>85%</span>
                </div>
            </div>
            </div>
            <div class="col-sm" style="margin-top: 45px;">
            <h3 class="title" style="margin-bottom: 10px;">PHP</h3>
            <div class="progress" style="height:20px;">
                <div class="progress-bar bg-white progress-bar-animated progress-bar-striped" style="width: 75%;" aria-valuemax="100" aria-valuemin="0"><span>75%</span>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<div class="row" style="margin-top: 25px;">
    <div class="col-3">
       <a href="#hire"><button class="center" id="btn">HIRE ME</button></a>
    </div>
    <div class="col-3">
      <a href="cv/Data Management system.pdf" download><button style="background-color: #2f6e0f; color: #fff;" class="center" id="btn">DOWNLOAD CV</button></a>
    </div>
</div>
    </div>
</div>


<!-------- services----------->
<div id="services">
    <div class="container">
        <h1 class="sub-title" style="color: #808080;">My Services</h1>
        <div class="service-list">
            <div>
                <i class="fas fa-code"></i>
                <h2>Web Development</h2>
                <p>Passionate web developer dedicated to crafting visually stunning, user-friendly, and seamlessly functional websites through a blend of creative design and robust coding expertise. Let's transform your digital vision into a captivating online reality!!.</p>                
            </div>
            <div>
                <i class="fas fa-crop-alt"></i>
                <h2>UI/UX Design</h2>
                <p>I'm passionate about blending artistry with functionality, creating digital experiences that not only look stunning but also feel intuitive. With a meticulous eye for detail and a user-centric approach,I specialize in crafting interfaces that captivate and engage.</p>                
            </div>
            <div>
                <i class="fab fa-app-store"></i>
                <h2>SQL & PHP Development</h2>
                <p>Dive into a world of optimized databases, precise queries, and dynamic web applications seamlessly integrated for robust, scalable solutions. With full-stack prowess, I navigate effortlessly from front-end to back-end, ensuring your projects achieve a harmonious blend of user experience and technical finesse.</p>                
            </div>
        </div>
    </div>
</div>
    

<!-- -------------------porfolio---------------------- -->
<div id="portfolio">
    <div class="container">
        <h1 class="subt-itle" style="color: #808080;">My Work</h1>
        <div class="work-list">
            <div class="work">
                <img src="work-1.png">
                <div class="layer">
                    <h3>Social Media App</h3>
                    <p>The app connects you to the talented people around the world.
                        Download it from app / play store.</p>
                        <a href="#"><i class="fas fa-external-link-alt"></i></a>
                </div>
            </div>
            <div class="work">
                <img src="work-2.png" >
                <div class="layer">
                    <h3>Music App</h3>
                    <p>The app connects you to the talented people around the world.
                        Download it from app / play store.</p>
                        <a href="#"><i class="fas fa-external-link-alt"></i></a>
                </div>
            </div>
            <div class="work">
                <img src="work-3.jpg" >
                <div class="layer">
                    <h3>Online Shopping App</h3>
                    <p>The app connects you to the talented people around the world.
                        Download it from app / play store.</p>
                        <a href="#"><i class="fas fa-external-link-alt"></i></a>
                </div>
            </div>
        </div>
        <a href="#cnt" class="btn">See More</a>
    </div>
</div>



<!-- -------------------service to offer---------------------- -->
<!-- <div class="servicebg">    

    <div class="container">
    <div class="title-item">
    <h6 class="title">SERVICES</h6>
    <h11 class="sub-title">What Can I Do For You?</hh1>
        <div class="about-col-1">
            <img src="images/about.jpg" alt="">
        </div>
    <p class="titlehead">Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem ipsum  Consectetur ut in in eu do.</p>
</div>
   </div>
   </div> -->




<div class="container" style="margin-top:7%;">
    <div class="row">
        <div class="col-4-1 text-center">            
             <i class="fas fa-map-marker-alt"></i>
            <h6 class="title text-uppercase">where to find me</h6>        
            <div class="text-capitalized">
            <p>Aptech Education WuseII</p>
            <p>Winnie's Plaze Maraba</p>
            <p>Auta Balefi</p>
        </div>
        </div>

        <div class="col-4-2 text-center">            
           <i class="fas fa-envelope"></i>
            <h6 class="title text-uppercase">email me at</h6>        
            <div class="">
            <a href="mailto:kellycurtti@gmail.com"><p>kellycurtti@gmail.com</p></a>
        </div>
        </div>

        <div class="col-4-3 text-center">            
             <i class="fas fa-phone"></i>
           <h6 class="title text-uppercase">call me with</h6>
            <div class="text-capitalized">
            <a href="tel:+2349096824706"><p>phone: (+234) 9033104698</p></a>
        </div>
        </div>
    </div>
</div>




<!-- -------------------contact---------------------- -->
<div id="hire">
    <div class="container mt-3" style="margin-top:3%;" id="cnt">
        <div class="row">
            <div class="title-item text-center">
                <h6 class="title">CONTACT</h6>
                <h1 class="sub-title">I'd Love To Hear From You.</h1>        
                <p class="titlehead">Get in touch with me! If you have any questions, feedback, or inquiries, please fill out the form below, and I'll get back to you as soon as possible.</p>    
            </div>
            <div class="form">
                 
        <form  method="post">
        <input type="text" placeholder="Name"   name="name" required>
        <input type="email" placeholder="Email"  name="email" required>
        <input type="text" placeholder="Subject"  name="subject" required>
        <textarea name="message" rows="6" placeholder="Message" required></textarea>
        <button type="submit" name="btn-signup" class="btn2">SUBMIT</button><br>  
        <h5 style="color: #808080; font-weight: bold; margin-top: 10px"><?php echo @$msg; ?></h5>
    </form>
</div>
        </div>
    </div>
</div>




<div class="container">    
    <div class="row">    
        
        <div class="col-copy-1">
            <h4>&copy; Copyright 2024</h4>
        </div>
        <div class="col-copy-2">
            <a href="https://web.facebook.com/profile.php?id=100089790472989" target="_blank">
            <img src="facebook.svg" class="rotate-in-center" alt="">
        </a>
        <a href="https://twitter.com/Kelly_Curtti" target="_blank">
            <img src="twitter.svg" class="rotate-in-center" alt="">
        </a>
        <a href="https://www.instagram.com/patrickkelly655/" target="_blank">
            <img src="instagram.svg" class="rotate-in-center" alt="">
        </a>
        <a href="#" target="_blank">
            <img src="whatsapp.svg" class="rotate-in-center" alt="">
        </a>
        
    </div>
</div>        
</div>            






<script>

const tabLinks = document.getElementsByClassName("tab-links");
const tabContents = document.getElementsByClassName("tab-contents");

function openTab(tabname){
    for(tabLink of tabLinks){
        tabLink.classList.remove("active-link");
    }
    for(tabContent of tabContents){
        tabContent.classList.remove("active-tab");
    }
    event.currentTarget.classList.add("active-link");
    document.getElementById(tabname).classList.add("active-tab");
}

</script>
<script>
    const sideMenu =document.getElementById("sideMenu");

    function openMenu(){
        sideMenu.style.right = "0";
    }
    function closeMenu(){
        sideMenu.style.right = "-200px";
    }
</script>


</body>
</html>