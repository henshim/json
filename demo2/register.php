<?php
include 'Data.php';
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
    <fieldset>
        <legend>Register</legend>
        <form method="post">
            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="name" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="pass" required>

                <button type="submit">Register</button>
            </div>
        </form>
    </fieldset>
    </body>
    </html>
<?php
if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    Data::createUser($name, $pass);
}