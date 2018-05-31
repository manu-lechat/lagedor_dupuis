<!-- bouton menu -->
<a href="#cd-nav" class="cd-nav-trigger bt_menu" id="bt_menu">
  <span class="cd-nav-icon"></span>
  <svg x="0px" y="0px" width="54px" height="54px" viewBox="0 0 54 54">
    <circle fill="transparent" stroke="#63bcba" stroke-width="1" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
  </svg>
</a>
<!-- menu fullscreen -->
<div id="cd-nav" class="cd-nav">


      <nav class="nav_col_gauche">
        <div class="col">

        <a href="/">
            <img src="<?php echo kirby()->urls()->assets() ?>/img/_<?php echo($site->language())?>/nav_logo.svg" class="logo appear1">
        </a>
        <div class="intro appear1">
            <?php echo $site->nav_intro()->kirbytext() ?>
        </div>

        <div  class="swiper-container swiper_menu sommaire">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide appear2">
                  <a href="<?php echo $site->page('presentation')->url() ?>" class='' img_hover="default">
                    <h2><?php echo $site->page('presentation')->title()->html() ?></h2>
                    <h3 class="first_content"><?php echo $site->nav_presentation()->html() ?></h3>
                    <h3 class="hover_content"><?php echo $site->nav_presentation()->html() ?></h3>
                  </a>
                </div>
                <div class="swiper-slide appear2">
                  <a href="<?php echo $site->page('blog')->url() ?>" class='' img_hover="blog.jpg">
                    <h2><?php echo $site->page('blog')->title()->html() ?></h2>
                    <h3 class="first_content"><?php echo $site->nav_blog()->html() ?></h3>
                    <h3 class="hover_content"><?php echo $site->nav_blog()->html() ?></h3>
                  </a>
                </div>
            <?php $today = date('Ymd') ?>
            <?php foreach( $site->index()->filterBy('template', 'chapter') as $chapter ): ?>
                <?php $date_in = $chapter->date('Ymd','date_in') ?>
                <?php $date_out = $chapter->date('Ymd','date_out') ?>
                <?php $lisibility = $chapter->lisibility() ?>
                <?php if ( $today >= $date_in && $today <= $date_out or $lisibility == 'on' ): ?>
                    <?php $state = '' ?>
                <?php else: ?>
                    <?php $state = 'inactif' ?>
                <?php endif ?>
                <div class="swiper-slide appear2">
                  <a href="<?php echo $chapter->url() ?>" class="<?php echo $state ?>" img_hover="visuel-<?php echo $chapter->id() ?>.jpg">
                    <h2><?php echo $chapter->title()->html() ?></h2>
                    <h3 class="first_content"><?php echo $chapter->txt_pages()->html() ?></h3>
                    <h3 class="hover_content"><?php echo $chapter->txt_date()->html() ?></h3>
                  </a>
                </div>
            <?php endforeach ?>
                <div class="swiper-slide appear2">
                  <a href="<?php echo $site->page('mentions-legales')->url() ?>" class='' img_hover="default">
                    <h3 class="first_content"><?php echo $site->page('mentions-legales')->title()->html() ?></h3>
                    <h3 class="hover_content"><?php echo $site->page('mentions-legales')->title()->html() ?></h3>
                  </a>
                </div>
            </div>

        </div>

        </div>
      </nav>


      <div class="nav_col_droite " id="nav_col_droite">
      </div>



      <div class="social_nav">
          <a href="https://www.facebook.com/openspace.cyrilpedrosa" class="appear3"><img src="<?php echo kirby()->urls()->assets() ?>/img/ui/icon_fb.svg" alt="" class=''></a>
          <a href="https://www.facebook.com/openspace.cyrilpedrosa" class="appear3"><img src="<?php echo kirby()->urls()->assets() ?>/img/ui/icon_insta.svg" alt="" class=''></a>
          <a href="https://www.facebook.com/openspace.cyrilpedrosa" class="appear3"><img src="<?php echo kirby()->urls()->assets() ?>/img/ui/icon_tt.svg" alt="" class=''></a>
      </div>

      <a href="https://www.franceinter.fr/" target="_blank" class="logo_france_inter appear1"><img src="<?php echo kirby()->urls()->assets() ?>/img/nav/france-inter.svg" alt=""></a>

</div> <!-- .cd-nav -->
