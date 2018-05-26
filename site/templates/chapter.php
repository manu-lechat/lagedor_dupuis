<?php snippet('header') ?>


<main  class="barba-container page_chapter" data-namespace="page_chapter">

<?php /* if date non correspondante -> on affiche le résumé */ ?>


<div class="teaser_container">

<h1><?php echo $page->title()->html() ?></h1>
<h2><?php echo $page->txt_date()->html() ?></h2>



<div class="img_container">
	<img src="img/chapitre1/teaser.jpg" alt="">

    <img class="chapter_illus_resume" src="<?php echo $page->url() . '/' . $page->illus_resume() ?>" alt="#">
</div>
	<p class="resume">
	  <?php echo $page->resume() ?>
  </p>
</div>


<?php if($page->lien_prev_page()!=""){?>
<a class="bt_prev" href="/<?php echo $page->lien_prev_page(); ?>"><span></span></a>
<?php } ?>
<?php if($page->lien_next_page()!=""){?>
<a class="bt_next" href="/<?php echo $page->lien_next_page(); ?>"><span></span></a>
<?php } ?>

<?php /* else */ ?>
	<p class="resume" style="font-size:12px; ">
Si les dates sont ok, on va afficher un listing des fichiers présents dans le dossier : <br><br>
<?php
echo ("/assets/img/_".$site->language()."/chapters/".$page->dir_img());
?>
  </p>


</main>

<?php snippet('footer') ?>
