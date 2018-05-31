<!DOCTYPE html>
<html lang="fr">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <?php echo css('assets/css/reset.css') ?>
  <?php echo css('assets/css/menu.css') ?>
  <?php echo css('assets/css/swiper.min.css') ?>
  <?php echo css('assets/css/main.css') ?>

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>

</head>

<body>

  <section id="barba-wrapper" class="barba_wrapper">

    <div class="layout_display_container">
        <section class="layout_width_limiter">

          <div class="page_title_container">


  <img src="<?php echo kirby()->urls()->assets() ?>/img/_<?php echo($site->language())?>/nav_logo.svg" class="logo_tmp_page">

            <h2 class="main_sstitre"><?php echo $page->title()->html() ?></h2>
          </div>



          <article>
            <p class="center">

            Découvrez <em> « L'âge d'or » </em>cet été au rythme <span class="bold" >d’un chapitre par semaine,</span><br>
En attendant la sortie de l'album en librairie le 7 septembre.
</p>
          </article>




        </section>

    </div>


  </section>

</body>
</html>
