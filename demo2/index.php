<?php
include_once 'Data.php';
include_once 'User.php';

//$user = new User('Thinh','777');
//Data2::addUser($user);
//echo '<pre>';
//print_r(Data2::loadData());
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
        <legend>Login</legend>
        <form method="post">
            <div class="form-group">
                <label for="exampleInputName1">Name</label>
                <input name="name" type="text" class="form-control" id="exampleInputName1" aria-describedby="emailHelp"
                       placeholder="Enter name">
                <small id="nameHelp" class="form-text text-muted">We'll never share your name with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input name="pass" type="password" class="form-control" id="exampleInputPassword1"
                       placeholder="Password">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="register.php" style="text-decoration: none">Register</a>
        </form>
    </fieldset>
    </body>
    </html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $u = $_POST['name'];
    $p = $_POST['pass'];
    Data::login($u, $p);
}
?>