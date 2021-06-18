<?php
include 'Data.php';
?>
<style>
    input{
        height: 50px;
    }
</style>
<fieldset>
    <legend>Edit user</legend>
    <form action="" method="post">
        <input type="text" value="<?php print_r(Data::loadData())?>"><br>
        <input type="text" value="<?php print_r(Data::loadData())?>"><br>
        <button type="submit">Submit</button>
    </form>
</fieldset>
