<?php

$data = [
  'page_data' => [
    'title' => $page->title()->value(),
    'text'  => $page->text()->kirbytext()->value(),
  ],
  'site_data' => $page->site_data(),
];

echo json_encode($data);