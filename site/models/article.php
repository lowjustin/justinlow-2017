<?php

class ArticlePage extends Page {
  public function data_card() {
    $thumb = false;
    if ($thumb = $this->coverimage()->toFile()) {
      $thumb = $thumb->resize(480)->url();
    }
    
    return [
      'id' => $this->id(),
      'slug' => $this->slug(),
      'thumb' => $thumb,
      'title' => $this->title()->value(),
      'date' => $this->date()->value(),
      'status' => $this->content()->status()->value(),
      'excerpt'  => $this->content()->excerpt()->value(),
      'link' => [
        'label' => 'Read more',
        'url' => $this->url()
      ]
    ];
  }

  public function data_article() {
    $thumb = false;
    $coverimage = false;
    if ($coverimage = $this->coverimage()->toFile()) {
      $thumb = $coverimage->resize(480)->url();
      $coverimage = $coverimage->url();
    }

    return [
      'id' => $this->id(),
      'slug' => $this->slug(),
      'thumb' => $thumb,
      'coverimage' => $coverimage,
      'title' => $this->title()->html()->value(),
      'text' => $this->text()->kirbytext()->value(),
      'date' => $this->date()->html()->value(),
      'status' => $this->content()->status()->value(),
      'excerpt' => $this->content()->excerpt()->value(),
    ];
  }
}