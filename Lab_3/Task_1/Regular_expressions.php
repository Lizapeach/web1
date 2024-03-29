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