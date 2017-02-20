<?php

include "model.php"

class Hiking extends Model {
  private $m_name;
  private $m_difficulty;
  private $m_distance;
  private $m_duration;
  private $m_height_difference;

  function __construct() {
    // initialize parent class here
  }

  public function name($name) {
    $this->name = $name;
  }

  public function name() {
    return $this->name;
  }
}
