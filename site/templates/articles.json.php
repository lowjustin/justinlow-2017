<?php

$items = false;
foreach ($page->children()->listed()->flip() as $item) {
  $items[] = [
    'title' => $item->title()->value(),
    // 'text'  => $item->text()->kirbytext()->value()
    'date' => $item->date()->value(),
    'status' => $item->content()->status()->value(),
    'excerpt'  => $item->content()->excerpt()->value(),
    'link' => [
      'label' => 'Read more',
      'url' => $item->url()
    ]
  ];
}

$data = [
  'title' => $page->title()->value(),
  'text'  => $page->text()->kirbytext()->value(),
  'items' => $items
];

echo json_encode($data);