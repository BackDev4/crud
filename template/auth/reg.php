<?php

$login = trim($_POST['login']);
$name = trim($_POST['name']);
$pass = trim($_POST['pass']);

if (mb_strlen($login) < 3 || mb_strlen($login) > 90) {
    echo "Недопустимая длина логина";
    exit();
} else if (mb_strlen($name) < 1) {
    echo "Недопустимая длина имени.";
    exit();
}

$pass = md5($pass . "thisisforhabr");

include '..\..\App\Db.php';
$database = new \App\Db();
$db = $database->getConnection();


$result1 = $db->query("SELECT * FROM `users` WHERE `login` = '$login'");
$user1 = $result1->fetchAll(PDO::FETCH_ASSOC);
if (!empty($user1)) {
    echo "Данный логин уже используется!";
    echo "<a href='regForm.php'>Назад</a>";
    exit();
}else{
    $db->query("INSERT INTO `users` (`login`, `password`, `name`)
	VALUES('$login', '$pass', '$name')");
}

header('Location: authForm.php');
exit();