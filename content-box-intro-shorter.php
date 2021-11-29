<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ContentLong</title>
</head>
<body>
     <div class="content-short shorter intro" style="background-color: #368cbf;">

    <div class="content-short__text">
      <h2 class="content-title" style="color:white; text-transform:initial; font-size: 2rem; margin-bottom: 1rem;"><?php echo $title?></h2>
      <p><?php echo $text ?></p>
    </div>
   <div class="explainer" style="width: 280px; display: flex; align-items: center; justify-content:space-between; color:white;">
      <p style="color:white;">Dowload </p><p><svg class="content__info-icon">
            <use xlink:href="sprite.svg#download"></use>
          </svg></p>
          <br>
             <p style="color:white;">Play Online </p><p><svg class="content__info-icon">
            <use xlink:href="sprite.svg#online"></use>
          </svg></p> 
    </div>
 
  </div>
</body>
</html>