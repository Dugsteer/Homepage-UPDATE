<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Esl-ology TOOLS FOR TEFL. Free Online Vocabulary Bingo, Flashcards, Grammar Mazes and Topic-based Materials for ESL Teachers to use with English Classes on the Web or On Screen in the Classroom.">
    <meta name="keywords" content="class games online EFL English tools teachers worksheets mazes actions routines">
    <title>ESL Daily Routines</title>
    <link rel="icon" type="image/png"
    href="favicon.png";
  />
    <link rel="stylesheet" href="css/styles.css">
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
          <use xlink:href="sprite2.svg#Buho" onclick="scrollUp()"></use>
        </svg>
      </a>
      <h3 class="nav-bar__title">Esl-Ology.Com</h3>
      <div class="nav-bar__title-page">
        <span class="nav-bar__title-page-main" id="pageTitle"
          >DAILY ROUTINES</span
        >
      </div>
      <div class="nav-bar__links">
        <a href="index.html" class="nav-bar__link link3">Home</a>
        <svg
          viewBox="0 0 100 80"
          width="40"
          height="20"
          onclick="toggler();"
          id="menu"
          class="menu"
        >
          <rect width="100" height="12"></rect>
          <rect y="30" width="100" height="12"></rect>
          <rect y="60" width="100" height="12"></rect>
        </svg>
      </div>
    </div>

  <div id="wrapper" class="wrapper">
   
    <div class="gridfiller"></div>

    <div class="sidebar-container" id="sidebar">
       <?php include "./sidebar-noad.html" ?>
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
      $title= "Everyday Actions"; 
      $text = '<p style="font-size: 1.8rem; line-height:2.4rem; color:white; text-align:center">Learn about the things we do every day with this range of worksheets, printables and online games. Check out the icon to see whether the items are printable or downloadable.</p>';      
      $level="Elementary"; 
      $time="20 mins"; 
      $icon="download"; 
      include "./content-box-intro-shorter.php"; 
      ?>

        <?php 
      $title= "Go Fish! Cards"; 
      $imgsrc = "routines-gofish.webp";
      $href = "docs/RoutineGoFish.pdf";
      $text= '<p>Print out two sets of cards and cut them up. Deal four each. Students ask questions and take a card if the answer is "Go Fish!".</p>';      
      $level="All"; 
      $time="15 mins"; 
      $icon="download"; 
      include "./content-box-tall.php"; 
      ?>

      <?php 
      $title= "Bingo Cards"; 
      $imgsrc = "routines-bingo.webp";
      $href = "bingo-daily-activity.html";
      $text = '<p>Download and print the randomized bingo cards, then use the online bingo caller to generate the answers. Great fun at the end of class.</p>'; 
      $level="Elementary"; 
      $time="10 mins"; 
      $icon="download"; 
      include "./content-box-tall.php"; 
      ?>

     

      <?php 
      $title= "Memory Game"; 
      $imgsrc = "routines-memory.webp";
      $href = "daily-activity-memory.html";
      $text = '<p>Three sets of pelmanism-style memory games. Who can get through the cards the quickest? Great for revising vocabulary.</p>';
      $level="Elementary"; 
      $time="10 mins"; 
      $icon="online"; 
      include "./content-box-short.php"; 
      ?>

      <?php 
      $title= "Dominoes"; 
      $imgsrc = "RoutineDominoes.webp";
      $href = "docs/routine-dominoes.pdf";
      $text = '<p>Print two sets of the cards for each group of players. Start with seven cards each and see who can finish first matching the words to the pictures.</p>';
      $level="Beginner"; 
      $time="10 mins"; 
      $icon="download"; 
      include "./content-box-tall.php"; 
      ?>

        <?php
      $title= "Flashcards"; 
      $imgsrc = "routines-flashcards.webp";
      $href = "daily-activity-flashcards.html";
      $text='<p>Photo flashcards help teach basic vocabulary or to revise it before playing a game. Click on the right and left arrows to move and mouse over the image to reveal the text.</p>';
      $level="Beginner"; 
      $time="10 mins"; 
      $icon="online";  
      include "./content-box-short.php" ?>

     

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

  
  

    <script src="script.js"></script>
</body>
</html>