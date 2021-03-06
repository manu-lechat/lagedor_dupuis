<!DOCTYPE html>
<html lang="<?php echo $site->language(); ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <!-- balises meta facebook -->
  <meta property="og:url"                content="http://www.lagedor-airelibre.com/" />
  <meta property="og:title"              content="L'âge d'or par Cyril Pedrosa & Roxane Moreil" />
  <meta property="og:description"        content="Prébublication de l'album aux éditions AIR LIBRE" />
  <meta property="og:image"              content="http://www.lagedor-airelibre.com/assets/img/social/couv_fb.jpg" />
  <meta property="og:type"              content="website" />
  <meta property="fb:app_id"              content="611603149225559" />


  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo url() ?>/assets/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo url() ?>/assets/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo url() ?>/assets/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo url() ?>/assets/img/favicon/site.webmanifest">
  <link rel="mask-icon" href="<?php echo url() ?>/assets/img/favicon/safari-pinned-tab.svg" color="#5bbad5">

  <?php echo css('assets/css/reset.css') ?>
  <?php echo css('assets/css/menu.css') ?>
  <?php echo css('assets/css/swiper.min.css') ?>
  <?php echo css('assets/css/main.css') ?>

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>

</head>

<body>

  <?php snippet('nav') ?>
  <section id="barba-wrapper" class="barba_wrapper">
