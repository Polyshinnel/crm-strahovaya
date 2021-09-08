<?php
class GetDeals
{
    private $db;

    public function __construct()
    {
        include './connectDB.php';
        $this->db = new PDO('mysql:host=' . $dbinfo['host'] . ';dbname=' . $dbinfo['db'], $dbinfo['user'], $dbinfo['password']);
    }

    public function getDeals(){
        $stmt = $this->db->query("SELECT * FROM deals");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}