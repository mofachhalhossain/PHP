<?php

$books = ['comic', 'drama', 'movie'];
$fruits = [
    "sour" => "graps",
    "sweet" => "apple"
];

foreach($books as $book){
    echo($book." ");
}

foreach($fruits as $fruit){
    echo("<br> $fruit");
}