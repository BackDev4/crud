<?php

$login = trim($_POST['login']);
$pass = trim($_POST['pass']);

$pass = md5($pass . "forhktkntuhpi");

include '..\..\App\Db.php';
$database = new \App\Db();
$db = $database->getConnection();

$result = $db->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$pass'");

$user = get_object_vars($result);
foreach ($user as $value) {
    $item = explode(" ", $value);
    var_dump($item);
    if ($item[7] && $item[11] = $login && $pass ) {
        echo 'Вы авторизованы';
        echo "<a href='../../index.php'>Назад</a>";

    } else if ($item[11] <> $pass) {
        echo "Пароль введены неверно";
        echo "<a href='authForm.php'>Назад</a>";
        exit();
    } else {
        echo "Такой пользователь не найден.";
        echo "<a href='authForm.php'>Назад</a>";
        exit();
//        setcookie('user', $user['name'], time() + 3600, "/");
//        http_redirect('crud/index.php');
    }
}