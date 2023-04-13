<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portefolio</title>
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="CSS/portefolio.css">

<body>
<?php 

include "Header.php";

?>
<!-- José -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <img src="images/ice-cream.png" style="width:100%">
    <div class="text"></div>
  </div>

  <div class="mySlides fade">
    <img src="images/apple.png" style="width:100%">
    <div class="text"></div>
  </div>

  <div class="mySlides fade">
    <img src="images/capture.png" style="width:100%">
    <div class="text"></div>
  </div>

  <div class="mySlides fade">
    <img src="images/hera.png" style="width:100%">
    <div class="text"></div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
</div>

<!-- Val -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides2 fade">
    <img src="images/oneway.png" style="width:100%">
    <div class="text"></div>
  </div>

  <div class="mySlides2 fade">
    <img src="images/cirque.png" style="width:100%">
    <div class="text"></div>
  </div>

  <div class="mySlides2 fade">
    <img src="images/logos.png" style="width:100%">
    <div class="text"></div>
  </div>

  <div class="mySlides2 fade">
    <img src="images/nation.png" style="width:100%">
    <div class="text"></div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides2(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides2(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot2" onclick="currentSlide2(1)"></span>
  <span class="dot2" onclick="currentSlide2(2)"></span>
  <span class="dot2" onclick="currentSlide2(3)"></span>
  <span class="dot2" onclick="currentSlide2(4)"></span>
</div>
<!-- tom -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides3 fade">
    <img src="images/oneway.png" style="width:100%">
    <div class="text"></div>
  </div>

  <div class="mySlides3 fade">
    <img src="images/cirque.png" style="width:100%">
    <div class="text"></div>
  </div>

  <div class="mySlides3 fade">
    <img src="images/logos.png" style="width:100%">
    <div class="text"></div>
  </div>

  <div class="mySlides3 fade">
    <img src="images/nation.png" style="width:100%">
    <div class="text"></div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides3(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides3(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot3" onclick="currentSlide3(1)"></span>
  <span class="dot3" onclick="currentSlide3(2)"></span>
  <span class="dot3" onclick="currentSlide3(3)"></span>
  <span class="dot3" onclick="currentSlide3(4)"></span>
</div>
<?php

include "Footer.php";

?>

<script src="js/carrousselle.js"></script>
<script src="js/carrouselle-val.js"></script>
<script src="js/carrouselle-tom.js"></script>

</body>
</html>