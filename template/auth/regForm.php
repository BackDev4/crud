<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
</head>
<body>
<div class="row">
    <div class="col">
        <h1>Форма регистрации</h1>
        <form action="reg.php" method="post">
            <input type="text" name="login" class="form-control" id="login" placeholder="Логин"><br>
            <input type="text" name="name" class="form-control" id="name" placeholder="Имя"><br>
            <input type="password" name="pass" class="form-control" id="pass" placeholder="Пароль"><br>
            <button class="btn btn-success">Зарегистрироваться</button>
            <br>
        </form>
        <button><a href="authForm.php">Вход</a></button>
    </div>
</body>
</html>
