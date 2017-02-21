<?php

require("controller.php");
require("../models/hiking.php");

class HikingsController extends Controller
{

    function __construct()
    {
        parent::__construct("hiking");
    }

    public function index()
    {
        header("Location: /oop_mvc_exo/views/list_hiking.php");
    }

    public function add()
    {
        header("Location: /oop_mvc_exo/views/create_hiking.php");
    }

    public function create()
    {

    }

    public function delete($id)
    {

    }

    public function edit($id)
    {
        header("Location: /oop_mvc_exo/views/update_hiking.php?hiking_id=" . $id);
    }

    public function update($attributes)
    {
        print_r($attributes);
        $hiking_model = new Hiking();
        $hiking = $hiking_model->find($attributes["id"]);
        $hiking->constructFrowRow($attributes);

        print_r($hiking);
        $hiking->save();
    }
}
