<section class="article_slideshow">
<?php $picture = $data->picture() ?>
<?php $pictures = explode('- ', $picture) ?>
<?php foreach ($pictures as $picture): ?>
    <?php if ($picture != ''): ?>
    <img src="<?= $page->url().'/'.$picture ?>" alt="#">
    <?php endif ?>
<?php endforeach ?>
</section>
