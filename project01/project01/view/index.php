<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
</head>
<body>
    <table>
        <?php 
        foreach($dataBook as $item)
        {
            ?>
            <tr>
                <td><?php echo $item['book_id'] ?></td>
                <td><?php echo $item['book_name'] ?></td>
                <td><?php echo $item['price'] ?></td>
                <td>
                    <a href="detail.php?id=<?php echo $item['book_id'] ?>">Chi tiet</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>