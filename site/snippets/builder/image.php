<section class="image"
<?php if ($data->picture()->isNotEmpty()): ?>
style="background-image: url(<?= $page->image($data->picture())->url() ?>)"
<?php endif ?>
>
</section>
