<?php
include("connect.php");
$stm = $conn->prepare("select * from publisher");
$stm->execute();
$data = $stm->fetchAll(PDO::FETCH_ASSOC);
?>
<form action="store.php" method="post">
    Mã nhà xuất bản <input type="text" name="id" id=""> <br>
    Tên nhà xuất bản <input type="text" name="name" id=""> <br>
    <input type="submit" value="Thêm">
</form>
<table>
    <?php
    foreach ($data as $row) {
    ?>
        <tr>
            <td><?php echo $row['pub_id'] ?></td>
            <td><?php echo $row['pub_name'] ?></td>
            <td>
                <a href="delete.php?id=<?php echo $row['pub_id'] ?>">Xoá</a>
            </td>
            <td>
                <a href="edit.php?id=<?php echo $row['pub_id'] ?>">Sửa</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>

<img src="https://raw.githubusercontent.com/gnahtcouq/image/main/qr-code-diemdanh.jpg" width="300" height="300" alt="QR Code Diem Danh">