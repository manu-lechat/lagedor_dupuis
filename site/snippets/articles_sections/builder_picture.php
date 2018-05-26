<?php if ($data->picture()->isNotEmpty()): ?>
<section class="article_picture">
    <img src="<?= $page->image($data->picture())->url() ?>" alt="#">
    <?php if( $data->caption() != '' ): ?>
    <p><?php echo $data->caption() ?></p>
    <?php endif ?>
</section>
<?php endif ?>
