<?php

class Media {
  public $name;
  public $file_name;
  public $type = "image";

  public function __construct($_file_name, $_name)
  {
    $this->file_name = $_file_name;
    $this->name = $_name;
  }
}
