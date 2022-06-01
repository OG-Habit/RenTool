<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RenTool | Homepage</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/homepage.css">
    <link rel="stylesheet" href="../css/font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../js/script.js"></script>
</head>
<body>
    <?php include ("../public/header.php")?>
    <main>
        <section class="top">
            <h1 class="top__h1">Rent. Don't Buy.</h1>
        </section>
        <section class="features"> 
            <h1 class="features__title">What is RenTool?</h1>
        <div id="slider">
    <input type="radio" name="slider" id="slide1" checked>
    <input type="radio" name="slider" id="slide2">
    <input type="radio" name="slider" id="slide3">
    <input type="radio" name="slider" id="slide4">
    <div id="slides">
       <div id="overflow">
          <div class="inner">
             <div class="slide slide_1">
                <div class="slide-content">
                <img src="../img/offer.png" alt="">
                   <h2>Offer</h2>
                   <p style="font-family: Candara;">Need income from items that you do not utilize anymore? Offer it to be rented!</p>
                </div>
             </div>
             <div class="slide slide_2">
                <div class="slide-content">
                <img src="../img/rent.png" alt="">
                    <h2>Rent</h2>
                    <p style="font-family: Candara;">Don't want to purchase an item that will only be used temporarily? Then rent the item here and save more!</p>
                </div>
             </div>
             <div class="slide slide_3">
                <div class="slide-content">
                <img src="../img/reliability.png" alt="">
                    <h2>Reliability</h2>
                    <p style="font-family: Candara;">Verified partakers and recipients are the ones only allowed to transact so no need to worry!</p>
                </div>
             </div>
             <div class="slide slide_4">
                <div class="slide-content">
                <img src="../img/accessibility.png" alt="">
                    <h2>Accessibility</h2>
                    <p style="font-family: Candara;">We will find the items near your location so you don't need to go far anymore!</p>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div id="controls">
       <label for="slide1"></label>
       <label for="slide2"></label>
       <label for="slide3"></label>
       <label for="slide4"></label>
    </div>
    <div id="bullets">
       <label for="slide1"></label>
       <label for="slide2"></label>
       <label for="slide3"></label>
       <label for="slide4"></label>
    </div>
 </div>
        <section class="steps"> 
            <h1 class="steps__title">How to get started?</h1>
            <div class="steps-block">
                <div class="steps-block__step">
                    <img src="../img/signup.png" alt="">
                    <p>Just simply click the sign up button and follow the instructions provided.</p>
                </div>
                <div class="steps-block__step">
                    <img src="../img/input.png" alt="">
                    <p>Input your details and wait for your account to be validated by our team.</p>
                </div>
                <div class="steps-block__step">
                    <img src="../img/verify.png" alt="">
                    <p>After verification, you can now either offer or rent items in the website.</p>
                </div>
            </div>
        </section>
    </main>
    <?php include ("./footer.php")?>
</body>
</html>