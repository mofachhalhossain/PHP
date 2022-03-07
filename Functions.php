<?php

// function sum($a, $b){
//     return $a + $b;
// }

// $result = sum(8,2);
// echo "$result";

$books = ['comic', 'story', 'drama', 'poet'];

function output($value){
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}

output($books);