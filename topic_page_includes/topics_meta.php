<?php
global $connection;

if (isset($_GET['type'])) {
    $type = $_GET['type'];


$query = "SELECT * FROM topics WHERE topic = '$type'";
$select_topic = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($select_topic)) {
    $topic_topic = $row['topic'];
    $topic_title = $row['title'];
    $topic_description = $row['description'];
    $topic_subtitle = $row['subtitle'];
    $topic_keywords =$row['keywords'];
    $topic_css =$row['css'];

        include "./topic_page_includes/topic-page-intro.php"; 
};
}?>