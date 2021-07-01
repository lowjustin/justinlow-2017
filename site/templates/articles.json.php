<?php

$items = false;
foreach ($page->children()->listed()->flip() as $item) {
  $items[] = $item->data_card();
}

$data = [
  'page_data' => [
    'title' => $page->title()->value(),
    'text'  => $page->text()->kirbytext()->value(),
    'items' => $items
  ],
  'site_data' => $page->site_data(),
];

echo json_encode($data);