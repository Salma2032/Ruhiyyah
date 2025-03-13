<?php
session_start();
if (!isset($_SESSION['logged'])) {
    header("Location: ../login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concentrix-Marrakesh</title>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <!-- font awesomes icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.css" integrity="sha512-72McA95q/YhjwmWFMGe8RI3aZIMCTJWPBbV8iQY3jy1z9+bi6+jHnERuNrDPo/WGYEzzNs4WdHNyyEr/yXJ9pA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css file -->
    <link rel="stylesheet" href="main.css">
        <!-- favicon -->
        <link rel="icon" type="image/png" href="../images/fav.png">
</head>
<body> 
    <!--   header section   -->
    <header class="sub-header">
        <nav>
            <a href="../index.php">
                <img src="../images/logo.png" alt="">
            </a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="../index.php">ACCEUIL</a></li>
                    <li><a href="../about.html">A PROPOS</a></li>
                    <li><a href="../course.html">APPLICATION</a></li>
                    <li><a href="../blog.html">BLOG</a></li>
                    <li><a href="../contact.html">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1>Contactez-Nous</h1>
    </header>   

    <!-- contact us -->

    <section class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3397.1590180822222!2d-7.9810365999999995!3d31.6294962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafef1d655dd847%3A0x9117016a35ca9f90!2sWebhelp!5e0!3m2!1sen!2sma!4v1721627938291!5m2!1sen!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
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
                        <h5>www.concentrix.com</h5>
                        <p>Visitez notre site web</p>
                    </span>
                </div>
                <div>
                    <i class="fa-solid fa-phone"></i>
                    <span>
                        <h5>05372-19500</h5>
                        <p>Lundi à Vendredi, 9AM à 5PM</p>
                    </span>
                </div>
                <div>
                    <i class="fa-solid fa-envelope-o"></i>
                    <span>
                        <h5>infos@webhelp.ma</h5>
                        <p>Envoyez un mail ici</p>
                    </span>
                </div>
            </div>
            <div class="contact-col">

                <form action="https://formspree.io/f/manwnrzo" method="post">
                    <h3 style ="color:#000080">Communiquez votre problème</h3>
                    <input type="text" name="Nom" placeholder="Entrez votre nom..." required>
                    <input type="email" name="Email"placeholder="Entrez votre adresse mail..." required>
                    <input type="text"name="Problème" placeholder="Type du problème confronté... " required>
                    <textarea name="Detail" placeholder="Plus de detail..." rows="8"></textarea>
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
