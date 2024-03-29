<!DOCTYPE html>
<html>
<head>
    <title>Подсчет слов и символов</title>
</head>
<body>
<h2>Введите текст:</h2>
<form method="post">
    <textarea name="text" rows="4" cols="50"></textarea><br><br>
    <input type="submit" name="submit" value="Подсчитать">
</form>

<?php
if(isset($_POST['submit'])){
    $text = $_POST['text'];
    $wordCount = 0;
    if (false === empty($text)) {
        $words = preg_split('/\s+/', $text);
        $wordCount = count($words);
    }
    $characters = mb_strlen($text, "utf-8");

    echo "<h3>Результат:</h3>";
    echo "Количество слов: $wordCount<br>";
    echo "Количество символов: $characters";
}
?>
</body>
</html>