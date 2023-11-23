<?php 
include("connect.php");
$id =$_POST['id']??'';
$name=$_POST['name']??'';
if ($id !='')
{
    $sql = 'insert into publisher values(?, ?)';
    $stm=$conn->prepare($sql);
    $stm->execute([$id, $name]);
}
header('location:index.php');