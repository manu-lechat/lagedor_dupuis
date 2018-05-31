<?php snippet('header') ?>

<main  class="barba-container page_container" data-namespace="page_presentation">

  <div class="layout_display_container">
    <section class="layout_width_limiter">


      <div class="page_title_container">
      <h1 class="main_titre"><?php echo $site->title()->html() ?></h1>
      <h2 class="main_sstitre"><?php echo $page->title()->html() ?></h2>
      </div>

      <p class="bold">
        <?php echo $page->intro()->html() ?>
      </p>

      <p>
        <?php echo $page->text()->html() ?>
      </p>
  </section>

  </div>

</main>




<?php snippet('footer') ?>
