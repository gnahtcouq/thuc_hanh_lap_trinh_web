<?php
include './config.php'; 
class Db{
    protected $conn ;
    function __construct()
    {
        $this->conn = new PDO('mysql:host='. HOST.';dbname='. DATABASE, USERNAME, PASSWORD);
        $this->conn->query('set names utf8');
      
    }
    function select($sql)
    {
        $query = $this->conn->query($sql);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}