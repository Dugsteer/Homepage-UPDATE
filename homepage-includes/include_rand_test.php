<?php
global $connection;

//Check for anything in daily table--check for date
//if date the same, just get the three rows.
//  Otherwise, empty the table, select three rows at random and insert them. 
// Pass the rows to the frontend.

$query = "SELECT sheet_date FROM daily LIMIT 1";
$sheet_query = mysqli_query($connection, $query);

echo $sheet_query;


?>