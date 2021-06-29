<?php

$items = false;
foreach ($page->children()->listed()->flip() as $item) {
  $items[] = [
    'id' => $item->id(),
    'slug' => $item->slug(),
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
  'page_data' => [
    'title' => $page->title()->value(),
    'text'  => $page->text()->kirbytext()->value(),
    'items' => $items
  ],
  'site_data' => [
    'title' => $page->title()->value() . " | " . $site->title()->html()->value(),
    'description' => $site->description()->html()->value(),
    'keywords' => $site->keywords()->html()->value(),
    'copyright' => $site->copyright()->kiebytextinline()->value(),
  ],
];

echo json_encode($data);