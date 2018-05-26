<?php snippet('header') ?>



<main  class="barba-container page_container page_blog page_blog_article" data-namespace="page_article">


  <div class="layout_display_container">
      <section class="layout_width_limiter">

        <h1 class="titre"><?php echo $site->title()->html() ?></h1>
        <p class="chapo"><?php echo $page->parent()->chapo()->kirbytextRaw() ?></p>

        <div class="top_content">
          <a href="<?php echo $page->parent()->url() ?>"><?php echo $site->blog_goBack()->html() ?></a>
        </div>

        <article class="article_blog">

          <div class="txt_container">
          <h3><?php echo $page->title()->html() ?></h3>
          <?php echo $page->resume()->kirbytext() ?>
          </div>
          <div class="article_content">
          <?php foreach($page->builder()->toStructure() as $section): ?>
              <?php snippet('articles_sections/' . $section->_fieldset(), array('data' => $section)) ?>
          <?php endforeach ?>
          </div>
        </article>


        <div class="top_content">
          <a href="<?php echo $page->parent()->url() ?>">Retour au blog</a>
        </div>


      </section>

  </div>

</main>


<?php snippet('footer') ?>
