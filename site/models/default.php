<?php

class DefaultPage extends Page {
  public function site_data() {
    $site = kirby()->site();
    
    return [
      'title' => $this->title()->value() . " | " . $site->title()->html()->value(),
      'description' => $site->description()->html()->value(),
      'keywords' => $site->keywords()->html()->value(),
      'copyright' => $site->copyright()->kirbytextinline()->value(),
    ];
  }
}