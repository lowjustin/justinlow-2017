<?php

$data = [
  'title' => $page->title()->value(),
  'text'  => $page->text()->kirbytext()->value()
];

echo json_encode($data);