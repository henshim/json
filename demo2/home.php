<?php
session_start();
echo 'hello '.$_SESSION['username'];
if ($_SERVER['REQUEST_METHOD']==='POST'){
    session_destroy();
    header('Location: index.php');
}
?>

<form action="" method="post">
    <button type="submit" name="logout">Logout</button>
    <a href="edit.php">Edit this user</a>
</form>
