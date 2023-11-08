<?php

class Production{
  public $title;
  public $genre;
  public $cast;
  public $image;


  public function __construct(string $_title,string $_genre, array $_cast, Media $_image = null){
    $this -> title = $_title;
    $this -> genre = $_genre;
    $this -> cast = $_cast;
    $this -> image = $_image;
  }

  public function setImage(Media $_image){
    $this -> image = $_image;
  }
  
}
