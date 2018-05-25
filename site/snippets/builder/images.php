<section class="images">
<?php $picture = $data->picture() ?>
<?php $pictures = explode('- ', $picture) ?>
<?php $i = 0 ?>
<?php foreach ($pictures as $picture): ?>
    <?php if ($picture != ''): ?>
    <?php $i++ ?>
    <?php endif ?>
<?php endforeach ?>
<?php $width = 100 / $i ?>
<?php foreach ($pictures as $picture): ?>
    <?php if ($picture != ''): ?>
    <article style="background-image:url(<?= $page->url().'/'.$picture ?>);width:<?= $width.'%' ?>;"></article>
    <?php endif ?>
<?php endforeach ?>
</section>
