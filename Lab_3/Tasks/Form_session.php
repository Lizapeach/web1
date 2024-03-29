<?php
session_start();

if(isset($_POST['submit'])){
    $data = array(
        'фамилия' => $_POST['фамилия'],
        'имя' => $_POST['имя'],
        'возраст' => $_POST['возраст']
    );

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
    <input type="submit" name="submit" value="Отправить">
</form>
</body>
</html>
