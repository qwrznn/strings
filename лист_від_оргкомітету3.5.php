<?php

$str = "Ми будемо раді бачити Вашого сина на нашому заході. Чекаємо на нього 25 жовтня. Оргкомітет.";
$phrases = explode(". ", $str);
print_r($phrases);

$first = "Оргкомітет";
$replace = "Адміністрація";
$newphrase = str_replace($first, $replace, $phrases);

$son = "Вашого сина";
$daughter = "Вашу дочку";
$newphrase1 = str_replace($son, $daughter, $newphrase);

$son1 = "нього";
$daughter1 = "неї";
$newphrase2 = str_replace($son1, $daughter1, $newphrase1);

$separated = implode( ".\n" , $newphrase2); 

$name = "Петро";
echo substr_replace($separated, "Шановний $name! ", 0, 0) . "\n";