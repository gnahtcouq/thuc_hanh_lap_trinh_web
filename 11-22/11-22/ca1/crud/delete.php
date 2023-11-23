<?php 
include("connect.php");
$id =$_GET['id']??'';

if ($id !='')
{
    $sql = 'delete from publisher where pub_id= ?';
    $stm=$conn->prepare($sql);
    $stm->execute([$id]);
}
header('location:index.php');