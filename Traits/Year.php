<?php

trait Year{
  public $publication_year;

  public function getPublicationYear(){
    return "Anno di pubblicazione: $this->publication_year";
  }
}