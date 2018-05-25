<?php if ($data->picture()->isNotEmpty()): ?>
<section class="article_picture">
    <img src="<?= $page->image($data->picture())->url() ?>" alt="#">
</section>
<?php endif ?>
