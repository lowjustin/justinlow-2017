<? snippet('status') ?>

<article>
  <h1><?= $page->title() ?></h1>
  <?= $page->text()->kirbytext() ?>
</article>

<? snippet('related-pages') ?>