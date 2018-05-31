<?php snippet('header') ?>

<main  class="barba-container page_chapter" data-namespace="page_chapter">
<div class="layout_display_container">

<?php $today = date('Ymd') ?>
<?php $date_in = $page->date('Ymd','date_in') ?>
<?php $date_out = $page->date('Ymd','date_out') ?>
<?php $lisibility = $page->lisibility() ?>

<?php $dir_img = kirby()->roots()->assets() . '/img/_'.$site->language().'/chapitres/'.$page->id().'/*.jpg' ?>
<?php $images = glob( $dir_img ) ?>
<?php $images_index = 0 ?>
<?php foreach( $images as $image ): ?>

    <?php $images_index++ ?>
<?php endforeach ?>


<?php $array = [] ?>
<?php $count = -1 ?>
<?php foreach( $site->index()->filterBy('template', 'chapter') as $chapter ): ?>
    <?php $count++ ?>
    <?php array_push($array,$chapter->id()) ?>
<?php endforeach ?>
<?php $chapter_index = array_search($page->id(), $array) ?>
<?php $prev_chapter = '' ?>
<?php if ( $chapter_index > 0 ): ?>
    <?php $prev_chapter = $site->page($array[$chapter_index-1])->url() ?>
<?php endif ?>
<?php $next_chapter = '' ?>
<?php if ( $chapter_index < $count ): ?>
    <?php $next_chapter = $site->page($array[$chapter_index+1])->url() ?>
<?php endif ?>


<?php if ( ($today >= $date_in && $today <= $date_out) or ($lisibility == 'on')  ): ?>



      <?php if($prev_chapter != ''): ?>
      <a class="bt_prev_chapitre bt_prev" id="bt_prev_chapitre" href="<?php echo $prev_chapter ?>"><span></span></a>
      <?php endif ?>
      <?php if($page->children()->first() != null): ?>
      <a class="bt_next_chapitre bt_next"  id="bt_next_chapitre"  href="<?php echo $page->children()->first()->url() ?>"><span></span></a>
      <?php else: ?>
          <?php if($next_chapter != ''): ?>
      <a class="bt_next_chapitre bt_next"  id="bt_next_chapitre" href="<?php echo $next_chapter ?>"><span></span></a>
          <?php endif ?>
      <?php endif ?>


    <!-- PANORAMA -->
    <?php if ( $page->mode() == 'panorama'): ?>



      <!-- player_panoramique -->
      <?php  snippet('player_panoramique', array('player_slideshow_images' => $images)) ?>


    <!-- SLIDESHOW -->
    <?php else: ?>


        <!-- player_slideshow -->
        <?php  snippet('player_slideshow', array('player_slideshow_images' => $images)) ?>



    <?php endif ?>




<?php else: ?>

    <div class="teaser_container" id="teaser_container">
        <h1><?php echo $page->title()->html() ?></h1>
        <h2><?php echo $page->txt_date()->html() ?></h2>
        <div class="img_container">
            <!-- <img src="img/chapitre1/teaser.jpg" alt=""> -->
            <img class="chapter_illus_resume" src="<?php echo $page->url() . '/' . $page->illus_resume() ?>" alt="">
        </div>
        <p class="resume">
          <?php echo $page->resume() ?>
        </p>
    </div>

    <!-- Boutons chapitres pour le résumé-->
    <?php if($prev_chapter != ''): ?>
    <a class="bt_prev_chapitre bt_prev" id="bt_prev_chapitre" href="<?php echo $prev_chapter ?>"><span></span></a>
    <?php endif ?>
    <?php if($next_chapter != ''): ?>
    <a class="bt_next_chapitre bt_next" id="bt_next_chapitre" href="<?php echo $next_chapter ?>"><span></span></a>
    <?php endif ?>


<?php endif ?>
</div>

</div>
</main>

<?php snippet('footer') ?>
