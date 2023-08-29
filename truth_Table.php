<?php
$heading = array(
    1  => 'A',	
    2  => 'B',	
    3  => '!A',	
    4  => 'A || B',	
    5 => 'A && B',	
    6  => 'A xor B'
);


$a = 0;
$b = 1;

echo '<table>';

echo '<tr>';
    for ($i = 1; $i <= count($heading); $i++) {
        echo '<th>' .$heading[$i] .'</th>';
    };
echo '</tr>';

function completion($x, $y) {
    echo '<td>' .$z = (!$x) ? 'true' : 'false' .'</td>';
    echo '<td>' .$z = ($x || $y) ? 'true' : 'false' .'</td>';
    echo '<td>' .$z = ($x && $y) ? 'true' : 'false' .'</td>';
    echo '<td>' .$z = ($x xor $y) ? 'true' : 'false' .'</td>';
}

echo '<tr>';
    echo '<td>' .$a .'</td>';
    echo '<td>' .$a .'</td>';
    completion($a, $a);
echo '</tr>';

echo '<tr>';
    echo '<td>' .$a .'</td>';
    echo '<td>' .$b .'</td>';
    completion($a, $b);
echo '</tr>';

echo '<tr>';
    echo '<td>' .$b .'</td>';
    echo '<td>' .$a .'</td>';
    completion($b, $a);
echo '</tr>';

echo '<tr>';
    echo '<td>' .$b .'</td>';
    echo '<td>' .$b .'</td>';
    completion($b, $b);
echo '</tr>';

echo '</table>';