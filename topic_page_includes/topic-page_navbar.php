<?php
global $connection;

if (isset($_GET['type'])) {
    $type = $_GET['type'];}
    else {
      header("Location: https://esl-ology.com/index.php");
    }

$query = "SELECT * FROM topics WHERE topic = '$type'";
$select_topic = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($select_topic)) {
    $topic_topic = $row['topic'];
    $topic_title = $row['title'];
    $topic_description = $row['description'];
    $topic_subtitle = $row['subtitle'];
    $topic_keywords =$row['keywords'];
    $topic_css =$row['css'];

echo "<div class='nav-bar' id='navbar'>
  <a href='index.php' class='nav-bar__logo'>
    <svg class='icon-header nav-bar__logo-img'>
      <use xlink:href='sprite2.svg#Buho' onclick='scrollUp()'>
      </use>
    </svg> </a>
  <h3 class='nav-bar__title'>Esl-Ology.Com</h3>
  <div class='nav-bar__title-page'>
    <span class='nav-bar__title-page-main' id='pageTitle'>$topic_title</span>
  </div>
  <div class='nav-bar__links'>
    <a href='index.html' class='nav-bar__link link3'>Home</a>
    <svg viewBox='0 0 100 80' width='40' height='20' onclick='toggler();' id='menu' class='menu'>
      <rect width='100' height='12'></rect>
      <rect y='30' width='100' height='12'></rect>
      <rect y='60' width='100' height='12'></rect>
    </svg>
  </div>
</div>";

};

?>