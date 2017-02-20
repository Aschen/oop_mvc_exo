<?php

abstract class Model {
  protected $m_id;
  protected $m_table_name;

  function __construct($table_name, $id) {
    $this->m_id = $id;
    $this->m_table_name = $table_name;
  }

  abstract public function save();
  abstract public function find($id);
  abstract public function findAll();

  public function delete() {
    // Implement method
  }
}
