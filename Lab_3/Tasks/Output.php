<?php
//For Task 2_c
session_start();

if(isset($_SESSION['userData'])){
    echo "<h2>Данные пользователя:</h2>";
    echo "<ul>";
    foreach($_SESSION['userData'] as $key => $value){
        echo "<li><strong>$key:</strong> $value</li>";
    }
    echo "</ul>";
} else {
    echo "Данные не найдены.";
}

//For Task 2_b
//session_start();
//
//if(isset($_SESSION['userData'])){
//    $userData = $_SESSION['userData'];
//    echo "<h2>Данные пользователя:</h2>";
//    echo "Фамилия: " . $userData['фамилия'] . "<br>";
//    echo "Имя: " . $userData['имя'] . "<br>";
//    echo "Возраст: " . $userData['возраст'] . "<br>";
//} else {
//    echo "Данные не найдены.";
//}

