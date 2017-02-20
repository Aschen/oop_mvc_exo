<?php

abstract class Controller {
  protected $m_resource_name;

  function __construct($resource_name) {
    $this->m_resource_name = $resource_name;
  }

  abstract public function list();
  abstract public function create();
  abstract public function update();
  abstract public function delete();
}
