<?php

return function ($page) {
  $category = param('category');
  $tag = param('tag');
  
  $articles = $page->children()->listed()->flip();

  if ($category) {
    $articles = $articles->filterBy('categories', $category, ',');
  }

  if ($tag) {
    $articles = $articles->filterBy('tags', $tag, ',');
  }
  
  $items = false;
  foreach ($articles as $item) {
    $items[] = $item->data_card();
  }

  return [
    'items' => $items
  ];

};