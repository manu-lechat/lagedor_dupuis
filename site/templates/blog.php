<?php snippet('header') ?>

    <main  class="barba-container page_container page_blog" data-namespace="page_blog">

        <div class="loader_screen"></div>

    	<div class="layout_display_container">

               <section class="layout_width_limiter">

    			<h1 class="titre"><?php echo $site->title()->html() ?></h1>
    			<p class="chapo"><?php echo $page->chapo()->kirbytextRaw() ?></p>

        <?php $today = date('Ymd'); ?>
        <?php foreach ($page->children()->visible()->sortBy('sort', 'asc') as $subpage): ?>
            <?php $publication_date = $subpage->date('Ymd', 'publication_date') ?>
            <?php if ( $publication_date <= $today or $publication_date == ''): ?>
                <article class="article_blog">
    				<div class="img_hover_container">
    					<img src="<?php echo $subpage->url().'/'.$subpage->cover()->html() ?>" alt="#">
    				</div>
    				<div class="txt_container">
    					<h3><?php echo $subpage->title()->html() ?></h3>
    					<?php echo $subpage->resume()->kirbytext() ?>
    					<a href="<?php echo $subpage->url() ?>"><?php echo $site->blog_readmore()->html() ?></a>
    				</div>
    			</article>
            <?php endif ?>
        <?php endforeach ?>

    	       </section>

    	</div>

    </main>

<?php snippet('footer') ?>
