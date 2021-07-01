<?php

$data = [
  'page_data' => $page->page_data(),
  'site_data' => $page->site_data(),
];

echo json_encode($data);