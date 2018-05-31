<?php snippet('header') ?>

    <main  class="barba-container page_container page_blog" data-namespace="page_blog">


    	<div class="layout_display_container">
          <section class="layout_width_limiter">

          <div class="page_title_container">
      			<h1 class="main_titre"><?php echo $site->title()->html() ?></h1>
      			<h2 class="main_sstitre"><?php echo $page->chapo()->kirbytextRaw() ?></h2>
          </div>
          <?php $today = date('Ymd'); ?>
          <?php foreach ($page->children()->visible()->sortBy('sort', 'asc') as $subpage): ?>
              <?php $publication_date = $subpage->date('Ymd', 'publication_date') ?>
              <?php if ( $publication_date <= $today or $publication_date == ''): ?>
              <article>
                <div class="img_hover_container">
                <img src="<?php echo $subpage->url().'/'.$subpage->cover()->html() ?>" alt="#">
                </div>
                <div class="txt_container">
                  <a href="<?php echo $subpage->url() ?>">
                <h3 class="titre_souligne"><?php echo $subpage->title()->html() ?></h3>
                </a>
                <?php echo $subpage->resume()->kirbytext() ?>
                <a class="bt_rounded" href="<?php echo $subpage->url() ?>"><?php echo $site->blog_readmore()->html() ?></a>
                </div>
              </article>
              <?php endif ?>
          <?php endforeach ?>

    	    </section>

    	</div>

    </main>

<?php snippet('footer') ?>
