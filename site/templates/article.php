<?php snippet('header') ?>

<h1><?php echo $page->title()->html() ?></h1>

<?php foreach($page->builder()->toStructure() as $section): ?>
    <?php snippet('articles_sections/' . $section->_fieldset(), array('data' => $section)) ?>
<?php endforeach ?>

<?php snippet('footer') ?>
