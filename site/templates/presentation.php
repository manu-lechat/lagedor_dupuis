<?php snippet('header') ?>

<h1><?php echo $page->title()->html() ?></h1>

<img src="<?php echo $page->url() . '/' . $page->portrait1() ?>" alt="#">

<?php foreach ($page->images()->sortBy('sort', 'asc') as $image): ?>
  <?php if($image->diaporama() == 'diaporama1'): ?>
    <?php snippet('swipper', array('image' => $image)) ?>
  <?php endif ?>
<?php endforeach ?>

<?php foreach ($page->images()->sortBy('sort', 'asc') as $image): ?>
  <?php if($image->diaporama() == 'diaporama2'): ?>
    <?php snippet('swipper', array('image' => $image)) ?>
  <?php endif ?>
<?php endforeach ?>

<?php snippet('footer') ?>
