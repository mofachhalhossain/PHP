<?php
$greeting = "Hello world!";

function show($a, $b) {
    global $greeting;
    echo("$greeting\n");
    echo("$a and $b\n");
};

show(2,3);