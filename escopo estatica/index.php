<?php


function teste()
{

    $a = 0;
    $a++;

    echo "$a <br>";
}

teste();
teste();
teste();


function testandoStatic()
{

    static $a = 0;  // usando o static o valor ira incrementado ou decrementado 
    $a++;

    echo "$a <br>";
}

testandoStatic();
testandoStatic();
testandoStatic();
