<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiet</title>
</head>
<body>
    <?php 
    foreach($data as $item)
    {
        ?>
    id : <?php echo $item['book_id'] ?>  <br>
    Name: : <?php echo $item['book_name'] ?>  <br>
    Des: : <?php echo $item['description'] ?>  <br>
        <?php
    }
    ?>
</body>
</html>