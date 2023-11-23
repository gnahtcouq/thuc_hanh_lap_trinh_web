<?php 
include("model/index.php");

$dataBook=$obj->select("select * from book");
include("view/index.php");

