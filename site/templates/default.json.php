<?php

$data = [
  'page_data' => [
    'title' => $page->title()->value(),
    'text'  => $page->text()->kirbytext()->value(),
  ],
  'site_data' => [
    'title' => $page->title()->value() . " | " . $site->title()->html()->value(),
    'description' => $site->description()->html()->value(),
    'keywords' => $site->keywords()->html()->value(),
    'copyright' => $site->copyright()->kirbytextinline()->value(),
  ],
];

echo json_encode($data);