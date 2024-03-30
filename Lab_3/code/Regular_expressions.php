<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регулярные выражения</title>
</head>
<body>
<?php
    //Task_a
    $str = 'ahb acb aeb aeeb adcb axeb';
    $regexp = '/a[a-z][a-z]b/ui';
    preg_match_all($regexp, $str,$matches);
    echo "Нужные слова:";
    foreach($matches[0] as $math){
        echo $math,"\n";
    }

    //Task_b
    function cubingNumbers($matches): string
    {
        return pow($matches[0], 3);
    }
    $str = 'a1b2c3';
    $regexp = '/[0-9]/u';
    $strWithCubingNumbers = preg_replace_callback($regexp, 'CubingNumbers', $str);
    echo "<br>Строка с числами в кубе:$strWithCubingNumbers";
    ?>
</body>
</html>
