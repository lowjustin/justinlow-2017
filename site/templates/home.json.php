<?php

$number_cards = $page->number_cards()->toInt();
$hero = $page->hero()->toPage();
$articles = $page->articles()->toPage()->children()->not($hero)->listed()->flip()->limit($number_cards);

$items = false;
foreach ($articles as $item) {
  $items[] = $item->data_card();
}

$data = [
  'page_data' => [
    'title' => $page->title()->value(),
    'text'  => $page->text()->kirbytext()->value(),
    'hero'  => $hero->data_card(),
    'items' => $items
  ],
  'site_data' => $page->site_data(),
];

echo json_encode($data);