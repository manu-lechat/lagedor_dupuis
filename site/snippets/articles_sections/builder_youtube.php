<section class="youtube">
<?php $youtube_url = $data->youtube() ?>
<?php $regex_pattern = "/(youtube.com|youtu.be)\/(watch)?(\?v=)?(\S+)?/" ?>
<?php $match ?>
<?php if(preg_match($regex_pattern, $youtube_url, $match)): ?>
    <?php parse_str( parse_url( $youtube_url, PHP_URL_QUERY ), $video_id ) ?>
    <article style="background-image:url(http://img.youtube.com/vi/<?= $video_id['v'] ?>/mqdefault.jpg);"></article>
<?php else: ?>
    <article style="background:#b3000a;">
        <span>Désolé, ce n'est pas une vidéo youtube</span>
    </article>
<?php endif ?>
</section>
