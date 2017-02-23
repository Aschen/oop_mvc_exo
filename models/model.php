<?php

abstract class Model {
  protected $m_id;
  protected $m_table_name;
  protected $m_database_name;
  protected $m_mdp_sql;

  function __construct($table_name) {
    $this->m_table_name = $table_name;
    $this->m_database_name = 'base_rando';
    $this->m_mdp_sql = 'root';
  }


    public function pdo_connect()
    {
        echo "\"mysql:host=localhost; dbname=$this->m_database_name ;charset=utf8\", \"root\", \"$this->m_mdp_sql\" ";
        $pdo = new PDO("mysql:host=localhost; dbname={$this->m_database_name} ;charset=utf8, \"root\", \"{$this->m_mdp_sql}\" ");
        var_dump($pdo);
        return $pdo;
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
