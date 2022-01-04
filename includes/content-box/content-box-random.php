<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ContentRandom</title>
</head>
<body>
     <div class="content-long">
       <h1 class="content-long_title">Today's Choice</h1>
  <figure class="content-long__img">
    <a href="<?php echo $href?>"><img src="./img/<?php echo $imgsrc?>" alt="<?php echo $title?>"/></a>
    </figure>
    <div class="content-long__text">
      <h2 class="content-title"><?php echo $title?></h2>
      <p><?php echo $text ?></p>
    </div>

  </div>
</body>
</html>