<?php

function search($arr, $target) {
    for($i=0; $i<count($arr); $i++){
        if($arr[$i] == $target){
            echo "Found $target at index $i";
        }
    }
}
$arr = [1,2,3,4,5,6];
$target = 4;
search($arr, $target)
?>