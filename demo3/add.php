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
<fieldset>
    <legend>Add product</legend>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Enter product name">
        <input type="number" name="price" placeholder="Enter price">
        <button type="submit">Save</button>
    </form>
</fieldset>
</body>
</html>
<?php
include 'Data2.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    Data2::add($name, $price);
}
?>