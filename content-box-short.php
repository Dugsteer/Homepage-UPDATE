<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content</title>
</head>
<body>
    <div class="content-short">
  <figure class="content-short__img">
<img src="img/<?php echo $imgsrc ?>"alt="<?php echo $title?>">
  </figure>
  <div class="content-short__text">
    <h2 class= "content-title"><?php echo $title?></h2>
    <p"><?php echo $text ?></p>
  </div>
   <div class="content__info">
      <h6 class="content__info-text"><?php echo $level ?></h6>
      <h6 class="content__info-time"><?php echo $time ?></h6>
      <a href="<?php echo $href?>"><svg class="content__info-icon">
            <use xlink:href="sprite.svg#<?php echo $icon ?>"></use>
          </svg>
  </a>
    </div>
</div>
</body>
</html>