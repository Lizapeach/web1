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
<html>
<head>
    <title>Ввод данных</title>
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
