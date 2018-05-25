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

  <?php snippet('nav') ?>
  <section id="barba-wrapper" class="barba_wrapper">
