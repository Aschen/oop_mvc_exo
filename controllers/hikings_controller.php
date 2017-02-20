<?php

include "controller.php";
include "../models/hiking.php";

class HikingsController extends Controller {

  function __construct() {
    super::__construct("hiking");
  }

  public function list() {
    $hikings = Hiking::findAll();
  }
}
