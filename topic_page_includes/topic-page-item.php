
  

<?php

$sheet_type === "pdf-class" ? $content_type = "content-long" : $content_type = "content-short";
$sorter = substr($sheet_url, -3);


echo "<div class='$content_type'>
      <figure class='";?>
<?php echo"$content_type";?><?php echo"__img'>"; ?>

<?php
//decide whether to open a web address or download a document
switch ($sorter) {
      case 'tml':
            $icon_type = "online";
            echo
            "<a href='https://esl-ology.com/$sheet_url'>
            <img src='img/$sheet_image' alt='$sheet_title'></a>";
            break;

      case 'ebp':
            $icon_type = "online";
            echo
            "<a href='https://esl-ology.com/$sheet_url'>
      <img src='img/$sheet_image' alt='$sheet_title'></a>";
            break;

      case 'php':
            $icon_type = "online";
            echo
            "<a href='https://esl-ology.com/$sheet_url'>
      <img src='img/$sheet_image' alt='$sheet_title'></a>";
            break;

      default:
            $icon_type = "download";
            echo "<a href='docs/$sheet_url'>
            <img src='img/$sheet_image' alt='$sheet_title'></a>";
};


?>

<?php echo "</figure>
      <div class='"; ?>    
<?php echo "$content_type"; ?>
<?php  echo "__text'>
            <h2 class='content-title'>$sheet_title</h2>
            <p>$sheet_description</p>
      </div>
      <div class='content__info'>
            <h6 class='content__info-text'>$sheet_level</h6>
            <h6 class='content__info-time'>$sheet_time</h6>";

?>

            <?php
//decide whether to open a web address or download a document
switch ($sorter) {
      case 'tml':
            echo
            "<a href='https://esl-ology.com/$sheet_url'>";
            break;

      case 'ebp':
            echo
            "<a href='https://esl-ology.com/$sheet_url'>";
            break;

      case 'php':
            echo
            "<a href='https://esl-ology.com/$sheet_url'>";
            break;

      default:
            echo "<a href='docs/$sheet_url'>";};
?>
<?php
                    echo "<svg class='content__info-icon'><use xlink:href='sprite.svg#$icon_type'></use>
                  </svg>
            </a>
      </div>
</div>";
?>