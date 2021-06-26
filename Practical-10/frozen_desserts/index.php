<!DOCTYPE>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
   <link rel="stylesheet" href="css/style.css">
   <link rel="icon" href="favicon.ico">
   <title>
      THE FROZEN HOTEL
   </title>
</head>

<body style="background: #03BFB5;">
   <!-- Header -->
   <h1 style="font-weight: lighter"><a href="index.php" style="text-decoration: none; color: white;">
      <p style="color: #5383d3; display: inline;">FROZEN</p>
      DESSERTS</a>
   </h1>
   <nav>
      <ul>
         <li><a href="index.php" class="active-nav">HOME</a>
         <li><a href="#toppings">TOPPINGS</a></li>
         <li><a href="#flavours">FLAVOURS</a></li>
         <li><a href="user_login.php">USER LOGIN</a></li>
         <li style="float: right;"><a href="index.php#footer">CONTACT US</a></li>
         <li style="float: right;"><a href="admin_login.php">ADMIN LOGIN</a></li>
      </ul>
   </nav>
   <main>
      <!-- Header End -->
      <section>
         <div class="slideshow-container">
            <div class="mySlides fade">
               <img id="1" src="Images/1.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
               <img id="2" src="Images/2.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
               <img id="3" src="Images/3.jpg" style="width:100%">
            </div>
         </div>
         <br>
         <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
         </div>
         <script>
            var slideIndex = 0;
            showSlides();

            function showSlides() {
               var i;
               var slides = document.getElementsByClassName("mySlides");
               var dots = document.getElementsByClassName("dot");
               for (i = 0; i < slides.length; i++) {
                  slides[i].style.display = "none";
               }
               slideIndex++;
               if (slideIndex > slides.length) {
                  slideIndex = 1
               }
               for (i = 0; i < dots.length; i++) {
                  dots[i].className = dots[i].className.replace(" active", "");
               }
               slides[slideIndex - 1].style.display = "block";
               dots[slideIndex - 1].className += " active";
               setTimeout(showSlides, 4500); // Change image every 4.5 seconds
            }
         </script>
      </section>
      <section id="toppings">
         <br>
         <br>
         <div style="text-align: center;">
            <button class="button">Toppings Available</button>
         </div>
         <br>
         <div class="flex-container">
            <div class="card">
               <img src="Images/dip.jpg" class="img-card" style="width:100%">
               <div class="container-card">
                  <h4><b>Chocolate Dip</b></h4>
                  <p>Chocolate dip is a sweet, chocolate-flavored condiment. </p>
               </div>
            </div>
            <div class="card">
               <img src="Images/mandm.jpg" class="img-card" style="width: 100%;">
               <div class="container-card">
                  <h4><b>M&M's</b></h4>
                  <p>M&M's are multi-colored button-shaped chocolates.</p>
               </div>
            </div>
            <div class="card">
               <img src="Images/caramel.jpg" class="img-card" style="width:100%">
               <div class="container-card">
                  <h4><b>Caramel</b></h4>
                  <p>Caramel is a product made by heating a variety of sugars.</p>
               </div>
            </div>
            <div class="card">
               <img src="Images/brownie.jpg" class="img-card" style="width:100%">
               <div class="container-card">
                  <h4><b>Brownie</b></h4>
                  <p>A brownie is a rectangular chocolate baked confection.</p>
               </div>
            </div>
         </div>
      </section>
      <section id="flavours">
         <br>
         <br>
         <div style="text-align: center;">
            <button class="button">Flavours Available</button>
         </div>
         <br>
         <div class="flex-container-img">
            <div class="card">
               <img src="Images/vanilla.jpg" class="img-card" style="width:100%">
               <div class="container-card">
                  <h4>
                     <b>
                        <center>Vanilla</center>
                     </b>
                  </h4>
               </div>
            </div>
            <div class="card">
               <img src="Images/strawberry.jpg" class="img-card" style="width: 100%;">
               <div class="container-card">
                  <h4>
                     <b>
                        <center>Strawberry</center>
                     </b>
                  </h4>
               </div>
            </div>
            <div class="card">
               <img src="Images/chocolate.jpg" class="img-card" style="width:100%">
               <div class="container-card">
                  <h4>
                     <b>
                        <center>Chocolate</center>
                     </b>
                  </h4>
               </div>
            </div>
         </div>
      </section>
      <br>
      <h2 class="welcome1">Enjoy 10% Off if you order today!</h2>
      <h2><a class="order_button" href="user_login.php">ORDER NOW</a></h2>
      <h2 class="welcome1">Get your favorite ice-cream delivered to you today!</h2>
   </main>
   <?php

   include("footer.php");

   ?>
</body>

</html>
</body>
<script src="js/script.js"></script>

</html>