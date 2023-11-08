<?php

class TvSerie extends Production{
  public $number_of_seasons;
  public $number_of_episodes;

  public function __construct(int $_number_of_seasons, int $_number_of_episodes, string $_title, string $_genre, array $_cast, Media $_image = null){
    $this->number_of_seasons = $_number_of_seasons;
    $this->number_of_episodes = $_number_of_episodes;

    parent::__construct( $_title, $_genre,  $_cast,  $_image);
  }
} 

