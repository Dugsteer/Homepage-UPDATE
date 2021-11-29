<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Esl-ology TOOLS FOR TEFL. Free Online Vocabulary Bingo, Flashcards, Grammar Mazes and Topic-based Materials for ESL Teachers to use with English Classes on the Web or On Screen in the Classroom.">
    <meta name="keywords" content="class games online EFL English tools teachers worksheets mazes">
    <title>Esl-Ology.Com: Tools for TEFL</title>
    <link rel="icon" type="image/png"
    href="favicon.png";
  />
    <link rel="stylesheet" href="css/styles.min.css">
    <link rel="stylesheet" href="css/social.css">
    <script data-ad-client="ca-pub-6192312197226967" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6192312197226967"
     crossorigin="anonymous"></script>
  </head>

<body>

    <div class="social">
        <div class="social-item">
            <a href="#" 
        onclick="
          window.open(
            'https://www.facebook.com/sharer/sharer.php?u=', 
            'facebook-share-dialog', 
            'width=626,height=436'); 
          return false;">
            <img src="img/social/facebook.webp">
            </a>
        </div>
        <div class="social-item">
                <a href="#" 
        onclick="
          window.open(
          'https://pinterest.com/pin/create/button/?url=http://esl-ology.com&media=https://esl-ology.com/img/london.png&description=Esl-ology.com%20Free%20fun%20tools%20for%20ESL%20teachers%20and%20students%20to%20use%20online.',
              'pinterest-share-dialog', 
                'width=626,height=436'); 
              return false;">
            <img src="img/social/pinterest.webp">
                    </a>
            </div>
            <div class="social-item">
                    <a href="#" 
            onclick="
              window.open(
          'https://twitter.com/intent/tweet?url=http://esl-ology.com&text=Esl-ology.com%20Free%20fun%20tools%20for%20ESL%20teachers%20and%20students%20to%20use%20online.',
              'twitter-share-dialog', 
                'width=626,height=436'); 
              return false;">
            <img src="img/social/twitter.webp">
                    </a>
            </div>

            <div class="social-item">
                <a href="https://www.youtube.com/channel/UCvl0weUrlWDhQOimqfRmZUA" target="_blank">
            <img src="img/social/youtube.webp"></a>
            </div>
      </div>

    
      <div class="nav-bar" id="navbar">
        <a href="index.html" class="nav-bar__logo">
          <svg class="icon-header nav-bar__logo-img">
            <use xlink:href="sprite2.svg#Buho" onclick="scrollUp()">
            </use>
          </svg>    </a>
        <h3 class="nav-bar__title">Esl-Ology.Com</h3>
        <div class="nav-bar__title-page">
          <span class="nav-bar__title-page-main" id="pageTitle"></span>
      </div>
      <div class="nav-bar__links">
      <a href="index.html" class="nav-bar__link link3">Home</a>
      <svg viewBox="0 0 100 80" width="40" height="20" onclick="toggler();" id="menu" class="menu">
        <rect width="100" height="12"></rect>
        <rect y="30" width="100" height="12"></rect>
        <rect y="60" width="100" height="12"></rect>
      </svg>      </div>
    </div>

  <div id="wrapper" class="wrapper">
   
    <div class="gridfiller"></div>

    <div class="sidebar-container" id="sidebar">
       <?php include "./sidebar.html" ?>
    </div>

    <div class="sense">
      </style>
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6192312197226967" crossorigin="anonymous"></script>
      <!-- mainpage_top -->
      <ins class="adsbygoogle mainpage_top"
          style="display:inline-block"
          data-ad-client="ca-pub-6192312197226967"
          data-ad-slot="3393588944"></ins>
      <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
    </div>
    
    <div class="content">

  
      <?php 
      $title= "Online Boardgames"; 
      $text = '<p style="font-size: 1.8rem; line-height:2.4rem; color:white; text-align:center">Choose a boardgame to play onlilne fromm our growing collection. Or go to our <a href="boardgames.php">boardgames page</a> to upload a boardgame you have found on the internet. There are a lot to choose from!</p>';      
      $level="Elementary"; 
      $time="20 mins"; 
      $icon="download"; 
      include "./content-box-intro-shorter.php"; 
      ?>

        <?php 
      $title= "Sports Board Game"; 
      $imgsrc = "/gameboards/sports-board.webp";
      $href = "/boardgame-player.php/sports-board.webp";
      $hrefdoc = "/docs/SportsBoardGame.pdf";
      $text= '<p>Name the sports as your try to win the championship. Try for goals as you climb  ladders and slide down snakes.</p>';      
      $level="All"; 
      $time="15 mins"; 
      $icon="online"; 
      include "./content-box-game.php"; 
      ?>

      <?php 
      $title= "Jobs Board Game"; 
      $imgsrc = "/gameboards/jobs-board.webp";
      $href = "/boardgame-player.php/jobs-board.webp";
      $hrefdoc = "/docs/JobBoardGame.pdf";
      $text = '<p>From going through school to university or on the job training, this game will help you get that job.</p>'; 
      $level="Elementary"; 
      $time="15 mins"; 
      $icon="online"; 
      include "./content-box-game.php"; 
      ?>

     

      <?php 
      $title= "Questions Board Game"; 
      $imgsrc = "/gameboards/questions-board.webp";
      $href = "/boardgame-player.php?questions-board.webp";
         $hrefdoc = "/docs/HalloweenBoardGame.pdf";
      $text = '<p>Ask a question when you land on a word and listen as the other students try to answer it. You could add a timer — 30 seconds.</p>';
      $level="Elementary"; 
      $time="20 mins"; 
      $icon="download"; 
      include "./content-box-game.php"; 
      ?>

      <?php 
      $title= "Snakes and Ladders"; 
      $imgsrc = "/gameboards/snakes-board.webp";
      $href = "/boardgame-player.php?snakes-board.webp";
      $hrefdoc = "docs/HalloweenBoardGame.pdf";
      $text = '<p>When it\'s time for an online game of snakes and ladders, you\'ve got one here. Maybe students have to answer questions to play?</p>';
      $level="Elementary"; 
      $time="20 mins"; 
      $icon="download"; 
      include "./content-box-game.php"; 
      ?>

        <?php
      $title= "Halloween Board Game"; 
      $imgsrc = "/gameboards/halloween-board.webp";
      $href = "/boardgame-player.php?halloween-board.webp";
      $hrefdoc = "/docs/HalloweenBoardGame.pdf";
      $text="A Halloween board game can be for life, not just for the spooky season. Play whenever you need to have a scream!";
      $level="Elementary"; 
      $time="10 mins"; 
      $icon="online";  
      include "./content-box-game.php" ?>

     

    </div>

    <div class="sense-bottom">
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <!-- Vertical ad -->
      <ins class="adsbygoogle"
        style="display:block"
        data-ad-client="ca-pub-6192312197226967"
        data-ad-slot="3073690633"
        data-ad-format="auto"
        data-full-width-responsive="true"></ins>
      <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
    </div>



    
  </div>

     

      
    <footer class="footer">
      <div class="footer__copyright" id="footer">
        <p>©<?php echo date("Y"); ?> Copyright Esl-ology.com & copyright owners.</p>
        <p>Image credits <a href="homepage-credits.html" style="color: white; text-decoration: none;">here</a>. Thanks,guys!</p>
      </div>
    </footer>

  
  

    <script src="script/script.min.js"></script>
</body>
</html>