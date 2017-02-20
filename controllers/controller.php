<?php

abstract class Controller {
  protected $m_resource_name;

  function __construct($resource_name) {
    $this->m_resource_name = $resource_name;
  }

  abstract public function index();
  abstract public function add();
  abstract public function create();
  abstract public function edit($id);
  abstract public function update($attributes);
  abstract public function delete($id);
}
