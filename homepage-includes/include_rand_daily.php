<?php
// include "db_worksheets.php";
global $connection;

//Check check for date
//if date the same, just get the three rows.
//  Otherwise, empty the table, select three rows at random and insert them. 
// Pass the daily rows to the frontend.

//Let's get the date on the sheet
$current_sheet_date = '2000-1-1';
$date = '2000-1-2';
$query = "SELECT sheet_date FROM daily LIMIT 1";
$sheet_query = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($sheet_query)) {
  $current_sheet_date= $row['sheet_date'];

//And today's date
  $date = date("Y-m-d");
}

//If there is a date in the table and it is not today...
if ($current_sheet_date !== $date) {

//Empty the table 

$deletion = "DELETE FROM daily";
$deletion_command = mysqli_query($connection, $deletion);

//Then fill the table with 3 new worksheet rows. Make sure they are not Xmas or Halloween worksheets. Later we can make a variable that checks if the date is NEAR Xmas or Halloween and then expressly include them.

    $query2 = "SELECT * FROM worksheets WHERE NOT (sheet_tags LIKE '%Christmas%' or sheet_tags LIKE '%Halloween%') ORDER BY RAND() LIMIT 3  ";
    $select_random_sheets = mysqli_query($connection, $query2);

    while ($row = mysqli_fetch_assoc($select_random_sheets)) {
      $sheet_id = $row['id'];
      $sheet_title = $row['sheet_title'];
      $sheet_description = $row['sheet_description'];
      $sheet_tags = $row['sheet_tags'];
      $sheet_type = $row['sheet_type'];
      $sheet_url = $row['sheet_url'];
      $sheet_date = $date;
      $sheet_image = $row['sheet_image'];

      $query = "INSERT INTO daily(id, sheet_title, sheet_description, sheet_tags, sheet_type, sheet_url, sheet_date, sheet_image) ";

      $query .= "VALUES('{$sheet_id}', '{$sheet_title}', '{$sheet_description}', '{$sheet_tags}', '{$sheet_type}', '{$sheet_url}', '{$sheet_date}', '{$sheet_image}') ";

    $create_post_query = mysqli_query($connection, $query);

//Get a message if it didn't work

    if (!$create_post_query) {
      die('Query FAILED. This rather sucks!' . mysqli_error($connection));
    } 
};

}
//Select the three worksheet rows and stick em in the DOM

echo "<div class='rand-container'>
    <h2 class='content-rand__title'>Today's Choices</h2>
    <div class='content-rand' id='content-rand'>";

$query = "SELECT * FROM daily";
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

    echo "<div class='content-rand__inner rando'>";

  //Choose to make a link to download or open web location depending on resource last 3 letters.
switch ($sorter) {
  case 'tml':
    echo
            "<a href='https://esl-ology.com/$sheet_url'>
            <img class='content-rand__image' src='img/$sheet_image' alt='$sheet_title'></a>";
    break;

case 'ebp':
      echo
      "<a href='https://esl-ology.com/$sheet_url'>
      <img class='content-rand__image' src='img/$sheet_image' alt='$sheet_title'></a>";
      break;

  default:
    echo "<a href='docs/$sheet_url'>
          <img class='content-rand__image' src='img/$sheet_image' alt='$sheet_title'></a>";
 };
 
    echo "</figure>
    <div class='content-rand__text'>
      <h2 class='content-rand__title'>$sheet_title</h2>
    </div>
  </div>";

}

echo "</div>
  </div>";