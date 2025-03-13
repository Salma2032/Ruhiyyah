<?php
include 'session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruhiyyah</title>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.css" integrity="sha512-72McA95q/YhjwmWFMGe8RI3aZIMCTJWPBbV8iQY3jy1z9+bi6+jHnERuNrDPo/WGYEzzNs4WdHNyyEr/yXJ9pA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css file -->
    <link rel="stylesheet" href="./css/main.css">
    <!-- favicon -->
    <link rel="icon" type="image/png" href="./images/fav1.png">

</head>
<body> 
    <!--   header section   -->
    <header class="header">
        <nav>
            <a href="index.php">
                <img src="./images/logo.png" alt="">
            </a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">ACCEUIL</a></li>
                    <li><a href="about.php">A PROPOS</a></li>
                    <li><a href="course.php">APPLICATION</a></li>
                    <li><a href="blog.php">BLOG</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <div class="text-box">
            <h1> Your Personal Mental Well-being Assistant</h1>
            <p id="homeDesc">Feel Better.Discover More.Live Well.</p>
        </div>
    </header>
    <section class="cta">
        <h1>Qui sommes nous ?</h1>
        <p id="homeDesc">
            <B>Ruhiyya,</B> we believe that mental well-being should be accessible, personalized, and seamlessly integrated into everyday life. Our mission is to empower individuals with the right tools and resources to navigate their emotional well-being with confidence. By combining AI-driven insights, mood-based recommendations, and location-aware services, we create a tailored experience that helps users make informed decisions about their mental health in real-time. More than just an app, Ruhiyya is a compassionate companion designed to support self-awareness, encourage proactive well-being, and bridge the gap between individuals and mental health professionals. With a special focus on inclusivity, particularly for women and those with unique needs, we strive to make mental wellness an intuitive and empowering journey for all. <br><br></p>
        
    
          

    <!-- campus -->

    <section class="campus">
        <h1>Our Services</h1>
        <p>Où vous pouvez trouver nos sites</p>

        <div class="row">

            <div class="campus-col">
                <img src="./images/pretest.jpg" alt="">
                <a href="./maps/rabat.php"><div class="layer">
                    <h3>Mood-Based Recommendations</h3>
                </div></a>
            </div>
            <div class="campus-col">
                <img src="./images/location.jpg" alt="">
                <a href="./maps/marrakesh.php"><div class="layer">
                    <h3>Location-Aware Suggestions</h3>
                </div></a>
            </div>
            <div class="campus-col">
                <img src="./images/base.jpg" alt="">
                <a href="./maps/fez.php"><div class="layer">
                    <h3>Knowledge Base for Mental Wellness</h3>
                </div></a>
            </div>
        </div>
        <div class="row">
            <div class="campus-col">
                <img src="./images/therapist.jpg" alt="">
                <a href="./maps/agadir.php"><div class="layer">
                    <h3>Therapist Connection</h3>
                </div></a>
            </div>
            <div class="campus-col">
                <img src="./images/women.jpg" alt="">
                <a href="./maps/meknes.php"><div class="layer">
                    <h3>Inclusivity for Women</h3>
                </div></a>
            </div>
            <div class="campus-col">
                <img src="./images/Salé.jpg" alt="">
                <a href="./maps/sale.php"><div class="layer">
                    <h3>SALE</h3>
                </div></a>
            </div>
        </div>
        <div class="row">
            <div class="campus-col">
                <img src="./images/kenitra.jpg" alt="">
                <a href="./maps/kenitra.php"><div class="layer">
                    <h3>KENITRA</h3>
                </div></a>
            </div>
        </div>
        </div>
    </section>
    <style>
        .video-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh; /* Full height of the viewport */
    }

    .video-container iframe {
        width: 80%; /* Adjust the width as needed */
        height: 450px; /* Adjust the height as needed */
    }
</style>
<div class="video-container">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/6NuJV2KxxXg?si=xOeaJp1KT2Rg9wT-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>
    <!-- Facilities -->
    <!--<section class="facilities">
        <h1>Our Facilities</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, nobis.</p>

        <div class="row">
            <div class="facilities-col">
                <img src="./images/library.png" alt="">
                <h3>World Class Library</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto obcaecati labore, totam placeat dolores tenetur?</p>
            </div>
            <div class="facilities-col">
                <img src="./images/basketball.png" alt="">
                <h3>Largest Play Ground</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto obcaecati labore, totam placeat dolores tenetur?</p>
            </div>
            <div class="facilities-col">
                <img src="./images/cafeteria.png" alt="">
                <h3>Tasty and Healthy Food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto obcaecati labore, totam placeat dolores tenetur?</p>
            </div>
            
        </div>
    </section>
-->
    <!-- testimonals -->
 <!--   <section class="testimonials">
        <h1>What Our Student Says</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, nobis.</p>

        <div class="row">
            <div class="testimonials-col">
                <img src="./images/user1.jpg" alt="">
                <div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui id modi delectus, beatae maxime nihil ratione ea eveniet quisquam cupiditate, reprehenderit in nesciunt? Nihil, earum?</p>
                    <h3>Christine Berley</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
            </div>
            <div class="testimonials-col">
                <img src="./images/user2.jpg" alt="">
                <div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui id modi delectus, beatae maxime nihil ratione ea eveniet quisquam cupiditate, reprehenderit in nesciunt? Nihil, earum?</p>
                    <h3>David Byer</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    </div>
                </div>
        </div>
    </section>
-->



    <!-- footer-->
     <style>
        .fa-facebook{
            font-size: 30px ;
            color:#000080
        }
        .fa-linkedin{
            font-size:30px;
            color:#000080
        }
        .fa-square-instagram{
            font-size:30px;
            color:#000080
        }
        .fa-x-twitter{
           font-size:30px;
           color:#000080
        }
     </style>
        <footer class="footer">
            <h4 style="color:#000080">Social</h4>
            <p>Vérifiez Nos Réseaux Sociaux Pour Plus D'infos</p>
            <div class="icons">
                <a href="https://web.facebook.com/ConcentrixIN/?_rdc=1&_rdr"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.instagram.com/concentrixmaroc/"><i class="fa-brands fa-square-instagram"></i></a>
                <a href="https://x.com/Concentrix?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="https://www.linkedin.com/company/concentrix/"><i class="fa-brands fa-linkedin"></i></a>
                
            </div>
        </footer>
    <script src=".//js/app.js"></script>
</body>
</html>
