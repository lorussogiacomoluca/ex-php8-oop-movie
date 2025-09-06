<?php
class Movie
{
  use Rating;

  public $title;
  public $year;
  public $director;
  public $genres = [];
  public $language;
  public $description;

  public function __construct($_title, $_year, $_director, array $_genres, $_language, $_description)
  {
    $this->title = $_title;
    $this->year = $_year;
    $this->director = $_director;
    $this->genres = $_genres;
    $this->language = $_language;
    $this->description = $_description;
  }

  public function getYear()
  {
    return $this->year;
  }
}
