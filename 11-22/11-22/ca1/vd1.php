<?php 
$conn = new PDO("mysql:host=localhost;dbname=bansach","root","");
$s= $_GET['txtSearch']??'';
$sql="select * from book where book_name like '%$s%' ";
echo $sql;
// $stmt = $conn->prepare($sql);
$stm=$conn->query($sql);
$rows=$stm->fetchAll(PDO::FETCH_ASSOC);//PDO::FETCH_OBJ
$n = $stm->rowCount();
?>
<form action="vd1.php" method="get">
    <input type="text" name="txtSearch" id="" value="<?php echo $s ?>">
    <input type="submit" value="Tim kiem">
</form>
<h1>Co <?php echo $n?> cuon sach</h1>
<table border=1>
    <?php 
    foreach($rows as $row){
        ?>
        <tr>
            <td><?php echo $row['book_id'] ?></td>
            <td><?php echo $row['book_name'] ?></td>
        </tr>
        <?php
    }
    ?>
</table>