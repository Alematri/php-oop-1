<?php

class Movie extends Production{
  public $duration;

  public function __construct(int $_duration, string $_title, string $_genre, array $_cast, Media $_image = null, int $_publication_year){
    $this->duration = $_duration;

    parent::__construct( $_title, $_genre,  $_cast,  $_image, $_publication_year);
  }
} 