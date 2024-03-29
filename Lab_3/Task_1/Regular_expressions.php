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