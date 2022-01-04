<?php include "./db_worksheets.php" ?>

<?php 
$page_title= "Esl-Ology.Com: Tools for TEFL";
$css = "css/styles.css";
$page_content_description = "Esl-ology TOOLS FOR TEFL. Free Online Vocabulary Bingo, Flashcards, Grammar Mazes and Topic-based Materials for ESL Teachers to use with English Classes on the Web or On Screen in the Classroom.";
$page_keywords = "class games online EFL English tools teachers worksheets mazes";
include "./includes/header.php" ?>

<?php include "./includes/social.php" ?>

<?php 
$page_title= " "; include "./includes/navbar.php" ?>


<div id="wrapper" class="wrapper">

  <div class="gridfiller"></div>

  <?php include "./includes/narrow-ad-top.php" ?>

  <div class="sidebar-container" id="sidebar">
    <?php include "./sidebar.html" ?>
  </div>


  <div class="content">



    <?php
    $title = "ESL-Ology.com<br>TOOLS FOR TEFL";
    $imgsrc = "london.webp";
    $text = '<p style="font-size: 1.8rem; line-height:2.4rem; color:white; text-align:center">Here you can find free tools for English lessons that can be used online and in the classroom. Esl-ology.com offers flashcards, memory games, hangman, grammar mazes and  more, all designed to help your classes. More material will be added regularly, so please check back to see what new tools for TEFL are available.</p>';
    $level = "Elementary";
    $time = "20 mins";
    $icon = "download";
    include "./includes/content-box/content-box-intro.php";
    ?>

    <div class= "content-rand" id="randoms">
    <?php
    include "./homepage-includes/include_page_rand.php";
    ?>
</div>

    <?php
    $title = "Christmas Tree Game";
    $imgsrc = "christmas-tree-game.webp";
    $style = "width: 260px;";
    $href = "xmas-tree-game.html";
    $text = '<p>Can you tell what decoration the naughty Ghost of Christmas Past has just turned to a lump of coal? Click on him to play!</p>';
    $level = "All";
    $time = "15 mins";
    $icon = "online";
    include "./includes/content-box/content-box-short-square.php";
    ?>

    <?php
    $title = "Grammar Mazes";
    $imgsrc = "GrammarMaze.webp";
    $href = "to-be-maze.html";
    $text = '<p>All of the <a href="questions-maze.html">grammar mazes </a>help student awareness of grammar mistakes. The aim is to have a clean run all the way through!"</p>';
    $level = "Beginner";
    $time = "15 mins";
    $icon = "online";
    include "./includes/content-box/content-box-short.php";
    ?>



    <?php
    $title = "Go Fish Cards";
    $imgsrc = "JobsGoFish.webp";
    $href = "search-page.php?type=Go+fish";
    $text = '<p>"Print out and play a game of <a href="text-maze.html">Jobs Go Fish cards</a>. Ideally played on a large screen. Or play a <a href="boardgame-player.html">Sports Board Game</a> or try a <a href="text-maze.html">Word Search</a> too!"</p>';
    $level = "Elementary";
    $time = "20 mins";
    $icon = "download";
    include "./includes/content-box/content-box-tall.php";
    ?>

    <?php
    $title = "Bingo Cards";
    $imgsrc = "DailyRoutineBingo.webp";
    $href = "search-page.php?type=bingo";
    $text = '<p>"Have fun printing out random bingo cards for a variety of topics. Use the online bingo caller to call out the answers. Great for the end the class."</p>';
    $level = "Elementary";
    $time = "20 mins";
    $icon = "download";
    include "./includes/content-box/content-box-tall.php";
    ?>

    <?php
    $title = "Play Any Boardgame";
    $imgsrc = "JobBoardGame.webp";
    $href = "boardgame-player.php";
    $text = "Upload a jpg of any boardgame that you find online and play it onscreen, in virtual classes etc. A hit with our students!";
    $level = "Elementary";
    $time = "10 mins";
    $icon = "online";
    include "./includes/content-box/content-box-tall.php" ?>

    <?php
    $title = "Photo Flashcards";
    $imgsrc = "AnimalFlash.webp";
    $href = "flashcard-animals.html";
    $text = '<p>A great way to present or revise <a href="flashcard-animals.html">vocabulary sets </a>with a class, these are available both with images and with photos.</p>';
    $time = "15 mins";
    $icon = "online";
    include "./includes/content-box/content-box-short.php" ?>

    <?php
    $title = "Memory Games";
    $imgsrc = "SportMemory.webp";
    $href = "matching-sports.html";
    $text = '<p>There are three different sets of cards in each of our matching card games. Turn up two cards and if a picture matches a word, you win them. How fast can you clear the board?</p>';
    $level = "Elementary";
    $time = "20mins";
    $icon = "online";
    include "./includes/content-box/content-box-short.php";
    ?>

    <?php
    $title = "Text Mazes";
    $imgsrc = "FrequencyAdjectivewTextMaze.webp";
    $href = "search-page.php?type=text+maze";
    $text = '<p>It\'s great fun doing a challenging <a href="text-maze.html">text maze</a>, a fun alternative to a traditional word search.</p>';
    $level = "A1 - B1";
    $time = "10 mins";
    $icon = "download";
    include "./includes/content-box/content-box-tall.php" ?>

    <?php
    $title = "Printable Dominoes";
    $imgsrc = "SportsDominoes.webp";
    $href = "search-page.php?type=dominoes";
    $text = '<p>Anyone for <a href="memory-halloween.html">dominoes?</a> Click to see our printable sets. Make two copies.</p>';
    $time = "15 mins";
    $icon = "download";
    include "./includes/content-box/content-box-tall.php" ?>

    <?php
    $title = "73 Questions";
    $imgsrc = "73questions.webp";
    $href = "esl-speaking-questions.html";
    $text = '<p>A series of 73 questions based on Vogue magazine\'s interviews with the stars, which are a great classroom resource too.</p>';
    $time = "30 mins";
    $level = "B1 - C2";
    $icon = "online";
    include "./includes/content-box/content-box-short.php" ?>

  </div>

  <div class="sense-bottom">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Vertical ad -->
    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-6192312197226967" data-ad-slot="3073690633" data-ad-format="auto" data-full-width-responsive="true"></ins>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
  </div>



</div>
</div>

</div>

<?php $credits_link = "homepage-credits.html";
include "./includes/footer.php" ?>