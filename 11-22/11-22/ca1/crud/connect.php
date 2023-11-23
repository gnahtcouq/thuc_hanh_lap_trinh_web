<?php 
include('config.php');
$conn = new PDO('mysql:host='.HOST.';dbname='.DBNAME,USERNAME,PASSWORD);
$conn->query('set names utf8');