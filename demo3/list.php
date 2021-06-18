<?php
include 'Data2.php';
$products = Data2::load();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="add.php" style="text-decoration: none">Add Product</a>
<table border="1px solid black">
    <tr>
        <th>Stt</th>
        <th>Name</th>
        <th>Prize</th>
        <th></th>
    </tr>
    <?php foreach ($products as $key => $item): ?>
        <tr>
            <td><?php echo $key + 1 ?></td>
            <td><?php echo $item->name ?></td>
            <td><?php echo $item->price ?></td>
            <td>
                <a href="update.php">Update</a>
                <a href="">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>