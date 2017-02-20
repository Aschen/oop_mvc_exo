<?php

abstract class Model {
  protected $m_id;
  protected $m_table_name;
  protected $m_database_name;

  function __construct($table_name) {
    $this->m_table_name = $table_name;
    $this->m_database_name = 'base_rando';
  }

  public function id() {
    return $this->m_id;
  }

  abstract public function save();
  abstract public function find($id);
  abstract public function findAll();
  abstract public function constructFrowRow($row);

  public function delete() {
    // Implement method
  }
}
