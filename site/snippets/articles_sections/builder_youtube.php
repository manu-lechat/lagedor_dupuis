<?php $youtube_url = $data->youtube() ?>
<?php $regex_pattern = "/(youtube.com|youtu.be)\/(watch)?(\?v=)?(\S+)?/" ?>
<?php $match ?>
<?php if(preg_match($regex_pattern, $youtube_url, $match)): ?>
<?php parse_str( parse_url( $youtube_url, PHP_URL_QUERY ), $video_id ) ?>
<section class="article_youtube">
    ID DE LA VIDEO : <?php $video_id['v'] ?>
</section>
