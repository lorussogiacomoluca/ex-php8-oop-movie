<?php
class Genre
{
  public $name;
  public $description;
  public $adult;

  public function __construct($_name, $_description, $_adult)
  {
    $this->name = $_name;
    $this->description = $_description;
    $this->adult = $_adult;
  }
}
