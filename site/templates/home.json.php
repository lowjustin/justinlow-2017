<?php

$number_cards = $page->number_cards()->toInt();
$hero = $page->hero()->toPage();
$articles = $page->articles()->toPage()->children()->not($hero)->listed()->flip()->limit($number_cards);

$hero = [
  'id' => $hero->id(),
  'slug' => $hero->slug(),
  'title' => $hero->title()->value(),
  'date' => $hero->date()->value(),
  'status' => $hero->content()->status()->value(),
  'excerpt'  => $hero->content()->excerpt()->value(),
  'link' => [
    'label' => 'Read more',
    'url' => $hero->url()
  ]
];

$items = false;
foreach ($articles as $item) {
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
    'hero'  => $hero,
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