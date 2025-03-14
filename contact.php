<?php
include 'session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruhiyyah-Contact</title>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <!-- font awesomes icons -->
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
    <header class="sub-header">
        <nav>
            <a href="index.php">
                <img src="./images/RUHIYYAH.png" alt="">
            </a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="course.php">TEST</a></li>
                    <li><a href="blog.php">FAQ</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1>Contact Us</h1>
    </header>   

    <!-- contact us -->


    <style>
        .fa-globe{color:#000080;font-size: 30px;}
        .fa-phone{color:#000080;font-size: 30px}
        .fa-envelope-o{color:#000080;font-size: 30px}
        
    </style>

    <section class="contact-us">
        <div class="row">
            <div class="contact-col">
                <div>
                    <i class="fa-solid fa-globe"></i>
                    <span>
                        <h5>www.Ruhiyya.com</h5>
                        <p>Visit our website</p>
                    </span>
                </div>
                <div>
                    <i class="fa-solid fa-phone"></i>
                    <span>
                        <h5>05372-19500</h5>
                        <p>Monday to Friday, 9AM to 5PM</p>
                    </span>
                </div>
                <div>
                    <i class="fa-solid fa-envelope-o"></i>
                    <span>
                        <h5>infos@webhelp.ma</h5>
                        <p>Send your emails</p>
                    </span>
                </div>
            </div>
            <div class="contact-col">

                <form action="https://formspree.io/f/manwnrzo" method="post">
                    <h3 style ="color:#000080">Communicate your problem</h3>
                    <input type="text" name="Nom" placeholder="Entrer your name..." required>
                    <input type="email" name="Email"placeholder="Enter your adress mail..." required>
                    <input type="text"name="Problème" placeholder="Type of problem faced... " required>
                    <textarea name="Detail" placeholder="More details..." rows="8"></textarea>
                    <button type="submit" class="hero-btn red-btn">Send Message</button>
                </form>

            </div>
        </div>
    </section>

    <!-- footer -->
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






    <script src=".//js/app.js"></script>
</body>
</html>
