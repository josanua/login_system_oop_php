<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
</head>
<body>
    <h2>SIGN UP</h2>
    <form action="includes/signup.inc.php" method="post">  <br>
        <input type="text" name="uid" placeholder="Username">  <br>
        <input type="password" name="pwd" placeholder="Password">  <br>
        <input type="password" name="pwdrepeat" placeholder="Repeat Password">  <br>
        <input type="text" name="email" placeholder="E-mail">   <br>
        <button type="submit" name="submit">Sing Up</button>
    </form>

    <h2>LOGIN</h2>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username">  <br>
        <input type="password" name="pwd" placeholder="Password">  <br>
        <button type="submit" name="submit">Login</button>
    </form>
    <?php //phpinfo() ?>
</body>
</html>