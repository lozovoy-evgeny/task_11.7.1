<?php

// сделал 2 массива так как при использовании нестрочного true или false нет отображения в оглавлении таблицы
$heading = array(
    1  => 'true',	
    2  => 'false',	
    3  => 1,	
    4  => 0,	
    5 => -1,	
    6  => 'null',
    7 => "php"
);

$completion = array(
    1  => true,	
    2  => false,	
    3  => 1,	
    4  => 0,	
    5 => -1,	
    6  => null,
    7 => "php"
);
// функция сравнения
function completionTable($x, $y) {
    echo '<td>' .$z = ($x == $y) ? 'true' : 'false' .'</td>';
}


echo '<table>';
//заполняем первую строку таблицы
echo '<tr>';
    for ($i = 0; $i <= count($heading); $i++) {
        if ($i == 0) {
            echo '<th></th>';
        } else {
            echo '<th>' .$heading[$i] .'</th>';
        }
    };
echo '</tr>';

//поочерёдно заполняем строки, внутренним циклом поэтапно сравниваем 1 значения строки с оглавлением колонки
for ($i = 1; $i <= count($heading); $i++) {
    echo '<tr>';
    echo '<th>' .$heading[$i] .'</th>';
    for ($j = 1; $j <= count($heading); $j++) {
        completionTable($completion[$i], $completion[$j]);
    }
    echo '</tr>';
}

echo '</table>';
