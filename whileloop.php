<?php

$i = 0;

while($i<10){
    echo "$i, <br>";
    $i++;
}

$nums = [1,2,3,4,5,6,7,8];
$name = ['john', 'peter', 'sam', 'sara'];

$i = 0;
echo "Name: ";
while($i<count($name)){
    echo "$name[$i], ";
    $i++;
}