<?php 
include("model/index.php");
$id = $_GET['id']??'';
if ($id== ''){
    header('location:index.php'); exit;
}
$data=$obj->select("select * from book where book_id='$id' ");
include("view/detail.php");

