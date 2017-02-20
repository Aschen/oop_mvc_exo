<?php

require("hikings_controller.php");

$controller = $_GET["controller"];
$action = $_GET["action"];

if ($controller == "hikings") {
  $hikings_controller = new HikingsController();

  if ($action == "index") {
    $hikings_controller->index();
  }
  else if ($action == 'edit') {
    $id = $_GET["id"];
    $hikings_controller->edit($id);
  }
  else if ($action == "update") {
    $hikings_controller->update($_POST["hiking"]);
  }
  else {
    echo "Unknown action '" . $action . "'";
  }
}
else {
  echo "Unknown controller '" . $controller . "'";
}
