<?php

require("model.php");

class Hiking extends Model {
  private $m_name;
  private $m_difficulty;
  private $m_distance;
  private $m_duration;
  private $m_height_difference;

  function __construct() {
    parent::__construct("hiking");
    // initialize parent class here
  }

  public function constructFrowRow($row) {
    $this->m_id = $row["id"];
    $this->m_name = $row["name"];
    // Initialize object from a database row
  }

  public function save() {
    echo "Implement function save()";
  }

  public function find($id) {
    $request = "SELECT * from " . $this->m_table_name . " WHERE id=" . $id;
    $pdo = new PDO('mysql:host=localhost;dbname=' . $this->m_database_name, "root", "");

    $hiking_row = $pdo->query($request)->fetch();

    $hiking = new Hiking();
    $hiking->constructFrowRow($hiking_row);

    return $hiking;
  }

  public function findAll() {
    $request = "SELECT * from " . $this->m_table_name;
    $pdo = new PDO('mysql:host=localhost;dbname=' . $this->m_database_name, "root", "");

    $hikings = array();
    $hiking_rows = $pdo->query($request);
    foreach( $hiking_rows as $hiking_row) {
      $hiking = new Hiking();
      $hiking->constructFrowRow($hiking_row);
      $hikings[] = $hiking;
    }

    return $hikings;
  }

  public function setName($name) {
    $this->m_name = $name;
  }

  public function getName() {
    return $this->m_name;
  }
}
