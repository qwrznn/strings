<?php

$str = '$s = "Hello"; print(($a + ($b));' ;
$count = substr_count($str, '"');
if($count % 2 == 0){
    echo 'Всі лапки парні!'."\n";
}
else{
    echo 'Є непарна лапка!'."\n";
}

$count1 = substr_count($str, '(');
$count2 = substr_count($str, ')');
if($count1 == $count2){
    echo 'Всі дужки парні!'."\n";
}
else{
    echo 'Є непарна дужка!'."\n";
}