<article>
    <div class="col">
        <div class="swiper-container swiper_presentation">
            <div class="swiper-wrapper">
        <?php foreach($page->$slideshow()->yaml() as $image): ?>   
            <?php if($image = $page->image($image)): ?>
                <div class="swiper-slide"><img src="<?php echo $image->url() ?>" alt="#" ></div>
            <?php endif ?>
        <?php endforeach; ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</article>
