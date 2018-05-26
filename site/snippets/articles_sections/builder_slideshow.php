<section class="article_slideshow">

  <div class="swiper-container swiper_article">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->

        <?php $picture = $data->picture() ?>
        <?php $pictures = explode('- ', $picture) ?>
        <?php foreach ($pictures as $picture): ?>
            <?php if ($picture != ''): ?>
            <div class="swiper-slide">
              <img src="<?= $page->url().'/'.$picture ?>" alt="#">
            </div>
            <?php endif ?>
        <?php endforeach ?>

    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

</div>





</section>
