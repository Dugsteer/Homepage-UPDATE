<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ContentLong</title>
</head>
<body>
     <div class="content-long">
  <figure class="content-long__img">
    <a href="<?php echo $href?>"><img src="./img/<?php echo $imgsrc?>" alt="<?php echo $title?>"/></a>
    </figure>
    <div class="content-long__text">
      <h2 class="content-title"><?php echo $title?></h2>
      <p><?php echo $text ?></p>
    </div>
    <div class="content__info spacer">
    <a href="<?php echo $hrefdoc?>"><svg class="content__info-icon">
            <use xlink:href="sprite.svg#download"></use>
          </svg>
  </a>      
      <a href="<?php echo $href?>"><svg class="content__info-icon">
            <use xlink:href="sprite.svg#online"></use>
          </svg>
  </a>
    </div>
  </div>
</body>
</html>