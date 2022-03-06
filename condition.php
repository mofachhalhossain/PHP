<?php

$age = 22;

if($age <= 20){
    echo "You are a teenager";
}elseif($age > 20 && $age <= 30){
    echo "You are a young adult";
}elseif($age > 30 && $age <= 40){
    echo "You are a adult";
}elseif($age > 40 && $age <= 50){
    echo "You are a middle aged";
}elseif($age > 50 && $age <= 60){
    echo "You are a old";
}elseif($age > 60){
    echo "You are a very old";
}else{
    echo "You are a baby";
}