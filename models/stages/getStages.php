<?php

//use PDO;

class GetStages
{
    private $db;

    public function __construct()
    {
        include './connectDB.php';
        $this->db = new PDO('mysql:host=' . $dbinfo['host'] . ';dbname=' . $dbinfo['db'].';charset=utf8', $dbinfo['user'], $dbinfo['password']);
    }

    public function getStages(){
        $stmt = $this->db->query("SELECT * FROM stages");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}