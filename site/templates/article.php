<?php snippet('header') ?>

<h1><?php echo $page->title()->html() ?></h1>
<?php echo $page->resume() ?>



<?php foreach ($page->images()->sortBy('sort', 'asc') as $image): ?>

  <?php if($image->filename() != $page->couv()): ?>
  <!-- <img src="<?php echo $image->url() ?>" alt="#"> -->
  <?php echo $image->filename() ?><br>
  <?php endif ?>
<?php endforeach ?>





<?php snippet('footer') ?>
