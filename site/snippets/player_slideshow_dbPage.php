<!-- SWIPER MIN -->
<div class="swiper-container swiper_min" id="swiper_min">
  <div class="swiper-wrapper">
    <?php foreach( $player_slideshow_images as $image ): ?>
    <div class="swiper-slide">
      <img src="<?php echo  $site->url().'/assets/img/_'.$site->language().'/chapitres/'.$page->id()."/".basename($image)?>" alt="#" >
    </div>
    <?php endforeach; ?>
    </div>
</div>

<!-- SWIPER PAGES -->
<div class="swiper-container swiper_pages" id="swiper_pages">
	<div class="swiper-wrapper">
		<?php foreach( $player_slideshow_images as $image ): ?>
    <div class="swiper-slide swiper-slide">
      <div class="img_container">
      <img src="<?php echo $site->url().'/assets/img/_'.$site->language().'/chapitres/'.$page->id()."/".basename($image)?>" alt="#" >
      </div>
    </div>
		<?php endforeach; ?>
	</div>
</div>

<!-- boutons slider -->

<a class="bt_prev swiper_pages_prev"><span></span></a>
<a class="bt_next swiper_pages_next"><span></span></a>

<a href="#" id="lien_zoom" class="lien_zoom disabled"></a>
<a href="#" id="lien_dezoom" class="lien_dezoom"></a>
