<!-- PLAYER PANORAMA -->
<div class="swiper-container swiper_panoramique" id="swiper_panoramique">
  <div class="swiper-wrapper">
		<?php foreach( $player_slideshow_images as $image ): ?>

      <div class="swiper-slide">
        <img src="<?php echo $site->url().'/assets/img/_'.$site->language().'/chapitres/'.$page->id()."/".basename($image)?>" alt="#" >
      </div>

      <?php endforeach; ?>
    </div>
</div>

<!-- boutons slider -->

<a class="bt_prev swiper_pages_prev" id="swiper_pages_prev"><span></span></a>
<a class="bt_next swiper_pages_next" id="swiper_pages_next"><span></span></a>
