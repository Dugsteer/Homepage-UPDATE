
    <div class="content-short">
  <figure class="content-short__img">
<a href="<?php echo $href?>"><img src="img/<?php echo $imgsrc ?>"alt="<?php echo $title?>"></a>
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