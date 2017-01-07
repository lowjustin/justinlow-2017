<?php

return function($site, $pages, $page) {
  $page = page('articles')->children()->visible()->last();

  return compact(
    'page'
  );
};