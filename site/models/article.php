<?php

class ArticlePage extends Page {
  public function related() {
    $options = array(
      'minHits' => 4,
      'searchItems' => explode(",", parent::tags()),
      'thisPage' => parent::id()
    );
    $relpages = relatedpages($options);
    return $relpages->data;
  }
}