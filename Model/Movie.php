<?php

class Movie {
  public $name;
  public $category;
  public $duration;
  public $image;

  public function __construct(string $_name, string $_category, float $_duration, Media $_image = null)
  {
    $this->name = $_name;
    $this->category = $_category;
    $this->duration = $_duration;
    $this->image = $_image;
  }

  public function setImage(Media $_image) {
    $this->image = $_image;
  }
}