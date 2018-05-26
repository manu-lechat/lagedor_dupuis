<?php snippet('header') ?>




<main  class="barba-container page_container" data-namespace="homePage">

	<section class="homepage layout_display_container">
		<a class="bt_welcome" id="bt_welcome" href="#"><?php echo $site->home_welcome()->html() ?></a>
		<img src="/assets/img/_<?php echo($site->language())?>/home_logo.svg" class="home_logo">
		<img src="/assets/img/_<?php echo($site->language())?>/home_logo_left.svg" class="home_logo_air_libre">
		<img src="/assets/img/_<?php echo($site->language())?>/home_logo_right.svg" class="home_logo_france_inter">
		<div class="card-wrapper">
			<div class="card" id="card">
				<img src="/assets/img/homepage/couv_00.jpg" class="couv_00 plan1">
				<img src="/assets/img/homepage/couv_01.png" class="couv_01 plan2">
			</div>
		</div>
	</section>
  <div class="language_nav">
			<a href="/" class="appear3 <?php if($site->language() == "fr"){ echo('active'); } ?>">fr</a>
			<a href="/en/" class="appear3 <?php if($site->language() == "en"){ echo('active'); } ?>">en</a>
			<a href="/it/" class="appear3 <?php if($site->language() == "it"){ echo('active'); } ?>">it</a>
			</li>
		</ul>
	</div>
</main>





<?php snippet('footer') ?>
