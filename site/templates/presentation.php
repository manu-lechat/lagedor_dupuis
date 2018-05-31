<?php snippet('header') ?>
    <main  class="barba-container page_container page_presentation" data-namespace="page_presentation">

    	<div class="layout_display_container">

    		<div class="layout_width_limiter">


          <div class="page_title_container">
      			<h1 class="main_titre"><?php echo $site->title()->html() ?></h1>
      			<div class="main_sstitre"><?php echo $page->chapo()->kirbytext() ?></div>
      			<h3 class='main_sssstitre'><?php echo $page->sub_chapo()->html() ?></h3>
          </div>

          <div class="presentation_slider">
            <?php snippet('swipper', array('slideshow' => 'slideshow1')) ?>
          </div>

    			<!-- <article class="col_mockup" style="background-image:url(<?php //echo $page->url() . '/' . $page->cover() ?>);"> -->
    			<section>
    				<div class="col_50pc">
    					<h3 class="titre_souligne"><?php echo $page->resume_title()->html() ?></h3>
    					<?php echo $page->resume()->kirbytext() ?>
    				</div>
            <img class="couv_mockup" src="<?php echo $page->url() . '/' . $page->cover() ?>" alt="">
    			</section>

          <div class="presentation_slider">
  			     <?php snippet('swipper', array('slideshow' => 'slideshow2')) ?>
          </div>

          <div class="">
            <h1 class="main_titre"><?php echo $page->authors_title()->html() ?></h1>
          </div>

    			<section>
    				<div class="col_50pc">
    					<img class="portrait" src="<?php echo $page->url() . '/' . $page->portrait1() ?>" alt="#">
    				</div>
    				<div class="col_50pc">
    					<h3 class='titre_souligne margin_top_40px'>Roxanne Moreil</h3>
    					<?php echo $page->bio1()->kirbytext() ?>
    				</div>
    			</section>

    			<section>
    				<div class="col_50pc">
    					<h3 class='titre_souligne margin_top_40px'>Cyril Pedrosa</h3>
    					<p>
    					<?php echo $page->bio2()->kirbytext() ?>
    				</div>
    				<div class="col_50pc">
    					<img class="portrait" src="<?php echo $page->url() . '/' . $page->portrait2() ?>" alt="#">
    				</div>
    			</section>

    	</div>

    	</div>

    </main>

<?php snippet('footer') ?>
