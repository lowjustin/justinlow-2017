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
  'site_data' => [
    'title' => $page->title()->value() . " | " . $site->title()->html()->value(),
    'description' => $site->description()->html()->value(),
    'keywords' => $site->keywords()->html()->value(),
    'copyright' => $site->copyright()->kirbytextinline()->value(),
  ],
];

echo json_encode($data);