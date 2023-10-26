<?php

$st =     '   <a href="#">Посилання</a>
<strong>Жирний текст</strong>
<em>Курсивний тeкст</em>
(a & b)
<p>Просто текст</p>
<h1>"Назва"</h1>
$a > $b'      ;
$tags = strip_tags($st);
$spaces =  trim($tags)."\n";
echo htmlspecialchars($spaces);