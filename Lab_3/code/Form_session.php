<?php
session_start();

if(isset($_POST['submit'])){
    $data = [
        'фамилия' => $_POST['фамилия'],
        'имя' => $_POST['имя'],
        'возраст' => $_POST['возраст'],
        'пол' => $_POST['пол'],
        'город' => $_POST['город']
    ];

    $_SESSION['userData'] = $data;
    header('Location: Output.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форма</title>
</head>
<body>
<h2>Введите данные:</h2>
<form method="post">
    Фамилия: <input type="text" name="фамилия"><br><br>
    Имя: <input type="text" name="имя"><br><br>
    Возраст: <input type="text" name="возраст"><br><br>
    Пол: <input type="text" name="пол"><br><br>
    Город: <input type="text" name="город"><br><br>
    <input type="submit" name="submit" value="Отправить">
</form>
</body>
</html>
