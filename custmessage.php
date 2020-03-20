<!doctype html>
<html>
 <head>
    <title>SHERROD WARE Foodtruck</title>
    <meta charset="utf-8" />
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width" />
     <!--styles -->
    <link rel="stylesheet" href="css/foodtruck.css" />
     <link rel="stylesheet" href="css/nav.css" />
<!--     <link href="css/lightbox.css" rel="stylesheet">-->
     <link href='https://fonts.googleapis.com/css?family=Cherry+Cream+Soda' rel='stylesheet' type='text/css'>
     <script src="https://code.jquery.com/jquery-2.2.0.js" type="text/javascript"></script> 
     <script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
</head>

    
      <body>  
        <header>
             <script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
<!--<script type="IN/MemberProfile" data-id="https://www.linkedin.com/in/sherrod-ware-407545145" data-format="inline" data-related="false"></script>-->
            <a href="home.html" target="_blank"> <img id= "logo" alt="" src="images/minilogo3b.jpg"></a>      
            <h1>SKII'S BBQ AND WINGS</h1>
            <h2>Welcome to SKII'S BBQ AND WINGS</h2>
            <h2>Hours of Operation M-SAT 11am-7pm</h2>
            
        <nav>
                <ul class="topnav" id="myTopnav">
                    <li><a href="home.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="menu.html">Menu</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li class="current"><a href="contactus.php">Contact</a></li>
                    <li class="icon">
                        <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
                    </li>
                </ul> 
            </nav>
            
        </header>
    <!--START lEFT COLUMN-->
    <section>
        <h2>Contact Us</h2>
         <h3>Thanks for your interest in contacting SKII'S BBQ AND WINGS.</h3>
        <?php
       // include 'includes/simple.php'; #demonstrates a simple contact form
        include 'includes/multiple.php';#demonstrates multiple form elements
        ?>
    </section>

    <!--END LEFT COLUMN-->
    
    <!--START RIGHT COLUMN-->
      
   <!--END RIGHT COLUMN-->      
<footer>
   <a href="https://www.facebook.com/sherrodkingskii" target="_blank"><img src="images/fbook.jpg" alt=""/></a>
<small>
   &copy; 2018 All Rights Reserved ~ Authored by Sherrod Ware ~ <a href="disclaimer.html">Disclaimer</a>~
   <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~  
   <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a>
</small>
</footer>
          <script>function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}</script>
</body>
</html>