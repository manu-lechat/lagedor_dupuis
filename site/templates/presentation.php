<?php snippet('header') ?>
    <main  class="barba-container page_container page_presentation" data-namespace="page_presentation">

    	<div class="loader_screen"></div>

    	<div class="layout_display_container">

    		<section class="layout_width_limiter">
    			<h1 class="titre"><?php echo $site->title()->html() ?></h1>
    			<p class="chapo"><?php echo $page->chapo()->kirbytextRaw() ?></p>
    			<h3 class='sub_chapo'><?php echo $page->sub_chapo()->html() ?></h3>
                <?php snippet('swipper', array('slideshow' => 'slideshow1')) ?>
    		</section>

    		<section class="layout_width_limiter">

    			<article class="col_mockup" style="background-image:url(<?php echo $page->url() . '/' . $page->cover() ?>);">
    				<div class="col_50pc">
    					<h3><?php echo $page->resume_title()->html() ?></h3>
    					<?php echo $page->resume()->kirbytext() ?>
    				</div>
    			</article>

    			<?php snippet('swipper', array('slideshow' => 'slideshow2')) ?>

    			<article>
    				<div class="col">
    					<h1 class="titre_auteurs"><?php echo $page->authors_title()->html() ?></h1>
    				</div>
    				<div class="col_50pc">
    					<img class="portrait" src="<?php echo $page->url() . '/' . $page->portrait1() ?>" alt="#">
    				</div>
    				<div class="col_50pc">
    					<h3 class='margin_top_40px'>Roxanne Moreil</h3>
    					<?php echo $page->bio1()->kirbytext() ?>
    				</div>
    			</article>

    			<article>
    				<div class="col_50pc">
    					<h3 class='margin_top_40px'>Cyril Pedrosa</h3>
    					<p>
    					<?php echo $page->bio2()->kirbytext() ?>
    				</div>
    				<div class="col_50pc">
    					<img class="portrait" src="<?php echo $page->url() . '/' . $page->portrait2() ?>" alt="#">
    				</div>
    			</article>

    	</section>

    	</div>

    </main>

<?php snippet('footer') ?>
