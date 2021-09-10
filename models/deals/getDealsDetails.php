<?php
class GetDealsDetails
{
    private $db;

    public function __construct()
    {
        include './connectDB.php';
        $this->db = new PDO('mysql:host=' . $dbinfo['host'] . ';dbname=' . $dbinfo['db'].';charset=utf8', $dbinfo['user'], $dbinfo['password']);
    }

    public function getDeals($id){
        $query = "SELECT * FROM deals WHERE id = ?";
        $params = array($id);
        $stmt = $this->db->prepare($query);
        $stmt->execute($params);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results[0];
    }

    public function getDealsDetails($id){
        $query = "SELECT * FROM deals_description WHERE deals_id = ?";
        $params = array($id);
        $stmt = $this->db->prepare($query);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCommentAuthor($author_id){
        $query = "SELECT * FROM users WHERE id = ?";
        $params = array($author_id);
        $stmt = $this->db->prepare($query);
        $stmt->execute($params);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results[0]['name'];
    }
}