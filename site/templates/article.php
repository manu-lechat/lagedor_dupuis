<?php snippet('header') ?>



<main  class="barba-container page_container  page_article" data-namespace="page_article">


  <div class="layout_display_container">
      <section class="layout_width_limiter">

        <div class="page_title_container">
        <h1 class="main_titre"><?php echo $site->title()->html() ?></h1>
        <h2 class="main_sstitre"><?php echo $page->parent()->chapo()->kirbytextRaw() ?></h2>
      </div>

        <div class="article_nav_bar">
            <a class="bt_rounded" href="<?php echo $page->parent()->url() ?>"><?php echo $site->blog_goBack()->html() ?></a>
        </div>

        <article>

          <h3 class=titre_souligne><?php echo $page->title()->html() ?></h3>
          <p>
          <?php if ( $page->text() != '' ): ?>
          <?php echo $page->text()->kirbytext() ?>
          <?php else: ?>
          <?php echo $page->resume()->kirbytext() ?>
          <?php endif ?>
          </p>
          <div class="article_content">
          <?php foreach($page->builder()->toStructure() as $section): ?>
              <?php snippet('articles_sections/' . $section->_fieldset(), array('data' => $section)) ?>
          <?php endforeach ?>
          </div>



        </article>


        <div class="article_nav_bar">
          <a class="bt_rounded" href="<?php echo $page->parent()->url() ?>">Retour au blog</a>
        </div>


      </section>

  </div>

</main>


<?php snippet('footer') ?>
