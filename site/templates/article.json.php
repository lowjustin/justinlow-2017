<?php

$data = [
  'page_data' => [
    'id' => $page->id(),
    'slug' => $page->slug(),
    'title' => $page->title()->html()->value(),
    'text' => $page->text()->kirbytext()->value(),
    'date' => $page->date()->html()->value(),
    'status' => $page->content()->status()->value(),
    'excerpt' => $page->content()->excerpt()->value(),
  ],
  'site_data' => [
    'title' => $page->title()->value() . " | " . $site->title()->html()->value(),
    'description' => $site->description()->html()->value(),
    'keywords' => $site->keywords()->html()->value(),
    'copyright' => $site->copyright()->kiebytextinline()->value(),
  ],
];

echo json_encode($data);