<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
</head>
<body>
<div class="col">
    <h1>Форма регистрации</h1>
    <form action="auth.php" method="post">
        <input type="text" name="login" class="form-control" id="login" placeholder="Логин"><br>
        <input type="password" name="pass" class="form-control" id="pass" placeholder="Пароль"><br>
        <button class="btn btn-success">Авторизоваться</button><br>
    </form>
    <button><a href="regForm.php">Регистрация</a></button>
</div>
</body>
</html>

