<?php $youtube_url = $data->youtube() ?>
<?php $regex_pattern = "/(youtube.com|youtu.be)\/(watch)?(\?v=)?(\S+)?/" ?>
<?php $match ?>
<?php if(preg_match($regex_pattern, $youtube_url, $match)): ?>
<?php parse_str( parse_url( $youtube_url, PHP_URL_QUERY ), $video_id ) ?>
<section class="article_youtube">
    <div class="video-container">
		<iframe src="https://www.youtube.com/embed/<?php echo $video_id['v'] ?>" width="800" height="450" frameborder="0"></iframe>
	</div>
</section>
<?php endif; ?>
