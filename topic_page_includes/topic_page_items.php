<?php
global $connection;

if (isset($_GET['type'])) {
    $topic_type = $_GET['type'];

} else {$topic_type = $type;}
$query = "SELECT * FROM worksheets WHERE sheet_tags LIKE '%{$topic_type}%' ORDER BY sheet_title DESC LIMIT 0, 9";
$select_sheets = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($select_sheets)) {
    $sheet_id = $row['id'];
    $sheet_title = $row['sheet_title'];
    $sheet_description = $row['sheet_description'];
    $sheet_tags = $row['sheet_tags'];
    $sheet_level =$row['sheet_level'];
    $sheet_time=$row['sheet_time'];
    $sheet_type = $row['sheet_type'];
    $sheet_url = $row['sheet_url'];
    $sheet_date = $row['sheet_date'];
    $sheet_image = $row['sheet_image'];
  
  
    include "./topic_page_includes/topic-page-item.php";
}
    include "./includes/narrow-ad-middle.php";



?>