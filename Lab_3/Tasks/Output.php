<?php
session_start();

if(isset($_SESSION['userData'])){
    $userData = $_SESSION['userData'];
    echo "<h2>Данные пользователя:</h2>";
    echo "Фамилия: " . $userData['фамилия'] . "<br>";
    echo "Имя: " . $userData['имя'] . "<br>";
    echo "Возраст: " . $userData['возраст'] . "<br>";
} else {
    echo "Данные не найдены.";
}

