<?php
include 'session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruhiyyah-FAQ</title>
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
    <header class="sub-header">
        <nav>
            <a href="index.php" class="logo">
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
        <h1>FAQ</h1>
    </header>   

    <!-- blog content -->
    <div class="container-contentt">
  <strong><p class="votre">Your questions are about:</p></strong>
  <div class="container-content">
    <div class="faq-item1" id="activitésss">
      <input type="checkbox" id="question66">
      <label for="question66">Getting Started</label>
      <div class="answer">
        <div class="faq-item">
          <input type="checkbox" id="question1" class="q1">
          <label for="question1">What is Ruhiyya?</label>
          <div class="answer">
            <p>Ruhiyya is a web application that acts as a personalized, accessible, and location-based mental well-being assistant. It provides AI-driven recommendations, geolocation-based suggestions, and access to mental health resources and professionals.</p>
          </div>
        </div>
        <div class="faq-item">
          <input type="checkbox" id="question2">
          <label for="question2">Who can use Ruhiyya?</label>
          <div class="answer">
            <p>Ruhiyya is designed for anyone looking to improve their mental well-being. It is especially helpful for individuals seeking personalized self-care suggestions, location-based activities, and access to therapists.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="faq-item1" id="heberg">
      <input type="checkbox" id="question67">
      <label for="question67">Features & Usage</label>
      <div class="answer">
        <div class="faq-item">
          <input type="checkbox" id="question8">
          <label for="question8">What kind of location-based recommendations does Ruhiyya provide?</label>
          <div class="answer">
            <p>Ruhiyya suggests parks, cafés, wellness centers, meditation spaces, and other locations that promote mental well-being based on the user's location.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="faq-item1" id="cuis">
      <input type="checkbox" id="question68">
      <label for="question68">Personalization & Settings</label>
      <div class="answer">
        <div class="faq-item">
          <input type="checkbox" id="question15">
          <label for="question15">Can I track my mood over time?</label>
          <div class="answer">
            <p>Yes! Your mood history is saved, allowing you to see patterns and understand your emotional well-being better.</p>
          </div>
        </div>
        <div class="faq-item">
          <input type="checkbox" id="question16">
          <label for="question16">Can I customize the types of recommendations I receive?</label>
          <div class="answer">
            <p>Absolutely! You can set preferences based on your interests, preferred activities, and specific well-being goals.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="faq-item1" id="trspt">
      <input type="checkbox" id="question69">
      <label for="question69">Support & Accessibility</label>
      <div class="answer">
        <div class="faq-item">
          <input type="checkbox" id="question18">
          <label for="question18">What should I do if I have a technical issue?</label>
          <div class="answer">
            <p>You can contact our support team via the app or email us at infos@webhelp.ma.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

            
        
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
            <p>Don't forget to visit us in our social media platforms !</p>
            <div class="icons">
                <a ><i class="fa-brands fa-facebook"></i></a>
                <a><i class="fa-brands fa-square-instagram"></i></a>
                <a><i class="fa-brands fa-x-twitter"></i></a>
                <a><i class="fa-brands fa-linkedin"></i></a>
                
            </div>
        </footer>




    <script src=".//js/app.js"></script>
</body>
</html>

