<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $page_title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>

<div class="container">
    <div class='page-header'>
        <h1><?php echo $page_title ?></h1>
        <div class="col d-flex justify-content-evenly">
            <div class="d-flex">
                <a href="../template/auth/regForm.php" class="btn btn-primary ">Регистрация</a>
            </div>
            <div class="">
                <a href="../template/auth/authForm.php" class="btn btn-primary d-flex justify-content-end">Авторизация</a>
            </div>
            <div class="d-flex justify-content-end">
                <a href="auth/exit.php" class="btn btn-primary d-flex justify-content-end">Выход</a>
            </div>
        </div>


