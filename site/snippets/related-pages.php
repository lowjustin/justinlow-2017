<? if (count($page->related())): ?>
  <section class="related-articles">
    <h2>Related Articles</h2>
    <ul>
      <? foreach($page->related() as $item): ?>
        <li><a href="<?= $item->url() ?>"><?= $item->title() ?></a></li>
      <? endforeach ?>
    </ul>
  </section>
<? endif ?>
