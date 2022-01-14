<?php
global $connection;

$query = "SELECT * FROM daily ORDER BY RAND() LIMIT 3  ";
$select_sheets = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($select_sheets)) {
    $sheet_id = $row['id'];
    $sheet_title = $row['sheet_title'];
    $sheet_description = $row['sheet_description'];
    $sheet_tags = $row['sheet_tags'];
    $sheet_type = $row['sheet_type'];
    $sheet_url = $row['sheet_url'];
    $sheet_date = $row['sheet_date'];
    $sheet_image = $row['sheet_image'];
    $sorter = substr($sheet_url, -3);

    echo "<div class='carousel'>
       <h1 class='carousel_title'></h1>
  <figure class='carousel_img'>";

  //Choose download or open web location depending on resource last 3 letters.
switch ($sorter) {
  case 'tml':
    echo
            "<a href='https://esl-ology.com/$sheet_url'>
            <img src='img/$sheet_image' alt='$sheet_title'></a>";
    break;

case 'ebp':
      echo
      "<a href='https://esl-ology.com/$sheet_url'>
      <img src='img/$sheet_image' alt='$sheet_title'></a>";
      break;

  default:
    echo "<a href='docs/$sheet_url'>
          <img src='img/$sheet_image' alt='$sheet_title'></a>";
 };

    // <a href='$sheet_url'><img src='./img/$sheet_image' alt='$sheet_title'/></a>

    echo "</figure>
    <div class='carousel_text'>
      <h2 class='carousel_title'>Today...?  $sheet_title </h2>
   
    </div>
  </div>";



}
