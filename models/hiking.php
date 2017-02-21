<?php

require("model.php");

class Hiking extends Model
{
    private $m_name;
    private $m_difficulty;
    private $m_distance;
    private $m_duration;
    private $m_height_difference;

    function __construct()
    {
        parent::__construct("hiking");
        // initialize parent class here
    }

    //commentaire
    public function constructFrowRow($row)
    {
        $this->m_id = $row["id"];
        $this->m_name = $row["name"];
        $this->m_distance = $row["distance"];
        $this->m_difficulty = $row["difficulty"];
        $this->m_duration = $row["duration"];
        $this->m_height_difference = $row["height_difference"];
        // Initialize object from a database row
    }


    public function sqlCreate()
    {

      $request = "INSERT INTO hiking (name, difficulty, distance, duration, height_difference) VALUES (\"{$this->m_name}\", \"{$this->m_difficulty}\", \"{$this->m_distance}\", \"{$this->m_duration}\", \"{$this->m_height_difference}\")";

        $pdo = new PDO('mysql:host=localhost;dbname=' . $this->m_database_name . ';charset=utf8', "root", "root");
        $pdo->query($request);

    }

    public function save()
    {
        $request = "UPDATE {$this->m_table_name} SET name=\"{$this->m_name}\", difficulty=\"{$this->m_difficulty}\", distance=\"{$this->m_distance}\", duration=\"{$this->m_duration}\", height_difference=\"{$this->m_height_difference}\" WHERE id={$this->m_id}";

        $pdo = new PDO('mysql:host=localhost;dbname=' . $this->m_database_name . ';charset=utf8', "root", "root");
        $pdo->query($request);

    }

    public function find($id)
    {
        $request = "SELECT * FROM " . $this->m_table_name . " WHERE id=" . $id;
        $pdo = new PDO('mysql:host=localhost;dbname=' . $this->m_database_name . ';charset=utf8', "root", "root");

        $hiking_row = $pdo->query($request)->fetch();

        $hiking = new Hiking();
        $hiking->constructFrowRow($hiking_row);

        return $hiking;
    }

    public function findAll()
    {
        $request = "SELECT * FROM " . $this->m_table_name;
        $pdo = new PDO('mysql:host=localhost;dbname=' . $this->m_database_name . ';charset=utf8', "root", "root");

        $hikings = array();
        $hiking_rows = $pdo->query($request);
        foreach ($hiking_rows as $hiking_row) {
            $hiking = new Hiking();
            $hiking->constructFrowRow($hiking_row);
            $hikings[] = $hiking;
        }

        return $hikings;
    }


    public function setName($name)
    {
        $this->m_name = $name;
    }

    public function getName()
    {
        return $this->m_name;
    }

    /**
     * @return mixed
     */
    public function getMDifficulty()
    {
        return $this->m_difficulty;
    }

    /**
     * @param mixed $m_difficulty
     */
    public function setMDifficulty($m_difficulty)
    {
        $this->m_difficulty = $m_difficulty;
    }

    /**
     * @return mixed
     */
    public function getMDistance()
    {
        return $this->m_distance;
    }

    /**
     * @param mixed $m_distance
     */
    public function setMDistance($m_distance)
    {
        $this->m_distance = $m_distance;
    }

    /**
     * @return mixed
     */
    public function getMDuration()
    {
        return $this->m_duration;
    }

    /**
     * @param mixed $m_duration
     */
    public function setMDuration($m_duration)
    {
        $this->m_duration = $m_duration;
    }

    /**
     * @return mixed
     */
    public function getMHeightDifference()
    {
        return $this->m_height_difference;
    }

    /**
     * @param mixed $m_height_difference
     */
    public function setMHeightDifference($m_height_difference)
    {
        $this->m_height_difference = $m_height_difference;
    }
}
