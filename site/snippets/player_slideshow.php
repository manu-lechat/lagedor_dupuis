<!-- SWIPER MIN -->
<div class="swiper-container swiper_min" id="swiper_min">
  <div class="swiper-wrapper">
    <?php
    $id = 0;
    $CloseIt = false;
    $total =  count($player_slideshow_images);
    if( (count($player_slideshow_images) % 2) == 1 ){  $CloseIt = true;  }
    foreach( $player_slideshow_images as $image ):
    $id++;
    if( $id % 2 == 1){ echo '<div class="swiper-slide"><div class="img_container">';  }
    // impaire on ouvre
    ?>
    <img src="<?php echo $site->url().'/assets/img/_'.$site->language().'/chapitres/'.$page->id()."/".basename($image)?>" alt="#"  class="OnePage">
    <?php if( $id % 2 == 0){
      echo '</div></div>';  }else{
      if(($CloseIt == true )&&($id==$total )){ echo '</div></div>'; }
    }

    // paire on ferme
    ?>
		<?php endforeach; ?>
    </div>
</div>


<!-- SWIPER PAGES -->
<div class="swiper-container swiper_pages" id="swiper_pages">
	<div class="swiper-wrapper">
    <?php
    $id = 0;
    $CloseIt = false;
    $total =  count($player_slideshow_images);
    if( (count($player_slideshow_images) % 2) == 1 ){  $CloseIt = true;  }
    foreach( $player_slideshow_images as $image ):
    $id++;
    if( $id % 2 == 1){ echo '<div class="swiper-slide"><div class="img_container">';  }
    // impaire on ouvre
    ?>
    <img src="<?php echo $site->url().'/assets/img/_'.$site->language().'/chapitres/'.$page->id()."/".basename($image)?>" alt="#"  class="OnePage">
    <?php if( $id % 2 == 0){ echo '</div></div>';  }else{
    if(($CloseIt == true )&&($id==$total )){ echo '</div></div>'; }
    }
    // paire on ferme
    ?>
		<?php endforeach; ?>
	</div>
</div>

<!-- boutons slider -->

<a class="bt_prev swiper_pages_prev"><span></span></a>
<a class="bt_next swiper_pages_next"><span></span></a>

<a href="#" id="lien_zoom" class="lien_zoom disabled"></a>
<a href="#" id="lien_dezoom" class="lien_dezoom"></a>
