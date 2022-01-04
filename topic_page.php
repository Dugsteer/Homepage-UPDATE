<?php include "./db_worksheets.php" ?>

<?php include "./topic_page_includes/topic_page_header.php" ?>

<?php include "./includes/social.php" ?>
<?php include "./topic_page_includes/topic-page_navbar.php" ?>

<div id="wrapper" class="wrapper">
  <div class="gridfiller"></div>
  <?php include "./includes/narrow-ad-top.php" ?>
  <div class="sidebar-container" id="sidebar">
    <?php include "./sidebar-noad.html" ?>
  </div>

  <div class="content">

    <?php
    include "./topic_page_includes/topics_meta.php";
    ?>

    <?php include "./topic_page_includes/topic_page_items.php"; ?>

  </div>

</div>


<?php include "./includes/footer.php"; ?>