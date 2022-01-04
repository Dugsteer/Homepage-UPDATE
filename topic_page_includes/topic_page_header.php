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
        $topic_keywords = $row['keywords'];
        $topic_css = $row['css'];

      echo "
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='description' content='$topic_description'>
    <meta name=' keywords' content='$topic_keywords'>
    <title>$topic_title</title>
    <link rel='icon' type='image/png' href='favicon.png' ; />
    <link rel='stylesheet' href='css/$topic_css'>
    <link rel='stylesheet' href='css/social.css'>
    <script data-ad-client='ca-pub-6192312197226967' async src='https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
    <script async src='https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6192312197226967' crossorigin='anonymous'></script>
</head>

<body>";

   
    };
} ?>