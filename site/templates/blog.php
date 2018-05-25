<?php snippet('header') ?>

<h1><?php echo $page->title()->html() ?></h1>


<?php foreach ($page->children()->visible()->sortBy('sort', 'asc') as $subpage): ?>


<?php echo $subpage->title()->html() ?>
<?php echo $subpage->url() ?>
<br><br>



<?php endforeach ?>


<?php snippet('footer') ?>
