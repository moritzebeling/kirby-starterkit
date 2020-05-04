<?php

class HomePage extends Page
{
  public function title(): Kirby\Cms\Field {
    return $this->site()->title();
  }
}
